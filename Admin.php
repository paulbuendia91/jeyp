<html>
	<head>
		<title>Dashboard</title>

		<link
			rel="stylesheet"
			href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css"
		/>
		<link
			rel="stylesheet"
			href="https://fonts.googleapis.com/css?family=Roboto&display=swap"
		/>
		
		<link rel="stylesheet" href="Admin.css" />
		
	</head>
	<body>
		<div>
		<img src="mariki.jpg" id=shoe </img>
		</div>
	
	
		<aside class="sidebar">
			
				<ul class="sidebar__nav">
				<header>ADMIN</header>
					<li>
						<a href="#" class="sidebar__nav__link">
							<i class="fas fa-user"></i>
							<span class="sidebar__nav__text">PROFILE</span>
						</a>
					</li>
					<li>
						
						<a href="Admin.php" class="sidebar__nav__link">
							<i class="fas fa-tachometer-alt"></i>
							<span class="sidebar__nav__text">DASHBOARD</span>
						</a>
						
					</li>
					<li>
						<a href="Add.php" class="sidebar__nav__link">
							<i class="fas fa-tags"></i>
							<span class="sidebar__nav__text">ADD PRODUCTS</span>
						</a>
					</li>
					<li>
						<a href="Viewproduct.php" class="sidebar__nav__link">
							<i class="fas fa-boxes"></i>
							<span class="sidebar__nav__text">INVENTORY</span>
						</a>
					</li>
					<li>
						<a href="logs.php" class="sidebar__nav__link">
							<i class="fas fa-list"></i>
							<span class="sidebar__nav__text">LOGS</span>
						</a>
					</li>
					
				</ul>
			</aside>
		

<main class="main">
			<section>
				<h2>Hello Admin!<br> Welcome to your Dashboard</h2>	
			<section>
			<div class="contact-info">
      <div class="card">
        <i class="card-icon fas fa-user"></i>
        <a href="jpkenneth.php"> Profile </a>
      </div>

      <div class="card">
        <i class="card-icon fas fa-tachometer-alt"></i>
        <a href="jpkenneth.php"> Dashboard </a>
      </div>

      <div class="card">
        <i class="card-icon fas fa-tags"></i>
        <a href="Add.php">Add Products </a>
      </div>
	  <div class="card">
        <i class="card-icon fas fa-boxes"></i>
        <a href="Viewproduct.php"> Inventory </a>
      </div>
    </div>
	<div class="card">
        <i class="card-icon fas fa-list"></i>
        <a href="logs.php"> Logs </a>
      </div>
    </div>
	<div class="card">
        <i class="card-icon fas fa-cog"></i>
        <a href="jpkenneth.php"> Settings </a>
      </div>
    </div>
	
	
	

				
		</main>
	</body>
</html>