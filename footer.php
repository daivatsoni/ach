
<?php if (is_page_template('rydehighschool-page.php')) { ?>

    <footer class="footer rydehighschool_footer">

        <div class="rydehighschool_footer_top">
            <h4><span>VIEW MORE</span><br />EDUCATION PROJECTS</h4>
            <div class="project_buttons">
                <a class="next_project">NEXT PROJECT</a>
                <a class="previous_project">PREVIOUS PROJECT</a>
                <a class="all_project">ALL PROJECT</a>
            </div>

        </div>

        <div class="rydehighschool_footer_bottom">
            <?php
            $socialMedia = get_field("social_media", "option");
            if (!empty($socialMedia)) {
                ?> 
                <ul class="footer_social">
                    <li>Contact Us</li>
                    <?php foreach ($socialMedia as $media) { ?>
                        <li><a href="<?php echo $media['url']; ?>" target="_blank"><i class="fa <?php echo $media["fa_class"] ?>"></i></a></li>
                <?php } // endforeach   ?>
                </ul>
            <?php } // endif ?>
            <?php if ($telephone = get_field("ach_telephone", "option")) : ?><span class="footer_phone"><label>Telephone</label><?php echo $telephone; ?> </span> <?php endif; ?> 
    <?php if ($email = get_field("ach_email", "option")) : ?><span class="footer_email"><label>Email</label> <?php echo $email; ?></span> <?php endif; ?> 
        </div>
    </footer>

<?php }else { ?>

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
    </footer>

<?php } ?>

</div>

<?php wp_footer(); ?>
</body></html>