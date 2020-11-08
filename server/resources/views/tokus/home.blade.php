@extends('layouts.app')

@section('title', '一覧画面')

@section('content')

<div class="d-flex justify-content-center">
    
    <button type="button" onfocus="this.blur();" class="box1 mt-5" onclick="location.href='/tokus'">
        探している方はこちら<br>
        <img src="http://pictogram2.com/p/p0246/1.png" class="pikuto">
    </button>
    <button type="button" onfocus="this.blur();" class="box1 mt-5 ml-3" onclick="location.href='/tokus/create'">
        拾った方はこちら<br>
        <img src="http://pictogram2.com/p/p0766/1.png" class="pikuto">
    </button>
</div>

@endsection 
