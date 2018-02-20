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

<body onload="fetchLocations();">
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
      <h2>A few more details </h2>
<!--          </div>
 -->       </div>
     </div>
     <form method="post" action="index3.php">
        <div class="row" style="text-align: left;margin-top: 35px;padding-right:45px;position: relative;padding-left: 45px;">
              <!-- <div class="col-md-3">
          <span style="color: #fff;text-transform: uppercase;">Vehicle Type</span>
              <div>
              <b><select class="form-control" id="select1">
                                <option value="" selected>New Vehicle</option>
                                <option value="tea">Option1</option>
                                <option value="coffee">Option2</option>
                                <option value="soda">Option3</option>
                                    </select></b>
              </div>
        </div> -->

<div class="col-md-2"></div>
  <div class="col-md-4">
    <span style="color: #fff;text-transform: uppercase;">Location</span>
              <div><b><select class="form-control" id="select2" required>
                      <option value="" default selected>Select City</option>
                      </select>
              </b></div>
  </div>
        <div class="col-md-4">
      <span style="color: #fff;text-transform: uppercase;">Finance Option</span>
             <div> <b><select class="form-control" id="select3">
                                            <option value="" selected>Yes</option>
                                                    <option>No</option>
                                          </select>
             </b>
                             </div>
        </div>
        <div class="col-md-2"></div>

      </div>

      <div class="row">
        <!-- Adding Gap -->
        <div class="col-md-2"></div>
  <div class="col-md-4">
      <div class="text-center " id="leftarrow">
        <a href="index.php"><img src="images/leftarrow.png" /></a>
      </div>
  </div>

  <!-- Adding Gap -->
  <div class="col-md-4">
      <div class="text-center " id="rightarrow">
        <input type="image" src="images/right-arrow.png" alt="Submit" width="68" height="68"/>
      </div>
  </div>
               <div class="col-md-2"></div> 
      </div>
</form>
 </div><!--  /COntent div -->
</div>
</div>
<!-- /Main Div-->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>

<script language="javascript">
    function fetchLocations() {
     // alert("page loaded");


    // inputValue2 = localStorage.getItem("inputValue2");

    //   alert ("Hi, " + inputValue2 + "!");


      $.post('fetch_cities.php', { value: "" }, function(data){

            //The return of 'read' function will be accessible trough 'data'
            mdata = $.parseJSON(data);
            //You may create DOM elements here
            //alert(mdata);
            //  output_get_manufacturer

            var $selecte = $('#select2');
            $.each(mdata.results, function(key, val){
                var $option = $("<option/>").attr("value", val.pk).text(val.name);
                $selecte.append($option);
            });
        });

    }

    $('#select2').change(function(){
     // localStorage.clear();

      var model_location_pk = $(this).val();
      var model_location_name = $("option:selected", this).text();

     localStorage.removeItem("model_location_pk");
     localStorage.removeItem("model_location_name");

console.log(model_location_pk);

      localStorage.setItem("model_location_pk", model_location_pk);
      localStorage.setItem("model_location_name", model_location_name);

    });
  </script>

</body>

</html>
