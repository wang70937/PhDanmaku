<!DOCTYPE html>
<html lang="en" class=" no-touchevents"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	
	<meta content="IE=edge" http-equiv="X-UA-Compatible">
	<meta content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no, width=device-width" name="viewport">
	<title>PhDanmaku 审核系统</title>

	<!-- css -->
	<link href="./css/base.min.css" rel="stylesheet">
	<link href="./css/project.min.css" rel="stylesheet">

	<!-- favicon -->
	<!-- ... -->
</head>
<body class="page-brand">
	<header class="header header-brand ui-header">
		<span class="header-logo">PhDanmaku - 审核端</span>
	</header>
	<main class="content">
		<div class="container">
			<div class="row">
				<div>
					<section class="content-inner">
						<div class="card">
							<div class="card-main">
								<div class="card-header">
									<div class="card-inner">
										<h1 class="card-heading">等待审核数量: <small id="leftnumber">0</small></h1>
									</div>
								</div>
								<div class="card-inner">
                                    <div class="col-lg-6 col-sm-6">
										<div class="card">
											<aside class="card-side pull-left">
												<span class="card-heading">[A]></span>
											</aside>
											<div class="card-main">
												<div class="card-inner">
													<p class="card-heading" id="select_A"></p>
												</div>
											</div>
										</div>
										<div class="card">
											<aside class="card-side pull-left">
												<span class="card-heading">[S]></span>
											</aside>
											<div class="card-main">
												<div class="card-inner">
													<p class="card-heading" id="select_S"></p>
												</div>
											</div>
										</div>
										<div class="card">
											<aside class="card-side pull-left">
												<span class="card-heading">[D]></span>
											</aside>
											<div class="card-main">
												<div class="card-inner">
													<p class="card-heading" id="select_D"></p>
												</div>
											</div>
										</div>
										<div class="card">
											<aside class="card-side pull-left">
												<span class="card-heading">[F]></span>
											</aside>
											<div class="card-main">
												<div class="card-inner">
													<p class="card-heading" id="select_F"></p>
												</div>
											</div>
										</div>
									</div>
                                    <div class="col-lg-6 col-sm-6">
										<div class="card">
											<aside class="card-side pull-left">
												<span class="card-heading">[J]></span>
											</aside>
											<div class="card-main">
												<div class="card-inner">
													<p class="card-heading" id="select_J"></p>
												</div>
											</div>
										</div>
										<div class="card">
											<aside class="card-side pull-left">
												<span class="card-heading">[K]></span>
											</aside>
											<div class="card-main">
												<div class="card-inner">
													<p class="card-heading" id="select_K"></p>
												</div>
											</div>
										</div>
										<div class="card">
											<aside class="card-side pull-left">
												<span class="card-heading">[L]></span>
											</aside>
											<div class="card-main">
												<div class="card-inner">
													<p class="card-heading" id="select_L"></p>
												</div>
											</div>
										</div>
										<div class="card">
											<aside class="card-side pull-left">
												<span class="card-heading">[; ]></span>
											</aside>
											<div class="card-main">
												<div class="card-inner">
													<p class="card-heading" id="select_Sp"></p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</section>
					<section class="content-inner">
						<div class="card">
							<div class="card-main">
								<div class="card-inner">
                                    <h4><center>左侧: [A], [S], [D], [F]&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp右侧: [J], [K], [L], [; ]<br>回车键刷新列表<br>按下相应按键通过审核<br>空格键丢弃未审核弹幕并刷新列表</center></h4>
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
	<script src="./js/jcookie.js"></script>
    <script src="./js/admin.js"></script>
</body></html>
