@extends('layouts.head')
@section('contenu')
    @include('layouts.headder')
    <main id="main">


        <div class="breadcrumbs d-flex align-items-center" style="background-image: url('{{asset('assetsup/img/act3.jpeg')}}');">
            <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

              <h2>Les Articles</h2>
              <ol>
                <li><a href="#"></a></li>
                <li></li>
              </ol>

            </div>
          </div><!-- End Breadcrumbs -->

          <!-- ======= Blog Details Section ======= -->
          <section id="blog" class="blog">
            <div class="container" data-aos="fade-up" data-aos-delay="100">

              <div class="row g-5">

                <div class="col-lg-8">

                  <article class="blog-details">

                    <div class="post-img">
                        @if ($article->featured_image)
                        <img src="{{ asset('storage/app/public/featured_images' . $article->featured_image) }}" alt="Image en vedette" class="img-fluid">
                        @endif
                      <img src="{{asset('assetsup/img/img1.jpg')}}" alt="" class="img-fluid">
                    </div>

                    <h2 class="title">{{$article->titre}}</h2>

                    <div class="meta-top">
                      <ul>
                        <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="#">{{$article->auteur}}</a></li>
                        <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="#"><time
                              datetime="2020-01-01">{{$article->created_at}}</time></a></li>
                        <!-- End meta top<li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a href="blog-details.html">12
                            Comments</a></li> -->
                      </ul>
                    </div>

                    <div class="content">
                      <p>
                        {{$article->contenu}}
                      </p>

                      <p>
                        {{$article->description}}
                      </p>

                      <blockquote>
                        <p>
                          Un aure regard sur le Togo !
                        </p>
                      </blockquote>

                      <img src="{{asset('assetsup/img/img3.jpg')}}" class="img-fluid" alt="">
                      <br>
                      <br/>
                      <p>
                        {{$article->details}}
                      </p>






                    </div><!-- End post content -->

                    <div class="meta-bottom">
                      <i class="bi bi-folder"></i>
                      <ul class="cats">
                        <li><a href="#">Electricité</a></li>
                      </ul>

                      <i class="bi bi-tags"></i>
                      <ul class="tags">
                        <li><a href="#">Education</a></li>
                        <li><a href="#">Politique</a></li>
                        <li><a href="#">Economie</a></li>
                      </ul>
                    </div><!-- End meta bottom -->

                  </article><!-- End blog post -->

                  <div class="post-author d-flex align-items-center">
                    <img src="assetsup/img/blog/blog-author.jpg" class="rounded-circle flex-shrink-0" alt="">
                    <div>
                      <h4>{{$article->auteur}}</h4>
                      <!--<div class="social-links">
                        <a href="https://twitters.com/#"><i class="bi bi-twitter"></i></a>
                        <a href="https://facebook.com/#"><i class="bi bi-facebook"></i></a>
                        <a href="https://instagram.com/#"><i class="biu bi-instagram"></i></a>
                      </div>
                      <p>
                        Itaque quidem optio quia voluptatibus dolorem dolor. Modi eum sed possimus accusantium. Quas repellat
                        voluptatem officia numquam sint aspernatur voluptas. Esse et accusantium ut unde voluptas.
                      </p>-->
                    </div>
                  </div><!-- End post author -->

                  <div class="comments">

                    <h4 class="comments-count">8 Comments</h4>

                   <!-- <div id="comment-1" class="comment">
                      <div class="d-flex">
                        <div class="comment-img"><img src="assets/img/blog/comments-1.jpg" alt=""></div>
                        <div>
                          <h5><a href="">Georgia Reader</a> <a href="#" class="reply"><i class="bi bi-reply-fill"></i>
                              Reply</a></h5>
                          <time datetime="2020-01-01">01 Jan,2022</time>
                          <p>
                            Et rerum totam nisi. Molestiae vel quam dolorum vel voluptatem et et. Est ad aut sapiente quis
                            molestiae est qui cum soluta.
                            Vero aut rerum vel. Rerum quos laboriosam placeat ex qui. Sint qui facilis et.
                          </p>
                        </div>
                      </div>
                    </div> End comment #1 -->

                    <div class="reply-form">

                      <h4>Laisser un commentaire</h4>
                      <p>Votre addresse mail restera confidentielle </p>
                      <form action="">
                        <div class="row">
                          <div class="col-md-6 form-group">
                            <input name="name" type="text" class="form-control" placeholder="Votre nom">
                          </div>
                          <div class="col-md-6 form-group">
                            <input name="email" type="text" class="form-control" placeholder="Votre mail">
                          </div>
                        </div>
                        <div class="row">

                        </div>
                        <div class="row">
                          <div class="col form-group">
                            <textarea name="comment" class="form-control" placeholder="Votre commentaire"></textarea>
                          </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Publier</button>

                      </form>

                    </div>

                  </div><!-- End blog comments -->

                </div>

                <div class="col-lg-4">

                  <div class="sidebar">

                    <div class="sidebar-item search-form">
                      <h3 class="sidebar-title">Recherche</h3>
                      <form action="" class="mt-3">
                        <input type="text">
                        <button type="submit"><i class="bi bi-search"></i></button>
                      </form>
                    </div><!-- End sidebar search formn-->

                    <div class="sidebar-item categories">
                      <h3 class="sidebar-title">Categories</h3>
                      <ul class="mt-3">
                        <li><a href="#">Toutes <span>(6)</span></a></li>
                        <li><a href="#">Agriculture <span>(0)</span></a></li>
                        <li><a href="#">Economie <span>(2)</span></a></li>
                        <li><a href="#">Politique <span>(1)</span></a></li>
                        <li><a href="#">Sport <span>(1)</span></a></li>
                        <li><a href="#">Educaion <span>(2)</span></a></li>
                      </ul>
                    </div><!-- End sidebar categories-->

                    <div class="sidebar-item recent-posts">
                      <h3 class="sidebar-title">Articles Récents</h3>

                      <div class="mt-3">

                        <div class="post-item mt-3">
                          <img src="{{asset('assetsup/img/act1.jpeg')}}" alt="">
                          <div>
                            <h4><a href="blog-details.html">Le centre commercial de KARA</a></h4>
                            <time datetime="2020-01-01">Juin 14, 2023</time>
                          </div>
                        </div><!-- End recent post item-->

                        <div class="post-item">
                          <img src="{{asset('assetsup/img/act2.jpeg')}}" alt="">
                          <div>
                            <h4><a href="#">L'electricité en marche</a></h4>
                            <time datetime="2020-01-01">Jan 1, 2020</time>
                          </div>
                        </div><!-- End recent post item-->

                        <div class="post-item">
                          <img src="{{asset('assetsup/img/act3.jpeg')}}" alt="">
                          <div>
                            <h4><a href="blog-details.html">Une bonne politique de gouverne</a></h4>
                            <time datetime="2020-01-01">Jan 1, 2020</time>
                          </div>
                        </div><!-- End recent post item-->

                        <div class="post-item">
                          <img src="{{asset('assetsup/img/act4.jpeg')}}" alt="">
                          <div>
                            <h4><a href="#">La jeunesse au coeur du developpement</a></h4>
                            <time datetime="2020-01-01">Juin 14, 2023</time>
                          </div>
                        </div><!-- End recent post item-->

                        <div class="post-item">
                          <img src="{{asset('assetsup/img/act5.jpeg')}}" alt="">
                          <div>
                            <h4><a href="#">De grandes avancées dans le domaine du numerique</a></h4>
                            <time datetime="2020-01-01">Juin 14, 2023</time>
                          </div>
                        </div><!-- End recent post item-->

                      </div>

                    </div><!-- End sidebar recent posts-->

                    <div class="sidebar-item tags">
                      <h3 class="sidebar-title">Tags</h3>
                      <ul class="mt-3">
                        <li><a href="#">Education</a></li>
                        <li><a href="#">Santé</a></li>
                        <li><a href="#">Energie</a></li>
                        <li><a href="#">Education</a></li>
                        <li><a href="#">Sport</a></li>
                        <li><a href="#">Economie</a></li>
                        <li><a href="#">Culture</a></li>
                        <li><a href="#">Agruculture</a></li>
                        <li><a href="#">Technologies</a></li>
                      </ul>
                    </div><!-- End sidebar tags-->

                  </div><!-- End Blog Sidebar -->

                </div>
              </div>

            </div>
          </section><!-- End Blog Details Section -->

        </main>





@endsection
