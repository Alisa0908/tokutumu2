@extends('layouts.app')

@section('title', '一覧画面')

@section('content')

<img src="{{ url($toku->image_url) }}" class="img-show">

<table class="table-bordered my-5 mt-3">
<colgroup span="1" style="width:200px;background-color:#efefef;"></colgroup>

<tbody>   
    
    <tr>
        <th>届けた場所</th>
        <td>{{ $toku->deliver }}</td>
    </tr>
    <tr>
        <th>詳細</th>
        <td>
            <p>{{ $toku->description }}</p>
        </td>
    </tr>
    
</tbody>
</table>

<div style="display:inline-flex">
<form action="/tokus/{{ $toku->id }}" method="POST">
    @csrf
    @method('DELETE')
    <input type="submit" class="btn btn-outline-danger" value="みつけた" onclick="if(!confirm('この投稿を消してもよろしいですか?')){return false};">
</form>

<a class="btn btn-outline-success mx-2" href="/tokus" role="button">一覧に戻る</a>
</div>

@endsection