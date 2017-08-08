<?php
/**
 * Created by PhpStorm.
 * User: houzhyan
 * Date: 2017/8/7
 * Time: 13:49
 */
namespace  frontend\controllers;

use common\models\Category;
use yii\base\Controller;

class BlogController extends Controller{
	public $layout = 'layout';
	/*
	 * 前台首页
	 */
	public function actionIndex(){
		$category_rows = Category::find()->all();
//		var_dump($category_rows);
		return $this->render('index',[
			'category_rows' => $category_rows,
		]);
//		return $this->renderPartial('index',[]);
	}
}

