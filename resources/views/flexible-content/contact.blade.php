<?php $form_id = get_sub_field('contact_form'); ?>

<section id="@sub('contact_id')" class="contact py-5" style="background: rgb(0,54,88);
background: linear-gradient(0deg, rgba(0,54,88,0.75) 0%, rgba(0,54,88,1) 97%), url('@sub('contact_bg', 'url')') center center/cover no-repeat; ">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-12 col-lg-6 col-md-12">
                <h2 class="pl-0 pt-0">@sub('contact_heading')</h2>
                <p>@sub('contact_content')</p>
            </div>
            <div class="col-12 col-lg-6 col-md-12 mt-md-3">
                <div class="form--container p-5">
                    <?php gravity_form( $form_id, $display_title = false, $display_description = false, $display_inactive = false, $field_values = null, $ajax = true, $tabindex = -1, $echo = true ); ?>
                </div>
            </div>
        </div>
    </div>
</section>