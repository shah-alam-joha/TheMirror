@extends('frontend.layouts.master')
@section('content')

<div data-elementor-type="wp-page" data-elementor-id="605" class="elementor elementor-605" data-elementor-settings="[]">
   
<div class="elementor-inner"> 
<div class="elementor-section-wrap">

<section class="xs-jumbotron xs-innner-page-banner d-flex align-items-center banner-bg" style="background-image:url(https://wp.xpeedstudio.com/wellnesscenter/home-v1/wp-content/themes/wellnesscenter/assets/images/banner/bredcumbs-1.png);">
<div class="xs-solid-overlay" style="background-color: rgba(0,0,0,.5)"></div>
<div class="container">
<div class="row">
<div class="col-12">
<div class="xs-jumbotron-content-wraper">
<h1 class="xs-jumbotron-title" style="color: ">
FAQ </h1>
</div>
</div>
</div>
</div>
</section>

@include('frontend.partials.faq')



@include('frontend.partials.team')

@include('frontend.partials.subscribe')





</div>
</div>
</div>

@endsection