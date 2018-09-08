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
   <link rel="stylesheet" href="fontawesome/web-fonts-with-css/css/fontawesome-all.css" >

    <script src="assets/angular.min.js"></script>
    <style type="text/css">
        input:not([disabled]),select{
            background: #f5f5f5 !important;
        }
        input:focus,.btn:focus,select:focus{
           box-shadow: 0 0 2px 1px #ff4d4d !important;
        }
        body{
            letter-spacing: 1px;
            word-spacing: 2px;
            font-weight: lighter;
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
                <a href="#" class="simple-text">
                 <img src="assets/img/sutc.png">
                </a>
            </div>
            <div class="sidebar-wrapper">
                <ul class="nav">
                    <li class="active">
                        <a href="index.php">
                            <i class="fas fa-receipt"></i>
                            <p>Sell / Invoice</p>
                        </a>
                    </li>
                    <li>
                        <a href="./purchase.php">
                            <i class="fas fa-shopping-cart"></i>
                            <p>Purchase</p>
                        </a>
                    </li>
                    <li>
                        <a href="./payment.php">
                            <i class="far fa-credit-card"></i>
                            <p>Payment / receipt</p>
                        </a>
                    </li>
                    <li>
                        <a href="./paymentreport.php">
                            <i class="far fa-file-alt"></i>
                            <p>Payment Report</p>
                        </a>
                    </li>
                    <li>
                        <a href="./stock.php">
                            <i class="far fa-hdd"></i>
                            <p>Stock Report</p>
                        </a>
                    </li>
                    <li>
                        <a href="./aaddetails.php">
                            <i class="fas fa-user-plus"></i>
                            <p>Add details</p>
                        </a>
                    </li>
                   <li >
                        <a href="./deleteinfo.php">
                            <i class="far fa-trash-alt"></i>
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
                        <a class="navbar-brand" href="#">Sell / invoice </a>
                    </div>
                    
                </div>
            </nav>
            <div class="content">
                 <div class="container-fluid">
                        <div class="row" ng-controller="customersCtrl">
                            <div class="card">
                                <div class="card-header" data-background-color="purple">
                                    <h4 class="title">Sell / invoice</h4>
                                    <p class="category"></p>
                                </div>
                                <div class="card-content">
                                    <form>
                                        <?php
                                        include "php/connection.php";
                                        $res= $conn->query("SELECT * from party_detail");

                                        ?>
                                        <div class="row">
                                            
                                            <div class="col-md-8">
                                                <div class="form-group label">
                                                    
                                                    <select class="form-control" id="partyname" ng-model="pname" ng-change="myFunc()">
                                                        <option value="">Party Name</option>
                                                        <?php
                                                        while($r=mysqli_fetch_assoc($res)){
                                                        echo '<option value="'.$r['name'].'">'.$r['name'].'</option>';
                                                    }
                                                        ?>
                                                       
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group label">
                                                    <label class="control-label">Date</label>
                                                    <input type="date" value="" class="form-control" id="date" ng-model="date" >
                                                </div>
                                            </div>
                                         </div>    
                                         <div class="row" >
                                            <div class="col-md-6">
                                                <div class="form-group label">
                                                    <label class="control-label">Tin Number</label>
                                                    <input type="text" class="form-control" id="tno" disabled ng-model="tno">
                                                </div>
                                            </div>
                                       
                                        
                                            <div class="col-md-6">
                                                <div class="form-group label">
                                                    <label class="control-label">Contact Number</label>
                                                    <input type="text" class="form-control" id="contactno" disabled ng-model="contactno">
                                                </div>
                                            </div>
                                         </div>
                                         <div class="row">   
                                            <div class="col-md-4">
                                                <div class="form-group label">
                                                    <label class="control-label">GST Number</label>
                                                    <input type="text" class="form-control" id="gstno" ng-model="gstno"  disabled>
                                                </div>
                                            </div>
                                        
                                        
                                            <div class="col-md-4">
                                                <div class="form-group label">
                                                    <label class="control-label">State</label>
                                                    <input type="text" class="form-control" id="state" ng-model="state"  disabled>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group label">
                                                    <label class="control-label">State Code</label>
                                                    <input type="text" class="form-control" id="statecode" ng-model="statecode"  disabled>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group label">
                                                    <label class="control-label">Address</label>
                                                    <input type="text" class="form-control" id="address" ng-model="address"  disabled>
                                                </div>
                                            </div>
                                           
                                        </div>
                                        <h4>Product Details</h4>
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
                                             <hr>
                                             <div class="row">
                                                 <div class="col-md-4"></div>
                                                 <div class="col-md-4">
                                                     <button type="submit" class="btn btn-success" id="notax" style="width: 100%;" ng-click="notax()">No Tax</button>
                                                 </div>
                                                 <div class="col-md-4"></div>
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

                                             <div class="row">
                                                <div class="col-md-6">
                                                        <div class="form-group label-floating">
                                                            <label class="control-label">Eletronic Refrence No</label>
                                                            <input type="text" class="form-control" id="erno" ng-model="erno" >
                                                        </div>
                                                    </div>
                                                <div class="col-md-6">
                                                        <div class="form-group label-floating">
                                                            <label class="control-label">truck no</label>
                                                            <input type="text" class="form-control" id="truckno" ng-model="truckno" >
                                                        </div>
                                                    </div>
                                             </div>
                                             <div class="row">

                                                <div class="col-md-6">
                                                        <div class="form-group label-floating">
                                                            <label class="control-label">Agent</label>
                                                            <input type="text" class="form-control" id="agent" ng-model="agent" >
                                                        </div>
                                                    </div>
                                             </div>
                                             <hr>
                                            <h4>Transport Details</h4>
                                            <div class="row">
                                                <div class="col-md-6">
                                                        <div class="form-group label-floating">
                                                            <label class="control-label">L.R Number</label>
                                                            <input type="text" class="form-control" id="lrno" ng-model="dlr"  >
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group label-floating">
                                                            <label class="control-label">Driver Name</label>
                                                            <input type="text" class="form-control" id="drivername" ng-model="drivername"  >
                                                        </div>
                                                    </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                        <div class="form-group label-floating">
                                                            <label class="control-label">Driver Licence No</label>
                                                            <input type="text" class="form-control" id="lcno" ng-model="lcno"  >
                                                        </div>
                                                    </div>
                                            </div>
                                        
                                        <button type="submit" class="btn btn-primary pull-right" id="sell">SUBMIT</button>
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
      function empty(){
    $('input').each(function() {
        if($(this).val()!=""){
            $(this).val("");
        }
    });
    $('#product').val("");
    $('#partyname').val("");
    }
function showNoti(a,b){
         $.notify({
            icon: "",
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
           obj = JSON.parse(data);
             $('#tno').val(obj.tno);
           $('#gstno').val(obj.gstno);
           $('#address').val(obj.address);
           $('#state').val(obj.state);
           $('#statecode').val(obj.statecode);
           $('#contactno').val(obj.contactno);
            $('#sgst').text(obj.sgst);
            $('#cgst').text(obj.cgst);
            $('#igst').text(obj.igst);
             $scope.amountCount();
        });
      }else{
          $('#tno').val("");
           $('#gstno').val("");
           $('#address').val("");
           $('#state').val("");
           $('#statecode').val("");
           $('#contactno').val("");
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
                if(sgst != 0 && sgst != 00 && sgst != ""){ 
                    totalamount=totalamount+(amount*(sgst/100));
                    $('#asgst').val(amount*(sgst/100));
                     }

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
    $scope.notax=function(){
         $('#asgst').val("");
            $('#acgst').val("");
            $('#aigst').val("");

            $('#sgst').text("");
            $('#cgst').text("");
            $('#igst').text("");
            $scope.amountCount();
    };
});
</script>
<script type="text/javascript">
    $(document).ready(function() {


        // Javascript method's body can be found in assets/js/demos.js
      $('#sell').click(function(){
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
            erno = $('#erno').val();
            truckno = $('#truckno').val();
            agent = $('#agent').val();
            lrno = $('#lrno').val();
            drivername= $('#drivername').val();
            licenceno= $('#lcno').val();
            
            if(partyname != "" && product != "" && quantity!= "" && rate!="" && date!= ""){
                       $.post("php/addselldetails.php",
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
                         tamount:tamount,
                         erno:erno,
                         tkno:truckno,
                         agent:agent,
                         lrno:lrno,
                         drivername:drivername,
                         licenceno:licenceno
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