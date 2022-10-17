{{-- partner information starts here --}}

<section class="elementor-section elementor-top-section elementor-element elementor-element-439c24ff elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="439c24ff" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
<div class="elementor-background-overlay"></div>
<div class="elementor-container elementor-column-gap-default">
<div class="elementor-row">

<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-628812e4" data-id="628812e4" data-element_type="column">
<div class="elementor-column-wrap elementor-element-populated">
<div class="elementor-widget-wrap">
<div class="elementor-element elementor-element-2cb6e742 elementor-widget elementor-widget-elementskit-client-logo" data-id="2cb6e742" data-element_type="widget" data-widget_type="elementskit-client-logo.default">
<div class="elementor-widget-container">
<div class="ekit-wid-con">
<div class="elementskit-clients-slider arrow_outside simple_logo_image" data-slidestoshow="4" data-slidestoshowtablet="3" data-slidestoshowmobile="2" data-slidestoscroll="1" data-slidesToScroll_tablet="1" data-slidesToScroll_mobile="1" data-speed="8000" data-autoplay="yes" data-show_arrow="yes" data-show_dot="" data-left_icon="icon icon-chevron-left" data-right_icon="icon icon-chevron-right" data-pause_on_hover="yes" data-rows="1" data-direction="" data-rtl="">

@foreach ($brands as $brand)


<div class="elementskit-client-slider-item ">
<div class="single-client image-switcher" title="{{ $brand->name}}">
<div class="content-image">
<img src="{{ asset('images/brands/'.$brand->image) }}" alt="{{ $brand->name }}" style="width: 300px; height: 150px;" class="">
</div>
</div>
</div>

@endforeach
{{-- 
<div class="elementskit-client-slider-item ">
<div class="single-client image-switcher" title="Title #1">
<div class="content-image">
<img src="uploads/sites/3/2020/05/partner5.png" alt="partner5" class="">
</div>
</div>
</div>

<div class="elementskit-client-slider-item ">
<div class="single-client image-switcher" title="Title #2">
<div class="content-image">
<img src="uploads/sites/3/2020/05/partner6.png" alt="partner6" class="">
</div>
</div>
</div>
<div class="elementskit-client-slider-item ">
<div class="single-client image-switcher" title="Title #3">
<div class="content-image">
<img src="uploads/sites/3/2020/05/partner7.png" alt="partner7" class="">
</div>
</div>
</div>
<div class="elementskit-client-slider-item ">
<div class="single-client image-switcher" title="Title #4">
<div class="content-image">
<img src="uploads/sites/3/2020/05/partner8.png" alt="partner8" class="">
</div>
</div>
</div>
<div class="elementskit-client-slider-item ">
<div class="single-client image-switcher" title="Title #1">
<div class="content-image">
<img src="uploads/sites/3/2020/05/partner5.png" alt="partner5" class="">
</div>
</div>
</div>
<div class="elementskit-client-slider-item ">
<div class="single-client image-switcher" title="Title #2">
<div class="content-image">
<img src="uploads/sites/3/2020/05/partner6.png" alt="partner6" class="">
</div>
</div>
</div>
<div class="elementskit-client-slider-item ">
<div class="single-client image-switcher" title="Title #3">
<div class="content-image">
<img src="uploads/sites/3/2020/05/partner7.png" alt="partner7" class="">
</div>
</div>
</div>
<div class="elementskit-client-slider-item ">
<div class="single-client image-switcher" title="Title #4">
<div class="content-image">
<img src="uploads/sites/3/2020/05/partner8.png" alt="partner8" class="">
</div>
</div>
</div> --}}

</div>
</div> </div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>

{{-- partner information ends here --}}