@extends('layout')
@section('title','リークの詳細')
@section('content')
    <h2 class="border-bottom">{{ $leak->title }}</h2>
    <p>{!! nl2br($leak->content) !!}</p>
@endsection
 