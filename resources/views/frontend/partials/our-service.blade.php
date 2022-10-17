 {{-- our services section starts here --}}

<section class="elementor-section elementor-top-section elementor-element elementor-element-e795087 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="e795087" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
<div class="elementor-container elementor-column-gap-default">
<div class="elementor-row">
<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-5d31a11" data-id="5d31a11" data-element_type="column">
<div class="elementor-column-wrap elementor-element-populated">
<div class="elementor-widget-wrap">
<section class="elementor-section elementor-inner-section elementor-element elementor-element-05dddd7 animated-slow elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-invisible" data-id="05dddd7" data-element_type="section" data-settings="{&quot;animation&quot;:&quot;fadeInUp&quot;}">
<div class="elementor-container elementor-column-gap-default">
<div class="elementor-row">
<div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-08901aa" data-id="08901aa" data-element_type="column">
<div class="elementor-column-wrap elementor-element-populated">
<div class="elementor-widget-wrap">
<div class="elementor-element elementor-element-b3d97f7 elementor-widget__width-auto elementor-hidden-phone elementor-widget elementor-widget-elementskit-heading" data-id="b3d97f7" data-element_type="widget" data-widget_type="elementskit-heading.default">
<div class="elementor-widget-container">
<div class="ekit-wid-con"><div class="elementskit-section-title-wraper text_left   ekit_heading_tablet-   ekit_heading_mobile-"><h2 class="elementskit-section-title ">
Our Services
</h2></div></div> </div>
</div>
<div class="elementor-element elementor-element-8d9ab66 elementor-widget__width-initial elementor-widget elementor-widget-elementskit-heading" data-id="8d9ab66" data-element_type="widget" data-widget_type="elementskit-heading.default">
<div class="elementor-widget-container">
<div class="ekit-wid-con"><div class="elementskit-section-title-wraper text_center   ekit_heading_tablet-   ekit_heading_mobile-text_left"><h2 class="elementskit-section-title ">
We offer a wide variety of wellness services
</h2><p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</p>
</div></div> </div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<section class="elementor-section elementor-inner-section elementor-element elementor-element-0e1d346 animated-slow elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-invisible" data-id="0e1d346" data-element_type="section" data-settings="{&quot;animation&quot;:&quot;fadeInUp&quot;}">
<div class="elementor-container elementor-column-gap-default">
<div class="elementor-row">
<div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-a9ed3a5" data-id="a9ed3a5" data-element_type="column">
<div class="elementor-column-wrap elementor-element-populated">
<div class="elementor-widget-wrap">
<div class="elementor-element elementor-element-c39958c elementor-widget elementor-widget-wellnesscenter-advanced-tab" data-id="c39958c" data-element_type="widget" data-widget_type="wellnesscenter-advanced-tab.default">
<div class="elementor-widget-container">
<div class="ekit-wid-con wellnesscenter-advanced-tab"> <div class="elementkit-tab-wraper   elementskit-fitcontent-tab ">
<ul class="nav nav-tabs elementkit-tab-nav " role="tablist">

@foreach ($services as $service)
   

<li class="elementkit-nav-item elementor-repeater-item-{{ $service->id }}">
<a @if ($service->id == 1) class="elementkit-nav-link active left-pos" @else class="elementkit-nav-link show left-pos" @endif id="content-{{ $service->id }}-tab" data-ekit-toggle="tab" href="#content-{{$service->id}}" role="tab" aria-controls="content-{{ $service->id }}" aria-selected="true">
<div class="ekit-tab-title-group">
<span class="elementskit-tab-title">{{$service->name}}</span>
</div>
</a>
</li>

@endforeach

</ul>
<div class="tab-content elementkit-tab-content">


@foreach ($services as $service)
    
<div @if($service->id==1)  class="tab-pane elementkit-tab-pane elementor-repeater-item-{{ $service->id }} active show" @else class="tab-pane elementkit-tab-pane elementor-repeater-item-{{ $service->id }} show" @endif id="content-{{ $service->id }}" role="tabpanel" aria-labelledby="content-{{ $service->id }}-tab">
<div class="animated fadeIn">
<div class="row ">
<div class="col-lg-5">
<figure>
<img src="{{ asset('images/services/'.$service->image) }}" alt="">
</figure>
</div>
<div class="col-lg-7 align-self-center">
<h2 class="elementskit-tab-content-title">{{ $service->name }}</h2>
<h3 class="elementskit-tab-content-sub-title">{{ $service->title }}</h3>
<div class="tab-content-description">{{ $service->description }}
</div>
<div class="xs-tab-appointment-info-wraper">
<div class="xs-tab-appointment-info-inner">
<span class="ekit-tab-hr"></span>
<h5 class="elementskit-tab-content-appointment-title">Book an Appointment</h5>
<h6 class="elementskit-tab-content-appointment-number">
<i class="fas fa-phone-alt"></i>
<a href="#" target="_blank" rel="nofollow">
01748747564 </a>
</h6>
</div>
</div>
</div>
</div>
</div>
</div>

@endforeach

{{-- <div class="tab-pane elementkit-tab-pane elementor-repeater-item-a5539b1  active show" id="content-a5539b161f2603eeb8e8" role="tabpanel" aria-labelledby="content-a5539b161f2603eeb8e8-tab">
<div class="animated fadeIn">
<div class="row ">
<div class="col-lg-5">
<figure>
<img src="uploads/sites/3/2020/05/message-image.jpg" alt="">
</figure>
</div>
<div class="col-lg-7 align-self-center">
<h2 class="elementskit-tab-content-title">Massage Rituals</h2>
<h3 class="elementskit-tab-content-sub-title">Revitalize your senses and refresh your mind!</h3>
<div class="tab-content-description">
A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. Practiced for thousands of years, meditation is a tool for rediscovering the body’s own inner intelligence. </div>
<div class="xs-tab-appointment-info-wraper">
<div class="xs-tab-appointment-info-inner">
<span class="ekit-tab-hr"></span>
<h5 class="elementskit-tab-content-appointment-title">Book an Appointment</h5>
<h6 class="elementskit-tab-content-appointment-number">
<i class="fas fa-phone-alt"></i>
<a href="#" target="_blank" rel="nofollow">
998 (455) 478 </a>
</h6>
</div>
</div>
</div>
</div>
</div>
</div>

<div class="tab-pane elementkit-tab-pane elementor-repeater-item-0021a2a " id="content-0021a2a61f2603eeb8e8" role="tabpanel" aria-labelledby="content-0021a2a61f2603eeb8e8-tab">
<div class="animated fadeIn">
<div class="row flex-row-reverse">
<div class="col-lg-5">
<figure>
<img src="uploads/sites/3/2020/05/message-image.jpg" alt="">
</figure>
</div>
<div class="col-lg-7 align-self-center">
<h2 class="elementskit-tab-content-title"> Body Treatments</h2>
 <h3 class="elementskit-tab-content-sub-title">Revitalize your senses and refresh your mind!</h3>
<div class="tab-content-description">
A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. Practiced for thousands of years, meditation is a tool for rediscovering the body’s own inner intelligence. </div>
<div class="xs-tab-appointment-info-wraper">
<div class="xs-tab-appointment-info-inner">
<span class="ekit-tab-hr"></span>
<h5 class="elementskit-tab-content-appointment-title">Book an Appointment</h5>
<h6 class="elementskit-tab-content-appointment-number">
<i class="fas fa-phone-alt"></i>
<a href="#" target="_blank" rel="nofollow">
998 (455) 478 </a>
</h6>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="tab-pane elementkit-tab-pane elementor-repeater-item-8857926 " id="content-885792661f2603eeb8e8" role="tabpanel" aria-labelledby="content-885792661f2603eeb8e8-tab">
<div class="animated fadeIn">
<div class="row ">
<div class="col-lg-5">
<figure>
<img src="uploads/sites/3/2020/05/message-image.jpg" alt="">
</figure>
</div>
<div class="col-lg-7 align-self-center">
<h2 class="elementskit-tab-content-title"> Aroma Therapy</h2>
<h3 class="elementskit-tab-content-sub-title">Revitalize your senses and refresh your mind!</h3>
<div class="tab-content-description">
A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. Practiced for thousands of years, meditation is a tool for rediscovering the body’s own inner intelligence. </div>
<div class="xs-tab-appointment-info-wraper">
<div class="xs-tab-appointment-info-inner">
<span class="ekit-tab-hr"></span>
<h5 class="elementskit-tab-content-appointment-title">Book an Appointment</h5>
<h6 class="elementskit-tab-content-appointment-number">
<i class="fas fa-phone-alt"></i>
<a href="#" target="_blank" rel="nofollow">
998 (455) 478 </a>
</h6>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="tab-pane elementkit-tab-pane elementor-repeater-item-f97b52a " id="content-f97b52a61f2603eeb8e8" role="tabpanel" aria-labelledby="content-f97b52a61f2603eeb8e8-tab">
<div class="animated fadeIn">
<div class="row flex-row-reverse">
<div class="col-lg-5">
<figure>
<img src="uploads/sites/3/2020/05/message-image.jpg" alt="">
</figure>
</div>
<div class="col-lg-7 align-self-center">
<h2 class="elementskit-tab-content-title">Other services</h2>
<h3 class="elementskit-tab-content-sub-title">Revitalize your senses and refresh your mind!</h3>
<div class="tab-content-description">
A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. Practiced for thousands of years, meditation is a tool for rediscovering the body’s own inner intelligence. </div>
<div class="xs-tab-appointment-info-wraper">
<div class="xs-tab-appointment-info-inner">
<span class="ekit-tab-hr"></span>
<h5 class="elementskit-tab-content-appointment-title">Book an Appointment</h5>
<h6 class="elementskit-tab-content-appointment-number">
<i class="fas fa-phone-alt"></i>
<a href="#" target="_blank" rel="nofollow">
998 (455) 478 </a>
</h6>
</div>
</div>
</div>
</div>
</div>
</div> --}}


</div>
</div>
</div> </div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
</div>
</div>
</div>
</div>
</div>
</section>
 {{-- our services section ends here --}}