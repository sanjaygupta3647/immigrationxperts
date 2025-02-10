<?php get_header(); ?>
<div class="<?php echo 'page_'.$post->ID;?> bg-inner-2">  
  <div class="container">
     <div class="row">
      <div class="contact-title"><?php the_title();?></div>
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
  <?php while(have_posts()) : the_post();  ?>
    <div class="entry"><?php the_content(); ?></div>
  <?php endwhile;?>
</div>
<?php if(get_the_ID() == 6672):?>
  <script type="text/javascript">
    $(document).ready(function () {
      setTimeout(function(){history.back();}, 3000);
    });
  </script>
<?php endif ?> 

<?php if(get_the_ID() == 4941):?>
   <script type="text/javascript">
    $(document).ready(function () {
      $("#city_branch").val("Pune");
    });
  </script>
  <?php endif ?> 
  <?php if(get_the_ID() == 4939):?>
   <script type="text/javascript">
    $(document).ready(function () {
      $("#city_branch").val("Mumbai");
    });
  </script>
  <?php endif ?> 

<?php if(get_the_ID() == 4941 || get_the_ID() == 4939):?>
  <div class="contact">
    <div class="container">
      <div class="row">
        <?php echo do_shortcode('[contact-form-7 id="6667" title="Pune Form Bottom"]');?>
      </div>
    </div>
  </div>
  <div class="contact">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
        
        <div class="col-md-8">
          <div class="text-center normal-font">You may visit us at following address:</div>
          <div class="contact-text">
            <span>Ms. Minal Ladhani</span><br>
            <span>Address:</span> 
            Office No. 6, 2nd Floor, 1196B,Srishti Chambers,   <br>
            Ghole Road,Near Dyaneshwar Paduka Chowk,<br>
            Shivajinagar, Pune-411005 Landmark-- near FC College.<br>
            Above Apache, The Fluid Lounge<br>
            <span>For Queries:</span> <a href="mailto:pune@immigrationxperts.com">pune@immigrationxperts.com</a><br>
            <span>Mobile:</span> +91 992 290 0030, +91 808 720 0030
            <br><br>
            <div class="text-center bold-text">Our Head Office is in Noida</div>
          </div>
          </div>
            <div class="col-md-4">
            <div class="pune-map-page">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3783.090700633376!2d73.83978134978435!3d18.524802973819398!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2c07f8fddd0ad%3A0x2a5a3e8a976040e0!2sBest+Immigration+Consultant+in+Pune+India!5e0!3m2!1sen!2sin!4v1511509358118" width="400" height="260" frameborder="0" style=" margin-right:30px;  background-color:none!important; border:0" allowfullscreen></iframe>
            </div></div>
        </div>
      </div>
    </div>
  </div>
 <?php /* ?> <script type="text/javascript">
    $(document).ready(function () {
      $("#select-city").change(function(){
          $("#more-form").show();
      });
    });
  </script><?php */ ?>
  <style type="text/css">
      .btn-file {
          position: relative;
          overflow: hidden;
      }
      .btn-file input[type=file] {
          position: absolute;
          top: 0;
          right: 0;
          min-width: 100%;
          min-height: 100%;
          font-size: 100px;
          text-align: right;
          filter: alpha(opacity=0);
          opacity: 0;
          outline: none;
          background: white;
          cursor: inherit;
          display: block;
      }
      .file-control{
        display: none !important;
      }
      .file-btn{
        margin: 37px 0 0 0;
        width:224px!important;
      }
      .pune-submit {
          float: none !important;
          margin: 0 auto !important;
          width: 55%;
      }
      /*#more-form {
        display: none;
          clear: both;
      }*/
      select.wpcf7-form-control.wpcf7-select.wpcf7-validates-as-required.form-control.form-control2.empty{margin-top:14px;}
      .bottom-submit {
          float: right;
          margin: 40px 0 0;
          width: 32%;
          font-size: 21px;
          height: 50px;
      }
      .captha-box {
          float: right;
      }
      .browse-btn {
          position: absolute;
          right: 0;
      }
      .sticky-popup
      {
        display: none !important;
      }
  </style>
<?php endif ?> 
<?php get_footer();