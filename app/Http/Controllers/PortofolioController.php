<?php

namespace App\Http\Controllers;

use App\Exports\PortofolioExport;
use App\Models\Portofolio;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class PortofolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $portofolio = Portofolio::query();
        $sort = request('sort_val') ?? 'DESC';
        if (request('sort_name') == 'title') {
            $sort = $sort == 'DESC' ? 'ASC' : 'DESC';
            $portofolio->orderBy('title', request('sort_val'));
        }

        if (request('sort_name') == 'gambar') {
            $sort = $sort == 'DESC' ? 'ASC' : 'DESC';
            $portofolio->orderBy('gambar', request('sort_val'));
        }


        if (request('cari')) {
            $portofolio->where(function ($q) {
                $q->where('title', 'LIKE', '%' . request('cari') . '%')
                    ->orWhere('gambar', 'LIKE', '%' . request('cari') . '%');
            });
        }

        $portofolio = $portofolio->orderBy('created_at', $sort)->paginate()->withQueryString();

        return view('pages.portofolio.list', [
            'data' => $portofolio->withPath('portofolio'),
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
        return view('pages.portofolio.add');
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
            'title' => 'required', 'gambar' => 'required'
        ];

        $messages = [
            'title.required' => 'title wajib terisi', 'gambar.required' => 'gambar wajib terisi'
        ];


        $request->validate($rules, $messages);
        $datarow = $request->all();

        Portofolio::create($datarow);

        return redirect('portofolio');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Portofolio $portofolio)
    {
        return view('pages.portofolio.detail', [
            'data' => $portofolio
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Portofolio $portofolio)
    {
        return view('pages.portofolio.edit', [
            'data' => $portofolio
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Portofolio $portofolio)
    {
        $rules = [
            'title' => 'required', 'gambar' => 'required'
        ];

        $messages = [
            'title.required' => 'title wajib terisi', 'gambar.required' => 'gambar wajib terisi'
        ];


        $request->validate($rules, $messages);
        $datarow = $request->all();

        if (!$request->password) {
            unset($datarow['password']);
        }
        $portofolio->update($datarow);

        return redirect('portofolio');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Portofolio $portofolio)
    {
        $portofolio->delete();
        return redirect('portofolio');
    }

    public function export()
    {
        return Excel::download(new PortofolioExport, 'portofolios.xlsx');
    }
}
