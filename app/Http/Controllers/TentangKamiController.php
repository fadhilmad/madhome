<?php

namespace App\Http\Controllers;

use App\Models\TentangKami;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class TentangKamiController extends Controller
{
    public function index()
    {
        $tentangKami = TentangKami::query()->first();
        if (!$tentangKami) {
            return abort(404);
        }

        return view("administrator.tentang_kami.index", [
            "tentang_kami" => $tentangKami,
        ]);
    }

    public function edit()
    {
        $tentangKami = TentangKami::query()->first();
        if (!$tentangKami) {
            return abort(404);
        }

        return view("administrator.tentang_kami.edit", [
            "tentang_kami" => $tentangKami,
        ]);
    }

    public function save(Request $request)
    {
        $tentangKami = TentangKami::query()->first();
        if (!$tentangKami) {
            return abort(404);
        }

        $validator = Validator::make($request->all(), [
            "gambar" => "required",
            "deskripsi" => "required",
        ]);

        if ($validator->fails()) {
            return redirect(route("tentang_kami.edit"))
                ->withErrors($validator)
                ->withInput();
        }

        $dataSave = ["deskripsi" => $request->input("deskripsi")];

        if ($request->file("gambar") != null) {
            File::delete(
                public_path(
                    "uploads/tentang_kami_gambar/" . @$tentangKami->gambar
                )
            );

            $file = $request->file("gambar");
            $fileName = $file->hashName();
            $file->move("uploads/tentang_kami_gambar", $fileName);

            $dataSave["gambar"] = $fileName;
        }

        try {
            $tentangKami->update($dataSave);
            return redirect(route("tentang_kami.index"))->with([
                "dataSaved" => true,
                "message" => "Data berhasil diupdate",
            ]);
        } catch (\Throwable $th) {
            return redirect(route("tentang_kami.index"))->with([
                "dataSaved" => false,
                "message" => "Terjadi kesalahan saat mengupdate data",
            ]);
        }
    }
}
