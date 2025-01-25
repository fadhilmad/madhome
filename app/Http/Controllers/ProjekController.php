<?php

namespace App\Http\Controllers;

use App\Models\TypeProjek;
use App\Models\StatusProjek;
use App\Models\Projek;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

use Yajra\DataTables\Facades\DataTables;

class ProjekController extends Controller
{
    public function index()
    {
        return view("administrator.projek.index");
    }

    public function create()
    {
        $typeProjek = TypeProjek::all();
        $statusProjek = StatusProjek::all();

        $data = [
            "type_projek" => $typeProjek,
            "status_projek" => $statusProjek,
        ];

        return view("administrator.projek.create", $data);
    }

    public function edit($id)
    {
        $projek = Projek::where("id", $id)->first();
        if (!$projek) {
            return abort(404);
        }

        $typeProjek = TypeProjek::all();
        $statusProjek = StatusProjek::all();

        $data = [
            "type_projek" => $typeProjek,
            "status_projek" => $statusProjek,
        ];

        return view("administrator.projek.edit", [
            "projek" => $projek,
            ...$data,
        ]);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            "nama" => "required",
            "tanggal_masuk" => "required",
            "gambar" => "required",
            "link" => "required",
            "type_projek_id" => "required",
            "status_projek_id" => "required",
        ]);

        if ($validator->fails()) {
            return redirect(route("projek.create"))
                ->withErrors($validator)
                ->withInput();
        }

        $dataSave = [
            "nama" => $request->input("nama"),
            "tanggal_masuk" => $request->input("tanggal_masuk"),
            "link" => $request->input("link"),
            "type_projek_id" => $request->input("type_projek_id"),
            "status_projek_id" => $request->input("status_projek_id"),
        ];

        if ($request->file("gambar") != null) {
            $file = $request->file("gambar");
            $fileName = $file->hashName();
            $file->move("uploads/projek_gambar", $fileName);

            $dataSave["gambar"] = $fileName;
        }

        try {
            Projek::create($dataSave);
            return redirect(route("projek.index"))->with([
                "dataSaved" => true,
                "message" => "Data berhasil disimpan",
            ]);
        } catch (\Throwable $th) {
            return redirect(route("projek.index"))->with([
                "dataSaved" => false,
                "message" => "Terjadi kesalahan saat menyimpan data",
            ]);
        }
    }

    public function fetch(Request $request)
    {
        $projek = Projek::with("typeProjek", "statusProjek");

        return DataTables::of($projek)->addIndexColumn()->make(true);
    }

    public function update(Request $request, $id)
    {
        $projek = Projek::where("id", $id)->first();
        if (!$projek) {
            return abort(404);
        }

        $validator = Validator::make($request->all(), [
            "nama" => "required",
            "tanggal_masuk" => "required",
            "gambar" => "required",
            "link" => "required",
            "type_projek_id" => "required",
            "status_projek_id" => "required",
        ]);

        if ($validator->fails()) {
            return redirect(route("projek.edit", $id))
                ->withErrors($validator)
                ->withInput();
        }

        $dataSave = [
            "nama" => $request->input("nama"),
            "tanggal_masuk" => $request->input("tanggal_masuk"),
            "link" => $request->input("link"),
            "type_projek_id" => $request->input("type_projek_id"),
            "status_projek_id" => $request->input("status_projek_id"),
        ];

        if ($request->file("gambar") != null) {
            File::delete(
                public_path("uploads/projek_gambar/" . @$projek->gambar)
            );

            $file = $request->file("gambar");
            $fileName = $file->hashName();
            $file->move("uploads/projek_gambar", $fileName);

            $dataSave["gambar"] = $fileName;
        }

        try {
            $projek->update($dataSave);
            return redirect(route("projek.index"))->with([
                "dataSaved" => true,
                "message" => "Data berhasil diupdate",
            ]);
        } catch (\Throwable $th) {
            return redirect(route("projek.index"))->with([
                "dataSaved" => false,
                "message" => "Terjadi kesalahan saat mengupdate data",
            ]);
        }
    }

    public function destroy($id)
    {
        $projek = Projek::where("id", $id)->first();
        if (!$projek) {
            return abort(404);
        }

        File::delete(public_path("uploads/projek_gambar/" . @$projek->gambar));

        try {
            $projek->delete();
            return redirect(route("projek.index"))->with([
                "dataSaved" => true,
                "message" => "Data berhasil dihapus",
            ]);
        } catch (\Throwable $th) {
            return redirect(route("projek.index"))->with([
                "dataSaved" => false,
                "message" => "Terjadi kesalahan saat menghapus data",
            ]);
        }
    }
}
