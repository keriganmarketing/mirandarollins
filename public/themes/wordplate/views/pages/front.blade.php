@extends('layouts.main')

@section('content')
@if (have_posts())
    @while (have_posts())
        {{ the_post() }}
                
        @if(get_theme_mod('header_feature') == 'slider')
            @include('partials.slider')
        @endif

        @if(get_theme_mod('header_feature') == 'main-image')
            @include('partials.headerimage')
        @endif

        @if(get_theme_mod('header_feature') == 'background-video')
            @include('partials.video')
        @endif
        
        @if($headshot != '')
        <div class="headshot d-flex justify-content-center pb-3" >
            <img src="{{ $headshot }}" class="rounded-circle shadow" alt="{{ get_field('agent_name','option') }}">
        </div>
        @endif

        <main role="main">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10 col-xl-9">
                        <article class="front text-center">
                            
                            {{ the_content() }}

                        </article>
                    </div>
                </div>
            </div>
        </main>

        @if(count($featuredListings) > 0)
        <div class="featured-listings-section bg-secondary text-center text-white">
            <div class="section-title">
                <h2>Featured Listings</h2>
            </div>
            <div class="container-wide pb-3">
                <carousel 
                    :per-page-custom="[[320,1],[576,2],[1024,3],[1200,4]]" 
                    :autoplay="true"
                    :loop="true"
                    :pagination-enabled="false"
                    :autoplay-timeout="4000"
                    :speed="1000"
                    {{-- pagination-position="top"
                    pagination-active-color="red" --}}
                    :scroll-per-page="false"
                    :navigation-enabled="true"
                    navigation-next-label='<i class="fa fa-chevron-right text-white" aria-hidden="true"></i>'
                    navigation-prev-label='<i class="fa fa-chevron-left text-white" aria-hidden="true"></i>'
                    class="row" 
                    >
                    @foreach($featuredListings as $miniListing)
                    <slide class="col-md-6 col-lg-4 col-xl-3">
                    @include('partials.minilisting')
                    </slide>
                    @endforeach
                </carousel>
            </div>
            <div class="section-button">
                <a class="btn btn-light" href="/my-listings/" >See All My Listings</a>
            </div>
        </div>
        @endif

        @include('partials.featureboxes')

    @endwhile
@else
    @include('pages.404')
@endif
@endsection