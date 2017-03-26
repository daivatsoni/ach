    <footer class="footer">
        <div class="inner">
            <h4><?php the_field("ach_company_name", "option"); ?></h4>
            <?php $socialMedia = get_field("social_media", "option");
            if (!empty($socialMedia)) {
                ?> 
                <ul class="footer_social">
                    <li>Contact Us</li>
                    <?php foreach ($socialMedia as $media) { ?>
                        <li><a href="<?php echo $media['url']; ?>" target="_blank"><i class="fa <?php echo $media["fa_class"] ?>"></i></a></li>
                <?php } // endforeach ?>
                </ul>
            <?php } // endif ?>
            <?php if ($telephone = get_field("ach_telephone", "option")) : ?><span class="footer_phone"><label>Telephone</label> <?php echo $telephone; ?> </span> <?php endif; ?> 
            <?php if ($email = get_field("ach_email", "option")) : ?><span class="footer_email"><label>Email</label> <?php echo $email; ?></span> <?php endif; ?>
            <?php if ($address = get_field("ach_address", "option")) : ?><div class="address_area"><?php echo $address; ?></div><?php endif; ?>
        </div>
        <div class="contact_form"><?php echo do_shortcode('[contact-form-7 id="15" title="Enquiry Form"]'); ?></div>
        <p class="developed_by">Proudly Designed and Developed by <a href="http://www.stylehousecreative.com" target="_blank">Style House Creative</a></p>
    </footer>

</div>

<?php wp_footer(); ?>
</body></html>