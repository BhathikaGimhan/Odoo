<style>
    .offcanvas-backdrop.show{
        opacity: 1;
  background-color: rgba(15,23,42,.5);
  backdrop-filter: blur(8px);
    }
    .collapse{
        color: white;
    }
    .cols ul{
        display: inline-block;
        position: absolute;
        right: 5px;
    }
</style>
<nav class="navbar navbar-dark bg-dark" style="margin-bottom: 40px">
  <div class="container-fluid">
    <a class="navbar-brand" onclick="goBack()" href="#">
        @if (request()->url() !== url("/main"))
        <i class="fa fa-angle-double-left"></i>
        @endif
        <b>Odoo</b>
    </a>
    <div class="cols">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="#">Home</a>
          </li>
        </ul>
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="#">Login</a>
          </li>
        </ul>
    </div>

    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
      aria-controls="offcanvasNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar"
      aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header bg-dark">
        <h3 class="offcanvas-title" id="offcanvasNavbarLabel">Odoo User</h3>
        <button type="button" class="btn-close text-reset bg-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body bg-dark">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3"  style="color: rgb(153, 153, 153);">
            @guest
                @if (Route::has('login'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                @endif

                @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                @endif
            @else
                <li class="nav-item">
                    <figure class="text-start">

                        <figcaption class="footer">Name: <blockquote class="blockquote">
                            <p>{{ Auth::user()->name }}</p>
                        </blockquote></figcaption>
                    </figure>
                </li>
                <li class="nav-item">
                    <figure class="text-start">

                        <figcaption class="footer">Email: <blockquote class="blockquote">
                            <p>{{ Auth::user()->email }}</p>
                        </blockquote></figcaption>
                    </figure>
                </li>
                <li class="nav-item">
                    <figure class="text-start">
                        <figcaption class="footer" >Privilage: <blockquote class="blockquote">
                            <p>{{ Auth::user()->privilege }}</p>
                        </blockquote></figcaption>
                    </figure>
                </li>
                <li class="nav-item bg-transparent">
                    <a class="nav-link text-end text-danger" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </li>
            @endguest
        </ul>
      </div>
    </div>
  </div>
</nav>
<script>
    function goBack() {
      window.history.back();
    }
</script>
