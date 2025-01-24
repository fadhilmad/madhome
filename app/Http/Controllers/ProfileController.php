<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function index()
    {
        $profile = User::query()->where("id", Auth::id())->first();
        if (!$profile) {
            return abort(404);
        }

        return view("administrator.profile.index", ["profile" => $profile]);
    }

    public function edit()
    {
        $profile = User::where("id", Auth::id())->first();
        if (!$profile) {
            return abort(404);
        }

        return view("administrator.profile.edit", [
            "profile" => $profile,
        ]);
    }

    public function save(Request $request)
    {
        $profile = User::where("id", Auth::id())->first();
        if (!$profile) {
            return abort(404);
        }

        $validator = Validator::make($request->all(), [
            "name" => "required",
            "username" => "required",
            "email" => "required",
            "password" => "required",
        ]);

        if ($validator->fails()) {
            return redirect(route("profile.edit"))
                ->withErrors($validator)
                ->withInput();
        }

        $dataSave = [
            "name" => $request->input("name"),
            "username" => $request->input("username"),
            "email" => $request->input("email"),
            "password" => Hash::make($request->input("password")),
        ];

        try {
            $profile->update($dataSave);
            return redirect(route("profile.index"))->with([
                "dataSaved" => true,
                "message" => "Data berhasil diupdate",
            ]);
        } catch (\Throwable $th) {
            return redirect(route("profile.index"))->with([
                "dataSaved" => false,
                "message" => "Terjadi kesalahan saat mengupdate data",
            ]);
        }
    }
}
