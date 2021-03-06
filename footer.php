    <footer id="footer" class="footer viewport">
        <div class="footer_left">
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
            <?php if ($telephone = get_field("ach_telephone", "option")) : ?><span class="footer_phone"><label>Telephone</label><a href="tel:<?php echo trim($telephone); ?>"><?php echo trim($telephone); ?></a></span><?php endif; ?> 
            <?php if ($email = get_field("ach_email", "option")) : ?><span class="footer_email"><label>Email</label><a href="mailto:<?php echo trim($email); ?>"><?php echo trim($email); ?></a></span><?php endif; ?>
            <?php if ($address = get_field("ach_address", "option")) : ?><div class="address_area"><?php echo $address; ?></div><?php endif; ?>
        </div>
        <div id="contactus" class="contact_form"><?php echo do_shortcode('[contact-form-7 id="15" title="Enquiry Form"]'); ?></div>
        <p class="developed_by"><?php the_field("credit_note", "options"); ?></p>
    </footer>

</div>

<?php // wp_footer(); ?>
</body></html>