<?php

use think\Route;

// 定义路由
Route::any('tenancy/:tenancy/[:controller]/[:action]', "\\think\\tenancy\\tenancy\\Init@execute");
