{{-- about us section starts here --}}
<section class="elementor-section elementor-top-section elementor-element elementor-element-58c1fcb elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="58c1fcb" data-element_type="section">
<div class="elementor-container elementor-column-gap-default">
<div class="elementor-row">
<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-438b9baa" data-id="438b9baa" data-element_type="column">
<div class="elementor-column-wrap elementor-element-populated">
<div class="elementor-widget-wrap">
<div class="elementor-element elementor-element-1091aea7 elementor-widget elementor-widget-menu-anchor" data-id="1091aea7" data-element_type="widget" data-widget_type="menu-anchor.default">
<div class="elementor-widget-container">
<div id="about_us" class="elementor-menu-anchor"></div>
</div> 
</div>
@foreach ($abouts as $about)
   

<section class="elementor-section elementor-inner-section elementor-element elementor-element-18d96919 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="18d96919" data-element_type="section">
<div class="elementor-container elementor-column-gap-no">
<div class="elementor-row">
<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-5fcfcde2" data-id="5fcfcde2" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
<div class="elementor-column-wrap elementor-element-populated">
<div class="elementor-widget-wrap">
<div class="elementor-element elementor-element-372cadf4 elementor-widget elementor-widget-spacer" data-id="372cadf4" data-element_type="widget" data-widget_type="spacer.default">
<div class="elementor-widget-container">
<div class="elementor-spacer">
<div class="elementor-spacer-inner"></div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-17102c8b" data-id="17102c8b" data-element_type="column">
<div class="elementor-column-wrap elementor-element-populated">
<div class="elementor-widget-wrap">
<div class="elementor-element elementor-element-58d0d271 elementor-widget__width-auto elementor-hidden-phone elementor-widget elementor-widget-elementskit-heading" data-id="58d0d271" data-element_type="widget" data-widget_type="elementskit-heading.default">
<div class="elementor-widget-container">
<div class="ekit-wid-con"><div class="elementskit-section-title-wraper text_left   ekit_heading_tablet-   ekit_heading_mobile-"><h2 class="elementskit-section-title ">
About Us
</h2></div></div> </div>
</div>
<div class="elementor-element elementor-element-60d86385 elementor-widget elementor-widget-elementskit-heading" data-id="60d86385" data-element_type="widget" data-widget_type="elementskit-heading.default">
<div class="elementor-widget-container">
<div class="ekit-wid-con"><div class="elementskit-section-title-wraper text_left   ekit_heading_tablet-   ekit_heading_mobile-text_left"><h2 class="elementskit-section-title ">
{{ $about->title}}
</h2><p> {{ $about->description }}</p>
</div></div> </div>
</div>
<div class="elementor-element elementor-element-126c4486 elementor-mobile-align-left elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-id="126c4486" data-element_type="widget" data-widget_type="icon-list.default">
<div class="elementor-widget-container">
<ul class="elementor-icon-list-items">
<li class="elementor-icon-list-item">
<span class="elementor-icon-list-icon">
<i aria-hidden="true" class="far fa-check-circle"></i> </span>
<span class="elementor-icon-list-text">Conduct esteems by cottage to pasture we winding.</span>
</li>
<li class="elementor-icon-list-item">
<span class="elementor-icon-list-icon">
<i aria-hidden="true" class="far fa-check-circle"></i> </span>
<span class="elementor-icon-list-text">Having tended direct own day man.</span>
</li>
</ul>
</div>
</div>
<div class="elementor-element elementor-element-4fb4a858 elementor-widget elementor-widget-elementskit-heading" data-id="4fb4a858" data-element_type="widget" data-widget_type="elementskit-heading.default">
<div class="elementor-widget-container">
<div class="ekit-wid-con"><div class="elementskit-section-title-wraper text_left   ekit_heading_tablet-   ekit_heading_mobile-text_left"><div class="ekit_heading_separetor_wraper ekit_heading_elementskit-border-divider elementskit-style-long"><div class="elementskit-border-divider elementskit-style-long"></div></div><h2 class="elementskit-section-title ">
Call for Appointment
</h2></div></div> </div>
</div>
<div class="elementor-element elementor-element-777c5acc elementor-mobile-align-left elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-id="777c5acc" data-element_type="widget" data-widget_type="icon-list.default">
<div class="elementor-widget-container">
<ul class="elementor-icon-list-items">
<li class="elementor-icon-list-item">
<span class="elementor-icon-list-icon">
<i aria-hidden="true" class="fas fa-phone-alt"></i> </span>
<span class="elementor-icon-list-text"> {{$about->phone}} </span>
</li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>

@endforeach
</div>
</div>
</div>
</div>
</div>
</section>
 {{-- about us section ends here --}}