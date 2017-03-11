
<?php if (is_page_template('rydehighschool-page.php')){?>

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
    <ul class="footer_social">
      <li>Contact Us</li>
      <li><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/facebook.jpg"/></li>
      <li><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/instagram.jpg"/></li>
      <li><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/twitter.jpg"/></li>
      <li><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/linkedin.jpg"/></li>
    </ul>
    <span class="footer_phone"> <label>Telephone</label> 02 9700 8255 </span> 
    <span class="footer_email"><label>Email</label> info@achclifford.com</span>
    </div>
</footer>
	
<?php }else{ ?>
    
<footer class="footer">
  <div class="inner">
    <h4>ACH CLIFFORD CONSTRUCTIONS</h4>
    <ul class="footer_social">
      <li>Contact Us</li>
      <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
        <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
    </ul>
    <span class="footer_phone">
    <label>Telephone</label>
    02 9700 8255 </span> <span class="footer_email">
    <label>Email</label>
    info@achclifford.com</span>
    <div class="address_area">Suite 418, 30-40 Harcourt Pde 
      Rosebery NSW 2018 Australia <span>PO Box 114 Rosebery NSW 2018</span></div>
  </div>
  <div class="contact_form"><?php echo do_shortcode('[contact-form-7 id="15" title="Enquiry Form"]'); ?></div>
</footer>

<?php }?>

</div>

<?php wp_footer(); ?>
</body></html>