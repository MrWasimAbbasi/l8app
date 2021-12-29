<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> Laravel | @yield('title')</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    @include('layouts.css-assets')
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

    @include('layouts.header')

    @include('layouts.sidebar')
    <div class="content-wrapper">

        @include('layouts.breadcrumb',['title'=>'Dashboard','sub_title'=>'Index','items'=>['Dashboard','Index']])
        <section class="content container-fluid">
        @yield('content')
        <!--------------------------
                  | Your Page Content Here |
                  -------------------------->
        </section>
    </div>

    @include('layouts.footer')

    @include('layouts.control-sidebar')
</div>
@include('layouts.js-assets')
</body>
</html>
