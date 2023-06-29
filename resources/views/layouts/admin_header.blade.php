<nav class="navbar navbar-expand-lg navbar-light bg-light shadow-lg">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/admin/dashboard') }}">CSLS ADMIN</a>
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="{{ url('/admin/dashboard') }}">Dashboard</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.news') }}">News</a>
            </li>
            <li class="nav-item">
                <a href="{{ route('logout') }}" class="btn btn-dark px-3 py-2 ms-4">Chiqish</a>
            </li>
        </ul>
    </div>
</nav>
