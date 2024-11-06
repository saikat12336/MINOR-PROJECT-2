<?php
ob_start();
// class check{
//   public $db = null;

//     public function __construct(DBController $db)
//     {
//         if(!isset($db->con)) return null;
//         $this->db = $db;
//     }

//     //  calculate sub total
// public function getSum($arr){
//   if(isset($arr)){
//       $sum = 0;
//       foreach ($arr as $item){
//           $sum += floatval($item[0]);
//       }
//       return sprintf('%.2f', $sum);
//   }
// }
// }
// include header.php file
include('header.php');
include('./Template/_cart-template.php');

?>



<body>
  <style>
    .box{
      height: 30rem;
      background-color: #fff;
      position: relative;
      top: -20.5rem;
    }
    .container{
      position: relative;
      margin-top: -24rem;
      top: -25rem;
    }

  </style>
  <div class="box"></div>

  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-6 px-4 pb-4" id="order">
        <h4 class="text-center text-info p-2">Complete your order!</h4>
        <div class="jumbotron p-3 mb-2 text-center">
          <h6 class="lead"><b>Product(s) : <?php echo isset($subTotal) ? count($subTotal) : 0; ?></b></h6>
          <h6 class="lead"><b>Delivery Charge : </b>Free</h6>
          <h5><b>Total Amount Payable : <span class="text-danger">$<span class="text-danger" id="deal-price"><?php echo isset($subTotal) ? $Cart->getSum($subTotal) : 0; ?></span> </span> </h5>
        </div>
        <form action="" method="post" id="placeOrder">
          <input type="hidden" name="products" value="<?= $allItems; ?>">
          <input type="hidden" name="grand_total" value="<?= $subTotal; ?>">
          <div class="form-group">
            <input type="text" name="name" class="form-control" placeholder="Enter Name" required>
          </div>
          <div class="form-group">
            <input type="email" name="email" class="form-control" placeholder="Enter E-Mail" required>
          </div>
          <div class="form-group">
            <input type="tel" name="phone" class="form-control" placeholder="Enter Phone" required>
          </div>
          <div class="form-group">
            <input type="pin" name="pincode" class="form-control" placeholder="Pin Code" required>
          </div>
          <div class="form-group">
            <textarea name="address" class="form-control" rows="3" cols="10" placeholder="Enter Delivery Address Here..."></textarea>
          </div>
          <h6 class="text-center lead">Select Payment Mode</h6>
          <div class="form-group">
            <select name="pmode" class="form-control">
              <option value="" selected disabled>-Select Payment Mode-</option>
              <option value="cod">Cash On Delivery</option>
              <option value="netbanking">Net Banking</option>
              <option value="cards">Debit/Credit Card</option>
            </select>
          </div>
          <div class="form-group">
            <input type="submit" name="submit" value="Place Order" class="btn btn-danger btn-block">
          </div>
        </form>
      </div>
    </div>
  </div>

</body>

</html>