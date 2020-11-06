@extends('layouts.app')

@section('title', '一覧画面')

@section('content')

{{-- ボタンの大きさもう少し大きくしたい --}}

<div class="container mt-5">
    <button type="button" class="btn btn-primary btn-lg btn-block" onclick="location.href='/tokus'">探している方はこちら</button>
    <button type="button" class="btn btn-primary btn-lg btn-block" onclick="location.href='/tokus/create'">拾った方はこちら</button>
</div> 



@endsection 

{{-- @extends('layouts.app')
@section('content')
<div class=container”>
    <div class=row justify-content-center”>
        <div class=col-md-8”>
            <div class=card”>
                <div class=card-header”>{{ __('Dashboard') }}</div>
                <div class=card-body”>
                    @if (session('status'))
                        <div class=alert alert-success” role=alert”>
                            {{ session('status') }}
                        </div>
                    @endif
                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}
