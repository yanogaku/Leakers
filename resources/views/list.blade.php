@extends('layout')
@section('title','リーク一覧')
@section('content')
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="d-flex">
                    <h2>リーク情報一覧</h2>
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">
                          Dropdown
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                          <li><button class="dropdown-item" type="button">新着</button></li>
                          <li><button class="dropdown-item" type="button">古い順</button></li>
                          <li><button class="dropdown-item" type="button">人気</button></li>
                        </ul>
                      </div>
                </div>
              
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
                            <p>{{ $leak->created_at->diffForHumans() }}</p>
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