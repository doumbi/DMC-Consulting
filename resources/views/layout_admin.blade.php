<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Dashboard</title>
  @include('admin.share.style')

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
      
        <!-- END HEADER MOBILE-->

        @include('admin.share.sidebar')

        <!-- PAGE CONTAINER-->
        <div class="page-container">
             @include('admin.share.topbar')
            @if(Session::has('success'))
                <div class="row" style="position: fixed; bottom: 0;">
                    <div class=" col-md-12 col-sm-12 col-lg-12 alert alert-success alert-rounded text-center">
                        {{ Session::get('success')}}
                    </div>
                </div>
            @endif
            <!-- MAIN CONTENT-->
            @yield('content')
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->

            @include('admin.share.footer')

        </div>

    </div>
@include('admin.share.script')

</body>

</html>
<!-- end document-->
