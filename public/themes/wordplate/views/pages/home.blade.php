@extends('layouts.main')

@section('content')
<div class="header-image support bg-dark d-flex flex-column" >
    <div class="container mt-auto">
        <h1 class="text-white display-3 text-center text-md-left">{{ $headline != '' ? $headline : the_title() }}</h1>
    </div>
</div>
<main role="main" class="pb-5">
    <div class="container">
        <article class="support">
        </article>
        @if (have_posts())
            <div class="card-columns">
            @while (have_posts())
                @include('partials.article')
            @endwhile
            </div>
        @else
            @include('pages.404')
        @endif
    </div>
</main>
@endsection