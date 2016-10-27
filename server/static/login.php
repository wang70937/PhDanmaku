<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta content="IE=edge" http-equiv="X-UA-Compatible">
	<meta content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no, width=device-width" name="viewport">
	<title>PhDanmaku 登入</title>

	<!-- css -->
	<link href="./css/base.min.css" rel="stylesheet">
	<link href="./css/project.min.css" rel="stylesheet">

	<!-- favicon -->
	<!-- ... -->
</head>
<body class="page-brand">
	<header class="header header-brand ui-header">
		<span class="header-logo">PhDanmaku - 登入</span>
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
										<h1 class="card-heading">系统登入</h1>
									</div>
								</div>
								<div class="card-inner">
									<p class="text-center">
										<span class="avatar avatar-inline avatar-lg">
											<img alt="Login" src="./images/avatar-001.jpg">
										</span>
									</p>
									<form class="form" method="post">
										<div class="form-group form-group-label">
											<div class="row">
												<div class="col-md-10 col-md-push-1">
													<label class="floating-label" for="ui_login_username">学号(或昵称)*</label>
													<input class="form-control" id="ui_login_username" type="text" name="user">
												</div>
											</div>
										</div>
										<div class="form-group">
											<div class="row">
												<div class="col-md-10 col-md-push-1">
													<button class="btn btn-block btn-brand waves-attach waves-light">登入</button>
												</div>
											</div>
										</div>
										<div class="form-group">
											<div class="row">
												<div class="col-md-10 col-md-push-1">
                                                    <div class="checkbox switch">
                                                        <label for="anonymous_switch">
                                                            <input class="access-hide" id="anonymous_switch" name="anonymous" type="checkbox"><span class="switch-toggle"></span>我希望保持匿名状态
                                                        </label>
                                                    </div>
												</div>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
						<div class="clearfix">
                            *请注意，您输入的学号将与晚会领奖相关，输入错误或选择匿名均视为放弃抽奖资格
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
</body>
</html>