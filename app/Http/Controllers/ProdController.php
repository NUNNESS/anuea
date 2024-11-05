<?php

namespace App\Http\Controllers;

use App\Models\Prod;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProdController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       return view(view:'prods.index',[
        'prods'=> DB::table(table: 'prods' )-> get()] 
        ); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view(view:'prod.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Prod $prod)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Prod $prod)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Prod $prod)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Prod $prod)
    {
        //
    }
}
