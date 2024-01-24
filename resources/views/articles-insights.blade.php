@extends('layouts.main')
@section('title', 'Articles / Insights | ' . config('app.full_company_name'))


@section('content')
<!-- Inner Banner _____________________ -->
<div class="inner_banner">
    <div class="overlay">
        <div class="banner_tilte">
            <h2>Articles / Insights</h2>
            <span class="s_color_bg"></span>
        </div> <!-- End of .banner_title -->
    </div> <!-- End of .overlay -->
</div> <!-- End of .inner_banner -->


<!-- Page Breadcrumb __________________ -->
<div class="page-breadcrumb p_color_bg">
    <div class="container clear_fix">
        <ul class="text-center">
            <li><a href="{{ url('/') }}">Home</a></li>
            <li><i class="fa fa-caret-right" aria-hidden="true"></i></li>
            <li>Articles / Insights</li>
        </ul>
    </div>
</div> <!-- End of .page-breadcrumb -->



<!-- Page Content _________________ -->

<section class="faq_page_wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pull-right faq_main_content mTop_fix">
                <div class="row">
                    @if (isset($NewsData['articles']))
                    @php
                        $articleCount = 0;
                    @endphp
                    @foreach ($NewsData['articles'] as $article)
                        @if ($articleCount % 3 == 0)
                            <div class="row">
                        @endif

                        @if ($articleCount < 15)
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                <div class="single_service_wrapper">
                                    <div class="img_wrapper">
                                        @if (isset($article['urlToImage']))
                                            <img src="{{ $article['urlToImage'] }}" alt="{{ $article['title'] }}" class="img-responsive">
                                        @else
                                            <img src="{{ asset('images/noimage.svg') }}" alt="No Image" class="img-responsive">
                                        @endif
                                    </div>
                                    <div class="text">
                                        <div class="theme_title">
                                            <h5><a href="{{ $article['url'] }}" target="_blank">{{ $article['title'] }} </a></h5>
                                        </div>
                                        <p>{{ $article['description'] }}</p>
                                    </div>
                                </div>
                            </div>
                            @php
                                $articleCount++;
                            @endphp
                        @else
                            @break
                        @endif

                        @if ($articleCount % 3 == 0 || $articleCount == count($NewsData['articles']))
                            </div>
                            <br><br>
                        @endif
                    @endforeach
                @else
                    <p>No news data available.</p>
                @endif

                </div>
            </div> <!-- End of .main_content -->
        </div> <!-- End of .row -->
    </div> <!-- End of .container -->
</section> <!-- End of .page_wrapper -->


@endsection