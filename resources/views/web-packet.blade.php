@extends('layouts.master')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{asset('css/blog.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/blog_responsive.css')}}">
@endsection
@section('content')

    <!-- Home -->

    <div class="home">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="home_content">
                        <div class="home_image"><img src="{{'images/blog.png'}}" alt=""></div>
                        <div class="home_title">Yazılımlar</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Blog -->

    <div class="blog">
        <div class="container">
            <div class="row blog_row">

                <!-- Blog Posts -->
                <div class="col-lg-8">
                    <div class="blog_posts">
                    @foreach($web_packets as $web_packet)
                        <!-- Blog Post -->
                            <div class="blog_post">
                                <div class="blog_post_image"><img src="{{$web_packet->file_image}}"
                                                                  alt="https://unsplash.com/@sapegin"></div>
                                <div class="blog_post_content">
                                    <div class="blog_post_title"><a href="#">{{$web_packet->name}}</a></div>
                                    <div class="blog_post_text">
                                        <p>{{$web_packet->desc}}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="page_nav">
                        <ul class="d-flex flex-row align-items-start justify-content-start">
                            <li class="active"><a href="#">01.</a></li>
                            <li><a href="#">02.</a></li>
                            <li><a href="#">03.</a></li>
                        </ul>
                    </div>
                </div>

                <!-- Sidebar -->
                <div class="col-lg-4">
                    <div class="sidebar">

                        <!-- Categories -->
                        <div class="categories mt-0">
                            <div class="sidebar_title">Web Paketlerimiz</div>
                            <div class="categories_list">
                                <ul>
                                    <li><a href="#">
                                            <div class="d-flex flex-row align-items-start justify-content-start">
                                                <div>Tüm paketler</div>
                                                <div class="ml-auto">({{$count_web_packets}})</div>
                                            </div>
                                        </a></li>
                                    <li><a href="#">
                                            <div class="d-flex flex-row align-items-start justify-content-start">
                                                <div>Kurumsal Firma Scriptleri</div>
                                                <div class="ml-auto">(12)</div>
                                            </div>
                                        </a></li>
                                    <li><a href="#">
                                            <div class="d-flex flex-row align-items-start justify-content-start">
                                                <div>Rent a Car Scrıptleri</div>
                                                <div class="ml-auto">(16)</div>
                                            </div>
                                        </a></li>
                                    <li><a href="#">
                                            <div class="d-flex flex-row align-items-start justify-content-start">
                                                <div>Nakliyat Scriptleri</div>
                                                <div class="ml-auto">(19)</div>
                                            </div>
                                        </a></li>
                                    <li><a href="#">
                                            <div class="d-flex flex-row align-items-start justify-content-start">
                                                <div>Restaurant - Cafe - Lokanta</div>
                                                <div class="ml-auto">(12)</div>
                                            </div>
                                        </a></li>
                                </ul>
                            </div>
                        </div>

                        <!-- Extra (ad) -->
                        <div class="extra">
                            <div class="extra_content">
                                <div class="extra_image text-center"><img src="{{'images/extra.png'}}" alt=""></div>
                                <div class="extra_title">Para İade Garantisi</div>
                                <div class="extra_text">
                                    <p>Lorem Ipsum, dizgi ve baskı endüstrisinde kullanılan mıgır metinlerdir.</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('js')

    <script src="{{asset('js/blog.js')}}"></script>
@endsection
