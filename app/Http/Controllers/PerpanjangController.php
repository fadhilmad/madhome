<?php

namespace App\Http\Controllers;

use App\Models\Projek;
use App\Models\Perpanjang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

use Yajra\DataTables\Facades\DataTables;

class PerpanjangController extends Controller
{
    public function index()
    {
        return view("administrator.perpanjang.index");
    }

    public function create()
    {
        $projek = Projek::all();

        $data = ["projek" => $projek];

        return view("administrator.perpanjang.create", $data);
    }

    public function edit($id)
    {
        $perpanjang = Perpanjang::where("id", $id)->first();
        if (!$perpanjang) {
            return abort(404);
        }

        $projek = Projek::all();

        $data = ["projek" => $projek];

        return view("administrator.perpanjang.edit", [
            "perpanjang" => $perpanjang,
            ...$data,
        ]);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            "projek_id" => "required",
            "harga" => "required",
            "tanggal_start" => "required",
            "tangal_ahir" => "required",
            "type_perpanjang" => "required",
            "deskripsi" => "required",
        ]);

        if ($validator->fails()) {
            return redirect(route("perpanjang.create"))
                ->withErrors($validator)
                ->withInput();
        }

        $dataSave = [
            "projek_id" => $request->input("projek_id"),
            "harga" => $request->input("harga"),
            "tanggal_start" => $request->input("tanggal_start"),
            "tangal_ahir" => $request->input("tangal_ahir"),
            "type_perpanjang" => $request->input("type_perpanjang"),
            "deskripsi" => $request->input("deskripsi"),
        ];

        try {
            Perpanjang::create($dataSave);
            return redirect(route("perpanjang.index"))->with([
                "dataSaved" => true,
                "message" => "Data berhasil disimpan",
            ]);
        } catch (\Throwable $th) {
            return redirect(route("perpanjang.index"))->with([
                "dataSaved" => false,
                "message" => "Terjadi kesalahan saat menyimpan data",
            ]);
        }
    }

    public function fetch(Request $request)
    {
        $perpanjang = Perpanjang::with("projek");

        return DataTables::of($perpanjang)->addIndexColumn()->make(true);
    }

    public function update(Request $request, $id)
    {
        $perpanjang = Perpanjang::where("id", $id)->first();
        if (!$perpanjang) {
            return abort(404);
        }

        $validator = Validator::make($request->all(), [
            "projek_id" => "required",
            "harga" => "required",
            "tanggal_start" => "required",
            "tangal_ahir" => "required",
            "type_perpanjang" => "required",
            "deskripsi" => "required",
        ]);

        if ($validator->fails()) {
            return redirect(route("perpanjang.edit", $id))
                ->withErrors($validator)
                ->withInput();
        }

        $dataSave = [
            "projek_id" => $request->input("projek_id"),
            "harga" => $request->input("harga"),
            "tanggal_start" => $request->input("tanggal_start"),
            "tangal_ahir" => $request->input("tangal_ahir"),
            "type_perpanjang" => $request->input("type_perpanjang"),
            "deskripsi" => $request->input("deskripsi"),
        ];

        try {
            $perpanjang->update($dataSave);
            return redirect(route("perpanjang.index"))->with([
                "dataSaved" => true,
                "message" => "Data berhasil diupdate",
            ]);
        } catch (\Throwable $th) {
            return redirect(route("perpanjang.index"))->with([
                "dataSaved" => false,
                "message" => "Terjadi kesalahan saat mengupdate data",
            ]);
        }
    }

    public function destroy($id)
    {
        $perpanjang = Perpanjang::where("id", $id)->first();
        if (!$perpanjang) {
            return abort(404);
        }

        try {
            $perpanjang->delete();
            return redirect(route("perpanjang.index"))->with([
                "dataSaved" => true,
                "message" => "Data berhasil dihapus",
            ]);
        } catch (\Throwable $th) {
            return redirect(route("perpanjang.index"))->with([
                "dataSaved" => false,
                "message" => "Terjadi kesalahan saat menghapus data",
            ]);
        }
    }
}
