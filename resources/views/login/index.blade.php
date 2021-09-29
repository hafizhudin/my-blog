<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css') }}/bootstrap.css">

    {{-- Local CSS --}}
    <link rel="stylesheet" href=" {{ asset('css') }}/style.css">
    <link rel="shortcut icon" href="{{ asset('img') }}/favicon.ico" type="image/x-icon" sizes="">

    {{-- Font Google --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">


    <title>Hablog | {{ $title }} </title>
</head>

<body>
    <div class="row justify-content-center py-5">
        <div class="col-10 col-md-6 col-lg-4 py-5">
            <main class="form-signin py-5">


                @if (session()->has('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                @if (session()->has('loginError'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ session('loginError') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                <h1 class="h3 mb-3 fw-normal text-center  text-uppercase fw-bold">Masuk</h1>

                <form class="my-2" action="/login" method="POST">
                    @csrf
                    <div class="form-floating">
                        <input type="text" name="username" class="form-control @error('username') is-invalid @enderror"
                            id="username" placeholder="username" required autofocus value="{{ old('username') }}">
                        <label for="username">Username</label>
                        @error('username')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-floating my-3">
                        <input type="password" name="password" class="form-control" id="password" placeholder="Password"
                            required>
                        <label for="password">Password</label>
                    </div>
                    <button class="w-100 btn btn-lg btn-dark" type="submit">Masuk sekarang!</button>
                </form>
                <small>Tidak punya akun? <a href="/register" class="fw-bold">Daftar disini!</a> </small>
            </main>
        </div>
    </div>

    <script src="{{ asset('js') }}/bootstrap.bundle.js"></script>
    <script src="{{ asset('js') }}/script.js"></script>

</body>

</html>
