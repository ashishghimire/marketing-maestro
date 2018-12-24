<!doctype html>
<html class="no-js" lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <title>@yield('title',trans('backend.sidebar.marketingmestro'))</title>

    <!-- Meta -->
    <meta name="description" content="@yield('meta_description', 'Brainworknepal Prahlad timalsina')">
    <meta name="author" content="@yield('meta_author', 'prahlad')">
    @yield('meta')
    <LINK href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet"
          type="text/css">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.12/css/dataTables.bootstrap.min.css"
          rel="stylesheet"/>
    <link rel="stylesheet" type="text/css" href={{url('css/backend.css')}}>
    <script src="https://cdn.ckeditor.com/4.11.0/full/ckeditor.js"></script>
    <!-- Styles -->
@yield('before-styles')

<!-- Check if the language is set to RTL, so apply the RTL layouts -->
    <!-- Otherwise apply the normal LTR layouts -->
{{-- @langRTL
    
{{ Html::style(getRtlCss(mix('public/css/backend.css'))) }}

@else
{{ Html::style(mix('public/css/backend.css')) }}

@endif --}}
{{--{{ Html::style(mix('public/css/backend.css')) }}--}}

@yield('after-styles')

<!-- Html5 Shim and Respond.js IE8 support of Html5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    {{ Html::script('https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js') }}
    {{ Html::script('https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js') }}
    <![endif]-->

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body class="skin-{{ config('backend.theme') }} {{ config('backend.layout') }}">
@include('includes.partials.logged-in-as')

<div class="wrapper">
@include('backend.includes.header')
@include('backend.includes.sidebar')

<!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            @yield('page-header')

            {{-- Change to Breadcrumbs::render() if you want it to error to remind you to create the breadcrumbs for the given route --}}
            {!! Breadcrumbs::renderIfExists() !!}
        </section>

        <!-- Main content -->
        <section class="content">
            @include('includes.partials.messages')
            @yield('content')
        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->

    @include('backend.includes.footer')
</div><!-- ./wrapper -->

<!-- JavaScripts -->
@yield('before-scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.12/js/jquery.dataTables.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.12/js/dataTables.bootstrap.min.js"></script>
<script src="{{url('js/backend.js')}}"></script>

<script>
    $(document).ready(function () {
        $('#example').DataTable();
    });
</script>
{{-- <script>
     $("[rel='tooltip']").tooltip();
     $('.titlecaption').hover(
             function () {
//                    $(this).find('.caption').slideDown(250); //.fadeIn(250)
                 $(this).find('.caption').slideDown(250); //.fadeIn(250)
             },
             function () {
//                    $(this).find('.caption').slideUp(250); //.fadeOut(205)
                 $(this).find('.caption').slideUp(250); //.fadeOut(205)
             }
     );
 </script>--}}

@yield('after-scripts')

<script type="text/javascript">
    CKEDITOR.replace('editor1');
</script>

</body>
</html>