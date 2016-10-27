<!DOCTYPE html>
<html lang="en" class=" no-touchevents"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	
	<meta content="IE=edge" http-equiv="X-UA-Compatible">
	<meta content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no, width=device-width" name="viewport">
	<title>PhDanmaku 用户评论</title>

	<!-- css -->
	<link href="./css/base.min.css" rel="stylesheet">
	<link href="./css/project.min.css" rel="stylesheet">

	<!-- favicon -->
	<!-- ... -->
</head>
<body class="page-brand">
	<header class="header header-brand ui-header">
		<span class="header-logo">PhDanmaku - 弹幕留言系统</span>
	</header>
	<main class="content">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-lg-push-4 col-sm-6 col-sm-push-3">
					<section class="content-inner">
						<div class="card">
							<div class="card-main">
								<div class="card-header">
									<div class="card-inner">
										<h1 class="card-heading">留言&nbsp&nbsp&nbsp&nbsp<small>您作为 <?php echo $_COOKIE['user'] == 'ANONYMOUS' ? '匿名用户' : $_COOKIE['user']?> 登录</small></h1>
									</div>
								</div>
								<div class="card-inner">
									
									<form class="form" method = "POST">
										<div class="row">
											<div class="col-md-10 col-md-push-1">
												<div class="radiobtn radiobtn-adv checkbox-inline ">
													<label for="normal_type">
														<input checked="" class="access-hide" id="normal_type" name="type" type="radio" value="0">普通弹幕
														<span class="radiobtn-circle"></span><span class="radiobtn-circle-check"></span>
													</label>
												</div>
												<div class="radiobtn radiobtn-adv checkbox-inline ">
													<label for="top_bottom_type">
														<input class="access-hide" id="top_bottom_type" name="type" type="radio" value="1">顶部/底端弹幕
														<span class="radiobtn-circle"></span><span class="radiobtn-circle-check"></span>
													</label>
												</div>
											</div>
											<div class="col-md-10 col-md-push-1"><p></p></div>
											<div class="col-md-10 col-md-push-1"><p></p></div>
											<div class="form-group form-group-label">
												<div class="col-md-10 col-md-push-1">
													<label class="floating-label" for="ui_colortext">弹幕颜色</label>
													<input class="form-control jscolor" name="color" id="ui_colortext" type="text" value="FFFFFF">
												</div>
											</div>
											<div class="col-md-10 col-md-push-1"><p></p></div>
											<div class="col-md-10 col-md-push-1"><p></p></div>
											<div class="form-group form-group-label">
												<div class="col-md-10 col-md-push-1">
													<label class="floating-label" for="ui_danmaku">不来吐槽一下吗</label>
													<input class="form-control" name="comment" id="ui_danmaku" type="text">
												</div>
											</div>
										</div>
										<div class="form-group">
											<div class="row">
												<div class="col-md-10 col-md-push-1">
													<button class="btn btn-block btn-brand waves-attach waves-light waves-effect">发射弹幕</button>
												</div>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</section>
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
	<script src="./js/jscolor.min.js"></script>

</body></html>
