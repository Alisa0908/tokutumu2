@extends('layouts.app')

@section('title', '一覧画面')

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
    <h1 >ひろったものの登録</h1>
    <form action="/tokus" method="post" enctype='multipart/form-data'>
        @csrf
        <p>
            カテゴリー<br>
            <select class="form-control" name="category">
                <option value="選択してください" selected="selected">選択してください</option>
                <option value="貴重品">貴重品</option>
                <option value="身につけるもの">身につけるもの</option>
                <option value="読み書き物">読み書き物</option>
                <option value="電子機器">電子機器</option>
                <option value="その他">その他</option>
            </select>
        </p>
        <p>
            見つけた場所<br>
            <input type="text" class="form-control" placeholder="Text" input name="find" value="{{ old('find') }} ">
        </p>
        <p>
            届けた場所<br>
            <input type="text" class="form-control" placeholder="Text" input name="deliver" value="{{ old('deliver') }} ">
        </p>
        <p>
            写真<br>
            <input type="file" class="form-control" placeholder="URL" input name="image_url"  value="{{ old('image_url') }}">
        </p>
        
        {{-- <input type="file" name="profile_img"> --}}
        <p>
            詳細(任意)<br>
            <textarea class="form-control" rows="3" value="詳細" name="description"></textarea>
        </p>
        <div>
            <button type="submit" class="btn btn-outline-success my-3 mx-1" onclick="location.href='/tokus'">登録</button>
            <button type="button" class="btn btn-outline-success my-3 mx-1" onclick="location.href='/tokus'">戻る</button>
        </div>
    </form>
</div>

@endsection