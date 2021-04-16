@extends('layout')
@section('title','リーク一覧')
@section('content')
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
              <h2>リーク情報一覧</h2>
              <div class="table mt-5">
                @foreach ($leaks as $leak)
                <a href="/leak/{{ $leak->id }}" class="d-block text-dark sepia" style="text-decoration: none">
                    <div class=" border-bottom">
                        @if ($leak['views']>=10)
                        <div class="rounded-circle d-inline-block p-3 bg-danger"></div>
                        @elseif($leak['views']>=5)
                        <div class="rounded-circle d-inline-block p-3 bg-warning"></div>
                        @else
                        <div class="rounded-circle d-inline-block p-3 bg-white"></div>
                        @endif
                        <h3 class="d-inline-block">{{ $leak->title }}</h3>
                        <div class="d-flex posision-absolute">
                            <p>{{ $leak->created_at }}</p>
                            <i class="bi bi-eye-fill ms-auto"></i>
                            <p class="ms-2">{{ $leak->views }}</p>
                        </div>
                    </div>
                </a>
                @endforeach
              </div>
            </div>
          </div>
@endsection
