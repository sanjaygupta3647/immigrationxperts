<?php get_header(); ?>



<!--?php

if( !function_exists('redirect_404_to_homepage') ){

    add_action( 'template_redirect', 'redirect_404_to_homepage' );

    function redirect_404_to_homepage(){
       if(is_404()):
            wp_safe_redirect( home_url('/') );
            exit;
        endif;
    }
}


?-->
<div class="bg-inner-2">  
  <div class="container">
     <div class="row">
      <div class="contact-title">Error 404</div>
      <div class="list-1 aligned">
        <?php if(function_exists('bcn_display'))
        {
            bcn_display();
        }?> 
      </div>
    </div>
   </div>
</div>
<div class="container">
  <div class="entry">
  	<h4>Sorry,  No post found matched your criteria.</h4>
    <button class="btn btn-primary" onclick="location.href='<?=home_url();?>';">Take me Home</button> 
  </div>
</div>
<script type="text/javascript">
    var url = "https://www.immigrationxperts.com/";
    var delay = "1000";
    window.onload = function ()
    {
        setTimeout(GoToURL, delay);
    }
    function GoToURL()
    {
        if(typeof IE_fix != "undefined") // IE8 and lower fix to pass the http referer
        {
            var referLink = document.createElement("a");
            referLink.href = url;
            document.body.appendChild(referLink);
            referLink.click();
        }
        else { window.location.replace(url); } // All other browsers
    }
</script>
<?php get_footer();