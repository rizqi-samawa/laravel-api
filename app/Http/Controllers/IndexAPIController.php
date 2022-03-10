<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Manga;
use File;

class IndexAPIController extends Controller
{
    public function crud()
    {
        $data = Manga::all();
        return response()->json([
            'message' => 'Success',
            'data' => $data
        ]);
    }

    public function show($id)
    {
        $dataid = Manga::find($id);
         return response()->json([
            'message' => 'Success',
            'dataid' => $dataid
        ]);
    }

    public function store(Request $request)
    {
        $data = Manga::create($request->all());
        return response()->json([
            'message' => 'Success',
            'data' => $data
        ]);
    }

    public function update(Request $request, $id)
    {
        $data = Manga::find($id);
        $data->update($request->all());
        return response()->json([
            'message' => 'Success',
            'data' => $data
        ]);

    }

    public function destroy($id)
    {
        $data = Manga::find($id);
        $data->delete();
        return response()->json([
            'message' => 'Success',
            'data' => null
        ]);
    }
}
