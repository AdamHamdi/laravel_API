<?php

namespace App\Http\Controllers;

use App\Http\Resources\Topicality as ResourcesTopicality;
use App\Topicality;
use Illuminate\Http\Request;

class TopicalityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $topicalities=Topicality::orderByDesc('created_at')->get();
        return $topicalities->toJson(JSON_PRETTY_PRINT);
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
        $topicalities=Topicality::create($request->all());
        if($topicalities){
            return response()->json([
                'Success'=>'La topicalitée a été ajoutée avec succès'
            ],200);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Topicality  $topicality
     * @return \Illuminate\Http\Response
     */
    public function show(Topicality $topicality)
    {
        return new ResourcesTopicality($topicality);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Topicality  $topicality
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Topicality $topicality)
    {
        //
        $topicality->update($request->all());
        if($topicality){
        return response()->json([
            'Success'=>'La topicalitée a été modifiée avec succès'
        ],200);
    }
}

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Topicality  $topicality
     * @return \Illuminate\Http\Response
     */
    public function destroy(Topicality $topicality)
    {
        //
        $topicality->delete();
        if($topicality){
            return response()->json([
                'Success'=>'La topicalitée a été supprimée avec succès'
            ],200);
    }
}
}
