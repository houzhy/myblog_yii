<?php
/**
 * Created by PhpStorm.
 * User: houzhyan
 * Date: 2017/8/7
 * Time: 13:49
 */
namespace  frontend\controllers;

use yii\base\Controller;

class BlogController extends Controller{
	/*
	 * 前台首页
	 */
	public function actionIndex(){
		return $this->render('index',[]);
	}
}

