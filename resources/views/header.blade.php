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
      <form method="POST" class="d-flex" action="{{ route('search') }}">
        @csrf
        <input class="form-control me-2" type="search" placeholder="#タグ名　キーワード" aria-label="Search" name="search" value="">
        <button class="btn btn-primary" type="submit">検索</button>
      </form>
    </div>
  </div>
</nav>