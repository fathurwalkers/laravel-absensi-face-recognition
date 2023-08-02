<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/stisla/dist') }}/assets/modules/fontawesome/css/all.min.css">
    <title>Login User</title>
</head>

<body>

    <section class="login">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="login-img text-center">
                        <img src="{{ asset('assets/img') }}/login1.jpg" alt="logo" width="330">
                    </div>
                </div>
                <div class="col-12">
                    <div class="login-container px-4 py-2 border border-1 shadow rounded">
                        <div class="login-title mb-4 pt-3">
                            <h1 class="text-primary" style="font-weight: bold">LOGIN</h1>
                        </div>
                        <div class="login-process">
                            <form action="{{ route('proses-login') }}" method="POST">
                                @csrf
                                <input type="hidden" name="cekrequest" value="user">
                                <div class="input-group flex-nowrap mb-3">
                                    <span class="input-group-text" id="addon-wrapping"><i
                                            class="fa fa-user text-primary"></i></span>
                                    <input type="text" class="form-control" placeholder="Username"
                                        aria-label="Username" aria-describedby="addon-wrapping" name="username">
                                </div>

                                <div class="input-group flex-nowrap mb-3">
                                    <span class="input-group-text" id="addon-wrapping"><i
                                            class="fa fa-key text-primary"></i></span>
                                    <input type="password" class="form-control" placeholder="Password"
                                        aria-label="Password" aria-describedby="addon-wrapping" name="password">
                                </div>
                                <div class="mb-4 text-end">
                                    <a href="" class="text-decoration-none" style="font-weight: bold">Lupa
                                        password ?</a>
                                </div>
                                <div class="mb-0 pb-3 ">
                                    <button class="btn btn-primary col-12 rounded-pill py-2">Masuk</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>


</body>

</html>
