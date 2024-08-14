<?php

namespace Modules\User\App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Modules\User\App\Models\UserModel;
use Modules\User\App\Http\Requests\CreateUserRequest;
use Modules\User\App\Http\Requests\UpdateUserRequest;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Routing\Redirector;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(UserModel $users)
    {
        $users = UserModel::paginate(6);
        
        return view('user::index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('user::createUser');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateUserRequest $request)
    {
        
        $dob= sprintf('%04d-%02d-%02d', $request->year, $request->month, $request->day);
        $dateOfBirth= $validatedDate = Carbon::createFromFormat('Y-m-d', $dob);
        $request->dateOfBirth= $dateOfBirth;
        $name=request()->input('name');
        $email=request()->input('email');
        $password=bcrypt(request()->input('password'));
        $role=request()->input('role');
        $phone=request()->input('phone');
        $gender=request()->input('gender');

        UserModel::create([
            'name' => $name,
            'email' => $email,
            'password' => $password,
            'role' => $role,
            'phone' => $phone,
            'date_of_birth' => $dateOfBirth,
            'gender' => $gender,  // assuming gender is a radio button with values 'M' and 'F'
            
        ]);
        // dd($request);
        return redirect()->route('loginPage')
        ->with('success','User created successfully');
    }

    /**
     * Show the specified resource.
     */
    public function show($id)
    {
        $users=UserModel::findOrFail($id);
        // dd($users);
        // $user=DB::select('SELECT* FROM patient WHERE id=?', ['id' => $id]);
        return view('user::showUser',compact('users'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $users=UserModel::findOrFail($id);

        return view('user::editUser', compact('users'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update( UpdateUserRequest $newRequest, $id)
{
        $users=UserModel::findOrFail($id);

        $dob= sprintf('%04d-%02d-%02d', $newRequest->year, $newRequest->month, $newRequest->day);
        $dateOfBirth=Carbon::createFromFormat('Y-m-d', $dob);
        $newRequest->dateOfBirth= $dateOfBirth;
        // dd($dateOfBirth);
        $name=request()->input('name');
        $email=request()->input('email');
        $password=bcrypt(request()->input('password'));
        $role=request()->input('role');
        $phone=request()->input('phone');
        $gender=request()->input('gender');

    // dd($name, $email, $password, $role, $phone, $gender , $dateOfBirth);
    //  $updated_data= $newRequest->validated();
    //  dd($updated_data);

     $users->update([
        'name' => $newRequest->name,
        'email' => $newRequest->email,
        'role' => $newRequest->role,
        'phone' => $newRequest->phone,
        'gender' => $newRequest->gender,
        'date_of_birth' => $dateOfBirth,
    ]);
    
    // dd($users); // for debugging purposes to see the request data before saving.  Uncomment this line to see the data.  Be careful with sensitive data.  Never log or display raw request data in a production environment.  Also, never store passwords in plain text.  Use a secure password hashing method like bcrypt.  This example uses bcrypt.  If you want to use a different method, you would need to modify this code accordingly.  If you want to keep the same password

    return redirect()->route('user.index')->with('success', 'User updated successfully');
}


       

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $users=UserModel::findOrFail($id);

        $users->delete();
         
        return redirect()->route('user.index')
                        ->with('success','User deleted successfully');
    }

    public function loginPage(){
        return view('user::login');
    }
    public function dashboard(Request $request){
        
        $users = Auth::user(); 

        // Access request data if needed
        $query = $request->input('query');
        return view('user::dashboard', compact('users', 'query'));
    }
    public function login(Request $request){

        // $credentials = $request->only('email', 'password');
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        // Attempt to log the user in
        if (Auth::attempt($credentials)) {
            // Authentication passed
            $request->session()->regenerate();

            return redirect()->route('dashboard')
                             ->with('success', 'You are successfully logged in!');
        }

        // Authentication failed
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }
    public function logout(Request $request) {
        Auth::logout();
        $request->session()->invalidate();
        
        return redirect()->route('loginPage')
                             ->with('success', 'You have been successfully logged out!');

    }

    
}
