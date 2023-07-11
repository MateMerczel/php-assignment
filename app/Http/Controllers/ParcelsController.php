<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreParcelsRequest;
use App\Http\Resources\ParcelsResource;
use App\Models\Parcels;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ParcelsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return ParcelsResource::collection(Parcels::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreParcelsRequest $request)
    {
        $data = $request->validated();
        $random = Str::random(10);
        $data["parcel_number"] = strtoupper($random);
        $parcel = Parcels::create($data);

        return $parcel;
    }

    /**
     * Display the specified resource.
     *
     * @param  Parcels  $parcel
     * @return \Illuminate\Http\Response
     */
    public function show(Parcels $parcel_number)
    {
        return new ParcelsResource($parcel_number);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreParcels $request, Parcels $parcels)
    {
        $parcels->update($request->validated());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Parcels $parcels)
    {
        $parcels->delete();
    }
}
