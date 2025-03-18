{{-- layouts/alice.blade.phpを読み込む --}}
@extends('layouts.alice')


{{-- alice.blade.phpの@yield('title')に'ニュースの新規作成'を埋め込む --}}
@section('title', '映画の新規作成')

{{-- alice.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>映画新規作成</h2>
            </div>
        </div>
    </div>
@endsection