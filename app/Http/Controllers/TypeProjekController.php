<?php

namespace App\Http\Controllers;

use App\Models\TypeProjek;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

use Yajra\DataTables\Facades\DataTables;

class TypeProjekController extends Controller
{
    public function index()
    {
        return view("administrator.type_projek.index");
    }

    public function create()
    {
        return view("administrator.type_projek.create");
    }

    public function edit($id)
    {
        $typeProjek = TypeProjek::where("id", $id)->first();
        if (!$typeProjek) {
            return abort(404);
        }

        return view("administrator.type_projek.edit", [
            "type_projek" => $typeProjek,
        ]);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), ["nama" => "required"]);

        if ($validator->fails()) {
            return redirect(route("type_projek.create"))
                ->withErrors($validator)
                ->withInput();
        }

        $dataSave = ["nama" => $request->input("nama")];

        try {
            TypeProjek::create($dataSave);
            return redirect(route("type_projek.index"))->with([
                "dataSaved" => true,
                "message" => "Data berhasil disimpan",
            ]);
        } catch (\Throwable $th) {
            return redirect(route("type_projek.index"))->with([
                "dataSaved" => false,
                "message" => "Terjadi kesalahan saat menyimpan data",
            ]);
        }
    }

    public function fetch(Request $request)
    {
        $typeProjek = TypeProjek::query();

        return DataTables::of($typeProjek)->addIndexColumn()->make(true);
    }

    public function update(Request $request, $id)
    {
        $typeProjek = TypeProjek::where("id", $id)->first();
        if (!$typeProjek) {
            return abort(404);
        }

        $validator = Validator::make($request->all(), ["nama" => "required"]);

        if ($validator->fails()) {
            return redirect(route("type_projek.edit", $id))
                ->withErrors($validator)
                ->withInput();
        }

        $dataSave = ["nama" => $request->input("nama")];

        try {
            $typeProjek->update($dataSave);
            return redirect(route("type_projek.index"))->with([
                "dataSaved" => true,
                "message" => "Data berhasil diupdate",
            ]);
        } catch (\Throwable $th) {
            return redirect(route("type_projek.index"))->with([
                "dataSaved" => false,
                "message" => "Terjadi kesalahan saat mengupdate data",
            ]);
        }
    }

    public function destroy($id)
    {
        $typeProjek = TypeProjek::where("id", $id)->first();
        if (!$typeProjek) {
            return abort(404);
        }

        try {
            $typeProjek->delete();
            return redirect(route("type_projek.index"))->with([
                "dataSaved" => true,
                "message" => "Data berhasil dihapus",
            ]);
        } catch (\Throwable $th) {
            return redirect(route("type_projek.index"))->with([
                "dataSaved" => false,
                "message" => "Terjadi kesalahan saat menghapus data",
            ]);
        }
    }
}
