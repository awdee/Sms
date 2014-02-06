<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Users;

/**
 * search represents the model behind the search form about Users.
 */
class search extends Model
{
	public $userid;
	public $fname;
	public $mi;
	public $lname;
	public $emailadd;
	public $contact;
	public $password;
	public $username;

	public function rules()
	{
		return [
			[['userid'], 'integer'],
			[['fname', 'mi', 'lname', 'emailadd', 'password', 'username'], 'safe'],
			[['contact'], 'number'],
		];
	}

	/**
	 * @inheritdoc
	 */
	public function attributeLabels()
	{
		return [
			'userid' => 'Userid',
			'fname' => 'Fname',
			'mi' => 'Mi',
			'lname' => 'Lname',
			'emailadd' => 'Emailadd',
			'contact' => 'Contact',
			'password' => 'Password',
			'username' => 'Username',
		];
	}

	public function search($params)
	{
		$query = Users::find();
		$dataProvider = new ActiveDataProvider([
			'query' => $query,
		]);

		if (!($this->load($params) && $this->validate())) {
			return $dataProvider;
		}

		$this->addCondition($query, 'fname');
		$this->addCondition($query, 'fname', true);
		$this->addCondition($query, 'mi');
		$this->addCondition($query, 'mi', true);
		$this->addCondition($query, 'lname');
		$this->addCondition($query, 'lname', true);
		$this->addCondition($query, 'emailadd');
		$this->addCondition($query, 'emailadd', true);
		$this->addCondition($query, 'password');
		$this->addCondition($query, 'password', true);
		$this->addCondition($query, 'username');
		$this->addCondition($query, 'username', true);
		return $dataProvider;
	}

	protected function addCondition($query, $attribute, $partialMatch = false)
	{
		$value = $this->$attribute;
		if (trim($value) === '') {
			return;
		}
		if ($partialMatch) {
			$value = '%' . strtr($value, ['%'=>'\%', '_'=>'\_', '\\'=>'\\\\']) . '%';
			$query->andWhere(['like', $attribute, $value]);
		} else {
			$query->andWhere([$attribute => $value]);
		}
	}
}
