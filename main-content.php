<?php require_once('./php/connectdb.php');
$sql = "SELECT * FROM `tb_package`";
$result = mysqli_query($conn, $sql);
?>
<h1><?php $result ?></h1>
<!-- ============================ Tour ==================================== -->
<hr>
<h2 class="text-center">ทริปทัวร์ที่แนะนำ</h2>
<hr>

<div class="container">
	<?php if (mysqli_num_rows($result) > 0) : ?>
		<div class="row text-center">
			<?php $count = 0 ?>
			<?php while ($row = mysqli_fetch_assoc($result)) : ?>
				<?php
				if ($count >= 6) :
					break;
				endif;
				$count++;
				?>

				<div class="col-md-4 pb-1 pb-md-0">
					<div class="card">
						<img class="card-img-top" src=<?php echo $row['image'] ?> alt="Card image cap" height="400px" width="100px">
						<div class="card-body">
							<h5 class="card-title">สถานที่ <?php echo $row['place'] ?> </h5>
							<p class="card-text">จำนวนคน <?php echo $row['count_people'] ?></p>
							<p class="card-text">ราคา : <span class="price"><?php echo $row['price'] ?></span></p>

							<a href="#" class="btn btn-primary">Add to Cart</a>
						</div>
					</div>
				</div>
			<?php endwhile; ?>
		</div>
	<?php else :
		echo "<p class='mt-5'>ไม่มีข้อมูลในฐานข้อมูล</p>";
	endif; ?>
</div>


<!-- ============================ Tour ==================================== -->



<hr>
<h2 class="text-center">FEATURED PRODUCTS</h2>
<hr>
<div class="container">
	<div class="row">
		<div class="col-lg-4">
			<ul class="list-unstyled">
				<li class="media">
					<img class="mr-3" src="./assets/images/100X125.gif" alt="Generic placeholder image">
					<div class="media-body">
						<h5 class="mt-0 mb-1">List-based media object</h5>
						Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
					</div>
				</li>
				<li class="media my-4">
					<img class="mr-3" src="./assets/images/100X125.gif" alt="Generic placeholder image">
					<div class="media-body">
						<h5 class="mt-0 mb-1">List-based media object</h5>
						Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
					</div>
				</li>
				<li class="media">
					<img class="mr-3" src="./assets/images/100X125.gif" alt="Generic placeholder image">
					<div class="media-body">
						<h5 class="mt-0 mb-1">List-based media object</h5>
						Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
					</div>
				</li>
			</ul>
		</div>
		<div class="col-lg-4">
			<ul class="list-unstyled">
				<li class="media">
					<img class="mr-3" src="./assets/images/100X125.gif" alt="Generic placeholder image">
					<div class="media-body">
						<h5 class="mt-0 mb-1">List-based media object</h5>
						Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
					</div>
				</li>
				<li class="media my-4">
					<img class="mr-3" src="./assets/images/100X125.gif" alt="Generic placeholder image">
					<div class="media-body">
						<h5 class="mt-0 mb-1">List-based media object</h5>
						Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
					</div>
				</li>
				<li class="media">
					<img class="mr-3" src="./assets/images/100X125.gif" alt="Generic placeholder image">
					<div class="media-body">
						<h5 class="mt-0 mb-1">List-based media object</h5>
						Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
					</div>
				</li>
			</ul>
		</div>
		<div class="col-lg-4">
			<ul class="list-unstyled">
				<li class="media">
					<img class="mr-3" src="./assets/images/100X125.gif" alt="Generic placeholder image">
					<div class="media-body">
						<h5 class="mt-0 mb-1">List-based media object</h5>
						Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
					</div>
				</li>
				<li class="media my-4">
					<img class="mr-3" src="./assets/images/100X125.gif" alt="Generic placeholder image">
					<div class="media-body">
						<h5 class="mt-0 mb-1">List-based media object</h5>
						Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
					</div>
				</li>
				<li class="media">
					<img class="mr-3" src="./assets/images/100X125.gif" alt="Generic placeholder image">
					<div class="media-body">
						<h5 class="mt-0 mb-1">List-based media object</h5>
						Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
					</div>
				</li>
			</ul>
		</div>
	</div>
</div>
<hr>