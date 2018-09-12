<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Miracle</title>
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}" > -->
    <link rel="stylesheet" href="{{asset('css/base.css')}}" >
    <link rel="stylesheet" href="{{asset('css/vendor.css')}}" >
    <link rel="stylesheet" href="{{asset('css/main.css')}}" >
    <link rel="stylesheet" href="{{asset('css/v-toaster.css')}}" >
    <link rel="shortcut icon" href="{{asset('favicon.ico')}}" type="image/x-icon">
    <link rel="icon" href="{{asset('favicon.ico')}}"  type="image/x-icon">
</head>

<body id="top">
    <div id="app">
        <div>@yield('content')</div>
    </div>
	

    <script>
		window.Laravel = <?php echo json_encode(['csrfToken' => csrf_token()]); ?>
	</script>
    <script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('/js/app.js')}}"></script>
    <script src="{{ asset('js/modernizr.js')}}"></script>
    <script src="{{ asset('js/pace.min.js')}}"></script>
    <script src="{{ asset('js/plugins.js')}}"></script>
    <script src="{{ asset('js/main.js') }}"></script>

</body>
</html>