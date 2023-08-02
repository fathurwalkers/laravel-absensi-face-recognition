<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Blank Page &mdash; Stisla</title>
    <!--hayat anjing -->
    <!-- General CSS Files -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/stisla/dist') }}/assets/modules/fontawesome/css/all.min.css">

    <!-- CSS Libraries -->

    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('assets/stisla/dist') }}/assets/css/style.css">
    <link rel="stylesheet" href="{{ asset('assets/stisla/dist') }}/assets/css/components.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <!-- Start GA -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
    <script></script>
    <style>
        h1.animasi {
            top: 0px;
            animation: bounceInDown;
            /* referring directly to the animation's @keyframe declaration */
            animation-duration: .75s;
            /* don't forget to set a duration! */
        }
    </style>

    @stack('css')
    <!-- /END GA -->
</head>

<body>
    <div id="app">
        <div class="main-wrapper">


            {{-- navbar --}}
            <x-dashboard-navbar />
            {{-- end of navbar --}}

            {{-- sidebar --}}
            <x-dashboard-sidebar />
            {{-- end of sidebar --}}

            <!-- Main Content -->
            <div class="main-content">
                <section class="section">
                    <div class="section-header">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-12 col-md-12 col-lg-12">
                                    <h5 class="my-auto text-dark">@yield('header-content')</h5>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="section-body">
                        @yield('main-content')
                    </div>
                </section>
            </div>
            <footer class="main-footer">
                <div class="footer-left">
                    Copyright &copy; 2018 <div class="bullet"></div> Design By <a href="https://nauval.in/">Muhamad
                        Nauval Azhar</a>
                </div>
                <div class="footer-right">

                </div>
            </footer>
            <div class="modal show modalsukses animate__animated" data-animate-in='animate__bounceIn'
                data-animate-out="animate__bounceOutDown" id="successModal" tabindex="-1" role="dialog"
                aria-labelledby="successModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" style="max-width: 400px">
                    <div class="modal-content">
                        <div class="modal-header overflow-hidden py-1 d-block border-bottom-0 text-center">
                            <h1 class="modal-title animate__animated ikon text-success position-relative"
                                id="successModalLabel" style="font-size: 5em">
                                <i class="fa fa-check-circle"></i>
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
        </div>
    </div>

    @include('sweetalert::alert')

    <!-- General JS Scripts -->
    <script src="{{ asset('assets/stisla/dist') }}/assets/modules/jquery.min.js"></script>
    <script src="{{ asset('assets/stisla/dist') }}/assets/modules/popper.js"></script>
    <script src="{{ asset('assets/stisla/dist') }}/assets/modules/tooltip.js"></script>
    <script src="{{ asset('assets/stisla/dist') }}/assets/modules/bootstrap/js/bootstrap.min.js"></script>
    <script src="{{ asset('assets/stisla/dist') }}/assets/modules/nicescroll/jquery.nicescroll.min.js"></script>
    <script src="{{ asset('assets/stisla/dist') }}/assets/modules/moment.min.js"></script>
    <script src="{{ asset('assets/stisla/dist') }}/assets/js/stisla.js"></script>

    <!-- JS Libraies -->

    <!-- Page Specific JS File -->

    <!-- Template JS File -->
    <script src="{{ asset('assets/stisla/dist') }}/assets/js/scripts.js"></script>
    <script src="{{ asset('assets/stisla/dist') }}/assets/js/custom.js"></script>
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
                $('.modalsukses').bmcModal();
            })
        })(jQuery);



        // $('.modal-title').removeClass('ikon')
        @if (session('gagal'))
            $('.modalgagal').modal('show');
            $('.modal-title').addClass('animasi');
        @endif
        @if (session('sukses'))
            $('.modalsukses').modal('show');
            $('.modal-title').addClass('animasi');
        @endif
    </script>

    @stack('js')
</body>

</html>
