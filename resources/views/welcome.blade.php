@extends('layouts.app')

@section('title')
Todo list
@endsection

@section('content')

@include('inc.header')

  <!-- Portfolio Section -->
  <section class="page-section portfolio" id="portfolio">
    <div class="container">

      <!-- Portfolio Section Heading -->
      <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Popular Countdown</h2>

      <!-- Icon Divider -->
      <div class="divider-custom">
        <div class="divider-custom-line"></div>
        <div class="divider-custom-icon">
          <i class="fas fa-hourglass-end"></i>
        </div>
        <div class="divider-custom-line"></div>
      </div>

      <!-- Portfolio Grid Items -->
      @include('inc.home-page-countdown')

    </div>
  </section>

  <!-- About Section -->
 @include('inc.about')

  <!-- Contact Section -->
@include('inc.contact')

  <!-- Footer -->
  @include('inc.footer')



  <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
  <div class="scroll-to-top d-lg-none position-fixed ">
    <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top">
      <i class="fa fa-chevron-up"></i>
    </a>
  </div>


  @include('inc.javascript')


@endsection


