<?php
require_once('./php/connectdb.php');
$sql = "SELECT * FROM `tb_package`";
$result = mysqli_query($conn, $sql);
require "./header.php";
?>
<h1><?php $result ?></h1>
<!-- ============================ Tour ==================================== -->
<hr>
<h2 class="text-center">ทริปทัวร์ที่แนะนำ</h2>
<hr>
<div class="container">
	<?php if (mysqli_num_rows($result) > 0) : ?>
		<div class="row text-center">
			<?php while ($row = mysqli_fetch_assoc($result)) : ?>
				<div class="col-md-4 pb-1 pb-md-0">
					<div class="card">
						<img class="card-img-top" src=<?php echo $row['image'] ?> alt="Card image cap" height="400px" width="100px">
						<div class="card-body">
							<h5 class="card-title">สถานที่ <?php echo $row['place'] ?> </h5>
							<p class="card-text"><h3>จำนวนคน <?php echo $row['count_people'] ?></h3></p>
							<p class="card-text"><h3>ราคา : <span class="price"><?php echo $row['price'] ?></h3></span></p>
							<?php if (isset($_SESSION['UserId'])) : ?>
								<a href="#" class="btn btn-primary">Add to Cart</a>
							<?php endif; ?>
								<a href="./information.php?id=<?php echo $row['package_id'] ?>" class="btn btn-warning"><h3> รายละเอียดเพิ่มเติม </h3></a>
								
						</div>
					</div>
				</div>
			<?php endwhile; ?>
		</div>
	<?php else :
		echo "<p class='mt-5'>ไม่มีข้อมูลในฐานข้อมูล</p>";
	endif; ?>
</div>
<?php
require "./footer.php";
?>