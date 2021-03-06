<div class="margin-bottom-20">
    @if(isset($relatedContent))
        <h2 class="title-v4">Related Content</h2>
        @forelse($relatedContent as $content)

            <div class="blog-thumb blog-thumb-circle margin-bottom-15">
                <div class="blog-thumb-desc">
                    <h3><a href="{{url($contentPath, $content->slug)}}">{{$content->title}}</a></h3>
                    <ul class="blog-thumb-info">
                        <li>{{date('M j, Y', strtotime($content->created_at))}}</li>
                        {{-- <li><a href="#"><i class="fa fa-comments"></i> 0</a></li> --}}
                    </ul>
                </div>
            </div>
        @empty
            <span>This section is empty</span>
        @endforelse
    @else
        <div class="margin-bottom-20">
            <div class="blog-thumb blog-thumb-circle margin-bottom-15">
                <div class="blog-thumb-hover">
                    <img class="rounded-x" src="assets/img/blog/img1.jpg" alt="">
                    <a class="hover-grad" href="blog_single.html"><i class="fa fa-link"></i></a>
                </div>
                <div class="blog-thumb-desc">
                    <h3><a href="blog_single.html">Misused words and how to use them correctly</a></h3>
                    <ul class="blog-thumb-info">
                        <li>Mar 6, 2015</li>
                        {{-- <li><a href="#"><i class="fa fa-comments"></i> 0</a></li> --}}
                    </ul>
                </div>
            </div>
            <div class="margin-bottom-20">

                <div class="blog-thumb blog-thumb-circle margin-bottom-15">
                    <div class="blog-thumb-hover">
                        <img class="rounded-x" src="assets/img/blog/img1.jpg" alt="">
                        <a class="hover-grad" href="blog_single.html"><i class="fa fa-link"></i></a>
                    </div>
                    <div class="blog-thumb-desc">
                        <h3><a href="blog_single.html">Misused words and how to use them correctly</a></h3>
                        <ul class="blog-thumb-info">
                            <li>Mar 6, 2015</li>
                            {{-- <li><a href="#"><i class="fa fa-comments"></i> 0</a></li> --}}
                        </ul>
                    </div>
                </div>

                <div class="blog-thumb blog-thumb-circle margin-bottom-15">
                    <div class="blog-thumb-hover">
                        <img class="rounded-x" src="assets/img/blog/img22.jpg" alt="">
                        <a class="hover-grad" href="blog_single.html"><i class="fa fa-link"></i></a>
                    </div>
                    <div class="blog-thumb-desc">
                        <h3><a href="blog_single.html">8 health benefits and drawbacks of coffee</a></h3>
                        <ul class="blog-thumb-info">
                            <li>Mar 6, 2015</li>
                            {{-- <li><a href="#"><i class="fa fa-comments"></i> 0</a></li> --}}
                        </ul>
                    </div>
                </div>

                <div class="blog-thumb blog-thumb-circle margin-bottom-15">
                    <div class="blog-thumb-hover">
                        <img class="rounded-x" src="assets/img/blog/img2.jpg" alt="">
                        <a class="hover-grad" href="blog_single.html"><i class="fa fa-link"></i></a>
                    </div>
                    <div class="blog-thumb-desc">
                        <h3><a href="blog_single.html">What are the top five books you must read?</a></h3>
                        <ul class="blog-thumb-info">
                            <li>Mar 6, 2015</li>
                            {{-- <li><a href="#"><i class="fa fa-comments"></i> 0</a></li> --}}
                        </ul>
                    </div>
                </div>

                <div class="blog-thumb blog-thumb-circle">
                    <div class="blog-thumb-hover">
                        <img class="rounded-x" src="assets/img/blog/img21.jpg" alt="">
                        <a class="hover-grad" href="blog_single.html"><i class="fa fa-link"></i></a>
                    </div>
                    <div class="blog-thumb-desc">
                        <h3><a href="blog_single.html">Stylish things to do, see and buy this week</a></h3>
                        <ul class="blog-thumb-info">
                            <li>Mar 6, 2015</li>
                            {{-- <li><a href="#"><i class="fa fa-comments"></i> 0</a></li> --}}
                        </ul>
                    </div>
                </div>
            </div>
        </div>
</div>
@endif
