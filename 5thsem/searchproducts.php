<?php
//include('header.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mobile Shopee</title>

    <!-- bootstrap cdn -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- Owl-carousel CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha256-UhQQ4fxEeABh4JrcmAJ1+16id/1dnlOEVCFOxDef9Lw=" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha256-kksNxjDRxd/5+jGurZUJd1sdR2v+ClrCl3svESBaJqw=" crossorigin="anonymous" />


<!-- font awesome icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous" />

<!-- custom css file -->
<link rel="stylesheet"href="style.css">

</head>

<body>
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2" style="margin-top: 5%;">
				<div class="row">
                <?php
						$connection=mysqli_connect('localhost','root','','shopee');
						if(isset($_POST['search'])){
							$searchKey=$_POST['search'];
							$sql="SELECT * FROM product WHERE item_brand OR item_name LIKE '%$searchKey%'";
						}else{
						$sql="SELECT * FROM product";
						$searchKey="";
						}

						$result = mysqli_query($connection,$sql);
					?>
				<form action="" method="POST"> 
					<div class="col-md-6">
						<input type="text" name="search" class='form-control' placeholder="Search By Name" value="<?php	echo $searchKey; ?>" > 
					</div>
					<div class="col-md-6 text-left">
						<button class="btn">Search</button>
					</div>
				</form>

				<br>
				<br>
				<!-- </div> -->
				<table>
				<section id="product" class="py-5">
                <?php
					if($result->num_rows > 0){
						while($row=mysqli_fetch_object($result)){
					?>
                    <div class="container border" >
                    
                        <div class="row">
                            <div class="col-md-6">
                               <img src="<?php echo "".$row->item_image ?>" width="40%" alt="Image">
                            </div>
                            <div class="col-sm-6 py-2" style="position: relative; left: -10rem;">
                                <h5 class="font-baloo font-size-20"><?php echo $row->item_name ?></h5>
                                <small>by Samsung</small>
                                <div class="d-flex">
                                    <div class="raiting text-warning font-size-12">
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="far fa-star"></i></span>
                                      </div>
                                      <a href="#" class="px-5 font-rale font-size-14">20,534 ratings | 1000+ answered questions</a> 
                                </div>
                                
                                <!-- product price -->
                                    <table my-3>
                                        <tr class="font-rale font-size-14">
                                            <td>M.R.P:</td>
                                            <td><strike>$230.00</strike></td>
                                            <td>&nbsp&nbsp Deal Price:&nbsp</td>
                                            <td class="font-size-20 text-danger">$<span><?php echo $row->item_price ?></span><small class="text-dark font-size-12"></small></td>
                                        </tr>
                                        
                                    </table>
                                <!-- !product price -->

                                <!-- policy -->
                                <div id="policy">
                                    <div class="d-flex">
                                        <span>FREE Delivery</span>
                                    </div>
                                </div>
                                <!-- !policy -->
                                
                        <!-- order details -->
                            <div id="order-details" class="font-rale d-flex flex-column text-dark">
                                <small>Delivery by : Nov 20 - Nov 25</small>
                                <small>Sold by <a href="#">Daily Electronics</a>(4.5 out of 5 | 18,198 ratings)</small>
                            </div>
                        <!-- !order details -->
					
                        </div>

                        </div>
                    </div><br>
                </section>
				<?php }	}else
					echo "OPPS NO RECORD FOUND !!"; ?>
</table>
				
			</div>
		</div>
	</div>
</body>
</html>