<div>
    @section('breadcrumbs')
        <!-- ======= Breadcrumbs ======= -->
        <div class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2>{{ $topic->name }}</h2>
                    <ol>
                        <li><a href="{{ route('home') }}">Inicio</a></li>
                        <li><a href="{{ route('blog') }}">Blog</a></li>
                        <li>{{ $topic->name }}</li>
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

                    <div class="col-lg-8">

                        <div class="row gy-4 posts-list">

                            @foreach ($posts as $post)
                                <div class="col-lg-6">
                                    <article class="d-flex flex-column">

                                        <div class="post-img">
                                            <img src="{{ asset('assets/img/blog/blog-1.jpg') }}" alt=""
                                                class="img-fluid">
                                        </div>

                                        <h2 class="title">
                                            <a
                                                href="{{ route('blog.details', ['topic' => $topic->slug, 'post' => $post->slug]) }}">{{ $post->title }}</a>
                                        </h2>

                                        <div class="meta-top">
                                            <ul>
                                                <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a
                                                        href="{{ route('blog.details', ['topic' => $topic->slug, 'post' => $post->slug]) }}">John
                                                        Doe</a></li>
                                                <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a
                                                        href="{{ route('blog.details', ['topic' => $topic->slug, 'post' => $post->slug]) }}">{{ date('d M Y', strtotime($post->created_at)) }}</time></a>
                                                </li>
                                                <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a
                                                        href="{{ route('blog.details', ['topic' => $topic->slug, 'post' => $post->slug]) }}">12
                                                        Comments</a></li>
                                            </ul>
                                        </div>

                                        <div class="content">
                                            <p>
                                                {{ Str::limit($post->description, 160) }}
                                            </p>
                                        </div>

                                        <div class="read-more mt-auto align-self-end">
                                            <a
                                                href="{{ route('blog.details', ['topic' => $topic->slug, 'post' => $post->slug]) }}">Leer
                                                más</a>
                                        </div>

                                    </article>
                                </div><!-- End post list item -->
                            @endforeach


                        </div><!-- End blog posts list -->

                    </div>

                    <div class="col-lg-4">

                        <div class="sidebar">

                            <div class="sidebar-item search-form">
                                <h3 class="sidebar-title">Buscar</h3>
                                <form action="" class="mt-3">
                                    <input type="text">
                                    <button type="submit"><i class="bi bi-search"></i></button>
                                </form>
                            </div><!-- End sidebar search formn-->

                            <div class="sidebar-item categories">
                                <h3 class="sidebar-title">Categorias</h3>
                                <ul class="mt-3">
                                    @foreach ($categories as $category)
                                    <li><a wire:click='filterCategory({{ $category->name }})'>{{ $category->name }}</a></li>
                                    @endforeach
                                    
                                </ul>
                            </div><!-- End sidebar categories-->

                            <div class="sidebar-item recent-posts">
                                <h3 class="sidebar-title">Publicaciones Recientes</h3>

                                <div class="mt-3">

                                    <div class="post-item mt-3">
                                        <img src="assets/img/blog/blog-recent-1.jpg" alt="" class="flex-shrink-0">
                                        <div>
                                            <h4><a href="blog-post.html">Nihil blanditiis at in nihil autem</a></h4>
                                            <time datetime="2020-01-01">Jan 1, 2020</time>
                                        </div>
                                    </div><!-- End recent post item-->

                                </div>

                            </div><!-- End sidebar recent posts-->

                            <div class="sidebar-item tags">
                                <h3 class="sidebar-title">Tags</h3>
                                <ul class="mt-3">
                                    <li><a href="#">App</a></li>
                                </ul>
                            </div><!-- End sidebar tags-->

                        </div><!-- End Blog Sidebar -->

                    </div>

                </div>

            </div>
        </section><!-- End Blog Section -->
    @endsection
</div>
