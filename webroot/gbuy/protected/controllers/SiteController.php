<?php

class SiteController extends Controller
{
	/**
	 * Declares class-based actions.
	 */
	public function actions() {
		return array(
			// page action renders "static" pages stored under 'protected/views/site/pages'
			// They can be accessed via: index.php?r=site/page&view=FileName
			'page'=>array(
				'class'=>'CViewAction',
			),
		);
	}

	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionIndex() {
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		$this->render('index');
	}

	/**
	 * 地址页
	 */
	public function actionAddress() {
		$this->render('address');
	}

	/**
	 * 猜购
	 */
	public function actionGuess() {
		$this->render('guess');
	}

	/**
	 * 我的猜单
	 */
	public function actionMenu() {
		$this->render('menu');
	}

	/**
	 * 注册
	 */
	public function actionRegister() {
		$this->render('register');
	}

	/**
	 * 用户首页
	 */
	public function actionUser() {
		$this->render('user');
	}

	/**
	 * 商品详情
	 */
	public function actionView() {
		$this->render('view');
	}

	/**
	 * Displays the login page
	 */
	public function actionLogin() {
		$this->render('login');
	}

	/**
	 * 商品详情
	 */
	public function actionVie() {
		$this->render('vie');
	}
}