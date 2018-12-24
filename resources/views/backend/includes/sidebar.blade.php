<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{ access()->user()->picture }}" class="img-circle" alt="User Image"/>
            </div><!--pull-left-->
            <div class="pull-left info">
                <p>{{ access()->user()->full_name }}</p>
                <!-- Status -->
                <a href="#"><i
                            class="fa fa-circle text-success"></i> {{ trans('strings.backend.general.status.online') }}
                </a>
            </div><!--pull-left-->
        </div><!--user-panel-->

        <!-- search form (Optional) -->
        {{ Form::open(['route' => 'admin.search.index', 'method' => 'get', 'class' => 'sidebar-form']) }}
        <div class="input-group">
            {{ Form::text('q', Request::get('q'), ['class' => 'form-control', 'required' => 'required', 'placeholder' => trans('strings.backend.general.search_placeholder')]) }}

            <span class="input-group-btn">
                    <button type='submit' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
                  </span><!--input-group-btn-->
        </div><!--input-group-->
    {{ Form::close() }}
    <!-- /.search form -->

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            

 
            
                
      {{--  <li class="{{ active_class(Active::checkUriPattern('admin/access/*')) }} treeview">
                <a href="#">
                    <i class="fa fa-users"></i>
                    <span>Cms Page</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>

                <ul class="treeview-menu {{ active_class(Active::checkUriPattern('admin/access/*'), 'menu-open') }}"
                    style="display: none; {{ active_class(Active::checkUriPattern('admin/access/*'), 'display: block;') }}">

                    
           
               <li class="">
                <a href="{{url('admin/cmsmenu') }}">
                  <i class="fa fa-dashboard"></i>
                    <span>Cms</span>
                </a>
            </li>
                </ul>
            </li>  --}}


            {{-- 
            <li class="{{ active_class(Active::checkUriPattern('admin/tag')) }}">
                <a href="{{ route('admin.tag') }}">
                    <i class="fa fa-dashboard"></i>
                    <span>Tag</span>
                </a>
            </li> --}}




  <li class="{{ active_class(Active::checkUriPattern('admin/about')) }} treeview sidebarcolor-blue">

                        <a href="#">
                            <i class="fa fa-header"></i>
                            <span><strong>A.</strong>&nbsp;Header Navigation Bar</span>
                            <i class="fa fa-angle-left pull-right"></i>
                        </a>

                        <ul class="treeview-menu {{ active_class(Active::checkUriPattern('admin/about'), 'menu-open') }}"
                            style="display: none; {{ active_class(Active::checkUriPattern('admin/about'), 'display: block;') }}">

           <li class="{{ active_class(Active::checkUriPattern('admin/access/*')) }} treeview">
                <a href="#">
                    <i class="fa fa-users"></i>
                    <span>Advertising</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>

                <ul class="treeview-menu {{ active_class(Active::checkUriPattern('admin/access/*'), 'menu-open') }}"
                    style="display: none; {{ active_class(Active::checkUriPattern('admin/access/*'), 'display: block;') }}">

                    
            <li class="{{ active_class(Active::checkUriPattern('admin/advertising')) }}">
                <a href="{{ route('admin.advertising') }}">
                    <i class="fa fa-dashboard"></i>
                    <span>Advertising</span>
                </a>
            </li>

             <li class="{{ active_class(Active::checkUriPattern('admin/advertisingcategory')) }}">
                <a href="{{ route('admin.advertisingcategory') }}">
                    <i class="fa fa-dashboard"></i>
                    <span>Advertising Category</span>
                </a>
            </li>
                </ul>
            </li>
      



           {{--  <li class="{{ active_class(Active::checkUriPattern('admin/access/*')) }} treeview">
                <a href="#">
                    <i class="fa fa-users"></i>
                    <span>Article</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>

                <ul class="treeview-menu {{ active_class(Active::checkUriPattern('admin/access/*'), 'menu-open') }}"
                    style="display: none; {{ active_class(Active::checkUriPattern('admin/access/*'), 'display: block;') }}">

                    
            <li class="{{ active_class(Active::checkUriPattern('admin/article')) }}">
                <a href="{{ route('admin.article') }}">
                    <i class="fa fa-dashboard"></i>
                    <span>Article</span>
                </a>
            </li>

             <li class="{{ active_class(Active::checkUriPattern('admin/articlecategory')) }}">
                <a href="{{ route('admin.articlecategory') }}">
                    <i class="fa fa-dashboard"></i>
                    <span>Article Category</span>
                </a>
            </li>
                </ul>
            </li> --}}
      





      <li class="{{ active_class(Active::checkUriPattern('admin/access/*')) }} treeview">
                <a href="#">
                    <i class="fa fa-users"></i>
                    <span>Case Study</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>

                <ul class="treeview-menu {{ active_class(Active::checkUriPattern('admin/access/*'), 'menu-open') }}"
                    style="display: none; {{ active_class(Active::checkUriPattern('admin/access/*'), 'display: block;') }}">

                    
            <li class="{{ active_class(Active::checkUriPattern('admin/casestudy')) }}">
                <a href="{{ route('admin.casestudy') }}">
                    <i class="fa fa-dashboard"></i>
                    <span>Case Study</span>
                </a>
            </li>

            {{--  <li class="{{ active_class(Active::checkUriPattern('admin/casestudycategory')) }}">
                <a href="{{ route('admin.casestudycategory') }}">
                    <i class="fa fa-dashboard"></i>
                    <span>Case Study Category</span>
                </a>
            </li> --}}
               </ul>
            </li>




            <li class="{{ active_class(Active::checkUriPattern('admin/access/*')) }} treeview">
                <a href="#">
                    <i class="fa fa-users"></i>
                    <span>Interview</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>

                <ul class="treeview-menu {{ active_class(Active::checkUriPattern('admin/access/*'), 'menu-open') }}"
                    style="display: none; {{ active_class(Active::checkUriPattern('admin/access/*'), 'display: block;') }}">

                    
            <li class="{{ active_class(Active::checkUriPattern('admin/interview')) }}">
                <a href="{{ route('admin.interview') }}">
                    <i class="fa fa-dashboard"></i>
                    <span>Interview</span>
                </a>
            </li>

            {{--  <li class="{{ active_class(Active::checkUriPattern('admin/interviewcategory')) }}">
                <a href="{{ route('admin.interviewcategory') }}">
                    <i class="fa fa-dashboard"></i>
                    <span>Interview Category</span>
                </a>
            </li>
 --}}

                </ul>
            </li>








            <li class="{{ active_class(Active::checkUriPattern('admin/access/*')) }} treeview">
                <a href="#">
                    <i class="fa fa-users"></i>
                    <span>Other Resource</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>

                <ul class="treeview-menu {{ active_class(Active::checkUriPattern('admin/access/*'), 'menu-open') }}"
                    style="display: none; {{ active_class(Active::checkUriPattern('admin/access/*'), 'display: block;') }}">

                    
            <li class="{{ active_class(Active::checkUriPattern('admin/otherresource')) }}">
                <a href="{{ route('admin.otherresource') }}">
                    <i class="fa fa-dashboard"></i>
                    <span>Other Resource</span>
                </a>
            </li>

             <li class="{{ active_class(Active::checkUriPattern('admin/otherresourcecategory')) }}">
                <a href="{{ route('admin.otherresourcecategory') }}">
                    <i class="fa fa-dashboard"></i>
                    <span>Other Resource Category</span>
                </a>
            </li>


                </ul>
            </li>
        </ul>
    </li>




     {{--    <li class="{{ active_class(Active::checkUriPattern('admin/access/*')) }} treeview">
                <a href="#">
                    <i class="fa fa-users"></i>
                    <span>FrontPage </span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>

                <ul class="treeview-menu {{ active_class(Active::checkUriPattern('admin/access/*'), 'menu-open') }}"
                    style="display: none; {{ active_class(Active::checkUriPattern('admin/access/*'), 'display: block;') }}">

                    
            <li class="{{ active_class(Active::checkUriPattern('admin/slider')) }}">
                <a href="{{ route('admin.slider') }}">
                    <i class="fa fa-users"></i>
                    <span>Manage Slider</span>
                </a>
            </li> --}}

             {{-- <li class="{{ active_class(Active::checkUriPattern('admin/slider')) }}">
                <a href="{{url('admin/featured/create') }}">
                  <i class="fa fa-dashboard"></i>
                    <span>Featured Post</span>
                </a>
            </li> --}}

            {{--  <li class="{{ active_class(Active::checkUriPattern('admin/video')) }}">
                <a href="{{ route('admin.video.create') }}">
                    <i class="fa fa-dashboard"></i>
                    <span>Video</span>
                </a>
            </li>



             <li class="{{ active_class(Active::checkUriPattern('admin/socialmedia')) }}">
                <a href="{{ route('admin.socialmedia') }}">
                    <i class="fa fa-users"></i>
                    <span>Social Media</span>
                </a>
            </li>


                 <li class="{{ active_class(Active::checkUriPattern('admin/ourpatner')) }}">
                <a href="{{ route('admin.ourpatner') }}">
                    <i class="fa fa-users"></i>
                    <span>Our Patner</span>
                </a>
            </li>


         

                </ul>
            </li>









            <li class="{{ active_class(Active::checkUriPattern('admin/access/*')) }} treeview">
                <a href="#">
                    <i class="fa fa-users"></i>
                    <span>Footer Cms </span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>

                <ul class="treeview-menu {{ active_class(Active::checkUriPattern('admin/access/*'), 'menu-open') }}"
                    style="display: none; {{ active_class(Active::checkUriPattern('admin/access/*'), 'display: block;') }}">

                    
             <li class="{{ active_class(Active::checkUriPattern('admin/footerlink')) }}">
                <a href="{{ route('admin.footerlink') }}">
                    <i class="fa fa-users"></i>
                    <span> Manage Footer link</span>
                </a>
            </li>

            <li class="{{ active_class(Active::checkUriPattern('admin/footercms')) }}">
                <a href="{{ route('admin.footercms') }}">
                    <i class="fa fa-users"></i>
                    <span>Manage Footer cms</span>
                </a>
            </li>

         

                </ul>
            </li> --}}



        <li class="{{ active_class(Active::checkUriPattern('admin/access/*')) }} treeview">
                <a href="#">
                    <i class="fa fa-users"></i>
                    <span>Featured Post</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>

                <ul class="treeview-menu {{ active_class(Active::checkUriPattern('admin/access/*'), 'menu-open') }}"
                    style="display: none; {{ active_class(Active::checkUriPattern('admin/access/*'), 'display: block;') }}">

                    
             <li class="{{ active_class(Active::checkUriPattern('admin/footerlink')) }}">
                <a href="{{url('admin/advertisingpost')}}">
                    <i class="fa fa-users"></i>
                    <span> Advertising Post</span>
                </a>
            </li>

            <li class="{{ active_class(Active::checkUriPattern('admin/footercms')) }}">
                <a href="{{url('admin/casestudypost')}}">
                    <i class="fa fa-users"></i>
                    <span>Case Study </span>
                </a>
            </li>

{{-- 
             <li class="{{ active_class(Active::checkUriPattern('admin/footercms')) }}">
                <a href="{{ url('admin/articlepost') }}">
                    <i class="fa fa-users"></i>
                    <span>Article Post</span>
                </a>
            </li> --}}

              <li class="{{ active_class(Active::checkUriPattern('admin/footercms')) }}">
                <a href="{{ url('admin/interviewpost') }}">
                    <i class="fa fa-users"></i>
                    <span>Interview Post</span>
                </a>
            </li>


            <li class="{{ active_class(Active::checkUriPattern('admin/footercms')) }}">
                <a href="{{ url('admin/otherpost') }}">
                    <i class="fa fa-users"></i>
                    <span> Other Resource Post</span>
                </a>
            </li>
                </ul>
            </li>





            {{--  <li class="{{ active_class(Active::checkUriPattern('admin/event')) }}">
                <a href="{{ route('admin.event') }}">
                    <i class="fa fa-dashboard"></i>
                    <span>{{trans('backend.sidebar.event')}}</span>
                </a>
            </li> --}}

                {{-- <li class="{{ active_class(Active::checkUriPattern('admin/contact')) }}">
                <a href="{{ route('admin.contact') }}">
                    <i class="fa fa-phone"></i>
                    <span>{{trans('backend.sidebar.contact')}}</span>
                </a>
            </li> --}}


{{-- 
           <li class="{{ active_class(Active::checkUriPattern('admin/category')) }}">
                <a href="{{ route('admin.category') }}">
                    <i class="fa fa-dashboard"></i>
                    <span>Category</span>
                </a>
            </li> --}}

       
                
               {{-- <li class="{{ active_class(Active::checkUriPattern('admin/post')) }}">
                <a href="{{ route('admin.post') }}">
                    <i class="fa fa-dashboard"></i>
                    <span>Post</span>
                </a>
            </li>
 --}}
            
           


             


            
         
 
        </ul><!-- /.sidebar-menu -->
    </section><!-- /.sidebar -->
</aside>