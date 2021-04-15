<!DOCTYPE HTML>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>匿名で投稿</title>
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
    <main class="container bg-light" style="margin-top: 100px">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h2>匿名投稿フォーム</h2>
                <form method="POST" action="{{ route('store') }}" onSubmit="return checkSubmit()">
                @csrf
                    <div class="form-group">
                        <label for="title">
                            タイトル
                        </label>
                        <input
                            id="title"
                            name="title"
                            class="form-control"
                            value="{{ old('title') }}"
                            type="text"
                        >
                        @if ($errors->has('title'))
                            <div class="text-danger">
                                {{ $errors->first('title') }}
                            </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="content">
                            本文
                        </label>
                        <textarea
                            id="content"
                            name="content"
                            class="form-control"
                            rows="4"
                        >{{ old('content') }}</textarea>
                        @if ($errors->has('content'))
                            <div class="text-danger">
                                {{ $errors->first('content') }}
                            </div>
                        @endif
                    </div>
                    <div class="mt-5">
                        <a class="btn btn-secondary" href="{{ route('leaks') }}">
                            キャンセル
                        </a>
                        <button type="submit" class="btn btn-primary">
                            投稿する
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </main>
    <footer class="position-absolute w-100 bottom-0">
        <div class="text-center bg-dark pt-2 pb-2">
            <span class="text-light">©︎Leakers</span>
        </div>
    </footer>
</body>
<script>
    function checkSubmit(){
        if(window.confirm('送信してよろしいですか？')){
            return true;
        } else {
            return false;
        }
    }
</script>
</html>
