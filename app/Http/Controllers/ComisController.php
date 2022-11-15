<?php

namespace App\Http\Controllers;

use App\Comis;
use Illuminate\Http\Request;

class ComisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $Comiss = Comis::all();
        return view('Comis.index', compact('Comis'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Comis.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $data = $request->all();
        $newComis = new Comis();
        $newComis->fill($data);
        $newComis->save();
        return redirect()->route('Comis.show', $newComis->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Comis  $Comis
     * @return \Illuminate\Http\Response
     */
    public function show(Comis $Comis)
    {
        //
        return view('Comis.show', compact('Comis'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Comis  $Comis
     * @return \Illuminate\Http\Response
     */
    public function edit(Comis $Comis)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Comis  $Comis
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comis $Comis)
    {
        //
    }


    public function confirmDelete(Comis $Comis)
    {
        return view('Comis.delete-conf', compact('Comis'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Comis  $Comis
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comis $Comis)
    {
        //
        $Comis->delete();
        return redirect()->route('Comis.index');
    }
}
