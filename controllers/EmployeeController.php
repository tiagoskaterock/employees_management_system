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

	public function actionCreate() {
		$model = new EmployeeForm();

		// submit the form
		if ($model->load(Yii::$app->request->post()) && $model->validate()) {
			$employee = new Employee();
			$employee['name'] = $model['name'];
			$employee['job'] = $model['job'];
			$employee['salary'] = $model['salary'];

			$employee->save();

			return $this->redirect('all-employees');

		}

		// display the form
		else{
			return $this->render('/employees/form', [
				'model' => $model
			]);
		}
	}

	public function actionEdit($id) {

		$model = new EmployeeForm();

		// submit the form
		if ($model->load(Yii::$app->request->post() && $model->validate)) {
			// code...
		}

		// display the form
		else {
			return $this->render('/employees/form', ['model' => $model]);
		}

	}

}