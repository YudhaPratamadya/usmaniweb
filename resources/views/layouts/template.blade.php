<!DOCTYPE html>
<html lang="en">

<head>
   @include('components.head')
</head>

<body>
    <!-- Navbar Start -->
    @include('includes.navbar')
    <!-- Navbar End -->

    <!-- Content -->
    @yield('content')
    <!-- Content End-->

    <!-- Footer Start -->
    @include('includes.footer')
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="{!! asset('assets/lib/easing/easing.min.js') !!}"></script>
    <script src="{!! asset('assets/lib/waypoints/waypoints.min.js') !!}"></script>
    <script src="{!! asset('assets/lib/owlcarousel/owl.carousel.min.js') !!}"></script>
    <script src="{!! asset('assets/lib/tempusdominus/js/moment.min.js') !!}"></script>
    <script src="{!! asset('assets/lib/tempusdominus/js/moment-timezone.min.js') !!}"></script>
    <script src="{!! asset('assets/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js') !!}"></script>

    <!-- Contact Javascript File -->
    <script src="{!! asset('assets/mail/jqBootstrapValidation.min.js') !!}"></script>
    <script src="{!! asset('assets/mail/contact.js') !!}"></script>

    <!-- Template Javascript -->
    <script src="{!! asset('assets/js/main.js') !!}"></script>
</body>

</html>