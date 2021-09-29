<nav class="mx-3 mx-sm-0 navbar navbar-expand-md  navbar-light bg-white">
    <div class="container justify-content-between">
        <a class="navbar-brand fs-2 fw-bold" href="/">mh.</a>

        <!-- RESPONSIVE NAVBAR -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- RESPONSIVE NAVBAR -->

        <div class="collapse navbar-collapse  justify-content-end" id="navbarNav">
            <ul class="navbar-nav text-center fw-medium">
                <li class="nav-item">
                    <a class="nav-link {{ $active === 'home' ? 'active' : '' }}" aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $active === 'blog' ? 'active' : '' }}" href="/blog">Blog</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
