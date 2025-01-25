<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class SettingController extends Controller
{
    public function index()
    {
        $setting = Setting::query()->first();
        if (!$setting) {
            return abort(404);
        }

        return view("administrator.setting.index", ["setting" => $setting]);
    }

    public function edit()
    {
        $setting = Setting::query()->first();
        if (!$setting) {
            return abort(404);
        }

        return view("administrator.setting.edit", [
            "setting" => $setting,
        ]);
    }

    public function save(Request $request)
    {
        $setting = Setting::query()->first();
        if (!$setting) {
            return abort(404);
        }

        $validator = Validator::make($request->all(), [
            "logo" => "required",
            "favicon" => "required",
            "nama_instansi" => "required",
            "link_fb" => "required",
            "link_ig" => "required",
            "link_tiktok" => "required",
            "deskripsi" => "required",
            "map" => "required",
            "alamat" => "required",
            "no_wa" => "required",
            "email" => "required",
            "analytic" => "required",
        ]);

        if ($validator->fails()) {
            return redirect(route("setting.edit"))
                ->withErrors($validator)
                ->withInput();
        }

        $dataSave = [
            "nama_instansi" => $request->input("nama_instansi"),
            "link_fb" => $request->input("link_fb"),
            "link_ig" => $request->input("link_ig"),
            "link_tiktok" => $request->input("link_tiktok"),
            "deskripsi" => $request->input("deskripsi"),
            "map" => $request->input("map"),
            "alamat" => $request->input("alamat"),
            "no_wa" => $request->input("no_wa"),
            "email" => $request->input("email"),
            "analytic" => $request->input("analytic"),
        ];

        if ($request->file("logo") != null) {
            File::delete(
                public_path("uploads/setting_logo/" . @$setting->logo)
            );

            $file = $request->file("logo");
            $fileName = $file->hashName();
            $file->move("uploads/setting_logo", $fileName);

            $dataSave["logo"] = $fileName;
        }

        if ($request->file("favicon") != null) {
            File::delete(
                public_path("uploads/setting_favicon/" . @$setting->favicon)
            );

            $file = $request->file("favicon");
            $fileName = $file->hashName();
            $file->move("uploads/setting_favicon", $fileName);

            $dataSave["favicon"] = $fileName;
        }

        try {
            $setting->update($dataSave);
            return redirect(route("setting.index"))->with([
                "dataSaved" => true,
                "message" => "Data berhasil diupdate",
            ]);
        } catch (\Throwable $th) {
            return redirect(route("setting.index"))->with([
                "dataSaved" => false,
                "message" => "Terjadi kesalahan saat mengupdate data",
            ]);
        }
    }
}
