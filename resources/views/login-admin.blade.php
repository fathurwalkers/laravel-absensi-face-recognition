<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="author" content="Kodinger">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>My Login Page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css') }}/my-login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="{{ asset('assets/stisla/dist') }}/assets/modules/fontawesome/css/all.min.css">
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.9/sweetalert2.min.css"> --}}

    <style>
        /* h1.ikon {
            top: -65px;
        } */

        h1.animasi {
            top: 0px;
            animation: bounceInDown;
            /* referring directly to the animation's @keyframe declaration */
            animation-duration: .75s;
            /* don't forget to set a duration! */
        }
    </style>



</head>

<body class="my-login-page">
    <section class="h-100">
        <div class="container h-100">
            <div class="row justify-content-md-center h-100">
                <div class="card-wrapper">
                    <div class="brand">
                        <img src="{{ asset('assets/img') }}/awal.jpg" alt="logo">
                    </div>
                    @if (session('status'))
                        <div class="alert alert-danger">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="card fat">
                        <div class="card-body">
                            <h4 class="card-title">Login</h4>
                            <form method="POST" action="{{ route('proses-login') }}" class="my-login-validation"
                                novalidate="">
                                @csrf
                                <div class="form-group">
                                    <label for="username">Username</label>
                                    <input type="hidden" name="cekrequest" value="admin">
                                    <input id="username" type="text" class="form-control" name="username"
                                        value="" required autofocus>
                                    <div class="invalid-feedback">
                                        Harap masukkan username terlebih dahulu
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="password">Password
                                        <a href="forgot.html" class="float-right">
                                            Forgot Password?
                                        </a>
                                    </label>
                                    <input id="password" type="password" class="form-control" name="password" required
                                        data-eye>
                                    <div class="invalid-feedback">
                                        Harap masukkan password terlebih dahulu
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="custom-checkbox custom-control">
                                        <input type="checkbox" name="remember" id="remember"
                                            class="custom-control-input">
                                        <label for="remember" class="custom-control-label">Remember Me</label>
                                    </div>
                                </div>

                                <div class="form-group m-0">
                                    <button type="submit" class="btn btn-primary btn-block">
                                        Login
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="footer">
                        Copyright &copy; 2023 &mdash; PT NEO TECH INDONESIA CENTER
                    </div>
                </div>
            </div>
        </div>

        <div class="modal show modalgagal animate__animated" data-animate-in='animate__bounceIn'
            data-animate-out="animate__bounceOutDown" id="successModal" tabindex="-1" role="dialog"
            aria-labelledby="successModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" style="max-width: 400px">
                <div class="modal-content">
                    <div class="modal-header overflow-hidden py-1 d-block border-bottom-0 text-center">
                        <h1 class="modal-title animate__animated ikon text-danger position-relative"
                            id="successModalLabel" style="font-size: 5em">
                            <i class="fa fa-times-circle"></i>
                        </h1>
                    </div>
                    <div class="modal-body py-3 px-3 text-center">
                        <h3>{{ session('gagal') }}</h3>
                    </div>
                    <div class="mb-0 text-center pb-4">
                        <button type="button" class="btn btn-primary keluar rounded-pill" data-dismiss="modal"
                            aria-label="Close">
                            <p class="mb-0 px-3">OK</p>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal show modalsukses animate__animated" data-animate-in='animate__bounceIn'
            data-animate-out="animate__bounceOutDown" id="successModal" tabindex="-1" role="dialog"
            aria-labelledby="successModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" style="max-width: 400px">
                <div class="modal-content">
                    <div class="modal-header overflow-hidden py-1 d-block border-bottom-0 text-center">
                        <h1 class="modal-title animate__animated ikon text-danger position-relative"
                            id="successModalLabel" style="font-size: 5em">
                            <i class="fa fa-times-circle"></i>
                        </h1>
                    </div>
                    <div class="modal-body py-3 px-3 text-center">
                        <h3>{{ session('sukses') }}</h3>
                    </div>
                    <div class="mb-0 text-center pb-4">
                        <button type="button" class="btn btn-primary keluar rounded-pill" data-dismiss="modal"
                            aria-label="Close">
                            <p class="mb-0 px-3">OK</p>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('sweetalert::alert')
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="{{ asset('assets/js') }}/my-login.js"></script>
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.9/sweetalert2.min.js"></script>
    @if (alert()->ready())
        <script>
            swal({
                title: "{!! alert()->message() !!}"
            });
        </script>
    @endif --}}

    <script>
        (function($) {
            $.fn.bmcModal = function() {
                var self = $(this);

                if (self.attr('data-animate-in')) {
                    self.addClass('animate__animated');
                    self.addClass(self.attr('data-animate-in'));
                }

                self.on('hide.bs.modal', function(event) {
                        if (!self.attr('data-end-hide') && self.attr('data-animate-out')) {
                            event.preventDefault();

                            self.addClass(self.attr('data-animate-out'));
                            if (self.attr('data-animate-in')) {
                                self.removeClass(self.attr('data-animate-in'));
                            }
                        }
                        self.removeAttr('data-end-hide');
                    })
                    .on('animationend', function() {
                        if (self.attr('data-animate-out') && self.hasClass(self.attr('data-animate-out'))) {
                            self.attr('data-end-hide', true);
                            self.modal('hide');
                            self.removeClass(self.attr('data-animate-out'));
                            if (self.attr('data-animate-in')) {
                                self.addClass(self.attr('data-animate-in'));
                            }
                        }
                    })
            };

            $(document).ready(function() {
                $('.modalgagal').bmcModal();
            })
        })(jQuery);



        // $('.modal-title').removeClass('ikon')
        @if (session('gagal'))
            $('.modalgagal').modal('show');
            $('.modal-title').addClass('animasi');
        @endif
        @if (session('sukses'))
            $('.modalgagal').modal('show');
            $('.modal-title').addClass('animasi');
        @endif
    </script>
</body>

</html>
