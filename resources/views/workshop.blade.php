@extends('layouts.default')

@section('content')

<!-- Page Title -->
<div class="page-title light-background">
      <div class="container">
        <h1>Services</h1>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="index.html">Home</a></li>
            <li class="current">Services</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->
    <br>
    <!-- Services Section -->
    <section id="services" class="services section light-background">

      <div class="container">
      <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
        
        <!-- Video Item -->
        <div class="col">
            <div class="card">
                <video class="card-img-top" controls>
                    <source src="video1.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
                <div class="card-body">
                    <h5 class="card-title">Video Title 1</h5>
                    <p class="card-text">Short description of the video goes here.</p>
                </div>
            </div>
        </div>

        <!-- Video Item -->
        <div class="col">
            <div class="card">
                <video class="card-img-top" controls>
                    <source src="video2.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
                <div class="card-body">
                    <h5 class="card-title">Video Title 2</h5>
                    <p class="card-text">Another description for the second video.</p>
                </div>
            </div>
        </div>

        <!-- Video Item -->
        <div class="col">
            <div class="card">
                <video class="card-img-top" controls>
                    <source src="video3.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
                <div class="card-body">
                    <h5 class="card-title">Video Title 3</h5>
                    <p class="card-text">A brief description of this video.</p>
                </div>
            </div>
        </div>

    </div>
      </div>
    </section>
    
@stop