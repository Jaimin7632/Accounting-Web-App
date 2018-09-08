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
        .innav > .active{
            background: #9c27b0; 
        }
   .logo  img{
            width: 200px;
        }
        .innav >li> a,.innav >li> a:hover,.innav >li> a:visited{color: #9c27b0 !important;}
        
        .innav > li.active >a,.innav > li.active >a:hover {color: #fff !important;}
        
        .innav{background: #fff;  }
        .innav > li{margin: 5px auto !important; }
    </style>
</head>

<body  ng-app="myApp"  ng-controller="customersCtrl">
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
                    <li  >
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
                    <li class="active">
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
                        <a class="navbar-brand" href="#">Delete Details </a>
                    </div>
                    
                </div>
            </nav>
            <div class="content">
                    <div class="container-fluid">
                                      <div class="row">
                            <ul class="nav nav-tabs innav">
    <li class="active"><a data-toggle="tab" href="#deleteparty">Party</a></li>
    <li><a data-toggle="tab" href="#deleteproduct">Product</a></li>
    <li><a data-toggle="tab" href="#deletesell">Sell/Invoice</a></li>
    <li><a data-toggle="tab" href="#deletepurchase">Purchase</a></li>

  </ul>

  <div class="tab-content">
    <div id="deleteparty" class="tab-pane fade in active">
      <h3>Select Party :</h3>
      <select class="form-control" id="partyname" ng-model="pname" >
                                                      <option value="">Party Name</option>
                                                       <option ng-repeat="x in aparty" value="{{x.name}}">{{x.name}}</option>
                                                       
      </select>
      <button class="btn btn-danger pull-left" id="btnpartydelete" ng-click="deleteparty()">DELETE</button>
    </div>
    <div id="deleteproduct" class="tab-pane fade">
      <h3>Select Product :</h3>
      <select class="form-control" id="product" ng-model="product" >
                                                        <option value="">Product Name</option>
                                                        <option ng-repeat="x in aproduct" value="{{x.name}}">{{x.name}}</option>
                                                       
      </select>
      <button class="btn btn-danger pull-left" id="btnproductdelete" ng-click="deleteproduct()" >DELETE</button>
      
    </div>
    <div id="deletesell" class="tab-pane fade">
      <h3>Delete Sell/invoice</h3>
      <table class="table" >
                                        <thead class="text-primary">
                                            <th>No</th>
                                            <th>Date</th>
                                            <th>Party name</th>
                                            <th>Product</th>
                                            <th>Quantity</th>
                                            <th>Rate</th>
                                            <th>Amount</th>                                            
                                            <th>Total Amount</th>
                                            <th></th>
                                            
                                        </thead>
                                        <tbody>
                                            <tr  ng-repeat="x in sell">
                                                <td>{{$index + 1}}</td>
                                                <td >{{x.date}}</td>
                                                <td>{{x.partyname}}</td>
                                                <td>{{x.productname}}</td>
                                                <td class="text-primary">{{x.quantity}}</td>
                                                <td>{{x.rate}}</td>
                                                <td class="text-primary">{{x.amount}}</td>
                                                
                                                <td class="text-primary">{{x.totalamount}}</td>
                                                 <td class="text-primary"><button class="btn btn-danger" ng-click="deletedata('sell',x.date,x.partyname,x.productname,x.quantity,x.rate,x.amount,x.totalamount)">DELETE</button></td>
                                            </tr>
                                           
                                        </tbody>
                                    </table>
    </div>
    <div id="deletepurchase" class="tab-pane fade">
      <h3>Delete Purchase</h3>
      <table class="table" >
                                        <thead class="text-primary">
                                            <th>No</th>
                                            <th>Date</th>
                                            <th>Party name</th>
                                            <th>Product</th>
                                            <th>Quantity</th>
                                            <th>Rate</th>
                                            <th>Amount</th>                                            
                                            <th>Total Amount</th>
                                            <th></th>
                                            
                                        </thead>
                                        <tbody>
                                            <tr  ng-repeat="x in purchase">
                                                <td>{{$index + 1}}</td>
                                                <td >{{x.date}}</td>
                                                <td>{{x.partyname}}</td>
                                                <td>{{x.productname}}</td>
                                                <td class="text-primary">{{x.quantity}}</td>
                                                <td>{{x.rate}}</td>
                                                <td class="text-primary">{{x.amount}}</td>
                                                
                                                <td class="text-primary">{{x.totalamount}}</td>
                                                 <td class="text-primary"><button class="btn btn-danger" ng-click="deletedata('purchase',x.date,x.partyname,x.productname,x.quantity,x.rate,x.amount,x.totalamount)">DELETE</button></td>
                                            </tr>
                                           
                                        </tbody>
                                    </table>
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
    
    }
var app = angular.module('myApp', []);
app.controller('customersCtrl', function($scope, $http) {
   $scope.showdata=function(){
     
     $http.get("php/getappstockreport.php")
    .then(function (response) {
        $scope.sell = response.data.sell;
        $scope.purchase = response.data.purchase;
         $scope.aparty = response.data.party;
          $scope.aproduct = response.data.product;
        // $scope.showdata();
    });
   };
    $scope.showdata();

    $scope.deletedata=function(meth,date,party,product,quantity,rate,amount,totalamount){
      if(confirm("Delete "+party+" "+date+" ?")){
          //console.log("function call");
         $http({
        method: "post",
        url: "php/deletesellpurchase.php",
        data: {
            method:  meth,
            date:  date,
            party: party,
            product: product,
            quantity: quantity,
            rate: rate,
            amount:amount,
            totalamount:totalamount
        },
        headers: { 'Content-Type': 'application/x-www-form-urlencoded' }
    }).then(function(response) {
       $scope.m = response.data.result;
        $scope.showdata();
       if($scope.m.error == 1){
        showNoti("danger","Error");
       }else{
        showNoti("success",$scope.m.message);
       }

     });
      }
    
    };
    $scope.deleteparty=function(){
           party = $('#partyname').val();
       if(party !="" ){
              if(confirm("Delete "+party+" ?")){
                       $.post("php/deleteparty.php",
                 {
                     party: party
                 },
                function(data, status){
                   // alert("dasdas");
                   if(data !="error"){showNoti("success",data);}
                   else{showNoti("danger",data);} 
                    $scope.showdata();
                });
              }
       }
    };
    $scope.deleteproduct=function(){
           product = $('#product').val();
       if(product !=""){
                   if(confirm("Delete "+product+" ?")){
                     $.post("php/deleteproduct.php",
                         {
                             product: product
                         },
                        function(data, status){
                           // alert("dasdas");
                           if(data !="error"){showNoti("success",data);}
                           else{showNoti("danger",data);} 
                            $scope.showdata();
                        });
                   }
       }
    };
});
</script>
<script type="text/javascript">
    $(document).ready(function() {

     

    });
</script>

</html>