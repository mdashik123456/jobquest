<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;
use App\Models\Employee;
use Exception;

class LoginController extends Controller
{
    public function login(Request $req)
    {
        try {
            if ($req->input('option') == "company") {
                $users = Company::where('email', '=', $req->input("email"))->where('password', '=', md5($req->input("password")))->first();
                session(['type' => 'company', 'id' => $users->company_id]); //I use first(). that's why don't need to use foreach loop
            } else {
                $users = Employee::where('email', '=', $req->input("email"))->where('password', '=', md5($req->input("password")))->first();
                session(['type' => 'eemployee', 'id' => $users->employee_id]);
            }

            return redirect()->back()->with('success_msg', 'Login Success');
        } catch (Exception) {
            return redirect()->back()->with('error_msg', 'Login Failed');
        }
    }

    public function view_session()
    {
        echo "<pre>";
        echo "Hello: ";
        print_r(session()->all());
        die;
    }
    public function logout()
    {
        session()->forget(['id', 'name', 'email', 'pic', 'type']);
        return redirect()->back()->with('success_msg', 'Logged Out!');
    }
}
