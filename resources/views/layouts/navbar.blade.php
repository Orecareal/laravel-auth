<nav class="navbar navbar-dark bg-dark navbar-expand-lg">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">About</a>
            </li>
        </ul>
        <ul class="navbar-nav ms-auto">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="">
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button class="btn btn-logout">Logout</button>
                    </form>
                </a>
            </li>
        </ul>
      </div>
    </div>
</nav>
<style type="text/css">
.btn-logout{
    background-color: transparent;
    border: 0;
    color: gray;
}

.btn-logout:hover{
    color: #fff;
}
</style>