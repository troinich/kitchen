<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <a href="{{ route('blog.index') }}" class="navbar-brand">GP</a>
            <ul class="nav navbar-nav navbar-left">
                <li><a href="{{ route('blog.index') }}">Articles</a></li>
                <li><a href="{{ route('other.about') }}">Contact</a></li>
                <li><a href="{{ url('/category/pasta') }}">Pasta</a></li>
                <li><a href="{{ url('/category/chicken') }}">Chicken</a></li>

            </ul>
            <div class="navbar-header">

            <ul class="nav navbar-nav navbar-right">

                    @if(!Auth::check())

                        <li><a href="{{ url('/login') }}">Login</a></li>
                        <li><a href="{{ url('/register') }}">Register</a></li>

                    @else
                        <li><a href="{{ route('admin.index') }}">Admin</a></li>
                        <li>
                            <a href="{{ url('/logout') }}"
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                            Logout
                            </a>
                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </li>
                @endif
            </ul>
        </div>
    </div>
</nav>