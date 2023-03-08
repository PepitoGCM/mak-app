<?php

namespace App\Http\Controllers;

use App\Models\Bijouterie;
use App\Http\Requests\StoreBijouterieRequest;
use App\Http\Requests\UpdateBijouterieRequest;

class BijouterieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bijouteries = Bijouterie::paginate();
        return view('bijouterie.index', compact('bijouteries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreBijouterieRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBijouterieRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Bijouterie  $bijouterie
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //

        $bijouterie = Bijouterie::find($id);

        return view('bijouterie.show', compact('bijouterie'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Bijouterie  $bijouterie
     * @return \Illuminate\Http\Response
     */
    public function edit(Bijouterie $bijouterie)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBijouterieRequest  $request
     * @param  \App\Models\Bijouterie  $bijouterie
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBijouterieRequest $request, Bijouterie $bijouterie)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Bijouterie  $bijouterie
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bijouterie $bijouterie)
    {
        //
    }
}
