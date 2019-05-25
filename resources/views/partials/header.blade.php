<!-- navbar -->
<nav class="navbar navbar-expand-sm bg-light">
    <div>
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="navbar-brand" href="{{ route('blog.index') }}">The Kitchen</a>
            </li>
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

<div class="jumbotron jumbotron-fluid text-center">
    <div class="container">
        <h2 class="display-4">The Kitchen.</h2>
        <p class="lead"> Satisfy your hunger</p>
    </div>
</div>






