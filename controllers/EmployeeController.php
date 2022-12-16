<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\AccessControl;
use app\models\Employee;
use app\models\EmployeeForm;

class EmployeeController extends Controller {

	public function actionAllEmployees() {
		
		$employees = Employee::find()->all();

		return $this->render('/employees/index', [
			'employees' => $employees
		]);

	}

	public function actionForm() {
		$model = new EmployeeForm();

		// submit the form
		if ($model->load(Yii::$app->request->post()) && $model->validate()) {
			// code...
		}

		// display the form
		else{
			return $this->render('/employees/form', [
				'model' => $model
			]);
		}
	}

}