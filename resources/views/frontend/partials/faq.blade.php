 {{-- FAQ questions and answer section starts here --}}

<section class="elementor-section elementor-top-section elementor-element elementor-element-69359afc elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="69359afc" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
<div class="elementor-container elementor-column-gap-default">
<div class="elementor-row">
<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-5d39e7b6" data-id="5d39e7b6" data-element_type="column">
<div class="elementor-column-wrap elementor-element-populated">
<div class="elementor-widget-wrap">
<div class="elementor-element elementor-element-4d43d9cb elementor-widget__width-auto elementor-hidden-phone elementor-widget elementor-widget-elementskit-heading" data-id="4d43d9cb" data-element_type="widget" data-widget_type="elementskit-heading.default">
<div class="elementor-widget-container">
<div class="ekit-wid-con"><div class="elementskit-section-title-wraper text_left   ekit_heading_tablet-   ekit_heading_mobile-"><h2 class="elementskit-section-title ">
Faq
</h2></div></div> </div>
</div>
<div class="elementor-element elementor-element-102a0dbb elementor-widget elementor-widget-elementskit-heading" data-id="102a0dbb" data-element_type="widget" data-widget_type="elementskit-heading.default">
<div class="elementor-widget-container">
<div class="ekit-wid-con"><div class="elementskit-section-title-wraper text_left   ekit_heading_tablet-   ekit_heading_mobile-text_left"><h2 class="elementskit-section-title ">
Frequently Asked Question
</h2></div></div> </div>
</div>
<div class="elementor-element elementor-element-6c268cc7 elementor-widget elementor-widget-elementskit-accordion" data-id="6c268cc7" data-element_type="widget" data-widget_type="elementskit-accordion.default">
<div class="elementor-widget-container">
<div class="ekit-wid-con">
<div class="elementskit-accordion floating-style" id="accordion-61f2603eef7bd">

@foreach ($faqs as $faq) 
   

<div class="elementskit-card">
<div class="elementskit-card-header" id="primaryHeading-0">
<a href="#Collapse-{{ $faq->id }}" class="elementskit-btn-link collapsed" data-ekit-toggle="collapse" data-target="#Collapse-{{ $faq->id }}" aria-expanded="true" aria-controls="Collapse-{{ $faq->id }}">
<span class="number"></span>
<span class="ekit-accordion-title">{{ $faq->question }}</span>
<div class="ekit_accordion_icon_group">
<div class="ekit_accordion_normal_icon">

<i aria-hidden="true" class="icon-open icon-right fas fa-angle-down"></i> </div>
<div class="ekit_accordion_active_icon">

<i aria-hidden="true" class="icon-closed icon-right fas fa-angle-up"></i> </div>
</div>
</a>
</div>
<div id="Collapse-{{ $faq->id }}" class="  collapse" aria-labelledby="primaryHeading-0" data-parent="#accordion-61f2603eef7bd">
<div class="elementskit-card-body">
<p>{{ $faq->answer }}</p> </div>
</div>
</div>

@endforeach

{{-- <div class="elementskit-card">
<div class="elementskit-card-header" id="primaryHeading-1">
<a href="#Collapse-8417e7161f2603eef7bd" class="elementskit-btn-link collapsed" data-ekit-toggle="collapse" data-target="#Collapse-8417e7161f2603eef7bd" aria-expanded="false" aria-controls="Collapse-8417e7161f2603eef7bd">
<span class="number"></span>
<span class="ekit-accordion-title">Having tended direct own day man.</span>
<div class="ekit_accordion_icon_group">
<div class="ekit_accordion_normal_icon">

<i aria-hidden="true" class="icon-open icon-right fas fa-angle-down"></i> </div>
<div class="ekit_accordion_active_icon">

<i aria-hidden="true" class="icon-closed icon-right fas fa-angle-up"></i> </div>
</div>
</a>
</div>
<div id="Collapse-8417e7161f2603eef7bd" class=" collapse" aria-labelledby="primaryHeading-1" data-parent="#accordion-61f2603eef7bd">
<div class="elementskit-card-body">
<p>Supported neglected met she therefore unwilling discovery remainder. Way sentiments two indulgence uncommonly own. Diminution to frequently sentiments.</p> </div>
</div>
</div>

<div class="elementskit-card">
<div class="elementskit-card-header" id="primaryHeading-2">
<a href="#Collapse-8cb0a2c61f2603eef7bd" class="elementskit-btn-link collapsed" data-ekit-toggle="collapse" data-target="#Collapse-8cb0a2c61f2603eef7bd" aria-expanded="false" aria-controls="Collapse-8cb0a2c61f2603eef7bd">
<span class="number"></span>
<span class="ekit-accordion-title">On assistance he cultivated considered frequently.</span>
<div class="ekit_accordion_icon_group">
<div class="ekit_accordion_normal_icon">

<i aria-hidden="true" class="icon-open icon-right fas fa-angle-down"></i> </div>
<div class="ekit_accordion_active_icon">

<i aria-hidden="true" class="icon-closed icon-right fas fa-angle-up"></i> </div>
</div>
</a>
</div>
<div id="Collapse-8cb0a2c61f2603eef7bd" class=" collapse" aria-labelledby="primaryHeading-2" data-parent="#accordion-61f2603eef7bd">
<div class="elementskit-card-body">
<p>Supported neglected met she therefore unwilling discovery remainder. Way sentiments two indulgence uncommonly own. Diminution to frequently sentiments.</p> </div>
</div>
</div> --}}

</div>
</div> </div>
</div>
</div>
</div>
</div>
<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-aac55af" data-id="aac55af" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
<div class="elementor-column-wrap elementor-element-populated">
<div class="elementor-widget-wrap">
<div class="elementor-element elementor-element-153dd40f elementor-widget elementor-widget-spacer" data-id="153dd40f" data-element_type="widget" data-widget_type="spacer.default">
<div class="elementor-widget-container">
<div class="elementor-spacer">
<div class="elementor-spacer-inner"></div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
 {{-- FAQ questions and answer section starts here --}}