<?php

namespace App\Http\Controllers;

use App\Exports\BlogExport;
use App\Models\Blog;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blog = Blog::query();
        $sort = request('sort_val') ?? 'DESC';
        if (request('sort_name') == 'title') {
            $sort = $sort == 'DESC' ? 'ASC' : 'DESC';
            $blog->orderBy('title', request('sort_val'));
        }

        if (request('sort_name') == 'deskripsi') {
            $sort = $sort == 'DESC' ? 'ASC' : 'DESC';
            $blog->orderBy('deskripsi', request('sort_val'));
        }


        if (request('cari')) {
            $blog->where(function ($q) {
                $q->where('title', 'LIKE', '%' . request('cari') . '%')
                    ->orWhere('deskripsi', 'LIKE', '%' . request('cari') . '%');
            });
        }

        $blog = $blog->orderBy('created_at', $sort)->paginate()->withQueryString();

        return view('pages.blog.list', [
            'data' => $blog->withPath('blog'),
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
        return view('pages.blog.add');
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
            'title' => 'required', 'deskripsi' => 'required'
        ];

        $messages = [
            'title.required' => 'title wajib terisi', 'deskripsi.required' => 'deskripsi wajib terisi'
        ];


        $request->validate($rules, $messages);
        $datarow = $request->all();

        Blog::create($datarow);

        return redirect('blog');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        return view('pages.blog.detail', [
            'data' => $blog
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
        return view('pages.blog.edit', [
            'data' => $blog
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blog)
    {
        $rules = [
            'title' => 'required', 'deskripsi' => 'required'
        ];

        $messages = [
            'title.required' => 'title wajib terisi', 'deskripsi.required' => 'deskripsi wajib terisi'
        ];


        $request->validate($rules, $messages);
        $datarow = $request->all();

        if (!$request->password) {
            unset($datarow['password']);
        }
        $blog->update($datarow);

        return redirect('blog');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        $blog->delete();
        return redirect('blog');
    }

    public function export()
    {
        return Excel::download(new BlogExport, 'blogs.xlsx');
    }
}
