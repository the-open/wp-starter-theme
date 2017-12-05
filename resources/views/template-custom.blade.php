{{--
  Template Name: Custom Template
--}}

@extends('layouts.app')

<!-- template-custom.blade.php -->
@section('content')
  @while(have_posts()) @php(the_post())
    @include('partials.page-header')
    @include('partials.content-page')
  @endwhile
@endsection
