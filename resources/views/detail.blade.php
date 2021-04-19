@extends('layout')
@section('title','リークの詳細')
@section('content')
    <h2 class="border-bottom">{{ $leak->title }}</h2>
    <p>{!! nl2br($leak->content) !!}</p>
    <input id="copyTarget" type="text" value="{{ url()->full() }}" readonly style="opacity: 0">
    <button onclick="copyToClipboard()">この記事をシェアする <i class="bi bi-box-arrow-up"></i></button>
    <script>
        function copyToClipboard() {
            var copyTarget = document.getElementById("copyTarget");

            copyTarget.select();

            document.execCommand("Copy");

            alert("コピーできました！" );
        }
    </script>
@endsection