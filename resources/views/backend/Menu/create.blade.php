@extends('backend.layouts.app')
@section('content')
    <!--main content start-->
    <section id="main-content">
        <section>
            <!-- page start-->
            <div class="row">
                <div class="col-lg-12">
                    <!--progress bar start-->
                    <section class="panel">
                        <header class="panel-heading">
                            Add CMS Page
                        </header>
                        <div class=" p-t-0">
                            <div>
                                <section class="add_category_wrapper">
                                    <!--       Category information starts-->
                                    <div class="det_type_divider">
                                        <h2 class="f-s-20">Page Information</h2>
                                    </div>


                                    <div class="det_type_wrapper">
                                        {!! Form::open(['route' => 'admin.cmsmenu.store', 'enctype'=>'multipart/form-data']) !!}
                                        @include('backend.Menu.partials.fields')
                                        <div class="col-md-12">
                                        <button type="submit" class="btn btn-success">Add Page</button>
                                        </div>
                                        {!! Form::close() !!}
                            </div>
                        </div>
                    </section>
                </div>
            </div>
            <!-- page end-->
        </section>
    </section>
    <!--main content end-->
@endsection