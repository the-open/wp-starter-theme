{{--
  Template Name: Home Template
--}}

@extends('layouts.app')

<!-- template-home.blade.php -->

@section('content')
  @include('partials.home-header')
  @while(have_posts()) @php(the_post())
    @include('partials.content-page')
  @endwhile

<div class="container px-5 pb-5 pt-2">
  <h3 class="text-center">Join the movement</h3>
  @include('partials.inline-signup')
</div>

<section class="bg-dark text-white">
  <div class="container p-5 text-center">
    <h3 class="text-center mb-3">Raise your voice</h3>
      <div class="row justify-content-center">
        <p class="col-lg-8">Using our digital tools, activists and citizens from all over the country are starting campaigns, and making change in their communities. We'll connect you to our campaign experts and strategists and give you the resources you need to win. It all starts with you.</p>
      </div>
    <button class="btn btn-default mt-2"><i class="fa fa-plus-circle"></i> campaign</button>
  </div>
</section>

<section class="bg-light">
  <div class="container bg-light p-5">
    <h3 class="text-center">Our Campaigns</h3>
    <p class="text-center lead">Vi agerar tillsammans och använder vår makt som medborgare, för att ställa politiker och storbolagens lobbyister till svars.</p>
    @include('partials.home-campaigns-section')
  </div>
</section>
@endsection
