@extends('layouts.app')

@section('title', '一覧画面')

@section('content')

{{-- ボタンの大きさもう少し大きくしたい --}}

<div class="container mt-5">
    <button type="button" class="btn btn-primary btn-lg btn-block" onclick="location.href='/tokus'">探している方はこちら</button>
    <button type="button" class="btn btn-primary btn-lg btn-block" onclick="location.href='/tokus/create'">拾った方はこちら</button>
</div>

<div class="flex_test-box">
    <div class="flex_test-item">
        探している方はこちら
    </div>
    <div class="flex_test-item">
        ひろった方はこちら
    </div>
    {{-- <div class="flex_test-item">
        3.コンテンツが入ります。コンテンツが入ります。コンテンツが入ります。
    </div>
    <div class="flex_test-item">
        4.コンテンツが入ります。
    </div> --}}
</div>

@endsection

