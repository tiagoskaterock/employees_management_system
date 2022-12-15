<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\AccessControl;
use app\models\Employee;

class EmployeeController extends Controller {

	public function actionAllEmployees() {
		
		$employees = Employee::find()->all();

		return $this->render('/employees/index', [
			'employees' => $employees
		]);

	}

}