<?php

namespace App\Http\Controllers;

use App\Models\StatusProjek;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

use Yajra\DataTables\Facades\DataTables;

class StatusProjekController extends Controller
{
    public function index()
    {
        return view("administrator.status_projek.index");
    }

    public function create()
    {
        return view("administrator.status_projek.create");
    }

    public function edit($id)
    {
        $statusProjek = StatusProjek::where("id", $id)->first();
        if (!$statusProjek) {
            return abort(404);
        }

        return view("administrator.status_projek.edit", [
            "status_projek" => $statusProjek,
        ]);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), ["nama" => "required"]);

        if ($validator->fails()) {
            return redirect(route("status_projek.create"))
                ->withErrors($validator)
                ->withInput();
        }

        $dataSave = ["nama" => $request->input("nama")];

        try {
            StatusProjek::create($dataSave);
            return redirect(route("status_projek.index"))->with([
                "dataSaved" => true,
                "message" => "Data berhasil disimpan",
            ]);
        } catch (\Throwable $th) {
            return redirect(route("status_projek.index"))->with([
                "dataSaved" => false,
                "message" => "Terjadi kesalahan saat menyimpan data",
            ]);
        }
    }

    public function fetch(Request $request)
    {
        $statusProjek = StatusProjek::query();

        return DataTables::of($statusProjek)->addIndexColumn()->make(true);
    }

    public function update(Request $request, $id)
    {
        $statusProjek = StatusProjek::where("id", $id)->first();
        if (!$statusProjek) {
            return abort(404);
        }

        $validator = Validator::make($request->all(), ["nama" => "required"]);

        if ($validator->fails()) {
            return redirect(route("status_projek.edit", $id))
                ->withErrors($validator)
                ->withInput();
        }

        $dataSave = ["nama" => $request->input("nama")];

        try {
            $statusProjek->update($dataSave);
            return redirect(route("status_projek.index"))->with([
                "dataSaved" => true,
                "message" => "Data berhasil diupdate",
            ]);
        } catch (\Throwable $th) {
            return redirect(route("status_projek.index"))->with([
                "dataSaved" => false,
                "message" => "Terjadi kesalahan saat mengupdate data",
            ]);
        }
    }

    public function destroy($id)
    {
        $statusProjek = StatusProjek::where("id", $id)->first();
        if (!$statusProjek) {
            return abort(404);
        }

        try {
            $statusProjek->delete();
            return redirect(route("status_projek.index"))->with([
                "dataSaved" => true,
                "message" => "Data berhasil dihapus",
            ]);
        } catch (\Throwable $th) {
            return redirect(route("status_projek.index"))->with([
                "dataSaved" => false,
                "message" => "Terjadi kesalahan saat menghapus data",
            ]);
        }
    }
}
