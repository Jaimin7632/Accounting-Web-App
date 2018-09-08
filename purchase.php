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
     <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
   
    <style type="text/css">
        input:not([disabled]),select{
            background: #f5f5f5 !important;
        }
           .logo  img{
            width: 200px;
        }
    </style>
</head>

<body  ng-app="myApp">
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
                    <li>
                        <a href="index.php">
                            <i class="material-icons">trending_up</i>
                            <p>Sell / Invoice</p>
                        </a>
                    </li>
                    <li  class="active">
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
                    <li>
                        <a href="./aaddetails.php">
                            <i class="material-icons">bubble_chart</i>
                            <p>Add details</p>
                        </a>
                    </li>
                   
                    <li class="active-pro">
                        <a href="http://www.blackqr.com">
                            
                            <p><center>BLACKQR</center></p>
                        </a>
                    </li>
                    <li >
                        <a href="./deleteinfo.php">
                            <i class="material-icons">restore_from_trash</i>
                            <p>Delete Details</p>
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
                        <a class="navbar-brand" href="#">Purchase </a>
                    </div>
                    
                </div>
            </nav>
            <div class="content">
                    <div class="container-fluid">
                                      <div class="row" ng-controller="customersCtrl">
                            <div class="card">
                                <div class="card-header" data-background-color="purple">
                                    <h4 class="title">Purchase</h4>
                                    <p class="category"></p>
                                </div>
                                <div class="card-content">
                                    <form>
                                        
                                        <div class="row">
                                            
                                            <div class="col-md-8">
                                                <div class="form-group label">
                                                     <input list="browsers" class="form-control" id="partyname" ng-model="pname" ng-change="myFunc()" autocomplete="off">
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
                                            <div class="col-md-4">
                                                <div class="form-group label">
                                                    <label class="control-label">Date</label>
                                                    <input type="date" value="" class="form-control" id="date" ng-model="date" >
                                                </div>
                                            </div>
                                         </div>    
                                        
                                      
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group label">
                                                    <label class="control-label"></label>

                                                     <select class="form-control" id="product" ng-model="product" ng-change="productSelect()">
                                                        <option value="">Product</option>
                                                        <?php
                                                        $ww=$conn->query("SELECT * from product_detail");
                                                        while($w=mysqli_fetch_assoc($ww)){
                                                            echo '<option value="'.$w['name'].'">'.$w['name'].'</option>';
                                                        } 
                                                        ?>
                                                      </select>  
                                                </div>
                                                
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group label">
                                                    <label class="control-label">HSN no</label>
                                                    <input type="text" class="form-control" id="hsnno" ng-model="hsnno"  disabled>
                                                </div>
                                            </div>
                                           </div>
                                            
                                            <div class="row">
                                                    <div class="col-md-4">
                                                    <div class="form-group label">
                                                        <label class="control-label">Quantity / <span id="dquantity"></span></label>
                                                        <input type="text" class="form-control" id="quantity" ng-model="quantity" ng-change="amountCount()" >
                                                    </div>
                                                </div>
                                                    <div class="col-md-4">
                                                    <div class="form-group label">
                                                        <label class="control-label">Rate / <span id="drate"></span></label>
                                                        <input type="text" class="form-control" id="rate" ng-model="rate" ng-change="amountCount()"  >
                                                    </div>
                                                </div>
                                                    <div class="col-md-4">
                                                    <div class="form-group label">
                                                        <label class="control-label">amount</label>
                                                        <input type="text" class="form-control" id="amount" ng-model="amount" disabled >
                                                    </div>
                                                </div>
                                             </div> 
                                             <div class="row">
                                                         <div class="col-md-4">
                                                        <div class="form-group label">
                                                            <label class="control-label">sgst (<b><span id="sgst"></span></b>% )</label>
                                                            <input type="text" class="form-control" id="asgst" ng-model="sgst"  disabled>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group label">
                                                            <label class="control-label">cgst (<b><span id="cgst"></span></b>% )</label>
                                                            <input type="text" class="form-control" id="acgst" ng-model="cgst"  disabled>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group label">
                                                            <label class="control-label">igst (<b><span id="igst"></span></b>% )</label>
                                                            <input type="text" class="form-control" id="aigst" ng-model="igst"  disabled>
                                                        </div>
                                                    </div>
                                             </div>    
                                             <div class="row">
                                                <div class="col-md-6">
                                                        <div class="form-group label">
                                                            <label class="control-label">Total Amount</label>
                                                            <input type="text" class="form-control" id="tamount" ng-model="tamount"  disabled>
                                                        </div>
                                                    </div>
                                             </div>

                                             
                                        
                                        <button type="submit" class="btn btn-primary pull-right" id="purchase">SUBMIT</button>
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
<script>
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
    $('select').each(function() {
        if($(this).val()!=""){
            $(this).val("");
        }
    });
    
    }
var app = angular.module('myApp', []);
app.controller('customersCtrl', function($scope, $http) {
    var obj;
    $scope.myFunc = function() {

      if ($scope.pname != "") {
         $.post("php/getpartydetails.php",
         {
             name: $scope.pname
         },
        function(data, status){
           // alert("dasdas");
           if(data!="khedut"){
           obj = JSON.parse(data);
         
            $('#sgst').text(obj.sgst);
            $('#cgst').text(obj.cgst);
            $('#igst').text(obj.igst);
             $scope.amountCount();
            }
            else{
                 $('#sgst').text("0");
            $('#cgst').text("0");
            $('#igst').text("0");
             $scope.amountCount();
            }
        });
      }else{
          
            $('#sgst').text("");
            $('#cgst').text("");
            $('#igst').text("");
            $('#tamount').val("");
             $scope.amountCount();
      }

    };

    $scope.productSelect=function(){
        if($scope.product != ""){
                         $.post("php/getproductdetails.php",
                     {
                         name: $scope.product
                     },
                    function(data, status){
                       // alert("dasdas");
                       obj = JSON.parse(data);
                         $('#hsnno').val(obj.hsn);
                       $('#dquantity').text(obj.dquality);
                       $('#drate').text(obj.drate);
                       
                       $scope.amountCount();

                    });
        }else{
              $('#hsnno').val("");
                       $('#quantity').val("");
                       $('#rate').val("");
                       $('#amount').val("");
                       $('#tamount').val("");
                        $('#dquantity').text("");
                       $('#drate').text("");
                       

        }
        return false;
    };

    $scope.amountCount= function(){
        quantity= $('#quantity').val();
        rate= $('#rate').val();
        dquantity= $('#dquantity').text();
        drate= $('#drate').text();
        sgst= $('#sgst').text();
        cgst= $('#cgst').text();
        igst= $('#igst').text();

        if(quantity != "" && rate!=""){
                    var tdquantity=quantity;
                if(dquantity != 0 && dquantity != 00 && dquantity != ""){ tdquantity=quantity/dquantity;  }
                //console.log(tdquantity);
                var tdrate=rate;
                if(drate != 0 && drate != 00 && drate != ""){ tdrate=rate/drate; }

                amount=tdquantity*tdrate;
                $('#amount').val(amount);
                
                var totalamount = amount;
                if(sgst != 0 && sgst != 00 && sgst != ""){ totalamount=totalamount+(amount*(sgst/100));
                $('#asgst').val(amount*(sgst/100)); }

                if(cgst != 0 && cgst != 00 && cgst != ""){ totalamount=totalamount+(amount*(cgst/100));
                $('#acgst').val(amount*(cgst/100)); }

                if(igst != 0 && igst != 00 && igst != ""){ totalamount=totalamount+(amount*(igst/100));
                $('#aigst').val(amount*(igst/100)); }

                $('#tamount').val(totalamount);


        }else{
              $('#asgst').val("");
            $('#acgst').val("");
            $('#aigst').val("");
            $('#amount').val("");
            $('#tamount').val("");
        }
    };
    
});
</script>
<script type="text/javascript">
    $(document).ready(function() {

        // Javascript method's body can be found in assets/js/demos.js
        //demo.initDashboardPageCharts();
          $('#purchase').click(function(){
            partyname = $('#partyname').val();
            product= $('#product').val();
            date = $('#date').val();
            quantity = $('#quantity').val();
            rate = $('#rate').val();
            amount=$('#amount').val();
            sgst=$('#asgst').val();
            cgst=$('#acgst').val();
            igst=$('#aigst').val();
            tamount = $('#tamount').val();
           
            
            if(partyname != "" && product != "" && quantity!= "" && rate!="" && date!= ""){
                       $.post("php/addpurchasedetails.php",
                     {
                         name: partyname,
                         product:product,
                         date:date,
                         quantity:quantity,
                         rate:rate,
                         amount:amount,
                         sgst:sgst,
                         cgst:cgst,
                         igst:igst,
                         tamount:tamount
                         
                     },
                    function(data, status){
                       // alert("dasdas");
                      if(data == 'error'){
                        showNoti("danger","Error Contact to Developer ");
                        return false;
                      }else{ showNoti("success",data); empty(); return true;}

                    });

            }else{
                showNoti("warning","Please Fill the Fields First");
                return false;
            }

      });

    });
</script>

</html>