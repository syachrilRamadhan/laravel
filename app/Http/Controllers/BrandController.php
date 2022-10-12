<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    
    public function index()
    {
        $brand = Brand::with('produk')->get();
        return view('/layouts/brand', ['brandList' => $brand]);
    }

   
    public function create()
    {
        //
    }

  
    public function store(Request $request)
    {
        //
    }

   
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

   
    public function update(Request $request, $id)
    {
        //
    }

   
    public function destroy($id)
    {
        //
    }
}