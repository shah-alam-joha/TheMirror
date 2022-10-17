{{-- review section starts here --}}

<section class="elementor-section elementor-top-section elementor-element elementor-element-80a39eb elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="80a39eb" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
<div class="elementor-container elementor-column-gap-default">
<div class="elementor-row"> 

<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-64265b2 animated-slow elementor-invisible" data-id="64265b2" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;fadeInUp&quot;}">
<div class="elementor-column-wrap elementor-element-populated">
<div class="elementor-widget-wrap">
<div class="elementor-element elementor-element-0505c9c elementor-widget__width-initial elementor-widget-tablet__width-initial elementor-widget-mobile__width-initial elementor-widget elementor-widget-elementskit-testimonial" data-id="0505c9c" data-element_type="widget" id="xs_wellness_testi" data-widget_type="elementskit-testimonial.default">
<div class="elementor-widget-container">
<div class="ekit-wid-con"><div class="elementskit-testimonial-slider ekit-testimonia-style-4" data-slidestoshow='1' data-slidestoscroll="1" data-speed="5000" data-autoplay="yes" data-show_arrow="yes" data-left_icon="icon icon-arrow-left" data-right_icon="icon icon-arrow-right" data-pause_on_hover="yes">


    @foreach ($reviews as $review)
        
<div class="elementskit-single-testimonial-slider elementskit-testimonial-slider-block-style elementor-repeater-item-1a82e6a">
<div class="elementskit-commentor-bio client_left">
<div class="elementskit-commentor-image">
<img loading="lazy" src="{{ asset('images/reviews/'.$review->image) }}" height="70" width="70" alt="Client Photo">
</div>
<span class="elementskit-profile-info">
<strong class="elementskit-author-name">{{ $review->name }}</strong>
<span class="elementskit-author-des"><i class="fa fa-map-marker"></i> {{ $review->address }}</span>
</span>
</div>
<div class="elementskit-commentor-content">
<span class="elementskit-watermark-icon ekit_watermark_icon_custom_position">
<svg xmlns="http://www.w3.org/2000/svg" width="57.705" height="48.191" viewBox="0 0 57.705 48.191"><g id="quote" transform="translate(0 -7.858)"><g id="Group_1815" data-name="Group 1815" transform="translate(0 7.858)"><path id="Path_3109" data-name="Path 3109" d="M18.469,29.7a15.29,15.29,0,0,0-4.225-.617,13.277,13.277,0,0,0-5.3,1.085c1.332-4.875,4.531-13.287,10.9-14.234a1.514,1.514,0,0,0,1.235-1.089l1.393-4.982a1.514,1.514,0,0,0-1.252-1.907,10.579,10.579,0,0,0-1.425-.1c-7.649,0-15.225,7.984-18.421,19.416C-.5,33.98-1.047,44.064,3.575,50.41c2.586,3.551,6.36,5.448,11.216,5.637h.059A13.425,13.425,0,0,0,18.469,29.7Z" transform="translate(0 -7.858)" fill="#7442c8"></path><path id="Path_3110" data-name="Path 3110" d="M75.166,36.038a13.456,13.456,0,0,0-8.071-6.34,15.289,15.289,0,0,0-4.224-.617,13.28,13.28,0,0,0-5.3,1.085c1.332-4.875,4.531-13.287,10.9-14.234a1.515,1.515,0,0,0,1.235-1.089L71.1,9.862a1.514,1.514,0,0,0-1.252-1.907,10.565,10.565,0,0,0-1.425-.1C60.778,7.858,53.2,15.842,50,27.274c-1.876,6.707-2.426,16.79,2.2,23.138,2.586,3.551,6.36,5.448,11.215,5.637h.06A13.425,13.425,0,0,0,75.166,36.038Z" transform="translate(-19.193 -7.858)" fill="#7442c8"></path></g></g></svg> </span>
<p>{{ $review->description }}</p>
<ul class="elementskit-stars">
<li><a href="#"><i class="fas fa-star active"></i></a></li>
<li><a href="#"><i class="fas fa-star active"></i></a></li>
<li><a href="#"><i class="fas fa-star active"></i></a></li>
<li><a href="#"><i class="fas fa-star active"></i></a></li>
<li><a href="#"><i class="fas fa-star active"></i></a></li>
</ul>
</div>
</div>

    @endforeach

{{-- <div class="elementskit-single-testimonial-slider elementskit-testimonial-slider-block-style elementor-repeater-item-1a82e6a">
<div class="elementskit-commentor-bio client_left">
<div class="elementskit-commentor-image">
<img loading="lazy" src="uploads/sites/3/2020/05/testmonial-user.png" height="70" width="70" alt="Client Photo">
</div>
<span class="elementskit-profile-info">
<strong class="elementskit-author-name">Sarah Conor</strong>
<span class="elementskit-author-des"><i class="fa fa-map-marker"></i> California</span>
</span>
</div>
<div class="elementskit-commentor-content">
<span class="elementskit-watermark-icon ekit_watermark_icon_custom_position">
<svg xmlns="http://www.w3.org/2000/svg" width="57.705" height="48.191" viewBox="0 0 57.705 48.191"><g id="quote" transform="translate(0 -7.858)"><g id="Group_1815" data-name="Group 1815" transform="translate(0 7.858)"><path id="Path_3109" data-name="Path 3109" d="M18.469,29.7a15.29,15.29,0,0,0-4.225-.617,13.277,13.277,0,0,0-5.3,1.085c1.332-4.875,4.531-13.287,10.9-14.234a1.514,1.514,0,0,0,1.235-1.089l1.393-4.982a1.514,1.514,0,0,0-1.252-1.907,10.579,10.579,0,0,0-1.425-.1c-7.649,0-15.225,7.984-18.421,19.416C-.5,33.98-1.047,44.064,3.575,50.41c2.586,3.551,6.36,5.448,11.216,5.637h.059A13.425,13.425,0,0,0,18.469,29.7Z" transform="translate(0 -7.858)" fill="#7442c8"></path><path id="Path_3110" data-name="Path 3110" d="M75.166,36.038a13.456,13.456,0,0,0-8.071-6.34,15.289,15.289,0,0,0-4.224-.617,13.28,13.28,0,0,0-5.3,1.085c1.332-4.875,4.531-13.287,10.9-14.234a1.515,1.515,0,0,0,1.235-1.089L71.1,9.862a1.514,1.514,0,0,0-1.252-1.907,10.565,10.565,0,0,0-1.425-.1C60.778,7.858,53.2,15.842,50,27.274c-1.876,6.707-2.426,16.79,2.2,23.138,2.586,3.551,6.36,5.448,11.215,5.637h.06A13.425,13.425,0,0,0,75.166,36.038Z" transform="translate(-19.193 -7.858)" fill="#7442c8"></path></g></g></svg> </span>
<p>Denote simple fat denied add worthy little use. As some he so high down am week. Conduct esteems by cottage to pasture we winding. On assistance he cultivated considered frequently. Person how having tended direct own day man. Saw sufficient indulgence one own.</p>
<ul class="elementskit-stars">
<li><a href="#"><i class="fas fa-star active"></i></a></li>
<li><a href="#"><i class="fas fa-star active"></i></a></li>
<li><a href="#"><i class="fas fa-star active"></i></a></li>
<li><a href="#"><i class="fas fa-star active"></i></a></li>
<li><a href="#"><i class="fas fa-star active"></i></a></li>
</ul>
</div>
</div>

<div class="elementskit-single-testimonial-slider elementskit-testimonial-slider-block-style elementor-repeater-item-f070946">
<div class="elementskit-commentor-bio client_left">
<div class="elementskit-commentor-image">
<img loading="lazy" src="uploads/sites/3/2020/05/testmonial-user.png" height="70" width="70" alt="Client Photo">
</div>
<span class="elementskit-profile-info">
<strong class="elementskit-author-name">Sarah Conor</strong>
<span class="elementskit-author-des"><i class="fa fa-map-marker"></i> California</span>
</span>
</div>
<div class="elementskit-commentor-content">
<span class="elementskit-watermark-icon ekit_watermark_icon_custom_position">
<svg xmlns="http://www.w3.org/2000/svg" width="57.705" height="48.191" viewBox="0 0 57.705 48.191"><g id="quote" transform="translate(0 -7.858)"><g id="Group_1815" data-name="Group 1815" transform="translate(0 7.858)"><path id="Path_3109" data-name="Path 3109" d="M18.469,29.7a15.29,15.29,0,0,0-4.225-.617,13.277,13.277,0,0,0-5.3,1.085c1.332-4.875,4.531-13.287,10.9-14.234a1.514,1.514,0,0,0,1.235-1.089l1.393-4.982a1.514,1.514,0,0,0-1.252-1.907,10.579,10.579,0,0,0-1.425-.1c-7.649,0-15.225,7.984-18.421,19.416C-.5,33.98-1.047,44.064,3.575,50.41c2.586,3.551,6.36,5.448,11.216,5.637h.059A13.425,13.425,0,0,0,18.469,29.7Z" transform="translate(0 -7.858)" fill="#7442c8"></path><path id="Path_3110" data-name="Path 3110" d="M75.166,36.038a13.456,13.456,0,0,0-8.071-6.34,15.289,15.289,0,0,0-4.224-.617,13.28,13.28,0,0,0-5.3,1.085c1.332-4.875,4.531-13.287,10.9-14.234a1.515,1.515,0,0,0,1.235-1.089L71.1,9.862a1.514,1.514,0,0,0-1.252-1.907,10.565,10.565,0,0,0-1.425-.1C60.778,7.858,53.2,15.842,50,27.274c-1.876,6.707-2.426,16.79,2.2,23.138,2.586,3.551,6.36,5.448,11.215,5.637h.06A13.425,13.425,0,0,0,75.166,36.038Z" transform="translate(-19.193 -7.858)" fill="#7442c8"></path></g></g></svg> </span>
<p>Denote simple fat denied add worthy little use. As some he so high down am week. Conduct esteems by cottage to pasture we winding. On assistance he cultivated considered frequently. Person how having tended direct own day man. Saw sufficient indulgence one own.</p>
<ul class="elementskit-stars">
<li><a href="#"><i class="fas fa-star active"></i></a></li>
<li><a href="#"><i class="fas fa-star active"></i></a></li>
<li><a href="#"><i class="fas fa-star active"></i></a></li>
<li><a href="#"><i class="fas fa-star active"></i></a></li>
<li><a href="#"><i class="fas fa-star active"></i></a></li>
</ul>
</div>
</div> --}}

</div></div> </div>
</div>
</div>
</div>
</div>


</div>
</div>
</section>
 {{-- review section ends here --}}

