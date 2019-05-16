 <!-- Navigation -->

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
  	<div class="container">
  		<a class="navbar-brand" href="user_page.php">Computational Thinking Test</a>
  		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
  			aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
  			<span class="navbar-toggler-icon"></span>
  		</button>
  		<div class="collapse navbar-collapse" id="navbarResponsive">
  			<ul class="navbar-nav ml-auto">
  				<!-- <li class="nav-item">
  					<a class="nav-link" href="#"><?php echo $_SESSION["User"]; ?>
  					</a>
					</li>
					<li class="nav-item">
  					<a class="nav-link" href="#"><?php echo $_SESSION["Userschool"]; ?></a>
  				</li> -->
					<li>
  					<label class="navbar-text"><?php echo "Login by : ". $_SESSION["User"]."&#160&#160&#160"; ?></label>
					</li>
					<li class="nav-item">
  					<a class="btn btn-primary navbar-btn" style="margin-right: 10px;" href="user_page.php">หน้าหลัก</a>
  				</li>
  				<li class="nav-item">
  					<a class="btn btn-danger navbar-btn" href="logout.php">ออกจากระบบ</a>
  				</li>
  			</ul>
  		</div>
  	</div>
  </nav>