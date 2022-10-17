{{-- contact us starts here --}}

<section class="elementor-section elementor-top-section elementor-element elementor-element-78cd264b elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="78cd264b" data-element_type="section">
<div class="elementor-container elementor-column-gap-default">
    
    @php $i = 0; @endphp

    @for ($i = 0; $i <1 ; $i++)
        
   @foreach ($contacts as $contact)
     

<div class="elementor-row">
<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-257cecce" data-id="257cecce" data-element_type="column">
<div class="elementor-column-wrap elementor-element-populated">
<div class="elementor-widget-wrap">
<div class="elementor-element elementor-element-781e290a elementor-widget elementor-widget-menu-anchor" data-id="781e290a" data-element_type="widget" data-widget_type="menu-anchor.default">
<div class="elementor-widget-container">
<div id="contact" class="elementor-menu-anchor"></div>
</div>
</div>
<section class="elementor-section elementor-inner-section elementor-element elementor-element-51834c0d elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="51834c0d" data-element_type="section">
<div class="elementor-container elementor-column-gap-no">
<div class="elementor-row">
<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-62ef7a0b" data-id="62ef7a0b" data-element_type="column">
<div class="elementor-column-wrap elementor-element-populated">
<div class="elementor-widget-wrap">
<div class="elementor-element elementor-element-4393724a elementor-widget__width-auto elementor-hidden-phone elementor-widget elementor-widget-elementskit-heading" data-id="4393724a" data-element_type="widget" data-widget_type="elementskit-heading.default">
<div class="elementor-widget-container">
<div class="ekit-wid-con"><div class="elementskit-section-title-wraper text_left   ekit_heading_tablet-   ekit_heading_mobile-"><h2 class="elementskit-section-title ">
Contact Us
</h2></div></div> </div>
</div>
<div class="elementor-element elementor-element-6d4f7c47 elementor-widget__width-initial elementor-widget-tablet__width-initial elementor-widget elementor-widget-elementskit-heading" data-id="6d4f7c47" data-element_type="widget" data-widget_type="elementskit-heading.default">
<div class="elementor-widget-container">
<div class="ekit-wid-con"><div class="elementskit-section-title-wraper text_left   ekit_heading_tablet-   ekit_heading_mobile-text_left"><h2 class="elementskit-section-title ">
{{ $contact->title }}
</h2><p>{{ $contact->description }}</p>
</div></div> </div>
</div>
<div class="elementor-element elementor-element-78cfc769 elementor-widget elementor-widget-elementskit-icon-box" data-id="78cfc769" data-element_type="widget" data-widget_type="elementskit-icon-box.default">
<div class="elementor-widget-container">
<div class="ekit-wid-con"> 
<a href="https://your-linhttps://goo.gl/maps/Cv3tB8DRaJP3XH1X6k.com" target="_blank" rel="nofollow" class="ekit_global_links">

<div class="elementskit-infobox text-left icon-lef-right-aligin elementor-animation- media   ">
<div class="elementskit-box-header elementor-animation-">
<div class="elementskit-info-box-icon  text-center">
<svg xmlns="http://www.w3.org/2000/svg" width="30.939" height="31" viewBox="0 0 30.939 31"><path id="adress" d="M7.252,12.388a5.142,5.142,0,0,0,5.136,5.136,1.209,1.209,0,0,1,0,2.417,7.553,7.553,0,1,1,7.554-7.553,1.209,1.209,0,0,1-2.417,0,5.136,5.136,0,1,0-10.273,0ZM8.2,23.078c-3.1-3.4-5.78-6.329-5.784-10.7a9.97,9.97,0,0,1,19.941,0,1.208,1.208,0,0,0,1.209,1.207h0a1.208,1.208,0,0,0,1.207-1.21A12.388,12.388,0,0,0,3.633,3.624,12.309,12.309,0,0,0,0,12.376a12.943,12.943,0,0,0,2.045,6.908,36.777,36.777,0,0,0,4.371,5.424A41.26,41.26,0,0,1,11,30.377a1.209,1.209,0,1,0,2.043-1.292A43.123,43.123,0,0,0,8.2,23.078Zm22.421.58a1.209,1.209,0,0,1-1.707.077l-.151-.138v4A3.408,3.408,0,0,1,25.362,31H18.57a3.408,3.408,0,0,1-3.4-3.405V23.651l-.091.083a1.209,1.209,0,1,1-1.631-1.784l6.238-5.7a3.41,3.41,0,0,1,4.624,0l4,3.654a1.209,1.209,0,0,1,.125.114l2.117,1.935a1.208,1.208,0,0,1,.076,1.707Zm-4.276-2.272-3.67-3.355a1,1,0,0,0-1.362,0l-3.73,3.41V27.6a.988.988,0,0,0,.986.988h6.791a.988.988,0,0,0,.985-.988Zm0,0" transform="translate(0)" fill="#f95d8c"></path></svg>
</div>
</div>
<div class="box-body">
<p> Address: {{ $contact->address }}<br />

</div>
</div>
</a>
</div> </div>
</div>
<div class="elementor-element elementor-element-6d3cd30c elementor-widget elementor-widget-elementskit-icon-box" data-id="6d3cd30c" data-element_type="widget" data-widget_type="elementskit-icon-box.default">
<div class="elementor-widget-container">
<div class="ekit-wid-con"> 
<a href="https://your-link.com/" target="_blank" rel="nofollow" class="ekit_global_links">

<div class="elementskit-infobox text-left icon-lef-right-aligin elementor-animation- media   ">
<div class="elementskit-box-header elementor-animation-">
<div class="elementskit-info-box-icon  text-center">
<svg xmlns="http://www.w3.org/2000/svg" width="26.974" height="27.5" viewBox="0 0 26.974 27.5"><path id="XMLID_214_" d="M17.091,12.94a1,1,0,1,1,0,2.009H15.65a1,1,0,1,1,0-2.009Zm2.438-2.729a1,1,0,0,0-1-1H14.217a1,1,0,0,0,0,2.009h4.309A1,1,0,0,0,19.53,10.211ZM9.576,9.005a1,1,0,0,0,1-1V2.009H22.162V8a1,1,0,0,0,2.009,0V1a1,1,0,0,0-1-1H9.576a1,1,0,0,0-1,1V8A1,1,0,0,0,9.576,9.005Zm8.95-3.533H14.217a1,1,0,0,0,0,2.009h4.309a1,1,0,0,0,0-2.009Zm11.332.22V26.5a1,1,0,0,1-1,1H3.889a1,1,0,0,1-1-1V5.692a1,1,0,0,1,1-1H5.959a1,1,0,1,1,0,2.009H4.893v4.232H8.2a1,1,0,0,1,.924.61l2.405,5.631h9.689l2.405-5.631a1,1,0,0,1,.924-.61h3.3V6.7H26.782a1,1,0,0,1,0-2.009h2.071A1,1,0,0,1,29.858,5.692Zm-2.009,7.246H25.208L22.8,18.569a1,1,0,0,1-.924.61H10.863a1,1,0,0,1-.924-.61L7.534,12.938H4.893V25.491H27.848V12.938Z" transform="translate(-2.884)" fill="#f95d8c"></path></svg>
</div>
</div>
<div class="box-body">
<p><span class="__cf_email__" data-cfemail="6d1e181d1d021f192d08150c001d0108430e0200">{{ $contact->email }}</span><br />
 </p>
</div>
</div>
</a>
</div> </div>
</div>
<div class="elementor-element elementor-element-4d78ad2c elementor-widget elementor-widget-elementskit-icon-box" data-id="4d78ad2c" data-element_type="widget" data-widget_type="elementskit-icon-box.default">
<div class="elementor-widget-container">
<div class="ekit-wid-con"> 
<a href="https://your-link.com/" target="_blank" rel="nofollow" class="ekit_global_links">

<div class="elementskit-infobox text-left icon-lef-right-aligin elementor-animation- media   ">
<div class="elementskit-box-header elementor-animation-">
<div class="elementskit-info-box-icon  text-center">
<svg xmlns="http://www.w3.org/2000/svg" width="31" height="31" viewBox="0 0 31 31"><g id="phone" transform="translate(-334 -9918)"><g id="Group_3180" data-name="Group 3180" transform="translate(334 9949) rotate(-90)"><g id="Group_3179" data-name="Group 3179"><path id="Path_8900" data-name="Path 8900" d="M27.367,0H3.633A3.637,3.637,0,0,0,0,3.633V9.306A3.633,3.633,0,0,0,4.161,12.9l3.391-.5a3.634,3.634,0,0,0,3.1-3.594V8.719h9.687v.088a3.634,3.634,0,0,0,3.1,3.594,36.118,36.118,0,0,0,3.92.537A3.633,3.633,0,0,0,31,9.306V3.633A3.637,3.637,0,0,0,27.367,0Zm1.211,9.306a1.211,1.211,0,0,1-1.387,1.2l-3.391-.5a1.218,1.218,0,0,1-1.035-1.2v-1.3A1.211,1.211,0,0,0,21.555,6.3H9.445A1.211,1.211,0,0,0,8.234,7.508v1.3a1.218,1.218,0,0,1-1.035,1.2l-3.391.5a1.211,1.211,0,0,1-1.387-1.2V3.633A1.212,1.212,0,0,1,3.633,2.422H27.367a1.212,1.212,0,0,1,1.211,1.211Z" fill="#f95d8c"></path></g></g><g id="Group_3182" data-name="Group 3182" transform="translate(348.29 9938.992) rotate(-90)"><g id="Group_3181" data-name="Group 3181" transform="translate(0 0)"><path id="Path_8901" data-name="Path 8901" d="M10.63,6.347a1.211,1.211,0,0,1-1.713,0L6.7,4.133V15.5a1.211,1.211,0,1,1-2.422,0V4.133L2.067,6.347A1.211,1.211,0,1,1,.355,4.635L4.636.354a1.214,1.214,0,0,1,1.713,0L10.63,4.635A1.211,1.211,0,0,1,10.63,6.347Z" fill="#f95d8c"></path></g></g></g></svg>
</div>
</div>
<div class="box-body">
<p> Phone : {{ $contact->phone }} </p>
</div>
</div>
</a>
</div> </div>
</div>
</div>
</div>
</div>
<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-440833a5" data-id="440833a5" data-element_type="column">
<div class="elementor-column-wrap elementor-element-populated">
<div class="elementor-widget-wrap">
<div class="elementor-element elementor-element-9c1b3b3 elementor-widget elementor-widget-metform" data-id="9c1b3b3" data-element_type="widget" data-widget_type="metform.default">
<div class="elementor-widget-container">
<div class="  ">
<div class="formpicker_warper formpicker_warper_editable" data-metform-formpicker-key="722">
<div class="elementor-widget-container">
<div id="metform-wrap-9c1b3b3-722" class="mf-form-wrapper" data-form-id="722" data-action="https://wp.xpeedstudio.com/wellnesscenter/home-v1/wp-json/metform/v1/entries/insert/722" data-wp-nonce="9c5459dcde" data-form-nonce="6ead8a126e" data-stop-vertical-effect=""></div>
<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script type="text" class="mf-template">
            return html`
                <form
                    className="metform-form-content"
                    onSubmit=${ validation.handleSubmit( parent.handleFormSubmit ) }
                    >

                    <${parent.responseMegCom} success=${state.success} errors=${state.errors} form_res=${state.form_res} />

                    ${!state.formHide ? html`
                                <div data-elementor-type="wp-post" data-elementor-id="722" className="elementor elementor-722" data-elementor-settings="[]">
                        <div className="elementor-inner">
                            <div className="elementor-section-wrap">
                            <section className="elementor-section elementor-top-section elementor-element elementor-element-1e9266c elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="1e9266c" data-element_type="section">
                        <div className="elementor-container elementor-column-gap-default">
                            <div className="elementor-row">
                    <div className="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-62f5562" data-id="62f5562" data-element_type="column">
            <div className="elementor-column-wrap elementor-element-populated">
                            <div className="elementor-widget-wrap">
                        <div className="elementor-element elementor-element-5e8e964 elementor-widget elementor-widget-mf-text" data-id="5e8e964" data-element_type="widget" data-settings="{&quot;mf_input_name&quot;:&quot;mf-text&quot;}" data-widget_type="mf-text.default">
                <div className="elementor-widget-container">
            
        <div className="mf-input-wrapper">
                            <label className="mf-input-label" htmlFor="mf-input-text-5e8e964">
                    ${ parent.decodeEntities("Full Name") }                     <span className="mf-input-required-indicator"></span>
                </label>
            
            <input
                type="text"
                className="mf-input "
                id="mf-input-text-5e8e964"
                name="mf-text"
                placeholder="${ parent.decodeEntities("") } "
                                    onInput=${parent.handleChange}
                    aria-invalid=${validation.errors['mf-text'] ? 'true' : 'false'}
                    ref=${el => parent.activateValidation({"message":"This field is required.","minLength":1,"maxLength":"","type":"none","required":false,"expression":"null"}, el)}
                                />
            
                            <${validation.ErrorMessage}
                    errors=${validation.errors}
                    name="mf-text"
                    as=${html`<span className="mf-error-message"></span>`}
                    />
            
                    </div>

                </div>
                </div>
                <div className="elementor-element elementor-element-ec73e9a elementor-widget elementor-widget-mf-email" data-id="ec73e9a" data-element_type="widget" data-settings="{&quot;mf_input_name&quot;:&quot;mf-email&quot;}" data-widget_type="mf-email.default">
                <div className="elementor-widget-container">
            
        <div className="mf-input-wrapper">
                            <label className="mf-input-label" htmlFor="mf-input-email-ec73e9a">
                    ${ parent.decodeEntities("Email Address") }                     <span className="mf-input-required-indicator"></span>
                </label>
                
            <input
                type="email"
                className="mf-input "
                id="mf-input-email-ec73e9a"
                name="mf-email"
                placeholder="${ parent.decodeEntities("") } "
                                    onInput=${parent.handleChange}
                    aria-invalid=${validation.errors['mf-email'] ? 'true' : 'false'}
                    ref=${el => parent.activateValidation({"message":"This field is required.","emailMessage":"Please enter a valid Email address","minLength":1,"maxLength":"","type":"none","required":false,"expression":"null"}, el)}
                                />

                            <${validation.ErrorMessage}
                    errors=${validation.errors}
                    name="mf-email"
                    as=${html`<span className="mf-error-message"></span>`}
                    />
            
                    </div>

                </div>
                </div>
                <div className="elementor-element elementor-element-c501dce elementor-widget elementor-widget-mf-textarea" data-id="c501dce" data-element_type="widget" data-settings="{&quot;mf_input_name&quot;:&quot;mf-textarea&quot;}" data-widget_type="mf-textarea.default">
                <div className="elementor-widget-container">
            
        <div className="mf-input-wrapper">
                            <label className="mf-input-label" htmlFor="mf-input-text-area-c501dce">
                    ${ parent.decodeEntities("Message") }                   <span className="mf-input-required-indicator"></span>
                </label>
            
            <textarea className="mf-input mf-textarea " id="mf-input-text-area-c501dce"
                name="mf-textarea" 
                placeholder="${ parent.decodeEntities("") } "
                cols="30" rows="10"
                                    onInput=${ parent.handleChange }
                    aria-invalid=${validation.errors['mf-textarea'] ? 'true' : 'false'}
                    ref=${ el => parent.activateValidation({"message":"This field is required.","minLength":1,"maxLength":"","type":"none","required":false,"expression":"null"}, el) }
                                ></textarea>

                            <${validation.ErrorMessage}
                    errors=${validation.errors}
                    name="mf-textarea"
                    as=${html`<span className="mf-error-message"></span>`}
                    />
            
                    </div>

                </div>
                </div>
                <div className="elementor-element elementor-element-234ae61 mf-btn--left elementor-widget elementor-widget-mf-button" data-id="234ae61" data-element_type="widget" data-widget_type="mf-button.default">
                <div className="elementor-widget-container">
                    <div className="mf-btn-wraper " data-mf-form-conditional-logic-requirement="">
                            <button type="submit" className="metform-btn metform-submit-btn " id="" disabled="${parent.state.form_res}">
                    <span>${ parent.decodeEntities("Send Message") } </span>
                </button>
                    </div>
                </div>
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
                            ` : ''}
                </form>
            `
        </script>
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

@endforeach

 @endfor

</div>
</section>

{{-- contact us ends here --}}