    <footer class="footer rydehighschool_footer viewport">
        <?php
            /* Start the Loop */
            while ( have_posts() ) : the_post();
        ?>

        <div class="rydehighschool_footer_top">
            <?php $term_list = wp_get_post_terms(get_the_ID(), 'project-category', array("fields" => "names")); ?>
            <h4><span>VIEW MORE</span><br /><?php echo implode(", ", $term_list); ?> PROJECTS</h4>
            <div class="project_buttons">
                <?php next_post_link( '%link', 'NEXT PROJECT', TRUE, ' ', 'project-category' ); ?>
                <?php previous_post_link( '%link', 'PREVIOUS PROJECT', TRUE, ' ', 'project-category' ); ?>
                <?php 
                $term_list = wp_get_post_terms(get_the_ID(), 'project-category'); 
                $termUrl = false;
                if(!empty($term_list) && isset($term_list[0])) {
                    $termUrl = get_term_link($term_list[0]);
                }
                ?>
                <?php /* if($termUrl) { ?><a class="all_project" href="<?php echo $termUrl; ?>">ALL PROJECT</a><?php } */ ?>
                <a class="open-menu all_project" href="javascript:void(0);">ALL PROJECTS</a>
            </div>

        </div>
        <?php endwhile; ?>

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
            <?php if ($telephone = get_field("ach_telephone", "option")) : ?><span class="footer_phone"><label>Telephone</label><?php echo trim($telephone); ?></span><?php endif; ?> 
    <?php if ($email = get_field("ach_email", "option")) : ?><span class="footer_email"><label>Email</label><?php echo trim($email); ?></span><?php endif; ?> 
        <p class="developed_by"><?php the_field("credit_note","options"); ?></p>
        </div>
    </footer>

</div>

<?php wp_footer(); ?>
</body></html>