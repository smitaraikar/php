<!DOCTYPE html>
<html lang="en" >

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
  <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <title>MMI</title>

    <meta name="description" content="MOTOR MART INDIA">
    <meta name="author" content="bitjini">
     <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet"> 
    <link rel="stylesheet" type="text/css" href="css/blur_image.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
$(document).ready(function(){
    $(document).ajaxStart(function(){
        $("#wait").css("display", "block");
    });
    $(document).ajaxComplete(function(){
        $("#wait").css("display", "none");
    });
    
});
</script>
  </head>

  <script src="js/jquery.min.js"></script>
  <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
  <script src="js/bootstrap.min.js"></script>

<!-- 
  $url2 = 'http://motormartindia.herokuapp.com/get_all_dealers_web/';  
    $options2 = array(    
      'http' => array(
              'header'  => "Content-type: application/x-www-form-urlencoded\r\n",      
                'method'  => 'GET',   
                   ),   
                    );   
                     $context2 = stream_context_create($options2);    
                     $output2 = file_get_contents($url2, false,$context2); 
                        /*echo $output2;*/   
                         $arr2 = json_decode($output2,true);  
                           /*echo $arr2['dealers'][0]['dealer_details']['pk'];*/ -->
<?php
session_start();

  $url_get_all_catergories = 'https://motormartindia.herokuapp.com/get_all_categories_web/';
  $options_get_categories = array(
    'http' => array(
      'header'  => "Content-type:application/x-www-form-urlencoded\r\n",      
       'method'  => 'GET',
    ),);
  $context_get_categories = stream_context_create($options_get_categories);
  $output_get_all_categories = file_get_contents($url_get_all_catergories, false,$context_get_categories);

  // echo $output_get_all_categories;

  $output_get_categories = json_decode($output_get_all_categories,true);
?>

<body>
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
      <li><a href="#">FINANCIAL CALCULATOR</a></li>
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
        <li><a href="#">Last Search</a></li>
        <li><a href="#">My Orders</a></li>
        <li><a href="#">History</a></li>
        <li class="divider"></li>
        <li><a href="#">Login</a></li>
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
    <div class="row"><div class=" col-sm-12 text-center" style="color: #fff;">
    <!-- <div style="/*padding:10px 10px 0px 10px;color: #fff;*/"> -->
      <h2>What do you want to buy?</h2>
<!--          </div>
 -->       </div>

     </div>
     <form  method="post" action="index2.php">
        <div class="row" style="text-align: left;margin-top: 35px;position: relative;">
        <div class="col-md-3">
          
          <span style="color: #fff;text-transform: uppercase;">Vehicle Type</span>
              <div>
              <b><select class="form-control" id="select1"  required>
         <option value="" default selected>Select Category</option>
        <?php for ($i=0; $i < count($output_get_categories['categories']); $i++){?> 
        <option value="<?php echo $output_get_categories['categories'][$i]['pk']?>"><?php echo $output_get_categories['categories'][$i]['c_type']?></option>
        <?php }?>
                </select></b>
              </div>
        </div>



  <div class="col-md-3">
    <span style="color: #fff;text-transform: uppercase;">Vehicle Make</span>
              <div><b><select class="form-control" id="select2" required>
                            <option value="" default selected>Select Make</option>
                          </select>
              </b></div>
  </div>
        <div class="col-md-3">
      <span style="color: #fff;text-transform: uppercase;">Vehicle Model</span>
             <div> <b><select class="form-control" id="select3" required>
                                <option  value="" default selected>Select Model</option>
                              </select>
                      </b>
              </div>
        </div>
        <div class="col-md-3">
    <span style="color: #fff;text-transform: uppercase;">Vehicle Color</span>
              <div><b><select class="form-control" id="select4" required>
                            <option  value="" default selected>Select Color</option>
                     </select>
                   </b></div>

        </div>

      </div>
      <div id="wait" style="display:none;width:69px;height:49px;;position:absolute;top:50%;left:50%;padding:2px;"><img src='images/demo_wait.gif' width="34" height="34" /><br>Loading..</div>
    </br></br>
 <div class="text-center arrow-next" style="margin-top:53px;" ></div>
        <!-- <  type="submit" style="background: transparent;
    border: none;"><img src="images/right-arrow.png" /> -->
    <input type="image" src="images/right-arrow.png" alt="Submit" width="68" height="68"/>
    </form>
      </div>
 </div><!--  /COntent div -->
</div>

<!-- /Main Div-->
 <!-- Place at bottom of page --></div>
<script>
// $(document).ready(function(){
//     $("a.submit").click(function(){
//         document.getElementById("myForm").submit();
//     }); 
// });
   //Listen to select 'onchange' event
    $('#select1').change(function(){
        
        //Read selected value
       inputValue_catid= $(this).val();
        console.log(inputValue_catid);
        //Make an ajax call
        
    
        $.post('fetch_manufacturer.php', { value: inputValue_catid }, function(data){
          
          
       
            //The return of 'read' function will be accessible trough 'data'
            console.log(data);
            mdata = $.parseJSON(data);
            //You may create DOM elements here
            console.log(mdata);
            alert('Loaded vehicle make');
            //  output_get_manufacturer
 
   
            var $selecte = $('#select2');
            $.each(mdata.manufacturer[0].manufacturer_details, function(key, val){
                var $option = $("<option/>").attr("value", val.pk).text(val.m_type);
                $selecte.append($option);
                console.log($option);
            });


        });

    });
</script>

<script>

     $('#select2').change(function(){
        
            //  output_get_manufacturer
        //Read selected value
        var inputValue = JSON.stringify({'cat_id': parseInt($('#select1').val()),
        'man_id': parseInt($(this).val())});

        // alert('Selected vehicle '+inputValue);
        //Make an ajax call
        $.post('get_vehicle_list.php', { value: inputValue }, function(data){

            //The return of 'read' function will be accessible trough 'data'
            mdata = $.parseJSON(data);

            //You may create DOM elements here
            alert('Fetched vehicle '+data);
            //  output_get_manufacturer
            var $selecte = $('#select3');
            //$selecte.children().remove();

            $.each(mdata.details, function(key, val){
                // var $option = $("<option/>").attr("value", val.v_details['0'].pk).text(val.v_details['0'].name);
                var $option = $("<option/>").attr("value", JSON.stringify(val)).text(val.v_details['0'].name);
                $selecte.append($option);
            });


        });

    });  

</script>


<script>
 
$('#select3').change(function(){
  

      var $selectcolor = $('#select4');
            console.log($selectcolor);
 
      //selectcolor.children().remove();

      var data_str = $.parseJSON(this.value);
      console.log(data_str);

      $.each(data_str.colours, function(index, val){
          var $option = $("<option/>").attr("value", index).text(val);
          $selectcolor.append($option);
      });
     
localStorage.clear();
      
      // Getting the selected ID and text
      var model_pk = $(this).val();
      var model_name = $("option:selected", this).text();

            // Updating as and when the drop down item changes
     localStorage.removeItem("model_pk");
     localStorage.removeItem("model_name");
          // Setting the Local storage
      localStorage.setItem("model_pk", model_pk);
      localStorage.setItem("model_name", model_name);


    });

</script>>




</body>




</html>
