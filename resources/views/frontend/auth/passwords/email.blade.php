

@extends('frontend.aromatea.master')

@section('content'))
      
      
      
         
         <!-- Contact Section -->
         <section class="contact-part">
            <div class="container">
               <div class="row">

                  <div class="col-md-12 col-sm-6 col-xs-12">
                     <!-- Contact Form Section -->
                     <div class="contact-form">
                        <div class="title">
                           <h2>Forget your Password</h2>
                           <span class="underline right-underline"></span>
                        </div>
                        

            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif


                    <div class="panel-body">

                    {{ Form::open(['route' => 'frontend.auth.password.email.post', 'class' => 'form-horizontal']) }}

                    <div class="form-group">
                        {{ Form::label('email', trans('validation.attributes.frontend.email'), ['class' => 'col-md-4 control-label']) }}
                        <div class="col-md-6">
                            {{ Form::email('email', null, ['class' => 'form-control', 'maxlength' => '191', 'required' => 'required', 'autofocus' => 'autofocus', 'placeholder' => trans('validation.attributes.frontend.email')]) }}
                        </div><!--col-md-6-->
                    </div><!--form-group-->

                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            {{ Form::submit(trans('labels.frontend.passwords.send_password_reset_link_button'), ['class' => '']) }}
                        </div><!--col-md-6-->
                    </div><!--form-group-->

                    {{ Form::close() }}

                </div><!-- panel body -->





                     </div>
                  </div>
               </div>
            </div>
         </section>
         <div class="clearfix"></div>
         
         
         
         <!-- Google Map Section -->
         <section id="cd-google-map">
         <div id="google-container"></div>
         <div id="cd-zoom-in"></div>
         <div id="cd-zoom-out"></div>
      </section>
      
      
      
@endsection
