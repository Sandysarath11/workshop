@extends('layouts.default')

@section('content')
<div class="page-title light-background">
      <div class="container"></div>
    </div><!-- End Page Title -->
<section id="blog-posts" class="blog-posts section">
      <div class="container section-title" data-aos="fade-up">
        <p>Recent Workshop</p>
        <!-- <h2>Blog Posts</h2> -->
      </div>
      <div class="container">

        <div class="row gy-4">
          <div class="col-md-6 col-lg-4">
            <div class="post-entry" data-aos="fade-up" data-aos-delay="100">
              <a href="#" class="thumb d-block"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQmUNmv5o3RyxrDChISZvqb5fG9nxsTQVTxPg&s" alt="Image" class="img-fluid rounded"></a>

              <div class="post-content">
                <div class="meta">
                  <!-- <a href="#" class="cat">Development</a> •
                  <span class="date">July 20, 2020</span> -->
                </div>
                <h3><a href="#">HTML</a></h3>
                <p>
                Learn HTML. HTML is the standard markup language for Web pages. With HTML you can create your own Website. HTML is easy to learn - You will enjoy it!
                </p>

                <div class="d-flex author align-items-center">
                  <div class="pic">
                    <img src="assets/img/team/team-3.jpg" alt="Image" class="img-fluid rounded-circle">
                  </div>
                  <div class="author-name">
                    <strong class="d-block">Winston Gold</strong>
                    <span class="">Lead Product Designer</span>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4">
            <div class="post-entry" data-aos="fade-up" data-aos-delay="200">
              <a href="#" class="thumb d-block"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT54tQftL5rbj7BQAUSBnYO395UlkMX0PRcvQ&s" alt="Image" class="img-fluid rounded"></a>

              <div class="post-content">
                <div class="meta">
                  <!-- <a href="#" class="cat">Development</a> •
                  <span class="date">July 20, 2020</span> -->
                </div>
                <h3><a href="#">CSS</a></h3>
                <p>
                CSS is the language we use to style an HTML document. CSS describes how HTML elements should be displayed. This tutorial will teach you CSS from basic to ...
                </p>

                <div class="d-flex author align-items-center">
                  <div class="pic">
                    <img src="assets/img/team/team-2.jpg" alt="Image" class="img-fluid rounded-circle">
                  </div>
                  <div class="author-name">
                    <strong class="d-block">Winston Gold</strong>
                    <span class="">Lead Product Designer</span>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4">
            <div class="post-entry" data-aos="fade-up" data-aos-delay="300">
              <a href="#" class="thumb d-block"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRJA6UFV6kBwQkGnmhpKTjNlTnO2WTq9WdjxA&s" alt="Image" class="img-fluid rounded"></a>

              <div class="post-content">
                <div class="meta">
                  <!-- <a href="#" class="cat">Development</a> •
                  <span class="date">July 20, 2020</span> -->
                </div>
                <h3><a href="#">JavaScript</a></h3>
                <p>
                JavaScript is the programming language of the Web. JavaScript is easy to learn. This tutorial will teach you JavaScript from basic to advanced.
                </p>

                <div class="d-flex author align-items-center">
                  <div class="pic">
                    <img src="assets/img/team/team-1.jpg" alt="Image" class="img-fluid rounded-circle">
                  </div>
                  <div class="author-name">
                    <strong class="d-block">Winston Gold</strong>
                    <span class="">Lead Product Designer</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
@stop