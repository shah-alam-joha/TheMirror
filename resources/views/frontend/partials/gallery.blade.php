 {{-- gallery section starts here --}}
<section class="elementor-section elementor-top-section elementor-element elementor-element-4e6c4562 elementor-section-stretched elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="4e6c4562" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;}">
<div class="elementor-container elementor-column-gap-no">
<div class="elementor-row">
<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-6710276b" data-id="6710276b" data-element_type="column">
<div class="elementor-column-wrap elementor-element-populated">
<div class="elementor-widget-wrap">

<section class="elementor-section elementor-inner-section elementor-element elementor-element-3a31f54f elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="3a31f54f" data-element_type="section">
<div class="elementor-container elementor-column-gap-default">
<div class="elementor-row">
<div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-2e4b7f24" data-id="2e4b7f24" data-element_type="column">
<div class="elementor-column-wrap elementor-element-populated">
<div class="elementor-widget-wrap">
<div class="elementor-element elementor-element-25f4b936 elementor-widget__width-auto elementor-hidden-phone elementor-widget elementor-widget-elementskit-heading" data-id="25f4b936" data-element_type="widget" data-widget_type="elementskit-heading.default">
<div class="elementor-widget-container">
<div class="ekit-wid-con"><div class="elementskit-section-title-wraper text_left   ekit_heading_tablet-   ekit_heading_mobile-"><h2 class="elementskit-section-title ">
Gallery
</h2></div></div> </div>
</div>
<div class="elementor-element elementor-element-62b509d7 elementor-widget__width-initial elementor-widget elementor-widget-elementskit-heading" data-id="62b509d7" data-element_type="widget" data-widget_type="elementskit-heading.default">
<div class="elementor-widget-container">
<div class="ekit-wid-con"><div class="elementskit-section-title-wraper text_center   ekit_heading_tablet-   ekit_heading_mobile-text_left"><h2 class="elementskit-section-title ">
Revitalise your senses and refresh your mind!
</h2><p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel the charm of existence in this spot was created for the bliss of souls.</p>
</div></div> </div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>

<div class="elementor-element elementor-element-6980e3a8 elementor-widget elementor-widget-elementskit-gallery" data-id="6980e3a8" data-element_type="widget" id="xs_gallery" data-settings="{&quot;ekit_gallery_columns_tablet&quot;:&quot;3&quot;,&quot;ekit_gallery_columns_mobile&quot;:&quot;2&quot;,&quot;ekit_gallery_columns&quot;:&quot;3&quot;}" data-widget_type="elementskit-gallery.default">
<div class="elementor-widget-container">
<div class="ekit-wid-con"> 
<div class="ekit_gallery_grid_wraper">
<div id="ekit_gallery_6980e3a8" class="ekit_gallery_grid" data-gallerycol="{&quot;desktop&quot;:&quot;3&quot;,&quot;tablet&quot;:&quot;3&quot;,&quot;mobile&quot;:&quot;2&quot;}"> 

@foreach ($galleries as $gallery)


<div class="ekit_gallery_grid_item ekit_gallery__filter-style-1 gallery_grid_style">
<div class="elementskit-single-portfolio-item ">
<div class="elementskit-portfolio-thumb" style="padding-bottom: calc(1 * 100%)">
<img class="elementskit-grid__img" src="{{ asset('images/galleries/'.$gallery->image) }}" alt="gallery grid image" />
</div>
<div class="elementskit-hover-area">
<div class="elementskit-hover-content ekit_vertical_alignment_center">
<h3 class="elementskit-gallery-title">{{ $gallery->image_title}} </h3> <div class="elementskit-gallery-popup-icon-wraper">
<a href="{{ asset('images/galleries/'.$gallery->image) }}" data-effect="mfp-zoom-in" class="elementskit-gallery-icon elementor-clickable" data-elementor-lightbox-slideshow="6980e3a8">
<svg xmlns="http://www.w3.org/2000/svg" width="61.58" height="61.58" viewBox="0 0 61.58 61.58"><g id="Group_3286" data-name="Group 3286" transform="translate(-595.765 -3548.275)"><g id="expand" transform="translate(595.765 3548.275)"><path id="Path_3038" data-name="Path 3038" d="M0,2.2V17.594H4.4V4.4h13.2V0H2.2A2.2,2.2,0,0,0,0,2.2Z" transform="translate(0 0)" fill="#fff"></path><path id="Path_3039" data-name="Path 3039" d="M359.851,0H344.456V4.4h13.2v13.2h4.4V2.2a2.2,2.2,0,0,0-2.2-2.2Z" transform="translate(-300.471 0)" fill="#fff"></path><path id="Path_3040" data-name="Path 3040" d="M357.652,357.652h-13.2v4.4h15.395a2.2,2.2,0,0,0,2.2-2.2v-15.4h-4.4Z" transform="translate(-300.471 -300.471)" fill="#fff"></path><path id="Path_3041" data-name="Path 3041" d="M4.4,344.456H0v15.395a2.2,2.2,0,0,0,2.2,2.2H17.594v-4.4H4.4Z" transform="translate(0 -300.471)" fill="#fff"></path></g><text id="_" data-name="+" transform="translate(617 3589)" fill="#fff" font-size="33" font-family="Rubik-Medium, Rubik" font-weight="500"><tspan x="0" y="0">+</tspan></text></g></svg>
</a>
</div>
</div>
</div>
<div class="ekit-gallery-image-overlay"></div>
</div>
</div>

@endforeach



</div>


</div></div> </div> </div>
</div>

</div>
</div>
</div>
</div>
</div>
</section>
 {{-- gallery section ends here --}}