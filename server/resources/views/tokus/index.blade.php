@extends('layouts.app')

@section('title', '一覧画面')

@section('content')


<div class="mt-2">
<h1>探しているもの</h1>
</div>

{{-- 検索機能のところ --}}
<form mechod="GET" action="{{ route('tokus.index') }}">
    <div class="mt-3">カテゴリー
        <select class="form-control mt-1" name="category" type="search" value="{{ old('category') }}">
            <option value="選択してください" selected="selected">選択してください</option>
            <option value="貴重品">貴重品</option>
            <option value="身につけるもの">身につけるもの</option>
            <option value="読み書き物">読み書き物</option>
            <option value="電子機器">電子機器</option>
            <option value="その他">その他</option>
        </select>
    </div>
    <div class="mt-3">落とした場所
        <input class="form-control mt-1" type="search" name="find" placeholder="落とした場所" value="{{ old('find') }}">
    </div>
    <div style="display:inline-flex">
        <button class="btn btn-outline-success my-3 mx-1" type="submit">探す</button>
        <button type="button" class="btn btn-outline-success my-3 mx-1" onclick="location.href='/tokus'">一覧へ戻る</button>
    </div>
</form>


{{-- 写真だけでリスト表示して､さらに押すと詳細に飛びたい --}}
<div >
<ul>
    @foreach ($tokus as $toku)
        <li style="list-style: none; display:inline-flex">
            <a href="tokus/{{ $toku->id }}" ><img src="{{ url($toku->image_url) }}" class="img-responsive" ></a>
            {{-- style="background-size:cover" style="background-size:cover class="list-unstyled border mb-5 pl-3 shadow" --}}

        </li>
    @endforeach

    @foreach ($tokus as $toku)
        
        <img src="uploads/{{ $toku->image_url }}" width="200px" height="200px">
        
    @endforeach
</ul>
</div>

{{-- ページネイトのボタン作成 --}}
<div class="d-flex justify-content-center">
    {{ $tokus->links() }}
</div>

@endsection
    