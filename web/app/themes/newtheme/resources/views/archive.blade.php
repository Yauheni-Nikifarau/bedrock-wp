@extends('layouts.app')

@section('content')

  @php $arhive_title = preg_replace('~^[^:]+: ~', '', get_the_archive_title()); @endphp
  <div class="container">
    <h1 class="category-title">{!! $arhive_title !!}</h1>
    <div class="row">
      @while(have_posts()) @php the_post() @endphp
      @include('partials.content-archive')
      @endwhile
    </div>
  @php the_posts_pagination(); @endphp

@endsection
