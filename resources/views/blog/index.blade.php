@extends('layouts.app-front')

@section('breadcrumbs')
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Blog</h2>
                <ol>
                    <li><a href="index.html">Home</a></li>
                    <li>Blog</li>
                </ol>
            </div>

        </div>
    </div><!-- End Breadcrumbs -->
@endsection

@section('content')
<!-- ======= Blog Section ======= -->
<section id="blog" class="blog">
    <div class="container" data-aos="fade-up">

      <div class="row g-5">

        <div class="col-lg-12">

          <div class="row gy-4 posts-list">
            @foreach ($topics as $topic)
            <div class="col-lg-4">
              <article class="d-flex flex-column">

                <div class="post-img">
                  <img src="{{ url('storage/'.$topic->image_url) }}" alt="{{ $topic->name }}" class="img-fluid">
                </div>

                <h2 class="title">
                  <a href="blog-details.html">{{ $topic->name }}</a>
                </h2>

                <div class="content">
                  <p>
                    {{ $topic->description }}
                  </p>
                </div>

                <div class="read-more mt-auto align-self-end">
                  <a href="blog-details.html">Ver publicaciones</a>
                </div>

              </article>
            </div><!-- End post list item -->  
            @endforeach
            

          </div><!-- End blog posts list -->

        </div>

      </div>

    </div>
  </section><!-- End Blog Section -->
@endsection
