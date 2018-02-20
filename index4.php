<!DOCTYPE html>
<html lang="en" >

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
  <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <title>MMI</title>

    <meta name="description" content="MOTOR MART">
    <meta name="author" content="bitjini">
     <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet"> 
    <link rel="stylesheet" type="text/css" href="css/blur_image.css">
  </head>

<body>

  <div id="wait" style="display:none;width:69px;
  height:89px;
  border:1px solid black;
  position:absolute;
  top:50%;
  left:50%;
  padding:2px;">
  <img src="images/loader.gif"/>
</div>

  <div id="wait" style="display:none;width:69px;height:89px;border:1px solid black;position:absolute;top:50%;left:50%;padding:2px;z-index: 2;"><img src="images/loader.gif" width="64" height="64" /><br>Loading..</div>

<nav class="navbar navbar-inverse navbar-fixed-top navbar_customized" >
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#" style="padding: 0px;">
      <img src="images/logo.png" alt="logo" />
      </a>
           <span class="brand_logo_text">Motor Mart India</span>
    </div>
    <ul class="nav navbar-nav navbar-right" style="margin-top: 8px;padding-right: 40px;">
      <li class="active"><a href="#">HOME</a></li>
      <li><a href="#">VEHICLE LOANS</a></li>
      <li><a href="#">INSURANCE</a></li>
      <li><a href="#">REVIEWS</a></li>
      <li><a href="#">FINANCIAL CALCULATIONS</a></li>
      <li><a href="#">CONTACT ME</a></li>

    </ul>
  </div>
</nav><br>
    <div class="row" style="margin-right:unset;margin-left: unset;"><br><br>

      <div class="col-md-12" style="color: white;">

<div style="float: right;">
      <ul class="nav nav-stacked" style="">
  <li>
    <div class="btn-group">
    <span style="color: white;text-transform: uppercase;margin-left: 3px;">More</span><br>
      <a class="btn dropdown-toggle" data-toggle="dropdown">
        <img src="images/arrowdown.png" />
      </a>
      <ul class="dropdown-menu dropdown-menu-right">
        <li><a href="#">Choice1</a></li>
        <li><a href="#">Choice2</a></li>
        <li><a href="#">Choice3</a></li>
        <li class="divider"></li>
        <li><a href="#">Choice..</a></li>
      </ul>
    </div>
  </li>
  </ul>
 </div>
        <h3 class="text-center">
          <span style="font-size: 30px;">Welcome to</span>
          <div>
            <span style="font-size: 50px;">MOTOR MART INDIA</span>
          </div>
        </h3>
      </div>
      </div>

<div class="row">
<div id="box1" class="box blurred-bg tinted">
  <div class="content">
    <!-- Below is the content inside the Blured Box -->
    <div class="row">
      <div class=" col-sm-12 text-center" style="color: #fff;">
    <!-- <div style="/*padding:10px 10px 0px 10px;color: #fff;*/"> -->
      <h2>Finding you the best options, Meanwhile lets log you in</h2>
<!--          </div>
 -->       </div>
     </div>
        <div class="row" style="text-align: left;margin-top: 35px;position: relative;padding-left: 35px;">
        <form>
              <div class="col-md-3">
          <span style="color: #fff;text-transform: uppercase;">Name</span>
              <div>
              <input  class="custom_input" type="text" name="" placeholder="Enter Full Name">
              </div>
        </div>
<!-- Adding Gap -->
  <div class="col-md-1">
      <!-- <div class="text-center " id="leftarrow">
        <a href="#"><img src="images/leftarrow.png" /></a>
      </div> -->
  </div>

  <div class="col-md-3">
    <span style="color: #fff;text-transform: uppercase;">Email</span>
              <div>
                <input class="custom_input" type="email" name="" placeholder="Enter Email">
              </div>
              <div class="text-center " id="success_button">
      <!--   <a href="dealer_details.php "> --><img id="success_dealer" src="images/success.png" /><!-- </a> -->
      </div>
  </div>
  <!-- Adding Gap -->
  <div class="col-md-1">
      <!-- <div class="text-center " id="rightarrow">
        <a hre    f="index3.php"><img src="images/right-arrow.png" /></a>
      </div> -->
  </div>
        <div class="col-md-3">
      <span style="color: #fff;text-transform: uppercase;">Mobile</span>
             <div> 
            <input class="custom_input" id="phonenumber" type="tel" name="phonenumber" placeholder="Enter Mobile" pattern="[0-9]{10}" required  > 

            </div>
        </div>
        </form>
      </div>

 </div><!--  /COntent div -->
</div>
</div>
<div id="myModal" class="modal fade bd-example-modal-sm"  tabindex="-1" role="dialog" aria-labelledby="otpModal" aria-hidden="true" style="margin-top: 200px;">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title">Enter OTP</h5>
        <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close"> 
          <span aria-hidden="true">&times;</span>
        </button>-->
      </div>
      <div class="modal-body">
        <p><input type="text" name="otp" id="otp"></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" id="click">Submit</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- <div id="popup1" class="overlay">
  <div class="popup">
    <h2>Enter OTP</h2>
    <a class="close" href="#">&times;</a>
    <div class="content">
      <p><input type="text" name="otp" id="otp"></p>
    </div>
  </div>
</div>
<!-- /Main Div
<style type="text/css">







.overlay {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  background: rgba(0,0,0,0.5);
  transition: opacity 200ms;
  visibility: hidden;
  opacity: 0;
  &.light {
    background: rgba(255,255,255,0.5);
  }
  
 
}

.popup {
  margin: 75px auto;
  padding: 20px;
  background: #fff;
  border: 1px solid #666;
  width: 300px;
  box-shadow: 0 0 50px rgba(0,0,0,0.5);
  position: relative;
  .light & {
    border-color: #aaa;
    box-shadow: 0 2px 10px rgba(0,0,0,0.25);
  }
  h2 {
    margin-top: 0;
    color: #666;
    font-family: "Trebuchet MS", Tahoma, Arial, sans-serif;
  }
  .close {
    position: absolute;
    width: 20px;
    height: 20px;
    top: 20px;
    right: 20px;
    opacity: 0.8;
    transition: all 200ms;
    font-size: 24px;
    font-weight: bold;
    text-decoration: none;
    color: #666;
    &:hover {
      opacity: 1;
    }
  }
  .content {
    max-height: 400px;
    overflow: auto;
  }
  p {
    margin: 0 0 1em;
    &:last-child {
      margin: 0;
    }
  }
}
</style> -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>

<script language="javascript">


//   $("#success_dealer").click(function() { 

// var vehmodelpk = localStorage.getItem("model_pk");
// var vehlocationpk = localStorage.getItem("model_location_pk");

//     window.location.href = "dealer_details.php?vehmodelpk=" + vehmodelpk + "&vehlocationpk=" + vehlocationpk;

//    });




    // function registerUser() {
$("#success_dealer").click(function(){


      var phoneNumber = $('#phonenumber').val();
      if(phoneNumber=="")
      {
        alert("Please Enter Mobile No");
        return false;
      }
      else{
        $('#myModal').modal('show');
      }
     
     });
// function showmodal(){
// 


// }
     $("#click").click(function(){
var phoneNumber = $('#phonenumber').val();
  //var phone = $('#phonenumber').val();
      console.log(phoneNumber);

    //$('#wait').show();  // show the loader
      $.post('login_user.php', { value: phoneNumber }, function(data){

            //The return of 'read' function will be accessible trough 'data'
           // mdata = $.parseJSON(data);
            //You may create DOM elements here
           // $('#wait').hide(); // hide the Loader
           // alert(data);
            //$('#popup1').show();
           
            var onetimepw = $('#otp').val();;
            var pnumber = data;

            // var inputValue = JSON.stringify({'phone': parseInt(pnumber),'otp': parseInt(onetimepw)});
            var inputValue = [pnumber,onetimepw];
            //alert(inputValue);
            //$("#wait").css("display", "block");
            $.post('verify_number.php', { value:pnumber,value1:onetimepw }, function(data){

             // $("#wait").css("display", "none");

                //The return of 'read' function will be accessible trough 'data'
                mdata = $.parseJSON(data);
                //You may create DOM elements here
                alert(data);
                // var person = prompt("Enter OTP: ",);
                var vehmodelpk = localStorage.getItem("model_pk");
var vehlocationpk = localStorage.getItem("model_location_pk");

    window.location.href = "dealer_details.php?vehmodelpk=" + vehmodelpk + "&vehlocationpk=" + vehlocationpk;

   
            });
})
        });

   
</script>

</body>

</html>
