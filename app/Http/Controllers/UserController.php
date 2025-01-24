<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

use Illuminate\Support\Facades\Hash;
use Yajra\DataTables\Facades\DataTables;

class UserController extends Controller
{
    public function index()
    {
        return view("administrator.user.index");
    }

    public function create()
    {
        return view("administrator.user.create");
    }

    public function edit($id)
    {
        $user = User::where("id", $id)->first();
        if (!$user) {
            return abort(404);
        }

        return view("administrator.user.edit", [
            "user" => $user,
        ]);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            "name" => "required",
            "username" => "required",
            "email" => "required",
            "password" => "required",
        ]);

        if ($validator->fails()) {
            return redirect(route("user.create"))
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
            User::create($dataSave);
            return redirect(route("user.index"))->with([
                "dataSaved" => true,
                "message" => "Data berhasil disimpan",
            ]);
        } catch (\Throwable $th) {
            return redirect(route("user.index"))->with([
                "dataSaved" => false,
                "message" => "Terjadi kesalahan saat menyimpan data",
            ]);
        }
    }

    public function fetch(Request $request)
    {
        $user = User::query();

        return DataTables::of($user)->addIndexColumn()->make(true);
    }

    public function update(Request $request, $id)
    {
        $user = User::where("id", $id)->first();
        if (!$user) {
            return abort(404);
        }

        $validator = Validator::make($request->all(), [
            "name" => "required",
            "username" => "required",
            "email" => "required",
            "password" => "required",
        ]);

        if ($validator->fails()) {
            return redirect(route("user.edit", $id))
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
            $user->update($dataSave);
            return redirect(route("user.index"))->with([
                "dataSaved" => true,
                "message" => "Data berhasil diupdate",
            ]);
        } catch (\Throwable $th) {
            return redirect(route("user.index"))->with([
                "dataSaved" => false,
                "message" => "Terjadi kesalahan saat mengupdate data",
            ]);
        }
    }

    public function destroy($id)
    {
        $user = User::where("id", $id)->first();
        if (!$user) {
            return abort(404);
        }

        try {
            $user->delete();
            return redirect(route("user.index"))->with([
                "dataSaved" => true,
                "message" => "Data berhasil dihapus",
            ]);
        } catch (\Throwable $th) {
            return redirect(route("user.index"))->with([
                "dataSaved" => false,
                "message" => "Terjadi kesalahan saat menghapus data",
            ]);
        }
    }
}
