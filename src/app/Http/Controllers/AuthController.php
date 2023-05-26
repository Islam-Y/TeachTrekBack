<?php

namespace App\Http\Controllers;

//use App\Jobs\ForgotCandidateEmailJob;
use App\Mail\ForgotPassword;
use App\Models\Candidate;
//use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view("auth.login");
    }

    public function login(Request $request)
    {
        $data = $request->validate([
            "email" => ["required", "email", "string"],
            "password" => ["required"]
        ]);

        if(auth("web")->attempt($data)) {
            return redirect(route("home"));
        }

        return redirect(route("login"))->withErrors(["email" => "Пользователь не найден, либо данные введены не правильно"]);
    }

    public function logout()
    {
        auth("web")->logout();

        return redirect(route("home"));
    }

    public function showRegisterForm()
    {
        return view("auth.register");
    }

    public function showForgotForm()
    {
        return view("auth.forgot");
    }

    public function forgot(Request $request)
    {
        $data = $request->validate([
            "email" => ["required", "email", "string", "exists:candidates"],
        ]);

        $candidate = Candidate::where(["email" => $data["email"]])->first();

        $password = uniqid();

        $candidate->password = bcrypt($password);
        $candidate->save();

        Mail::to($candidate)->send(new ForgotPassword($password));

        return redirect(route("home"));
    }

    public function register(Request $request)
    {
        $data = $request->validate([
            "email" => ["required", "email", "string", "unique:candidates,email"],
            "password" => ["required", "confirmed"]
        ]);

        $candidate = Candidate::create([
            "email" => $data["email"],
            "password" => bcrypt($data["password"])
        ]);

        if($candidate) {
            //event(new Registered($candidates));

            auth("web")->login($candidate);
        }

        return redirect(route("home"));
    }
}