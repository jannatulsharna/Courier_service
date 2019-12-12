<?php

namespace App\Http\Controllers;
use DB;
use App\ParcelRequest;
use Illuminate\Http\Request;

class ParcelRequestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('parcelPage');
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new ParcelRequest();
        $data->name = $request->input('username');
        $data->email = $request->input('email');
        $data->phone = $request->input('phone');
        $data->address = $request->input('address');
        $data->branchName = $request->input('brachName');
        $data->where = $request->input('where');
        $data->date = $request->input('date');
        $data->receiversName = $request->input('receiverName');
        $data->receiversNumber = $request->input('receiverPhone');
        $data->save();
        echo "Parcel Request Succssfully ";
        return view('CustomerHomepage');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ParcelRequest  $parcelRequest
     * @return \Illuminate\Http\Response
     */
    public function show(ParcelRequest $parcelRequest)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ParcelRequest  $parcelRequest
     * @return \Illuminate\Http\Response
     */
    public function edit(ParcelRequest $parcelRequest)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ParcelRequest  $parcelRequest
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ParcelRequest $parcelRequest)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ParcelRequest  $parcelRequest
     * @return \Illuminate\Http\Response
     */
    public function destroy(ParcelRequest $parcelRequest)
    {
        //
    }
}
