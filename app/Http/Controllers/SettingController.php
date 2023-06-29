<?php

namespace App\Http\Controllers;

use App\Exports\SettingExport;
use App\Models\Setting;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $setting = Setting::query();
        $sort = request('sort_val') ?? 'DESC';
        if (request('sort_name') == 'nama_aplikasi') {
            $sort = $sort == 'DESC' ? 'ASC' : 'DESC';
            $setting->orderBy('nama_aplikasi', request('sort_val'));
        }

        if (request('sort_name') == 'no_wa') {
            $sort = $sort == 'DESC' ? 'ASC' : 'DESC';
            $setting->orderBy('no_wa', request('sort_val'));
        }

        if (request('sort_name') == 'alamat') {
            $sort = $sort == 'DESC' ? 'ASC' : 'DESC';
            $setting->orderBy('alamat', request('sort_val'));
        }


        if (request('cari')) {
            $setting->where(function ($q) {
                $q->where('nama_aplikasi', 'LIKE', '%' . request('cari') . '%')
                    ->orWhere('no_wa', 'LIKE', '%' . request('cari') . '%')
                    ->orWhere('alamat', 'LIKE', '%' . request('cari') . '%');
            });
        }

        $setting = $setting->orderBy('created_at', $sort)->paginate()->withQueryString();

        return view('pages.setting.list', [
            'data' => $setting->withPath('setting'),
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
        return view('pages.setting.add');
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
            'nama_aplikasi' => 'required', 'no_wa' => 'required', 'alamat' => 'required'
        ];

        $messages = [
            'nama_aplikasi.required' => 'nama_aplikasi wajib terisi', 'no_wa.required' => 'no_wa wajib terisi', 'alamat.required' => 'alamat wajib terisi'
        ];


        $request->validate($rules, $messages);
        $datarow = $request->all();

        Setting::create($datarow);

        return redirect('setting');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Setting $setting)
    {
        return view('pages.setting.detail', [
            'data' => $setting
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Setting $setting)
    {
        return view('pages.setting.edit', [
            'data' => $setting
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Setting $setting)
    {
        $rules = [
            'nama_aplikasi' => 'required', 'no_wa' => 'required', 'alamat' => 'required'
        ];

        $messages = [
            'nama_aplikasi.required' => 'nama_aplikasi wajib terisi', 'no_wa.required' => 'no_wa wajib terisi', 'alamat.required' => 'alamat wajib terisi'
        ];


        $request->validate($rules, $messages);
        $datarow = $request->all();

        if (!$request->password) {
            unset($datarow['password']);
        }
        $setting->update($datarow);

        return redirect('setting');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Setting $setting)
    {
        $setting->delete();
        return redirect('setting');
    }

    public function export()
    {
        return Excel::download(new SettingExport, 'settings.xlsx');
    }
}
