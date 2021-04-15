<!DOCTYPE HTML>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>リーク一覧</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</head>
<body class="bg-light">
    <header class="fixed-top">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
              <a class="navbar-brand text-warning" href="{{ route('leaks') }}"><h1>Leakers</h1></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active text-white" aria-current="page" href="{{ route('leaks') }}">リーク情報</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-white" href="{{ route('create') }}">匿名で投稿する</a>
                  </li>
                </ul>
                <form class="d-flex">
                  <input class="form-control me-2" type="search" placeholder="#タグ名" aria-label="Search">
                  <button class="btn btn-primary" type="submit">検索</button>
                </form>
              </div>
            </div>
          </nav>
    </header>
    <main class="container" style="margin-top: 100px">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
              <h2>リーク情報一覧</h2>
              <div class="table table-striped">
                @foreach ($leaks as $leak)
                <a href="/leak/{{ $leak->id }}" class="d-block text-dark" style="text-decoration: none">
                    <div class=" border-bottom">
                        <div class="rounded-circle d-inline-block p-3 bg-dark"></div>
                        <h3 class="d-inline-block">{{ $leak->title }}</h3>
                        <div>{{ $leak->created_at }}</div>
                        {{-- <div>{{ $leak->id }}</div> --}}
                        {{-- <td>{{ $leak->content }}</td> --}}
                    </div>
                </a>
                @endforeach
            </div>
            </div>
          </div>
    </main>
    <footer>
        <div class="text-center bg-dark pt-2 pb-2">
            <span class="text-light">©︎Leakers</span>
        </div>
    </footer>
</body>
</html>