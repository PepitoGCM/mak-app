<?php

namespace App\Http\Controllers;

use App\Models\Lenceria;
use App\Http\Requests\StoreLenceriaRequest;
use App\Http\Requests\UpdateLenceriaRequest;

class LenceriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoreLenceriaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreLenceriaRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Lenceria  $lenceria
     * @return \Illuminate\Http\Response
     */
    public function show(Lenceria $lenceria)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Lenceria  $lenceria
     * @return \Illuminate\Http\Response
     */
    public function edit(Lenceria $lenceria)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateLenceriaRequest  $request
     * @param  \App\Models\Lenceria  $lenceria
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateLenceriaRequest $request, Lenceria $lenceria)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Lenceria  $lenceria
     * @return \Illuminate\Http\Response
     */
    public function destroy(Lenceria $lenceria)
    {
        //
    }
}
