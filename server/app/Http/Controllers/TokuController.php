<?php

namespace App\Http\Controllers;

use App\Toku;
use Illuminate\Http\Request;
use App\Http\Requests\TokuRequest;
use Intervention\Image\Facades\Image;
// use Illuminate\Support\Facades\Storage;

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
        if ($file = ($request->image_url)) {
            $fileName = date('YmdHis') . $file->getClientOriginalName();
            $upload_file_path = $request->image_url->getRealPath();
            Image::make($upload_file_path)
            ->resize(300, 300)//size変更
            // ->orientate()
            ->save($upload_file_path);
            $image = base64_encode(file_get_contents($request->image_url->getRealPath()));
        } else {
            $fileName = "";
        }

        // PHPで受け取る場合は"$category = $_GET["category"];"(Getリクエストの場合)だが､Controllerて受け取る$request変数はこれをショートカットできる
        $toku = new Toku; //Tokuのモデルを作成
        // モデルに各フィールド(=カラム)の値をセット
        $toku->description = $request->description;
        $toku->find = $request->find;
        $toku->deliver = $request->deliver;
        $toku->category = $request->category;
        $toku->image_url = 'storage/toku_img2/' . $fileName;
        $toku->image = $image;
        $toku->timestamps =false;       
        // tokusテーブルにレコードを新規登録
        $toku->save();

//      ↑ピュアphpで書く場合、
//      ①DBに接続
//      ②SQLのINSERT文を記述（各カラムの値を設定）
//      ③commitを送信（レコードが新規登録される）
//      ④DBの接続を切断
//      といった流れの処理を実装しますが、それをフレームワーク内部で全部やってくれてます。

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

    public function update(TokuRequest $request, $id) 
    {
        $image = base64_encode(file_get_contents($request->image_url->getRealPath()));
        // ここはidで探して持ってくる以外はstoreと同じ
        $toku = Toku::find($id);
        
        // 値の用意
        $toku->category = $request->category;
        $toku->find = $request->find;
        $toku->deliver = $request->deliver;
        $toku->image = $image;
    //     if ($image != null) {

    // }else{
    //         //もとの値を引き継いでくれのコマンド､idとか関係ある?
    //     $toku->image = $image;
    //     }
        $toku->description = $request->description;
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