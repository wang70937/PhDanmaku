<!DOCTYPE html>
<html lang="en" class=" no-touchevents"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	
	<meta content="IE=edge" http-equiv="X-UA-Compatible">
	<meta content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no, width=device-width" name="viewport">
	<title>PhDanmaku 弹幕板</title>

	<!-- css -->
	<link href="./css/base.min.css" rel="stylesheet">
	<link href="./css/project.min.css" rel="stylesheet">

	<!-- favicon -->
	<!-- ... -->
</head>
<body class="page-brand">
	<header class="header header-brand ui-header">
		<span class="header-logo">PhDanmaku - 弹幕板</span>
	</header>
	<main class="content">
		<div class="container">
			<div class="row">
				<div class="">
					<section class="content-inner">
						<div class="card">
							<div class="card-main">
								<div class="card-header">
									<div class="card-inner">
										<h1 class="card-heading">大家正在说…</h1>
									</div>
								</div>
								<div class="card-inner">
                                    <?=$recent?>
								</div>
							</div>
						</div>
					</section>
				</div>
			</div>
		</div>
	</main>
	<footer class="ui-footer">
		<div class="container">
			<p>PhDanmaku 实时弹幕点评系统</p>
		</div>
	</footer>

	<!-- js -->
	<script src="./js/jquery.min.js"></script>
	<script src="./js/base.min.js"></script>
	<script src="./js/project.min.js"></script>
    <script language="JavaScript"> 
    function myrefresh(){ 
        window.location.reload(); 
    } 
    setTimeout('myrefresh()', 1000);
    </script>
</body></html>
