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
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons" rel='stylesheet'>
    <style type="text/css">
  .radio label{font-size: 15px; color: #000;}
.radio label input{transform: scale(2) !important;}
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
                    <li class="active">
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
                    <li>
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
                        <a class="navbar-brand" href="#">Payment</a>
                    </div>
                    
                </div>
            </nav>
            <div class="content">
                    <div class="container-fluid">

                        <div class="row">
                            <div class="card">
                                <div class="card-header" data-background-color="purple">
                                    <h4 class="title">Payment</h4>
                                    <p class="category"></p>
                                </div>
                                <div class="card-content">
                                    <form>
                                        <div class="row">
                                            <center>
                                                <div class="col-md-6 x">
                                                    <div class="radio" >
                                                      <label style="width: 100px;"><input type="radio" name="optradio" value="pay" id="pay" >Pay</label>
                                                    </div>

                                                </div>
                                                <div class="col-md-6 x">
                                                    <div class="radio" >
                                                      <label style="width: 100px;"><input type="radio" name="optradio" value="receive" id="receive">Receive</label>
                                                    </div>
                                                </div>
                                                
                                            </center>
                                         </div>    
                                         <hr> 
                                         <div class="row">
                                            
                                            <div class="col-md-8">
                                                <div class="form-group label">
                                                    
                                                    <select class="form-control" id="partyname" onchange="myFunc()">
                                                        <option value="">Party Name</option>
                                                        <?php
                                                         include "php/connection.php";
                                                         $res= $conn->query("SELECT * from party_detail");

                                                        while($r=mysqli_fetch_assoc($res)){
                                                        echo '<option value="'.$r['name'].'">'.$r['name'].'</option>';
                                                            }
                                                       ?>
                                                       
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <center><input type="button" id="pamount" class="btn btn-warning" name="" value="amount"></center>
                                            </div>
                                         </div>    
                                         <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group label">
                                                    <label class="control-label">Date</label>
                                                    <input type="date" value="" class="form-control" id="date" >
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Amount</label>
                                                    <input type="text" class="form-control" id="amount">
                                                </div>
                                            </div>
                                            
                                            
                                         </div>
                                        
                                        <button type="button" class="btn btn-primary pull-right" id="fpayment">SUBMIT</button>
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
                        <a href="http://www.blackqr.com">BlackQR</a>, the digital product agency
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
  function empty(){
    $('input').each(function() {
        if($(this).val()!=""){
            $(this).val("");
        }
    });
    $('#partyname').val("");
    $('#pay').val("pay");
    $('#receive').val("receive");
    }
    function myFunc(){
        name =$('#partyname').val();
        if(name!=""){
                  $.post("php/getpartyamount.php",
         {
             pname: name
         },
        function(data, status){
           // alert("dasdas");
          
          $('#pamount').val(data);
        });
        }
       }
$(document).ready(function(){
   
    $('#fpayment').click(function(){
        pname= $('#partyname').val();
        amount=$('#amount').val();
        date1= $('#date').val();
        var method="";
        var elements = document.getElementsByName("optradio");
            for (var i = 0, l = elements.length; i < l; i++)
            {
                if (elements[i].checked)
                {
                    method= elements[i].value;
                }
            }
        if(pname!="" && amount!="" && date1!="" && method!=""){
                $.post("php/addpartypayment.php",
                 {
                     name: pname,
                     amount: amount,
                     date1: date1,
                     method: method
                 },
                function(data, status){
                   // alert("dasdas");
                   if(data != "error"){showNoti("success",data); empty();
                   return true;}else{
                    showNoti("danger","Error in payment add");
                    return false;
                   }
                });
           
        }else{
            showNoti("warning","Please fill the all field first");
            return false;
        }
    });
});
</script>

</html>