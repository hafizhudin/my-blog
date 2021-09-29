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
            <main class="form-signup py-5">
                <h1 class="h3 mb-3 fw-normal text-center  text-uppercase fw-bold">Daftar</h1>

                <form class="my-2" action="/register" method="POST">
                    @csrf
                    <div class="form-floating">
                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                            id="name" placeholder="Full Name" required value="{{ old('name') }}">
                        <label for="name">Nama Lengkap</label>
                        @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-floating my-3">
                        <input type="text" name="username" class="form-control @error('username') is-invalid @enderror"
                            id="username" placeholder="username" required value="{{ old('username') }}">
                        <label for="username">Username</label>
                        @error('username')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-floating my-3">
                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                            id="email" placeholder="email@example.com" required value="{{ old('email') }}">
                        <label for=" email">Email</label>
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-floating my-3">
                        <input type="password" name="password"
                            class="form-control @error('password') is-invalid @enderror" id="floatingPassword"
                            placeholder="Password" required>
                        <label for="floatingPassword">Password</label>
                        @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <button class="w-100 btn btn-lg btn-dark" type="submit">Daftar Sekarang!</button>
                </form>
                <small>Sudah mendaftar? <a href="/login" class="fw-bold">Silahkan masuk.</a> </small>
            </main>
        </div>
    </div>

    <script src="{{ asset('js') }}/bootstrap.bundle.js"></script>
    <script src="{{ asset('js') }}/script.js"></script>

</body>

</html>
