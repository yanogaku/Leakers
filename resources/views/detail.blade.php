@extends('layout')
@section('title','リークの詳細')
@section('content')
    <h2 class="border-bottom">{{ $leak->title }}</h2>
    <p>{!! nl2br($leak->content) !!}</p>
    <input id="copyTarget" type="hidden" value="{{ url()->full() }}" readonly>
    <button onclick="copyToClipboard()">この記事をシェアする　<i class="bi bi-box-arrow-up"></i></button>
    <script>
        function copyToClipboard() {
            // コピー対象をJavaScript上で変数として定義する
            var copyTarget = document.getElementById("copyTarget");
            // コピー対象のテキストを選択する
            copyTarget.select();
            // 選択しているテキストをクリップボードにコピーする
            document.execCommand("Copy");
            // コピーをお知らせする
            alert("コピーできました！");
        }
    </script>
@endsection
 