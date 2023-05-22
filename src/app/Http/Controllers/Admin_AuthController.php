<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Admin_AuthController extends Controller
{
    public function index()
    {
        return view("admin.auth.login");
    }

    public function login(Request $request)
    {
        $data = $request->validate([
            "email" => ["required", "email", "string"],
            "password" => ["required"]
        ]);

        if(auth("admin")->attempt($data)) {
            return redirect(route("admin.candidates.index"));
        }

        return redirect(route("admin.login"))->withErrors(["email" => "Пользователь не найден, либо данные введены не правильно"]);

    }

}