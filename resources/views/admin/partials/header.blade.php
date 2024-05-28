<header>

    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{ route('admin.home')}}">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" target="_blank" href="{{ route('admin.projects.index')}}">Vai ai progetti </a>
              </li>
            </ul>
          </div>
            <ul>
                <li>
                    <span> {{Auth::user()->name}} </span>
                  </li>
                  <li class="nav-item">
                    <form action="{{route('logout')}}
                    method="POST">
                    @csrf
                    <button type="submit" class="btn btn-danger"> Logout </button>
                    </form>
                  </li>
            </ul>
        </div>
      </nav>

</header>
