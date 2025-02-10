<?php 
/*
Template Name: Payment Confirmation
*/
session_start();
get_header(); ?>


<div class="bg-inner-2">  
  <div class="container">
     <div class="row">
      <div class="contact-title"><?php  the_title();?></div>
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



  <!---  Code Start  Here  -->

  <?php 

$HASHING_METHOD = 'sha512';  // md5,sha1

// This confirm.php used to show payment status and response parameters.
if(!isset($_SESSION['SECRET_KEY']) || empty($_SESSION['SECRET_KEY']))
  $_SESSION['SECRET_KEY'] = ''; //set your secretkey here
  
$hashData = $_SESSION['SECRET_KEY'];
$response = array();
//print_r($_POST); 

ksort($_POST);
foreach ($_POST as $key => $value){
  if (strlen($value) > 0 && $key != 'SecureHash') {
    $hashData .= '|'.$value;
  }
}
if (strlen($hashData) > 0) {
  $secureHash = strtoupper(hash($HASHING_METHOD , $hashData));
  
  if($secureHash != $_POST['SecureHash']){
    echo '<h1>Error!</h1>';
    echo '<p>Hash validation failed</p>';
    exit;
  } else {
    $response = $_SESSION['paymentResponse'][$_POST['PaymentID']];
  }
} else {
  echo '<h1>Error!</h1>';
  echo '<p>Invalid response</p>';
  exit;
}
/*if($_POST['Amount'] != get_field('total_amount',$_SESSION['formid']))
{
   echo '<h1>Transaction failed!</h1>';
   echo '<p>Invalid amount</p>'; 
}*/
?>

<style>
  h1       { font-family:Arial,sans-serif; font-size:24pt; color:#08185A; font-weight:100; margin-bottom:0.1em}
    h2.co    { font-family:Arial,sans-serif; font-size:24pt; color:#FFFFFF; margin-top:0.1em; margin-bottom:0.1em; font-weight:100}
    h3.co    { font-family:Arial,sans-serif; font-size:16pt; color:#000000; margin-top:0.1em; margin-bottom:0.1em; font-weight:100}
    h3       { font-family:Arial,sans-serif; font-size:16pt; color:#08185A; margin-top:0.1em; margin-bottom:0.1em; font-weight:100}
  th     { font-size:12px;background:#015289;color:#FFFFFF;font-weight:bold;height:30px;}
  td     { font-size:12px;background:#DDE8F3}
  .pageTitle { font-size:24px;}
</style>


  <center>
  <p align="center"><b>Payment Status : <?=$response['paymentStatus']?></b></p>
    <table width="600" cellpadding="2" cellspacing="2" border="0">
        <tr>
            <th colspan="2">Transaction Response</th>
        </tr>
<?php
    

    //foreach( $response as $key => $value) {
    //  if($key == 'paymentStatus') continue;
?>      
        <!--<tr>
            <td class="fieldName" width="50%"><?php //echo $key; ?></td>
            <td class="fieldName" align="left" width="50%"><?php //echo $value; ?></td>
        </tr>-->
<?php
   // }
    
  //   Saving trnsaction data into database //
     global $wpdb; 
       $ins = $wpdb->insert( 
                    'wp_hdfcpaymentdetails', 
                    array( 
                      'amount' => $response['Amount'], 
                      'billingaddress' => $response['BillingAddress'], 
                      'billingcity' => $response['BillingCity'],
                      'billingcountry' => $response['BillingCountry'],
                      'billingemail' => $response['BillingEmail'],
                      'billingname' => $response['BillingName'],
                      'billingphone' => $response['BillingPhone'],
                      'billingpostalcode' => $response['BillingPostalCode'],
                      'billingstate' => $response['BillingState'],
                      'datecreated' => $response['DateCreated'],
                      'description' => $response['Description'],
                      'isflagged' => $response['IsFlagged'], 
                      'merchantrefno' => $response['MerchantRefNo'],
                      'mode' => $response['Mode'],
                      'paymentid' => $response['PaymentID'],
                      'paymentmethod' => $response['PaymentMethod'],
                      'request_id' => $response['RequestID'],
                      'responsecode' => $response['ResponseCode'],
                      'responsemessage' => $response['ResponseMessage'],
                      'securehash' => $response['SecureHash'],
                      'transactionid' => $response['TransactionID'],
                      'gstin' => $_SESSION['gstin'],
                    ), 
                    array( 
                      '%d','%s','%s','%s','%s','%s', '%d', '%d', '%s', '%s', '%s', '%s', '%d', '%s', '%d', '%d', '%d', '%d','%s','%s', '%d', '%s'
                    ) 
  );
       unset($_SESSION['gstin']);
       
  /*if($ins && $response['paymentStatus']=='SUCCESS' ){
  header('Location: http://www.ptecoupons.com/success/?amount='.$_POST['Amount'].'&id='.$_POST['PaymentID'].'&m='.$_POST['Status'].'&p='.$response['paymentStatus']);
 }
 if($ins && $response['paymentStatus']=='FAILED' ){
  header('Location: http://www.ptecoupons.com/failed/?amount='.$_POST['Amount'].'&id='.$_POST['PaymentID'].'&m='.$_POST['Status'].'&p='.$response['paymentStatus']);
 }*/
?>     
        <tr>
            <td class="fieldName" width="50%">Amount</td>
            <td class="fieldName" align="left" width="50%"><?php echo $_POST['Amount'];?></td>
        </tr>

        <tr>
            <td class="fieldName" width="50%">PaymentID</td>
            <td class="fieldName" align="left" width="50%"><?php echo $_POST['PaymentID'];?></td>
        </tr>

        <tr>
            <td class="fieldName" width="50%">Status</td>
            <td class="fieldName" align="left" width="50%"><?php echo $_POST['Status'];?></td>
        </tr>


  </table>
</center>

  <!-- Code End Here -->

 

</div>




<?php get_footer();