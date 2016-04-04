@extends('_includes.base')

@section('pageTitle', '- Blog')

@section('body')

<!-- BLOG-POST
    ================================================== -->
    <div class="blog-header" id="blog">
        <div class="container">
            <div class="row ">
                <div class="col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                    <h2>Standard Blog post with Image</h2>
                    <h5>Magnis modipsae que lib voloratati andigen daepeditem quiate ut repore autem labor. </h5>
                    <div class="blog-detail">
                        <span><i class="fa fa-calendar"></i> Dec 23,2013</span>
                        
                        <span><i class="fa fa-user"></i> <a href="#" class="blog-a">John Deo</a></span>
                        
                        <span><i class="fa fa-comments"></i> <a href="#" class="blog-a">20</a></span>
                        
                        <span><i class="fa fa-heart-o"></i> <a href="#" class="blog-a">345</a></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="blog-post">
        <div class="container">
            <div class="row">
                <!-- LEFT SIDEBAR -->
                <div class="col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">

                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae. Sed dui lorem, adipiscing in adipiscing et, interdum nec metus. Mauris ultricies, justo eu convallis placerat, felis enim.</p>

                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae. Sed dui lorem, adipiscing in adipiscing et, interdum nec metus. Mauris ultricies, justo eu convallis placerat, felis enim.</p>

                    <blockquote>
                        <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</p>
                    </blockquote>

                    <p>Magnis modipsae que lib voloratati andigen daepeditem quiate ut repore autem labor. Laceaque quiae sitiorem rest non restibusaes es tumquam core posae volor remped modis volor. Doloreiur qui commolu oreprerum.Magnis modipsae que lib voloratati andigen daepeditem quiate ut repore autem labor. Laceaque quiae sitiorem rest non restibusaes es tumquam core posae volor remped modis volor. Doloreiur qui commolu oreprerum.</p>

                    <img src="img/blog.png" alt="" class="img-responsive">

                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae. Sed dui lorem, adipiscing in adipiscing et, interdum nec metus. Mauris ultricies, justo eu convallis placerat, felis enim.</p>

                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae. Sed dui lorem, adipiscing in adipiscing et, interdum nec metus. Mauris ultricies, justo eu convallis placerat, felis enim.</p>

                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae. Sed dui lorem, adipiscing in adipiscing et, interdum nec metus. Mauris ultricies, justo eu convallis placerat, felis enim.</p>

                    <blockquote class="blockquote-reverse">
                        <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</p>
                    </blockquote>

                    <p>Magnis modipsae que lib voloratati andigen daepeditem quiate ut repore autem labor. Laceaque quiae sitiorem rest non restibusaes es tumquam core posae volor remped modis volor. Doloreiur qui commolu oreprerum.Magnis modipsae que lib voloratati andigen daepeditem quiate ut repore autem labor. Laceaque quiae sitiorem rest non restibusaes es tumquam core posae volor remped modis volor. Doloreiur qui commolu oreprerum.</p>

                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae. Sed dui lorem, adipiscing in adipiscing et, interdum nec metus. Mauris ultricies, justo eu convallis placerat, felis enim.</p>

                    <p class="blog-post-p">Magnis modipsae que lib voloratati andigen daepeditem quiate ut repore autem labor. Laceaque quiae sitiorem rest non restibusaes es tumquam core posae volor remped modis volor. Doloreiur qui commolu oreprerum.Magnis modipsae que lib voloratati andigen daepeditem quiate ut repore autem labor.</p>

                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae. Sed dui lorem, adipiscing in adipiscing et, interdum nec metus. Mauris ultricies, justo eu convallis placerat, felis enim.</p>

                    <div class="tags">
                        <a href="#">Web design</a>
                        <a href="#">Portfolio</a>
                        <a href="#">WordPress</a>
                        <a href="#">Html</a>
                        <a href="#">css</a>
                    </div>

                    <!-- ========== Comment Box / Disqus plugin ========== -->
                    <h4 class="margin-t-50">Leave a Comments</h4>
                    <hr>

                        <div id="disqus_thread"></div>
                        <script type="text/javascript">
                            /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
                            var disqus_shortname = 'Liquid Shape'; // required: replace example with your forum shortname

                            /* * * DON'T EDIT BELOW THIS LINE * * */
                            (function() {
                                var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
                                dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
                                (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
                            })();
                        </script>
                        <noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
                </div> <!-- End of Col-8 -->
            </div> <!-- End row -->
        </div> <!-- End of Container -->
    </section>


    <!-- <div class="left-side">
        @foreach($paginatedBlogPosts as $post)
    
            <article>
                <p>
                    <a href="@url($post->path)">{{ $post->title }}</a>
                    <br>
                    <small>{{ $post->date }}</small>
                    <br>
                    {{ str_limit($post->brief, 130) }}
                </p>
            </article>
    
        @endforeach
    
        @include('_includes.blog_paginator')
    </div>
    
    <div class="right-side">
        @include('_includes.sidebar')
    </div> -->

@stop