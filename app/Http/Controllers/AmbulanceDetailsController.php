<?php

namespace App\Http\Controllers;

use App\Models\AmbulanceDetails;
use Illuminate\Http\Request;
use App\Http\Resources\Ambulance;
use Illuminate\Support\Facades\Validator;
class AmbulanceDetailsController extends Controller
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $RegNo = $request->RegNo;
        $HospitalsName = $request->HospitalsName;
        $DriversName = $request->DriversName;
        $Id = $request->Id;
        $PhoneNumber = $request->PhoneNumber;
        $Email = $request->Email;
        $Password = $request->Password;

        //validate data forehand before pushing it server
        $validator = Validator::make(
            $request->all(),
            [
                'RegNo'=>'unique:ambulance_details|required',
                'Id'=>'unique:ambulance_details|required',
                'PhoneNumber'=>'unique:ambulance_details|required',
                'DriversName'=>'required',
                'HospitalsName'=>'required',
                'Email'=>'unique:ambulance_details|email|required',
                'Password'=>'required'
                ]

        );

        // throw htto


        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AmbulanceDetails  $ambulanceDetails
     * @return \Illuminate\Http\Response
     */
    public function show(AmbulanceDetails $ambulanceDetails)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AmbulanceDetails  $ambulanceDetails
     * @return \Illuminate\Http\Response
     */
    public function edit(AmbulanceDetails $ambulanceDetails)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AmbulanceDetails  $ambulanceDetails
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AmbulanceDetails $ambulanceDetails)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AmbulanceDetails  $ambulanceDetails
     * @return \Illuminate\Http\Response
     */
    public function destroy(AmbulanceDetails $ambulanceDetails)
    {
        //
    }
}
