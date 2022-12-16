<?php 

namespace app\models;

use Yii;
use yii\base\Model;

class EmployeeForm extends Model {

	public $name;
	public $job;
	public $salary;

	public function rules() {
		return [
			[ ['name', 'job', 'salary'], 'required'],
			[ 'salary', 'number'],
		];
	}
}