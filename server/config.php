<?php

class Config{
    const DB_ADDRESS = '127.0.0.1';//数据库地址
    const DB_NAME = 'danmaku';//数据库名
	const DB_USERNAME = 'danmaku';//数据库用户名
	const DB_PASSWORD = '1234';//数据库密码

    const DANMAKU_SIZE = 20;//弹幕字体大小
    const ADMIN_PASSWORD = '1234';//审核端密码
    const PASSTHROUGH = false;//是否免审核直接发送
    const ALLOW_ANONYMOUS = true;//是否允许匿名用户
}
