<?php

/**
 * This is the model class for table "mc_users".
 *
 * The followings are the available columns in table 'mc_users':
 * @property integer $id
 * @property string $title
 * @property string $fname
 * @property string $lname
 * @property string $email
 * @property integer $allow
 * @property string $at_time
 * @property string $remarks
 * 
 * 
 * ALTER TABLE `mc_users` ADD `allow` INT NOT NULL AFTER `email`;
 */
class McUsers extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'mc_users';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('email, allow', 'required'),
			array('allow', 'numerical', 'integerOnly'=>true),
			array('title', 'length', 'max'=>32),
			array('fname, lname, email, remarks', 'length', 'max'=>128),
			array('at_time', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, title, fname, lname, email, allow, at_time, remarks', 'safe', 'on'=>'search'),
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
			'id' => 'ID',
			'title' => 'Title',
			'fname' => 'Fname',
			'lname' => 'Lname',
			'email' => 'Email',
			'allow' => 'Allow',
			'at_time' => 'At Time',
			'remarks' => 'Remarks',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('fname',$this->fname,true);
		$criteria->compare('lname',$this->lname,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('allow',$this->allow);
		$criteria->compare('at_time',$this->at_time,true);
		$criteria->compare('remarks',$this->remarks,true);
		$criteria->order=' at_time desc ';
		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return McUsers the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
