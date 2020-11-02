<?php

namespace App\Http\Controllers;

use App\Toku;
use Illuminate\Http\Request;

class TokuController extends Controller
{
    public function index()
    {
        // モデル名::テーブル全件取得
        $tokus = Toku::all();
        // Itemsティレクトリーの中のindexページを指定し、itemsの連想配列を代入
        return view('tokus.index', ['tokus' => $tokus]);
    }

    public function indexw(Request $request)
    {
        $name = $request->name;
        $category = $request->category;
        $query = Toku::query();
        if($name) {
            $query->where('name', 'like', '%' . $name . '%');
        }
        if($category) {
            $query->where('category', 'like', '%' . $category . '%');
        }
        $tokus = $query->paginate(10);
        return view('tokus.index', compact('tokus'));
    }

    // public function indexw()
    // {
    //     // モデル名::テーブル全件取得
    //     $tokus = Toku::all();
    //     // Itemsティレクトリーの中のindexページを指定し、itemsの連想配列を代入
    //     return view('tokus.indexw', ['tokus' => $tokus]);
    // }

    // public function search()
    // {        
    //     return view('tokus.search');
    // }

    public function create()
    {
        return view('tokus.create');
    }

    public function store(Request $request)
    {
        // インスタンスの作成
        $toku = new Toku;
        // 値の用意
        $toku->name = $request->name;
        $toku->description = $request->description;
        $toku->find = $request->find;
        $toku->deliver = $request->deliver;
        $toku->category = $request->category;
        $toku->image_url = $request->image_url;
        $toku->timestamps =false;
        // インスタンスに値を設定して保存
        $toku->save();
        // 登録したらindexに戻る
        return redirect('/tokus');
    }
    
    public function show($id)
    {
        $toku = Toku::find($id);
        return view('tokus.show', ['toku' => $toku]);
    }

    public function edit($id) 
    {
        $toku = Toku::find($id);
        return view('tokus.edit', ['toku' => $toku]);
    }

    public function update(Request $request, $id) 
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