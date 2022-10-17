{{-- our team starts here  --}}

<section class="elementor-section elementor-top-section elementor-element elementor-element-57d6803a elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="57d6803a" data-element_type="section">
<div class="elementor-container elementor-column-gap-default">
<div class="elementor-row">
<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-1a333f4c" data-id="1a333f4c" data-element_type="column">
<div class="elementor-column-wrap elementor-element-populated">
<div class="elementor-widget-wrap">


<section class="elementor-section elementor-inner-section elementor-element elementor-element-bfd762d elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="bfd762d" data-element_type="section">
<div class="elementor-container elementor-column-gap-default">
<div class="elementor-row">
<div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-33b21e17" data-id="33b21e17" data-element_type="column">
<div class="elementor-column-wrap elementor-element-populated">
<div class="elementor-widget-wrap">
<div class="elementor-element elementor-element-c5522ac elementor-widget__width-auto elementor-hidden-phone elementor-widget elementor-widget-elementskit-heading" data-id="c5522ac" data-element_type="widget" data-widget_type="elementskit-heading.default">
<div class="elementor-widget-container">
<div class="ekit-wid-con"><div class="elementskit-section-title-wraper text_left   ekit_heading_tablet-   ekit_heading_mobile-"><h2 class="elementskit-section-title ">
Our Team
</h2></div></div> </div>
</div>
<div class="elementor-element elementor-element-5c5202d4 elementor-widget__width-initial elementor-widget elementor-widget-elementskit-heading" data-id="5c5202d4" data-element_type="widget" data-widget_type="elementskit-heading.default">
<div class="elementor-widget-container">
<div class="ekit-wid-con"><div class="elementskit-section-title-wraper text_center   ekit_heading_tablet-   ekit_heading_mobile-text_left"><h2 class="elementskit-section-title ">
Meet Our experts who make you feel comfortable
</h2><p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</p>
</div></div> </div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>

{{-- our team  member info starts here --}}
<section class="elementor-section elementor-inner-section elementor-element elementor-element-21cac5a5 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="21cac5a5" data-element_type="section">
<div class="elementor-container elementor-column-gap-default">
<div class="elementor-row">


{{-- here the loop code starts --}}

@foreach ($teams as $team)
   

<div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-{{ $team->id }}" data-id="{{ $team->id }}" data-element_type="column">
<div class="elementor-column-wrap elementor-element-populated">
<div class="elementor-widget-wrap">
<div class="elementor-element elementor-element-{{ $team->id }} elementor-widget elementor-widget-elementskit-team" data-id="{{ $team->id }}" data-element_type="widget" data-widget_type="elementskit-team.default">
<div class="elementor-widget-container">
<div class="ekit-wid-con"> 
<div class="profile-card text-center">
<a href="#ekit_team_modal_{{ $team->id }}" class="ekit-team-popup">
<div class="profile-header ekit-img-overlay" data-toggle="modal" data-target="ekit_team_modal_#{{ $team->id }}">
<img loading="lazy" width="279" height="252" src="{{ asset('images/teams/'.$team->image) }}" class="attachment-full size-full" alt="" /> </div>
</a>
<div class="profile-body">
<h2 class="profile-title">
<a href="#ekit_team_modal_{{ $team->id }}" class="ekit-team-popup">
{{ $team->name }} </a>
</h2>
<p class="profile-designation">Designation: {{ $team->designation }}</p>
<p class="profile-designation">Contact: {{ $team->phone }}</p>
</div>
<div class="profile-footer">

</div>
</div>

<div class="zoom-anim-dialog mfp-hide elementskit-team-popup" id="ekit_team_modal_{{ $team->id }}" tabindex="-1" role="dialog" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered" role="document">
<div class="modal-content">
<div class="modal-header right">
<span class="ekit-modal-close">
<i aria-hidden="true" class="fas fa-times"></i> </span>
</div>
<div class="modal-body">
<div class="modal_image_wraper">
<div class="modal-img">
<img loading="lazy" width="279" height="252" src="{{ asset('images/teams/'.$team->image) }}" class="attachment-full size-full" alt="" /> </div>
</div>
<div class="modal_content_wraper">
<div class="xs-modal-content">
<div class="xs-modal-header">
<h2 class="person-title">{{ $team->name }}</h2>
<span class="perosn-designation">Designation: {{ $team->designation }}</span>
</div>
<div class="xs-modal-body">
{{ $team->description }}</div>
<div class="xs-modal-footer">
<ul class="border-lists">
<li><strong>Contact:</strong><a href="">{{ $team->phone }}</a></li>

</ul>

</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div> </div>
</div>
</div>
</div>
</div>

@endforeach

{{-- previous code --}}

{{-- <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-6b974eb7" data-id="6b974eb7" data-element_type="column">
<div class="elementor-column-wrap elementor-element-populated">
<div class="elementor-widget-wrap">
<div class="elementor-element elementor-element-516bb1d9 elementor-widget elementor-widget-elementskit-team" data-id="516bb1d9" data-element_type="widget" data-widget_type="elementskit-team.default">
<div class="elementor-widget-container">
<div class="ekit-wid-con"> 
<div class="profile-card text-center">
<a href="#ekit_team_modal_516bb1d9" class="ekit-team-popup">
<div class="profile-header ekit-img-overlay" data-toggle="modal" data-target="ekit_team_modal_#516bb1d9">
<img loading="lazy" width="279" height="252" src="uploads/sites/3/2020/05/team-01.jpg" class="attachment-full size-full" alt="" /> </div>
</a>
<div class="profile-body">
<h2 class="profile-title">
<a href="#ekit_team_modal_516bb1d9" class="ekit-team-popup">
Rodney Stratton </a>
</h2>
<p class="profile-designation">Physiotherapist | (985) 123-3410</p>
</div>
<div class="profile-footer">
<ul class="ekit-team-social-list ">
<li class="elementor-repeater-item-184d167"><a href="#" href="#" class="facebook">
<i aria-hidden="true" class="icon icon-facebook"></i>
</a></li>
<li class="elementor-repeater-item-41c7e32"><a href="#" href="#" class="twitter">
<i aria-hidden="true" class="fab fa-twitter"></i>
</a></li>
<li class="elementor-repeater-item-9750df6"><a href="https://facebook.com/" href="https://facebook.com/" class="dribbble">
<i aria-hidden="true" class="fab fa-dribbble"></i>
</a></li>
<li class="elementor-repeater-item-65b0933"><a href="#" href="#" class="instagram">
<i aria-hidden="true" class="fab fa-instagram"></i>
</a></li>
</ul>
</div>
</div>

<div class="zoom-anim-dialog mfp-hide elementskit-team-popup" id="ekit_team_modal_516bb1d9" tabindex="-1" role="dialog" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered" role="document">
<div class="modal-content">
<div class="modal-header right">
<span class="ekit-modal-close">
<i aria-hidden="true" class="fas fa-times"></i> </span>
</div>
<div class="modal-body">
<div class="modal_image_wraper">
<div class="modal-img">
<img loading="lazy" width="279" height="252" src="uploads/sites/3/2020/05/team-01.jpg" class="attachment-full size-full" alt="" /> </div>
</div>
<div class="modal_content_wraper">
<div class="xs-modal-content">
<div class="xs-modal-header">
<h2 class="person-title">Rodney Stratton</h2>
<span class="perosn-designation">Physiotherapist | (985) 123-3410</span>
</div>
<div class="xs-modal-body">
A small river named Duden flows by their place and supplies it with the necessary </div>
<div class="xs-modal-footer">
<ul class="border-lists">
<li><strong>Phone:</strong><a href="tel:+1 (859) 254-6589">+1 (859) 254-6589</a></li>
<li><strong>Email:</strong><a href="https://wp.xpeedstudio.com/cdn-cgi/l/email-protection#a5cccbc3cae5c0ddc4c8d5c9c08bc6cac8"><span class="__cf_email__" data-cfemail="b9d0d7dfd6f9dcc1d8d4c9d5dc97dad6d4">[email&#160;protected]</span></a></li>
</ul>
<ul class="ekit-team-social-list ">
<li class="elementor-repeater-item-184d167"><a href="#" class="social-icons elementor-social-icon-facebook">
<i aria-hidden="true" class="icon icon-facebook"></i>
</a></li>
<li class="elementor-repeater-item-41c7e32"><a href="#" class="social-icons elementor-social-icon-facebook">
<i aria-hidden="true" class="fab fa-twitter"></i>
</a></li>
<li class="elementor-repeater-item-9750df6"><a href="https://facebook.com/" class="social-icons elementor-social-icon-facebook">
<i aria-hidden="true" class="fab fa-dribbble"></i>
</a></li>
<li class="elementor-repeater-item-65b0933"><a href="#" class="social-icons elementor-social-icon-facebook">
<i aria-hidden="true" class="fab fa-instagram"></i>
</a></li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div> </div>
</div>
</div>
</div>
</div>

<div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-2eefe14b" data-id="2eefe14b" data-element_type="column">
<div class="elementor-column-wrap elementor-element-populated">
<div class="elementor-widget-wrap">
<div class="elementor-element elementor-element-49d30946 elementor-widget elementor-widget-elementskit-team" data-id="49d30946" data-element_type="widget" data-widget_type="elementskit-team.default">
<div class="elementor-widget-container">
<div class="ekit-wid-con"> 
<div class="profile-card text-center">
<a href="#ekit_team_modal_49d30946" class="ekit-team-popup">
<div class="profile-header ekit-img-overlay" data-toggle="modal" data-target="ekit_team_modal_#49d30946">
<img loading="lazy" width="279" height="252" src="uploads/sites/3/2020/05/team-02.jpg" class="attachment-full size-full" alt="" /> </div>
</a>
<div class="profile-body">
<h2 class="profile-title">
<a href="#ekit_team_modal_49d30946" class="ekit-team-popup">
Jane Smith </a>
</h2>
<p class="profile-designation">Physiotherapist | (985) 123-3410</p>
</div>
<div class="profile-footer">
<ul class="ekit-team-social-list ">
<li class="elementor-repeater-item-184d167"><a href="#" href="#" class="facebook">
<i aria-hidden="true" class="icon icon-facebook"></i>
</a></li>
<li class="elementor-repeater-item-41c7e32"><a href="#" href="#" class="twitter">
<i aria-hidden="true" class="fab fa-twitter"></i>
</a></li>
<li class="elementor-repeater-item-9750df6"><a href="https://facebook.com/" href="https://facebook.com/" class="dribbble">
<i aria-hidden="true" class="fab fa-dribbble"></i>
</a></li>
<li class="elementor-repeater-item-65b0933"><a href="#" href="#" class="instagram">
<i aria-hidden="true" class="fab fa-instagram"></i>
</a></li>
</ul>
</div>
</div>


<div class="zoom-anim-dialog mfp-hide elementskit-team-popup" id="ekit_team_modal_49d30946" tabindex="-1" role="dialog" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered" role="document">
<div class="modal-content">
<div class="modal-header right">
<span class="ekit-modal-close">
<i aria-hidden="true" class="fas fa-times"></i> </span>
</div>
<div class="modal-body">
<div class="modal_image_wraper">
<div class="modal-img">
<img loading="lazy" width="279" height="252" src="uploads/sites/3/2020/05/team-02.jpg" class="attachment-full size-full" alt="" /> </div>
</div>
<div class="modal_content_wraper">
<div class="xs-modal-content">
<div class="xs-modal-header">
<h2 class="person-title">Jane Smith</h2>
<span class="perosn-designation">Physiotherapist | (985) 123-3410</span>
</div>
<div class="xs-modal-body">
A small river named Duden flows by their place and supplies it with the necessary </div>
<div class="xs-modal-footer">
<ul class="border-lists">
<li><strong>Phone:</strong><a href="tel:+1 (859) 254-6589">+1 (859) 254-6589</a></li>
<li><strong>Email:</strong><a href="https://wp.xpeedstudio.com/cdn-cgi/l/email-protection#8ce5e2eae3cce9f4ede1fce0e9a2efe3e1"><span class="__cf_email__" data-cfemail="ec85828a83ac89948d819c8089c28f8381">[email&#160;protected]</span></a></li>
</ul>
<ul class="ekit-team-social-list ">
<li class="elementor-repeater-item-184d167"><a href="#" class="social-icons elementor-social-icon-facebook">
<i aria-hidden="true" class="icon icon-facebook"></i>
</a></li>
<li class="elementor-repeater-item-41c7e32"><a href="#" class="social-icons elementor-social-icon-facebook">
<i aria-hidden="true" class="fab fa-twitter"></i>
</a></li>
<li class="elementor-repeater-item-9750df6"><a href="https://facebook.com/" class="social-icons elementor-social-icon-facebook">
<i aria-hidden="true" class="fab fa-dribbble"></i>
</a></li>
<li class="elementor-repeater-item-65b0933"><a href="#" class="social-icons elementor-social-icon-facebook">
<i aria-hidden="true" class="fab fa-instagram"></i>
</a></li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div> </div>
</div>
</div>
</div>
</div>
<div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-67d343e1" data-id="67d343e1" data-element_type="column">
<div class="elementor-column-wrap elementor-element-populated">
<div class="elementor-widget-wrap">
<div class="elementor-element elementor-element-25b88475 elementor-widget elementor-widget-elementskit-team" data-id="25b88475" data-element_type="widget" data-widget_type="elementskit-team.default">
<div class="elementor-widget-container">
<div class="ekit-wid-con"> 
<div class="profile-card text-center">
<a href="#ekit_team_modal_25b88475" class="ekit-team-popup">
<div class="profile-header ekit-img-overlay" data-toggle="modal" data-target="ekit_team_modal_#25b88475">
<img loading="lazy" width="279" height="252" src="uploads/sites/3/2020/05/team-03.jpg" class="attachment-full size-full" alt="" /> </div>
</a>
<div class="profile-body">
<h2 class="profile-title">
<a href="#ekit_team_modal_25b88475" class="ekit-team-popup">
Robert Brown </a>
</h2>
<p class="profile-designation">Physiotherapist | (985) 123-3410</p>
</div>
<div class="profile-footer">
<ul class="ekit-team-social-list ">
<li class="elementor-repeater-item-184d167"><a href="#" href="#" class="facebook">
<i aria-hidden="true" class="icon icon-facebook"></i>
</a></li>
<li class="elementor-repeater-item-41c7e32"><a href="#" href="#" class="twitter">
<i aria-hidden="true" class="fab fa-twitter"></i>
</a></li>
<li class="elementor-repeater-item-9750df6"><a href="https://facebook.com/" href="https://facebook.com/" class="dribbble">
<i aria-hidden="true" class="fab fa-dribbble"></i>
</a></li>
<li class="elementor-repeater-item-65b0933"><a href="#" href="#" class="instagram">
<i aria-hidden="true" class="fab fa-instagram"></i>
</a></li>
</ul>
</div>
</div>


<div class="zoom-anim-dialog mfp-hide elementskit-team-popup" id="ekit_team_modal_25b88475" tabindex="-1" role="dialog" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered" role="document">
<div class="modal-content">
<div class="modal-header right">
<span class="ekit-modal-close">
<i aria-hidden="true" class="fas fa-times"></i> </span>
</div>
<div class="modal-body">
<div class="modal_image_wraper">
<div class="modal-img">
<img loading="lazy" width="279" height="252" src="uploads/sites/3/2020/05/team-03.jpg" class="attachment-full size-full" alt="" /> </div>
</div>
<div class="modal_content_wraper">
<div class="xs-modal-content">
<div class="xs-modal-header">
<h2 class="person-title">Robert Brown</h2>
<span class="perosn-designation">Physiotherapist | (985) 123-3410</span>
</div>
<div class="xs-modal-body">
A small river named Duden flows by their place and supplies it with the necessary </div>
<div class="xs-modal-footer">
<ul class="border-lists">
<li><strong>Phone:</strong><a href="tel:+1 (859) 254-6589">+1 (859) 254-6589</a></li>
<li><strong>Email:</strong><a href="https://wp.xpeedstudio.com/cdn-cgi/l/email-protection#6b02050d042b0e130a061b070e45080406"><span class="__cf_email__" data-cfemail="84edeae2ebc4e1fce5e9f4e8e1aae7ebe9">[email&#160;protected]</span></a></li>
</ul>
<ul class="ekit-team-social-list ">
<li class="elementor-repeater-item-184d167"><a href="#" class="social-icons elementor-social-icon-facebook">
<i aria-hidden="true" class="icon icon-facebook"></i>
</a></li>
<li class="elementor-repeater-item-41c7e32"><a href="#" class="social-icons elementor-social-icon-facebook">
<i aria-hidden="true" class="fab fa-twitter"></i>
</a></li>
<li class="elementor-repeater-item-9750df6"><a href="https://facebook.com/" class="social-icons elementor-social-icon-facebook">
<i aria-hidden="true" class="fab fa-dribbble"></i>
</a></li>
<li class="elementor-repeater-item-65b0933"><a href="#" class="social-icons elementor-social-icon-facebook">
<i aria-hidden="true" class="fab fa-instagram"></i>
</a></li>
</ul>
</div>
</div>
</div>
 </div>
</div>
</div>
</div>
</div> </div>
</div>
</div>
</div>
</div>
</div> --}}

</div>
</section>
{{-- our team  member info starts here --}}

</div>
</div>
</div>
</div>
</div>
</section>
 {{-- our team end here --}}