<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Manga;
use File;

class IndexController extends Controller
{
    public function index()
    {
        $data = Manga::all();
        return view ('index',compact(['data']));
    }
    public function crud()
    {
        $data = Manga::all();
        return view ('crud',compact('data'));
    }
    public function create()
    {
        return view ('create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'Image' => 'required',
            'Title' => 'required',
            'Synopsis' => 'required',
            'Released' => 'required',
            'Author' => 'required',
            'Status' => 'required',
        ]);

        /*
            jika data gambar kosong
            if ($request->image == null){
                $image = default.jpg
            }
        */

        $image = $request->file('Image');
        $image->move('images', $image->getClientOriginalName());
        
        Manga::create([
            'image' => $image->getClientOriginalName(),
            'title' => $request->Title,
            'synopsis' => $request->Synopsis,
            'released' => $request->Released,
            'author' => $request->Author,
            'status' => $request->Status,
            'score' => $request->Score,
        ]);

        return redirect('crud');
    }
    public function edit($id)
    {
        $data = Manga::find($id);
        return view ('edit',compact('data'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'Title' => 'required',
            'Synopsis' => 'required',
            'Released' => 'required',
            'Author' => 'required',
            'Status' => 'required',
        ]);

        $data = Manga::find($id);

        if($request->hasFile('Image')){
            File::delete(public_path('/images/'. $data->image));
            $image = $request->file('Image');
            $name = $image->getClientOriginalName();
            $image->move('images', $image->getClientOriginalName());
        }

        $data->update([
            'image' => $name,
            'title' => $request->Title,
            'synopsis' => $request->Synopsis,
            'released' => $request->Released,
            'author' => $request->Author,
            'status' => $request->Status,
            'score' => $request->Score,
        ]);

        return redirect('crud');
    }
    public function destroy($id)
    {
        $data = Manga::find($id);
        if (File::exists(public_path('/images/'. $data->image)))
        {
            File::delete(public_path('/images/'. $data->image));
            $data->delete();
        }
        
        return redirect('crud');
    }
}
