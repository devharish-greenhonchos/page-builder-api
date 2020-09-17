<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Markup;

class MarkupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(['message' => 'Laravel is working'], 200);
        try {
            $markups = Markup::all();
            return response()->json(['data' => $markups], 200);
        } 
        catch (\Exception $e) {
            return response()->json(['message' => 'Something went wrong.'], 400);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            Markup::create($request->all());
            return response()->json(['message' => 'Markup added'], 200);
        } 
        catch (\Exception $e) {
            return response()->json(['message' => 'Something went wrong.'], 400);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        try {
            $markup = Markup::where('id', $id)->first();
            return response()->json(['data' => $markup], 200);
        } 
        catch (\Exception $e) {
            return response()->json(['message' => 'Something went wrong.'], 400);
        }
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
        //
    }
}
