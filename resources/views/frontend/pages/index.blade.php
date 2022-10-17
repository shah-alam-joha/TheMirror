@extends('frontend.layouts.master')
@section('content')

 <div data-elementor-type="wp-page" data-elementor-id="605" class="elementor elementor-605" data-elementor-settings="[]">
   
<div class="elementor-inner"> 
<div class="elementor-section-wrap"> 



 {{-- slide section adding --}}
@include('frontend.partials.slide')

 {{-- beauty-service section adding --}}
@include('frontend.partials.beauty')


 {{-- subscribe section adding --}}
@include('frontend.partials.subscribe')

 

 {{-- about-us section adding --}}
@include('frontend.partials.about-us')



 {{-- gallery section adding --}}
@include('frontend.partials.gallery')


 {{-- appoitnment section adding --}}
@include('frontend.partials.appoitnment')


 {{-- our-service ans section adding --}}
@include('frontend.partials.our-service')


{{-- review ans section adding --}}
@include('frontend.partials.review')



{{-- faq question ans section adding --}}
@include('frontend.partials.faq')

{{-- team section adding --}}
@include('frontend.partials.team')


{{-- partner section adding --}}
@include('frontend.partials.brand')

{{-- contact-us section adding --}}
@include('frontend.partials.contact-us')

{{-- map section adding --}}
@include('frontend.partials.map')

</div>
</div>
</div>
@endsection