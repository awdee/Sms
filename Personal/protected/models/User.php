<?php

/**
 * This is the model class for table "tbl_user".
 *
 * The followings are the available columns in table 'tbl_user':
 * @property integer $userid
 * @property string $fname
 * @property string $mi
 * @property string $lname
 * @property string $emailadd
 * @property string $contact
 * @property string $password
 * @property string $username
 */
class User extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_user';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('fname, lname, emailadd, contact, password, username', 'required'),
			//array('numerical', 'integerOnly'=>true),
			array('fname, mi, lname, emailadd, password, username', 'length', 'max'=>45),
			array('contact', 'length', 'max'=>10),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('fname, mi, lname, emailadd, contact, password, username', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			//'userid' => 'Userid',
			'fname' => 'First Name',
			'mi' => 'Middle Initial',
			'lname' => 'Last Name',
			'emailadd' => 'Email Address',
			'contact' => 'Contact',
			'password' => 'Password',
			'username' => 'Username',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('userid',$this->userid);
		$criteria->compare('fname',$this->fname,true);
		$criteria->compare('mi',$this->mi,true);
		$criteria->compare('lname',$this->lname,true);
		$criteria->compare('emailadd',$this->emailadd,true);
		$criteria->compare('contact',$this->contact,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('username',$this->username,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return User the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
