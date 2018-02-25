
    <a class="navbar-brand" href="{{ URL::to('/') }}">m4r</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav navbar-right">
        <li class="nav-item active">
          <a class="nav-link" href="{{ URL::to('posts') }}">historique des posts <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ URL::to('posts/create') }}">nouveau Post</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ URL::to('dictionaries') }}">Dictionaire <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ URL::to('dictionaries/create') }}">nouveau mot</a>
        </li>
      </ul>
      {{-- <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form> --}}
    </div>
