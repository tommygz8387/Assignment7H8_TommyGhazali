<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container px-4 px-lg-5">
        <a class="navbar-brand" href="{{ route('rindex') }}">Tokoku</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span
                class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                <li class="nav-item"><a class="nav-link active" aria-current="page" href="{{ route('rindex') }}">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('rabout') }}">About</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('rcontacts') }}">Contacts</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">Products</a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#!">New Products</a></li>
                        <li><a class="dropdown-item" href="#!">All Products</a></li>
                        <li><a class="dropdown-item" href="#!">Items Category</a></li>
                    </ul>
                </li>
            </ul>
            <form class="d-flex">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                    <li class="nav-item"><a class="nav-link" href="#!">Login</a></li>
                </ul>
            </form>
        </div>
    </div>
</nav>
