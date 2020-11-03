@extends('layouts.app')

@section('title', '一覧画面')

@section('content')

<form class="form-inline my-2 my-lg-0" method="GET" action="{{ route('tokus.index') }}">
    {{-- <input class="form-control mr-sm-2" type="search" name="category" placeholder="カテゴリ"> --}}
    <select name= "category">
            <option value = "貴重品">貴重品</option>
            <option value = "身につける系">身につける系</option>
            <option value = "電子機器">電子機器</option>
            <option value = "読み書き系">読み書き系</option>
            <option value = "その他">その他</option>
        </select>
    <input class="form-control mr-sm-2" type="search" name="find" placeholder="なくした場所">
    {{-- <button type="button" onclick="location.href='/tokus/{{ $tokus->id }}/edit'">探す</button> --}}
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit" onclick="location.href='/tokus/show/edit'">探す</button>
</form>           

<table class="table-bordered mb-5 mt-3">
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

@endsection