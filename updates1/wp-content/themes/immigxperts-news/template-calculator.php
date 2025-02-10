<?php 
/** 
Template Name: IX Calculator 
**/
get_header();?>

<div class="contact-page">
    <div class="container">
        <div class="row">
        	<div class="contact-title"><?php the_title();?></div>
            <div class="list-1">
            <?php if(function_exists('bcn_display'))
            {
                bcn_display();
            }?>
            </div>
        </div>
    </div>
</div>

<div class="contact-bottom">
    <div class="container">
        <div class="row"> 
            <div class="col-md-8 col-md-offset-2" id="ix_calculator">
              <h3 class="text-center">Online Points Test for Skilled Migration</h3>
              <table class="table table-bordered table-sm">
                <tr class="table-active">
                  <th>Visa Subclass</th>
                </tr>
                <tr class="table-default">
                  <td>
                    <div class="form-check">
                      <label class="form-check-label">
                        <input class="form-check-input" type="radio" name="subclass" value="0" /> Subclass 189 Skilled Independent.
                      </label>
                    </div>
                  </td>
                </tr>
                <tr class="table-default">
                  <td>     
                    <div class="form-check">
                      <label class="form-check-label">
                        <input class="form-check-input" type="radio" name="subclass" value="5" /> Subclass 190 Skilled Nominated.
                      </label>
                    </div>
                  </td>
                </tr>
                <tr class="table-default">
                  <td>     
                    <div class="form-check">
                      <label class="form-check-label">
                        <input class="form-check-input" type="radio" name="subclass" value="10" /> Subclass 489 Skilled Provisional.
                      </label>
                    </div>
                  </td>
                </tr>
                <tr class="table-gery">
                  <td>Score: <span id="subclass_points">0</span></td>
                </tr>
                <tr class="table-active">
                  <th>Age</th>
                </tr>
                <tr class="table-default">
                  <td>
                    <div class="form-check">
                      <label class="form-check-label">
                        <input class="form-check-input" type="radio" name="age" value="25" /> Age from 18 to 24 years old.
                      </label>
                    </div>
                    </td>
                </tr>
                <tr class="table-default">
                  <td>     
                    <div class="form-check">
                      <label class="form-check-label">
                        <input class="form-check-input" type="radio" name="age" value="30" /> Age from 25 to 32 years old.
                      </label>
                    </div>
                  </td>
                </tr>
                <tr class="table-default">
                  <td>     
                    <div class="form-check">
                      <label class="form-check-label">
                        <input class="form-check-input" type="radio" name="age" value="25" /> Age from 33 to 39 years old.
                      </label>
                    </div>
                  </td>
                </tr>
                <tr class="table-default">
                  <td>     
                    <div class="form-check">
                      <label class="form-check-label">
                        <input class="form-check-input" type="radio" name="age" value="15" /> Age from 40 to 44 years old.
                    </div>
                  </td>
                </tr>
                <tr class="table-default">
                  <td>     
                    <div class="form-check">
                      <label class="form-check-label">
                        <input class="form-check-input" type="radio" name="age" value="0" /> Age from 45 to 49 years old.
                      </label>
                    </div>
                  </td>
                </tr>
                <tr class="table-gery">
                  <td>Score: <span id="age_points">0</span></td>
                </tr>
                <tr class="table-active">
                  <th>English language proficiency</th>
                </tr>
                <tr class="table-default">
                  <td>
                    <div class="form-check">
                      <label class="form-check-label">
                        <input class="form-check-input" type="radio" name="eng_lang" value="10" /> Proficient English <small>(need to score minimum 7 on every of the four basic factors of the IELTS)</small>
                      </label>
                    </div>
                  </td>
                </tr>
                <tr class="table-default">
                  <td>     
                    <div class="form-check">
                      <label class="form-check-label">
                        <input class="form-check-input" type="radio" name="eng_lang" value="20" /> Superior English <small>(need to score minimum 8 on every of the four basic factors of the IELTS)</small>
                      </label>
                    </div>
                  </td>
                </tr>
                <tr class="table-gery">
                  <td>Score: <span id="eng_lang_points">0</span></td>
                </tr>
                <tr class="table-active">
                  <th>Educational Qualifications</th>
                </tr>
                <tr class="table-default">
                  <td> 
                    <div class="form-check">
                      <label class="form-check-label">
                        <input class="form-check-input" type="radio" name="qua" value="20" /> Doctorate or PhD degree
                      </label>
                    </div>
                  </td>
                </tr>
                <tr class="table-default">
                  <td>     
                    <div class="form-check">
                      <label class="form-check-label">
                        <input class="form-check-input" type="radio" name="qua" value="15" /> Bachelor degree and Honours bachelor or master degree
                      </label>
                    </div>
                  </td>
                </tr>
                <tr class="table-default">
                  <td>     
                    <div class="form-check">
                      <label class="form-check-label">
                        <input class="form-check-input" type="radio" name="qua" value="10" /> Diploma courses and any trade educations done in Australia
                      </label>
                    </div>
                  </td>
                </tr>
                <tr class="table-gery">
                  <td>Score: <span id="qua_points">0</span></td>
                </tr>
                <tr class="table-active">
                  <th>Experience outside of Australia</th>
                </tr>
                <tr class="table-default">  
                  <td>
                    <div class="form-check">
                      <label class="form-check-label">
                        <input class="form-check-input" type="radio" name="exp" value="5" /> Minimum one year but not more than two years (from past 10 years).
                      </label>
                    </div>
                  </td>
                </tr>
                <tr class="table-default">
                  <td>     
                    <div class="form-check">
                      <label class="form-check-label">
                        <input class="form-check-input" type="radio" name="exp" value="10" /> Minimum three years but not more than four years (from past 10 years)
                      </label>
                    </div>
                  </td>
                </tr>
                <tr class="table-default">
                  <td>     
                    <div class="form-check">
                      <label class="form-check-label">
                        <input class="form-check-input" type="radio" name="exp" value="15" /> Minimum five years but not more than seven years (from past 10 years)
                      </label>
                    </div>
                  </td>
                </tr>
                <!--tr class="table-default">
                  <td>     
                    <div class="form-check">
                      <label class="form-check-label">
                        <input class="form-check-input" type="radio" name="exp" value="20" /> Minimum eight but not more till 9 years ( from past 10 years)
                      </label>
                    </div>
                  </td>
                </tr-->
                <tr class="table-gery">
                  <td>Score: <span id="exp_points">0</span></td>
                </tr>    
              </table>
              <h4>Skilled Migration Points Test Results</h4>
              <table class="table  table-sm">
                <tr class="table-info">
                  <th>Your score is: <strong id="total_score">0</strong></th>
                  <th><small>Note: Required Points to apply Min. <b>60 Points</b></small></th>
                </tr>
              </table>  
   			  </div>
        </div>
    </div>
</div>
    
<style type="text/css">
#ix_calculator label{ font-weight: normal;}
.table-active, .table-active>td, .table-active>th{ background-color: #009ad7; color: #fff; font-size:16px; text-transform: uppercase;}
.table-default>td, .table-default>th{ background-color: #f9f9f9; font-weight: bold;}
.table-info>td, .table-info>th{ background-color: #ed850c; color: #fff; font-weight: bold; font-size:16px; vertical-align: middle !important;}
.table-info>th strong{ font-size:20px;}
.table-gery>td, .table-gery>th{ background-color: #ececec; color: #000; font-weight: bold;}
.table-gery>td:last-child { border-bottom: 1px solid #009ad7 !important;}
.table-gery>td:first-child { border-bottom: 1px solid #009ad7 !important;}
.table-bordered > tbody > tr > th, .table-bordered > tbody > tr > td{ border-right: 1px solid #009ad7 !important; border-left: 1px solid #009ad7 !important;}
</style>

<script type="text/javascript">
  jQuery("input[name='subclass']").click(function(){
    var subclass = parseInt( jQuery("input[name='subclass']:checked").val() );
    var age = parseInt( jQuery('#age_points').text() );
    var eng_lang_points = parseInt( jQuery('#eng_lang_points').text() );
    var qua_points = parseInt( jQuery('#qua_points').text() );
    var exp_points = parseInt( jQuery('#exp_points').text() );
    var total_score = subclass + age + eng_lang_points + qua_points + exp_points ;
    jQuery('#subclass_points').html(subclass);
    jQuery('#total_score').html(total_score);
  });
  jQuery("input[name='age']").click(function(){
    var age = parseInt( jQuery("input[name='age']:checked").val() );
    var subclass = parseInt( jQuery('#subclass_points').text() );
    var eng_lang_points = parseInt( jQuery('#eng_lang_points').text() );
    var qua_points = parseInt( jQuery('#qua_points').text() );
    var exp_points = parseInt( jQuery('#exp_points').text() );
    var total_score = subclass + age + eng_lang_points + qua_points + exp_points ;
    jQuery('#age_points').html(age);
    jQuery('#total_score').html(total_score);
  });
  jQuery("input[name='eng_lang']").click(function(){
    var eng_lang_points = parseInt( jQuery("input[name='eng_lang']:checked").val() );
    var subclass = parseInt( jQuery('#subclass_points').text() );
    var age = parseInt( jQuery('#age_points').text() );
    var qua_points = parseInt( jQuery('#qua_points').text() );
    var exp_points = parseInt( jQuery('#exp_points').text() );
    var total_score = subclass + age + eng_lang_points + qua_points + exp_points ;
    jQuery('#eng_lang_points').html(eng_lang_points);
    jQuery('#total_score').html(total_score);
  });
  jQuery("input[name='qua']").click(function(){
    var qua_points = parseInt( jQuery("input[name='qua']:checked").val() );
    var subclass = parseInt( jQuery('#subclass_points').text() );
    var age = parseInt( jQuery('#age_points').text() );
    var eng_lang_points = parseInt( jQuery('#eng_lang_points').text() );
    var exp_points = parseInt( jQuery('#exp_points').text() );
    var total_score = subclass + age + eng_lang_points + qua_points + exp_points ;
    jQuery('#qua_points').html(qua_points);
    jQuery('#total_score').html(total_score);
  });
  jQuery("input[name='exp']").click(function(){
    var exp_points = parseInt( jQuery("input[name='exp']:checked").val() );
    var subclass = parseInt( jQuery('#subclass_points').text() );
    var age = parseInt( jQuery('#age_points').text() );
    var qua_points = parseInt( jQuery('#qua_points').text() );
    var eng_lang_points = parseInt( jQuery('#eng_lang_points').text() );
    var total_score = subclass + age + eng_lang_points + qua_points + exp_points ;
    jQuery('#exp_points').html(exp_points);
    jQuery('#total_score').html(total_score);
  });
  
</script>

<?php get_footer();?>