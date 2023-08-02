<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('assets/stisla/dist') }}/assets/modules/fontawesome/css/all.min.css">

    <title>Halo Karyawan</title>

    @stack('css')
</head>

<body>


    <div id="apk">
        <div class="main-wrapper">
            <div class="main-content">
                <section class="section">
                    <div class="section-header">
                        <div class="container">
                            <div class="row">
                                <div class="col-12 px-0">
                                    @yield('header-content')
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="section-body">
                        @yield('main-content')
                    </div>
                </section>
            </div>
        </div>
    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    @stack('js')
</body>

</html>
