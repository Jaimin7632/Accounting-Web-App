<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png" />
    <link rel="icon" type="image/png" href="assets/img/favicon.png" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Material Dashboard by Creative Tim</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <!--  Material Dashboard CSS    -->
    <link href="assets/css/material-dashboard.css?v=1.2.0" rel="stylesheet" />
    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />
    <!--     Fonts and icons     -->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/css/googlefont.css" rel='stylesheet'>
    <style type="text/css">
           .logo  img{
            width: 200px;
        }
    </style>
</head>

<body>
    <div class="wrapper">
        <div class="sidebar" data-color="purple" data-image="assets/img/sidebar-1.jpg">
            <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

        Tip 2: you can also add an image using data-image tag
    -->
            <div class="logo">
                <a href="http://www.creative-tim.com" class="simple-text">
                   <img src="assets/img/sutc.png">
                </a>
            </div>
            <div class="sidebar-wrapper">
                <ul class="nav">
                    <li >
                        <a href="index.php">
                            <i class="material-icons">trending_up</i>
                            <p>Sell / Invoice</p>
                        </a>
                    </li>
                    <li>
                        <a href="./purchase.php">
                            <i class="material-icons">playlist_add</i>
                            <p>Purchase</p>
                        </a>
                    </li>
                    <li>
                        <a href="./payment.php">
                            <i class="material-icons">swap_horizontal_circle</i>
                            <p>Payment / receipt</p>
                        </a>
                    </li>
                    <li>
                        <a href="./paymentreport.php">
                            <i class="material-icons">account_balance_wallet</i>
                            <p>Payment Report</p>
                        </a>
                    </li>
                    <li>
                        <a href="./stock.php">
                            <i class="material-icons">line_style</i>
                            <p>Stock Report</p>
                        </a>
                    </li>
                    <li class="active">
                        <a href="./aaddetails.php">
                            <i class="material-icons">bubble_chart</i>
                            <p>Add details</p>
                        </a>
                    </li>
                   <li >
                        <a href="./deleteinfo.php">
                            <i class="material-icons">restore_from_trash</i>
                            <p>Delete Details</p>
                        </a>
                    </li>
                    <li class="active-pro">
                        <a href="http://www.blackqr.com">
                            
                            <p><center>BLACKQR</center></p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="main-panel">
            <nav class="navbar navbar-transparent navbar-absolute">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#">Add Details </a>
                    </div>
                    
                </div>
            </nav>
            <div class="content">
            <div class="container-fluid">
                        <div class="row">
                            <div class="card">
                                <div class="card-header" data-background-color="purple">
                                    <h4 class="title">Party Details</h4>
                                    <p class="category"></p>
                                </div>
                                <div class="card-content">
                                    <form>
                                        <div class="row">
                                            
                                            <div class="col-md-12">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Party Name</label>
                                                    <input type="text" class="form-control" id="partyname" list="browsers" autocomplete="off">
                                                    <datalist id="browsers">
                                                            <?php
                                                                include "php/connection.php";
                                                                $res= $conn->query("SELECT * from party_detail");
                                                                while($r=mysqli_fetch_assoc($res)){
                                                                echo '<option value="'.$r['name'].'">'.$r['name'].'</option>';
                                                                 }
                                                              ?>
                                                          </datalist>
                                                </div>
                                            </div>
                                         </div>    
                                         <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Tin Number</label>
                                                    <input type="text" class="form-control" id="tno">
                                                </div>
                                            </div>
                                       
                                        
                                            <div class="col-md-6">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Contact Number</label>
                                                    <input type="text" class="form-control" id="contactno">
                                                </div>
                                            </div>
                                         </div>
                                         <div class="row">   
                                            <div class="col-md-4">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">GST Number</label>
                                                    <input type="text" class="form-control" id="gstno">
                                                </div>
                                            </div>
                                        
                                        
                                            <div class="col-md-4">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">State</label>
                                                    <input type="text" class="form-control" id="state">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">State Code</label>
                                                    <input type="text" class="form-control" id="statecode" onkeyup="sta()">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Address</label>
                                                    <input type="text" class="form-control" id="address">
                                                </div>
                                            </div>
                                           
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">SGST (%)</label>
                                                    <input type="text" class="form-control" id="sgst">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">CGST (%)</label>
                                                    <input type="text" class="form-control" id="cgst">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">IGST (%)</label>
                                                    <input type="text" class="form-control" id="igst">
                                                </div>
                                            </div>
                                         </div>
                                        
                                        <button type="submit" class="btn btn-primary pull-right" id="addparty">ADD PARTY</button>
                                        <div class="clearfix"></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="card">
                                <div class="card-header" data-background-color="purple">
                                    <h4 class="title">Product Details</h4>
                                    <p class="category"></p>
                                </div>
                                <div class="card-content">
                                    <form>
                                        <div class="row">
                                            
                                            <div class="col-md-7">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Product Name</label>
                                                    <input type="text" class="form-control" id="productname" list="pro"
                                                    autocomplete="off">
                                                    <datalist id="pro">
                                                            <?php
                                                               
                                                                $re= $conn->query("SELECT * from product_detail");
                                                                while($r=mysqli_fetch_assoc($re)){
                                                                echo '<option value="'.$r['name'].'">'.$r['name'].'</option>';
                                                                 }
                                                              ?>
                                                          </datalist>
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">HSN Number</label>
                                                    <input type="text" class="form-control" id="hsnno">
                                                </div>
                                            </div>
                                         </div>    
                                         
                                         <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">(Quality / *)</label>
                                                    <input type="text" class="form-control" id="dquality">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">(Rate / *)</label>
                                                    <input type="text" class="form-control" id="drate">
                                                </div>
                                            </div>
                                            
                                         </div>
                                        
                                        <button type="submit" class="btn btn-primary pull-right" id="addproduct">ADD PRODUCT</button>
                                        <div class="clearfix"></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            <footer class="footer">
                <div class="container-fluid">
                 
                    <p class="copyright pull-right">
                        &copy;
                        <script>
                            document.write(new Date().getFullYear())
                        </script>
                        <a href="http://www.creative-tim.com">BlackQR</a>, the digital product agency
                    </p>
                </div>
            </footer>
        </div>
    </div>
</body>
<!--   Core JS Files   -->
<script src="assets/js/jquery-3.2.1.min.js" type="text/javascript"></script>

<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
<script src="assets/js/material.min.js" type="text/javascript"></script>
<!--  Charts Plugin -->
<script src="assets/js/chartist.min.js"></script>
<!--  Dynamic Elements plugin -->
<script src="assets/js/arrive.min.js"></script>
<!--  PerfectScrollbar Library -->
<script src="assets/js/perfect-scrollbar.jquery.min.js"></script>
<!--  Notifications Plugin    -->
<script src="assets/js/bootstrap-notify.js"></script>
<!--  Google Maps Plugin    -->
<!-- Material Dashboard javascript methods -->
<script src="assets/js/material-dashboard.js?v=1.2.0"></script>
<!-- Material Dashboard DEMO methods, don't include it in your project! -->
<script src="assets/js/demo.js"></script>
<script type="text/javascript">
    function sta(){
        sc = $('#statecode').val();
        //alert(sc);
        if(sc=="24"){
            $('#igst').prop("disabled",true);
            $('#sgst').prop("disabled",false);
            $('#cgst').prop("disabled",false);
        }else{
            $('#igst').attr("disabled",false);
            $('#sgst').attr("disabled",true);
            $('#cgst').attr("disabled",true);
        }
    }

</script>
<script type="text/javascript">
       function empty(){
    $('input').each(function() {
        if($(this).val()!=""){
            $(this).val("");
        }
    });
    
    }
function showNoti(a,b){
         $.notify({
            icon: "notifications",
            message: b

        }, {
            type: a,
            timer: 1000,
            placement: {
                from: "top",
                align: "center"
            }
        });
}
    $(document).ready(function(){
        $("#addparty").click(function(){
            partyname= $("#partyname").val();
            tno= $("#tno").val();
            gst= $("#gstno").val();
            contact= $("#contactno").val();
            state= $("#state").val();
            statecode= $("#statecode").val();
            address= $("#address").val();
            sgst= $("#sgst").val();
            cgst= $("#cgst").val();
            igst= $("#igst").val();
            if (partyname == "" ||tno == "" ||gst == "" ||contact == "" || state == "" || statecode== "" ||address == "" ) {
                showNoti("warning","Please Fill the Fields First");
                return false;
            }else {
                $.post("php/addparty.php",
                   {
                      pname:partyname,
                      tinno:tno,
                      gstno:gst,
                      contactno:contact,
                      state:state,
                      statecode:statecode,
                      address:address,
                       sgst:sgst,
                      cgst:cgst,
                      igst:igst
                },
                function(data, status){
                showNoti("success", data);
                empty();
                return false;
              });
                }
                return false;
        });

        $("#addproduct").click(function(){
            product= $("#productname").val();
            
            dquality= $("#dquality").val();
            drate= $("#drate").val();
            hsnno= $("#hsnno").val();
            if (product == ""  ||hsnno == "") {
                showNoti("warning","Please Fill the Fields First");
                return false;
            }else {
                $.post("php/addproduct.php",
                   {
                      product:product,
                     
                      dquality:dquality,
                      drate:drate,
                      hsnno:hsnno
                },
                function(data, status){
                showNoti("success", data );
                empty();
                return true;
              });
                }
                return false;
        });
    });
</script>
</html>