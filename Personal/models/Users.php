<?php

namespace app\models;

/**
 * This is the model class for table "tbl_user".
 *
 * @property integer $userid
 * @property string $fname
 * @property string $mi
 * @property string $lname
 * @property string $emailadd
 * @property string $contact
 * @property string $password
 * @property string $username
 */
class Users extends \yii\db\ActiveRecord
{
	/**
	 * @inheritdoc
	 */
	public static function tableName()
	{
		return 'tbl_user';
	}

	/**
	 * @inheritdoc
	 */
	public function rules()
	{
		return [
			[['fname', 'mi', 'lname', 'emailadd', 'contact', 'password', 'username'], 'required'],
			[['contact'], 'number'],
			[['fname', 'mi', 'lname', 'emailadd', 'password', 'username'], 'string', 'max' => 45]
		];
	}

	/**
	 * @inheritdoc
	 */
	public function attributeLabels()
	{
		return [
			//'userid' => 'Userid',
			'fname' => 'First Name',
			'mi' => 'Middle Initial',
			'lname' => 'Last Name',
			'emailadd' => 'Email Address',
			'contact' => 'Contact',
			'password' => 'Password',
			'username' => 'Username',
		];
	}
}
