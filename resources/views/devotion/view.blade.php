@extends('layouts.app')

@section('content')
    <!-- START ARTICLE -->
    <div class="card article">
        <div class="card-content">
            <div class="media">
                <div class="media-center">
                    <img src="{{ asset('img/maog_logo.png') }}" class="author-image" alt="Placeholder image">
                </div>
                <div class="media-content has-text-centered">
                    <p class="title article-title">{{ $devotion->title }}</p>
                    <p class="subtitle is-6 article-subtitle">
                        Posted on {{ $devotion->devotion_date }}
                    </p>
                </div>
            </div>
            <div class="content article-body">
                {!! $devotion->daily_devotion !!}
            </div>
        </div>
    </div>
    <!-- END ARTICLE -->
@endsection