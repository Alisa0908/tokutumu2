@extends('layouts.app')

@section('title','home')

@section('content')

<div class="d-flex justify-content-center">
    
    <button type="button" onfocus="this.blur();" class="box1 mt-5" onclick="location.href='/tokus'">
        さがす<br>
        <img src="http://pictogram2.com/p/p0246/1.png" class="pikuto">
    </button>
    <button type="button" onfocus="this.blur();" class="box1 mt-5 ml-3" onclick="location.href='/tokus/create'">
        ひろった<br>
        <img src="http://pictogram2.com/p/p0766/1.png" class="pikuto">
    </button>
</div>

@endsection 
