<?php

namespace App\Http\Controllers;

use App\Exports\ProfilExport;
use App\Models\Profil;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ProfilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $profil = Profil::query();
        $sort = request('sort_val') ?? 'DESC';
        if (request('sort_name') == 'nama') {
            $sort = $sort == 'DESC' ? 'ASC' : 'DESC';
            $profil->orderBy('nama', request('sort_val'));
        }

        if (request('sort_name') == 'profesi') {
            $sort = $sort == 'DESC' ? 'ASC' : 'DESC';
            $profil->orderBy('profesi', request('sort_val'));
        }

        if (request('sort_name') == 'alamat') {
            $sort = $sort == 'DESC' ? 'ASC' : 'DESC';
            $profil->orderBy('alamat', request('sort_val'));
        }


        if (request('cari')) {
            $profil->where(function ($q) {
                $q->where('nama', 'LIKE', '%' . request('cari') . '%')
                    ->orWhere('profesi', 'LIKE', '%' . request('cari') . '%')
                    ->orWhere('alamat', 'LIKE', '%' . request('cari') . '%');
            });
        }

        $profil = $profil->orderBy('created_at', $sort)->paginate()->withQueryString();

        return view('pages.profil.list', [
            'data' => $profil->withPath('profil'),
            'sort' => $sort
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.profil.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'nama' => 'required', 'profesi' => 'required', 'alamat' => 'required'
        ];

        $messages = [
            'nama.required' => 'nama wajib terisi', 'profesi.required' => 'profesi wajib terisi', 'alamat.required' => 'alamat wajib terisi'
        ];


        $request->validate($rules, $messages);
        $datarow = $request->all();

        Profil::create($datarow);

        return redirect('profil');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Profil $profil)
    {
        return view('pages.profil.detail', [
            'data' => $profil
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Profil $profil)
    {
        return view('pages.profil.edit', [
            'data' => $profil
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Profil $profil)
    {
        $rules = [
            'nama' => 'required', 'profesi' => 'required', 'alamat' => 'required'
        ];

        $messages = [
            'nama.required' => 'nama wajib terisi', 'profesi.required' => 'profesi wajib terisi', 'alamat.required' => 'alamat wajib terisi'
        ];


        $request->validate($rules, $messages);
        $datarow = $request->all();

        if (!$request->password) {
            unset($datarow['password']);
        }
        $profil->update($datarow);

        return redirect('profil');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Profil $profil)
    {
        $profil->delete();
        return redirect('profil');
    }

    public function export()
    {
        return Excel::download(new ProfilExport, 'profils.xlsx');
    }
}
