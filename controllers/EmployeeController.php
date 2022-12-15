<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\AccessControl;

class EmployeeController extends Controller {

	public function actionAllEmployees() {
		return 'this is all employees function';
	}

}