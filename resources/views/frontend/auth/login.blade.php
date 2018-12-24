{{-- @extends('frontend.layouts.app')


@section('content') --}}

@extends('frontend.marketing.master')
@section('section')

      <!-- Contact Section -->
         <section class="contact-part">
            <div class="container">
               <div class="row">

                  <div class="col-md-12 col-sm-6 col-xs-12">
                     <!-- Contact Form Section -->
                     <div class="contact-form">
                        <div class="title">
                           <h2>Login</h2>
                           <span class="underline right-underline"></span>
                        </div>

                        <br><br><br><br><br>

                      <div class="panel-body">

                    {{ Form::open(['route' => 'frontend.auth.login.post', 'class' => 'form-horizontal']) }}

                    <div class="form-group">
                        {{ Form::label('email', trans('validation.attributes.frontend.email'), ['class' => 'col-md-4 control-label']) }}
                        <div class="col-md-6">
                            {{ Form::email('email', null, ['class' => 'form-control', 'maxlength' => '191', 'required' => 'required', 'autofocus' => 'autofocus', 'placeholder' => trans('validation.attributes.frontend.email')]) }}
                        </div><!--col-md-6-->
                    </div><!--form-group-->

                    <div class="form-group">
                        {{ Form::label('password', trans('validation.attributes.frontend.password'), ['class' => 'col-md-4 control-label']) }}
                        <div class="col-md-6">
                            {{ Form::password('password', ['class' => 'form-control', 'required' => 'required', 'placeholder' => trans('validation.attributes.frontend.password')]) }}
                        </div><!--col-md-6-->
                    </div><!--form-group-->

                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            <div class="checkbox">
                                <label>
                                    {{ Form::checkbox('remember') }} {{ trans('labels.frontend.auth.remember_me') }}
                                </label>
                            </div>
                        </div><!--col-md-6-->
                    </div><!--form-group-->

                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            {{ Form::submit(trans('labels.frontend.auth.login_button')) }}

                            {{ link_to_route('frontend.auth.password.reset', trans('labels.frontend.passwords.forgot_password')) }}
                        </div><!--col-md-6-->
                    </div><!--form-group-->

                    {{ Form::close() }}

                    <div class="row text-center">
                        {!! $socialite_links !!}
                    </div>
                </div><!-- panel body -->






                     </div>
                  </div>
               </div>
            </div>
         </section>
         <div class="clearfix"></div>
         
         
                        <br><br>
         
         <!-- Google Map Section -->
         <section id="cd-google-map">
         <div id="google-container"></div>
         <div id="cd-zoom-in"></div>
         <div id="cd-zoom-out"></div>
      </section>
      <div style="background-color: red;"></div>

@endsection

      
