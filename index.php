<!-- POŁĄCZENIE Z BAZĄ -->
<?php include("connect.php"); ?>
<!-- POBIERANIE DANYCH Z BAZY -->
<?php $res = get_page("*", "main", $conn); ?>
<!DOCTYPE html>
<html lang="pl">
<?php include("head.php"); ?>
<body>
<!-- ZAŁĄCZENIE PASKA NAWIGACYJNEGO -->
<?php include("navbar.php"); ?>
	<div id="home" class="bgimg-1">
		<div>
			<div style="display: table; height: 94vh; overflow: hidden;">
				<div style="display: table-cell; vertical-align: middle;">
					<!--NAZWA FIRMY-->
					<div class="text-logo text-logo-tel">
						<b>
						<!--<?php echo $res["c_name"]; ?>-->
						Abcern Sp. z o.o.
						</b>
	                </div>
					  <!--MOTTO FIRMY-->
	                <div class="text-motto text-motto-tel">
						<!--<?php echo $res["c_motto"]; ?>-->
						tutaj będzie motto firmy.
	                </div>
				</div>
			</div>
		</div>
		<div>
			<center>
				<a href="#about" id="top">
					<i class="btn fa fa-toggle-down fa-2x icon"></i>
				</a>
			</center>
		</div>
	</div>
	<section id="about">
		<div class="container space">
			<h1>O NAS</h1>
			<hr>
			<!--OPIS FIRMY-->
			<div>
				<!--<?php echo $res["c_description"]; ?>-->
				Firma Abcern Sp. z o. o. powstała w 1991 roku (...) Lorem ipsum dolor sit amet,
				consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
				Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
				nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
				mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
				ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
				voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
			</div>
		</div>
		<div class="bgimg-2">
			<div class="container space">
				<h1 class="h-light">NASZ ZESPÓŁ</h1>
				<hr color="white">
				<div class="responsive" style="margin: 0px 15px;">
					<!--
					<?php
					$res = get_all($conn, "staff");
					for ($i = 0; $i<$res->num_rows; $i++) {
						$row = $res->fetch_assoc();
						echo 	"<div class=\"wizytowka\">".
								"<img src=\"img/staff/".$row["s_photo"]."\" class=\"team-img\">".
								"<div>".
								"<b>".$row["s_name"]."</b>".
								"<hr>".
								$row["s_function"]."<br>".
								"tel. ".$row["s_number"]."<br>".
								"e-mail ".$row["s_email"]."<br>".
								"</div>".
								"</div>";
					}
					?>
					-->
					<div class="wizytowka">
						<img src="img/staff/avatar.png" class="team-img">
						<div>
							<b>Andrzej Kowalski1</b>
							<hr>
							CEO<br>
							tel. 888 777 666<br>
							e-mail andrzejkowalski@abcern.pl
						</div>
					</div>
					<div class="wizytowka">
						<img src="img/staff/avatar.png" class="team-img">
						<div>
							<b>Andrzej Kowalski2</b>
							<hr>
							CEO<br>
							tel. 888 777 666<br>
							e-mail andrzejkowalski@abcern.pl
						</div>
					</div>
					<div class="wizytowka">
						<img src="img/staff/avatar.png" class="team-img">
						<div>
							<b>Andrzej Kowalski3</b>
							<hr>
							CIO<br>
							tel. 888 777 666<br>
							e-mail andrzejkowalski@abcern.pl
						</div>
					</div>
					<div class="wizytowka">
						<img src="img/staff/avatar.png" class="team-img">
						<div>
							<b>Andrzej Kowalski4</b>
							<hr>
							CFO<br>
							tel. 888 777 666<br>
							e-mail andrzejkowalski@abcern.pl
						</div>
					</div>
					<div class="wizytowka">
						<img src="img/staff/avatar.png" class="team-img">
						<div>
							<b>Andrzej Kowalski5</b>
							<hr>
							CFO<br>
							tel. 888 777 666<br>
							e-mail andrzejkowalski@abcern.pl
						</div>
					</div>
				</div>
			</div>
		</div>
		</section>
		<!-- ZAŁĄCZENIE STOPKI I SKRYPTÓW -->
		<?php include("footer.php"); ?>
		<script type="text/javascript" src="js/scroll_down.js"></script>
		<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
		<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
		<script type="text/javascript" src="js/slick.min.js"></script>
		<script type="text/javascript" src="js/slick_start.js"></script>
		<!-- ZAMKNIĘCIE POŁĄCZENIA Z BAZĄ -->
		<?php mysqli_close($conn); ?>
</body>
</html>