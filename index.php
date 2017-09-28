
<html>
<head>
	
	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="bootstrap/font-awesome/css/font-awesome.min.css">

    <!-- Custom CSS -->
    <link href="bootstrap/css/landing-page.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="bootstrap/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
</head>
<body>

<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
				<div class="navbar-header">
					 
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						 <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
					</button> <a class="navbar-brand" href="#">Machine Learning</a>
				</div>
				
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li class="active">
							<a href="#">Find S</a>
						</li>
						<li>
							<a href="#">Candidate Elimination</a>
						</li>
						
					</ul>
				</div>
				
			</nav>
			<br>
			<div class="page-header">
				<h1>
					Algoritma Find-S <small> | Pinky Cindy | 2110151001</small>
				</h1>
				<p>Algoritma Find S untuk memberikan saran hari ini cocok atau tidak untuk melakukan olahraga, dengan memberikan inputan seperti berikut :</p>
			</div>
			<div class="row">
				<div class="col-md-4" align="left">
				</div>
				<div class="col-md-4" align="left">
					<form class="form-horizontal" action="proses.php" method="post" role="form">
						<div class="form-group">
					 		<label class="col-sm-2 control-label">Sky</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" name="sky" />
							</div>
						</div>
						<div class="form-group">
					 		<label class="col-sm-2 control-label">Air Temp</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" name="airTemp" />
							</div>
						</div>
						<div class="form-group">
					 		<label class="col-sm-2 control-label">Humidity</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" name="hum" />
							</div>
						</div>
						<div class="form-group">
					 		<label class="col-sm-2 control-label">Wind</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" name="wind" />
							</div>
						</div>
						<div class="form-group">
					 		<label class="col-sm-2 control-label">Water</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" name="water" />
							</div>
						</div>
						<div class="form-group">
					 		<label class="col-sm-2 control-label">Forecast</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" name="forecast" />
							</div>
						</div>
						<div class="col-sm-14" align="right">
								<input type="submit" class="btn btn-success btn-block" />
						</div>
						
					</form>
				</div>
				<div class="col-md-4">


				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>