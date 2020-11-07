<?php

namespace App\Http\Controllers;

use App\Toku;
use Illuminate\Http\Request;
use App\Http\Requests\TokuRequest;

class TokuController extends Controller
{
    public function index(Request $request)
    {
        $find = $request->find;
        $category = $request->category;

        $query = Toku::query();

        if($find) {
            $query->where('find', 'like', '%' . $find . '%');
        }
        if($category) {
            $query->where('category', 'like', '%' . $category . '%');
        }
        
        $tokus = $query->paginate(16);
        return view('tokus.index', compact('tokus'));
    }

    public function create()
    {
        return view('tokus.create');
    }

    public function store(TokuRequest $request)
    {
        if ($file = $request->image_url) {
            $fileName = date('YmdHis') . $file->getClientOriginalName();
            $target_path = public_path('uploads/');
            $file->storeAs('public/toku_img2', $fileName);
            // $file->move($target_path, $fileName);
        } else {
            $fileName = "";
        }

        $toku = new Toku;
        $toku->description = $request->description;
        $toku->find = $request->find;
        $toku->deliver = $request->deliver;
        $toku->category = $request->category;
        $toku->image_url = 'storage/toku_img2/' . $fileName;
        $toku->timestamps =false;

        $toku->save();

        return redirect('/tokus');
    }
    
    public function show($id)
    {
        $toku = Toku::find($id);
        return view('tokus.show', ['toku' => $toku]);
    }

    public function edit($id) 
    {
        $tokus = Toku::find($id);
        return view('tokus.edit', ['toku' => $tokus]);
    }

    public function update(TokuRequest $request, $id) 
    {
        // ここはidで探して持ってくる以外はstoreと同じ
        $toku = Toku::find($id);
        // 値の用意
        $toku->name = $request->name;
        $toku->description = $request->description;
        $toku->find = $request->find;
        $toku->deliver = $request->deliver;
        $toku->category = $request->category;
        $toku->image_url = $request->image_url;
        $toku->timestamps =false;
        // 保存
        $toku->save();
        // 登録したらindexに戻る
        return redirect('/tokus');
    }

    public function destroy($id)
    {
        $toku = Toku::find($id);
        $toku->delete();
        return redirect('/tokus');
    }
}