<html>

<head>
    <title>Image Optimizer</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- meta description -->
    <meta name="description" content="">
    <!-- mobile viwport meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">

    {{-- Bootstrap 5.0.2 --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    {{-- Select2 --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" />
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.2.0/dist/select2-bootstrap-5-theme.min.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/icheck-bootstrap/3.0.1/icheck-bootstrap.min.css"
        integrity="sha512-8vq2g5nHE062j3xor4XxPeZiPjmRDh6wlufQlfC6pdQ/9urJkU07NM0tEREeymP++NczacJ/Q59ul+/K2eYvcg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Ion Slider -->
    <link rel="stylesheet" href="plugins/ion-rangeslider/css/ion.rangeSlider.min.css">
</head>

<body>
    <div class="container col-sm-10 col-md-10 col-xl-12">
        @yield('content')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <!-- Ion Slider -->
    <script src="plugins/ion-rangeslider/js/ion.rangeSlider.min.js"></script>

    <script>
        function preview() {
            frame.src = URL.createObjectURL(event.target.files[0]);
        }

        $(document).ready(function() {
            $('.select2').select2({
                theme: 'bootstrap-5',
            });

            $('.range1').ionRangeSlider({
                min: -100,
                max: 100,
                from: 0,
                type: 'single',
                step: 1,
                postfix: '',
                prettify: false,
                hasGrid: true
            });

            $('.range2').ionRangeSlider({
                min: 0,
                max: 100,
                from: 0,
                type: 'single',
                step: 1,
                postfix: '',
                prettify: false,
                hasGrid: true
            });

            $('.range3').ionRangeSlider({
                min: 0,
                max: 100,
                from: 1,
                type: 'single',
                step: 1,
                postfix: '',
                prettify: false,
                hasGrid: true
            });

            $('.range4').ionRangeSlider({
                min: 0,
                max: 100,
                from: 10,
                type: 'single',
                step: 1,
                postfix: '',
                prettify: false,
                hasGrid: true
            });

            $('.range5').ionRangeSlider({
                min: 0,
                max: 100,
                from: 100,
                type: 'single',
                step: 1,
                postfix: '',
                prettify: false,
                hasGrid: true
            });

            $('.range6').ionRangeSlider({
                min: 0,
                max: 360,
                from: 0,
                type: 'single',
                step: 1,
                postfix: '',
                prettify: false,
                hasGrid: true
            });
        });
    </script>
</body>


</html>
