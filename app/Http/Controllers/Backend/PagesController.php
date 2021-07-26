<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class PagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (!auth()->user()->ability('admin', 'manage_pages,show_pages')) {
            return abort(Response::HTTP_FORBIDDEN);
        }

        return view('backend.pages.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (!auth()->user()->ability('admin', 'create_pages')) {
            return abort(Response::HTTP_FORBIDDEN);
        }

        return view('backend.pages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (!auth()->user()->ability('admin', 'create_pages')) {
            return abort(Response::HTTP_FORBIDDEN);
        }

        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (!auth()->user()->ability('admin', 'display_pages')) {
            return abort(Response::HTTP_FORBIDDEN);
        }

        return view('backend.pages.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (!auth()->user()->ability('admin', 'update_pages')) {
            return abort(Response::HTTP_FORBIDDEN);
        }

        return view('backend.pages.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if (!auth()->user()->ability('admin', 'update_pages')) {
            return abort(Response::HTTP_FORBIDDEN);
        }

        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (!auth()->user()->ability('admin', 'delete_pages')) {
            return abort(Response::HTTP_FORBIDDEN);
        }

        //
    }
}
