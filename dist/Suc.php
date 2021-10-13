<?php
session_start();
if(!(isset($_POST['hidden_amt']))){

header("Location: /");
die();

}

else{
}
?>
<style>
.payment-success-notice{
  width: 350px;
  background: white;
  text-align: center;
  padding: 15px;
  border: 1px solid #e9e9e9;
  border-radius: 5px;
  position: fixed;
  top: 50%;
  left: 50%;
  transform: translate(-50%,-50%);
  z-index: 1000;
  font-family: 'Open Sans', sans-serif;
}
.payment-success-notice-btn{
  margin-left: auto;
  margin-right: auto;
  margin-top: 10px;
  margin-bottom: 10px;
  background: #e9e9e9;
  width: max-content;
  padding: 10px;
  border: 1px silver solid;
  border-radius: 5px;
  cursor: pointer;
  transition: all 200ms;
}
.payment-success-notice-btn:hover{
  box-shadow: 0 14px 28px rgba(0,0,0,0.25), 0 10px 10px rgba(0,0,0,0.22);
}
.payment-success-notice-icon{
  font-size: 9rem;
  color: green;
}
.payment-success-notice-title{
  font-size: 2rem;
}
.payment-success-notice-background{
  background-color: rgba(79,79,79,.7);
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  position: fixed;
}
.payment-success-notice-paymentamt{
  font-size: 1.25rem;
  margin: 15px 0px;
}
</style>

<link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<div class="payment-success-notice-background">
  <div class="payment-success-notice">
    <div class="payment-success-notice-title">
      Payment Complete
    </div>
    <div class="payment-success-notice-icon">
      <i class="fa fa-check-circle-o" aria-hidden="true"></i>
    </div>
    <div class="payment-success-notice-paymentamt">
Total Amount Paid : <?php echo $SESSION['amt'];?>
      Thanks For Contributing For a Change!
<h6>You will be receiving a conformation mail and invoice from PSF and Razopay <?php echo $_POST['hidden_amt'];?></h6>
    </div>
    <br/>
    <div id='payment-success-notice-btn' class="payment-success-notice-btn">
      Continue (&nbsp;<span id="payment-success-countdown">5</span>&nbsp;)
    </div>
  </div>
</div>

<script>
document.addEventListener("DOMContentLoaded", function(){
  var successCountDownTimer = setInterval(function() {
    if(parseInt(document.getElementById('payment-success-countdown').innerHTML)>0){
      document.getElementById('payment-success-countdown').innerHTML = parseInt(document.getElementById('payment-success-countdown').innerHTML)-1;
    } else {
      document.getElementById('payment-success-notice-btn').innerHTML = 'Forwarding...';
window.location.href = "/";

      clearInterval(successCountDownTimer);
    }
  }, 1000);
});
</script>

