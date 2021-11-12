<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Facade\Ignition\Actions\ShareReportAction;
use Illuminate\Http\Request;
use App\Models\Like;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Message::all();
        return response()->json([
            'data' => $items
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $item = Message::create($request->all());
        return response()->json([
            'data' => $item
        ], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function show(Message $share)
    {
        //
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function destroy(Message $share)
    {
        $item = Message::where('id', $share->id)->delete();
        if($item){
            return response()->json([
                'message' => 'Deleted successfully'
            ], 200);
        } else {
            return response()->json([
                'message' => 'Not found'
            ], 404);
        }
    }

    public function count()
    {
        $items = Message::all();
        foreach ($items as $item) {
            $count = Like::with('user')->get();
        };
        return response()->json([
            'count' => $count
        ], 200);
    }
}
