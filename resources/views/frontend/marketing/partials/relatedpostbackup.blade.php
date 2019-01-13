<!-- Related Posts Backup -->
				<!-- Blog Thumb v4 -->
				<div class="margin-bottom-50">
                        <h2 class="title-v4">Related Posts</h2>
                        <div class="row margin-bottom-50">
                            @foreach($advertising as $row)
                            <div class="col-sm-3 col-xs-6 sm-margin-bottom-30">
                                <!-- Blog Thumb v4 -->
                                <div class="blog-thumb-v4">
                                    <div class="blog-thumb-item">
                                        <img class="img-responsive img-thumbnail margin-bottom-10"
                                             src="{{url('/uploads/Advertising1/'.$row->file)}}"
                                             style="height: 150px; width:150px; object-fit:fill" 
                                             alt="">
                                        <div class="center-wrap">
                                            <div class="center-alignCenter">
                                                <div class="center-body">
                                                    
                                                </div>
                                            </div>
                                        </div><!--/end center wrap-->
                                    </div>
                                    <h3><a href="{{url('show',$row->slug)}}">{{$row->title}}</a></h3>
                                </div>
                                <!-- End Blog Thumb v4 -->
                            </div>
                            @endforeach
 
                            <div class="col-sm-3 col-xs-6">
                                <!-- Blog Thumb v4 -->
                                <div class="blog-thumb-v4">
                                    <img class="img-responsive margin-bottom-10" src="assets/img/blog/img41.jpg" alt="">
                                    <h3><a href="blog_single.html">The places you must visit, before you die</a></h3>
                                </div>
                                <!-- End Blog Thumb v4 -->
                            </div>
                        </div><!--/end row-->
                    </div>
                </div>
                    <!-- End Blog Thumb v4 -->
    
                    <!-- Blog Comments v2 -->
                    
                    <div class="margin-bottom-50">
                        <h2 class="title-v4">Comments (3)</h2>
    
                        <!-- Blog Comments v2 -->
                        <div class="row blog-comments-v2">
                            <div class="commenter">
                                <img class="rounded-x" src="assets/img/team/img1.jpg" alt="">
                            </div>
                            <div class="comments-itself">
                                <h4>
                                    Jorny Alnordussen
                                    <span>6 hours ago / <a href="#">Reply</a></span>
                                </h4>
                                <p>Gravida pellentesque urna varius vitae, gravida pellentesque urna varius vitae. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod..</p>
                            </div>
                        </div>
                        <!-- End Blog Comments v2 -->
    
                        <!-- Blog Comments v2 -->
                        <div class="row blog-comments-v2 blog-comments-v2-reply">
                            <div class="commenter">
                                <img class="rounded-x" src="assets/img/team/img2.jpg" alt="">
                            </div>
                            <div class="comments-itself">
                                <h4>
                                    Susie Lau
                                    <span>6 hours ago / <a href="#">Reply</a></span>
                                </h4>
                                <p>Gravida pellentesque urna varius vitae, gravida pellentesque urna varius vitae. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod..</p>
                            </div>
                        </div>
                        <!-- End Blog Comments v2 -->
    
                        <!-- Blog Comments v2 -->
                        <div class="row blog-comments-v2">
                            <div class="commenter">
                                <img class="rounded-x" src="assets/img/team/img3.jpg" alt="">
                            </div>
                            <div class="comments-itself">
                                <h4>
                                    Marcus Farrell
                                    <span>6 hours ago / <a href="#">Reply</a></span>
                                </h4>
                                <p>Gravida pellentesque urna varius vitae, gravida pellentesque urna varius vitae. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod..</p>
                            </div>
                        </div>
                        <!-- End Blog Comments v2 -->
                    </div>
                    <!-- End Blog Comments v2 -->
    
                    <!-- Form -->
                    <h2 class="title-v4">Post a Comment</h2>
                    <form action="assets/php/sky-forms-pro/demo-comment-process.php" method="post" id="sky-form3" class="sky-form comment-style-v2">
                        <fieldset>
                            <div class="row sky-space-30">
                                <div class="col-md-6">
                                    <div>
                                        <input type="text" name="name" id="name" placeholder="Name" class="form-control bg-color-light">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div>
                                        <input type="text" name="email" id="email" placeholder="Email" class="form-control bg-color-light">
                                    </div>
                                </div>
                            </div>
    
                            <div class="sky-space-30">
                                <div>
                                    <textarea rows="8" name="message" id="message" placeholder="Write comment here ..." class="form-control bg-color-light"></textarea>
                                </div>
                            </div>
    
                            <p><button type="submit" class="btn-u btn-u-default">Submit</button></p>
                        </fieldset>
    
                        <div class="message">
                            <i class="rounded-x fa fa-check"></i>
                            <p>Your comment was successfully posted!</p>
                        </div>
                    </form>
                    <!-- End Form -->
                </div>



