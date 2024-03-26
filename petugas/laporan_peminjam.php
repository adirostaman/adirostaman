<?php
include 'header.php';
include 'navbar.php';
?>
<div class ="content mt-3">
		<div class ="card">
			<div class ="card-body">
			<p>Halo <b><?php echo $_SESSION['username']; ?></b> Anda telah login sebagai <b><?php echo $_SESSION['level'];?></b>.</p>
			</p>
		</div>
	</div>
</div>
<?php
include 'footer.php';
?>