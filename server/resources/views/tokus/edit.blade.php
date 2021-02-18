@extends('layouts.app')

@section('title','edit')

@section('content')

<div class="container">

    @if (count($errors) > 0)
        <div>
            <P>
                <b>必須項目を入力してください｡</b>
            </P>
        </div>
    @endif

{{-- ひろった人が入力するところ --}}
<div class="mt-2" style="display:inline-flex">
    <h1 >編集しなおす</h1>
    <img src="http://pictogram2.com/p/p0766/1.png" class="pikutoMini">{{--ここあとから変えよう--}}
</div>

{{-- FORMタグの､name属性がついているものはすべてサーバー側に送信される --}}
    <form action="/tokus/{{ $toku->id }}" method="post" enctype='multipart/form-data'>
        @csrf
        @method('PUT')
        <p>
            カテゴリー<br>
            <select class="form-control" name="category" value="{{ $toku->category }}">
                <option>貴重品</option>
                <option>身につけるもの</option>
                <option>読み書き物</option>
                <option>電子機器</option>
                <option>その他</option>
            </select>
        </p>
        <p>
            見つけた場所<br>
            <input type="text" class="form-control" placeholder="市の名前" name="find" value="{{ $toku->find }}">
        </p>
        <p>
            届けた場所<br>
            <input type="text" class="form-control" placeholder="届けていない場合は届けていないと記載" name="deliver" value="{{ $toku->deliver }} ">
        </p>
        <p>
            写真<br>
            <input type="file" class="form-control" name="image"  value="{{ $toku->image }}">
        </p>
        
        {{-- <input type="file" name="profile_img"> --}}
        <p>
            詳細(任意)<br>
            <textarea class="form-control" rows="3" name="description">{{ $toku->description }}</textarea>
        </p>
        <div>
            <button type="submit" href="/tokus/{{ $toku->id }}" class="btn btn-outline-info my-3 mx-1" onclick="if(!confirm('編集し直しますか?')){return false};">完了</button>
            {{-- <button type="submit" class="btn btn-outline-info my-3 mx-1" onclick="location.href='/tokus'">登録</button> --}}
            <button type="button" class="btn btn-outline-info my-3 mx-1" onclick="location.href='/tokus'">戻る</button>
        </div>
    </form>
</div>

@endsection