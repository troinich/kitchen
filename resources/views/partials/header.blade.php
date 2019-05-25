<div class="jumbotron jumbotron-fluid text-center m-0">
    <div class="container">
        <h2 class="display-4">The Kitchen.</h2>
        <p class="lead"> Satisfy your hunger</p>
    </div>
</div>


<!-- navbar -->
<nav class="navbar navbar-expand-md bg-dark navbar-dark mb-3">
    <a class="navbar-brand" href="{{ route('blog.index') }}">The Kitchen</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/category/asian') }}">Asian</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/category/pasta') }}">Pasta</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/category/vego') }}">Vego</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/category/easy') }}">Easy</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/category/children') }}">For kids</a>
            </li>
            @if(!Auth::check())
                <li class="nav-item"><a class="nav-link" href="{{ url('/login') }}">Login</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('/register') }}">Register</a></li>
            @else
                <li class="nav-item"><a class="nav-link" href="{{ route('admin.index') }}">Admin</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('/logout') }}"
                                        onclick="event.preventDefault();
               document.getElementById('logout-form').submit();">
                        Logout
                    </a></li>
                <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            @endif
        </ul>
    </div>
</nav>




