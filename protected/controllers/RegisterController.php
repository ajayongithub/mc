<?php

class RegisterController extends Controller
{
	public function actionIndex()
	{
		$this->layout = false ;
		$this->render('index');
	}

	// Uncomment the following methods and override them if needed
	/*
	public function filters()
	{
		// return the filter configuration for this controller, e.g.:
		return array(
			'inlineFilterName',
			array(
				'class'=>'path.to.FilterClass',
				'propertyName'=>'propertyValue',
			),
		);
	}

	public function actions()
	{
		// return external action classes, e.g.:
		return array(
			'action1'=>'path.to.ActionClass',
			'action2'=>array(
				'class'=>'path.to.AnotherActionClass',
				'propertyName'=>'propertyValue',
			),
		);
	}
	*/
// 	public function actionRegister(){
// 			$result = new stdClass() ;
// 		if(isset($_POST['response'])){
// 			$response = $_POST['response'] ;
// 			$username = $_POST['username'] ;
// 			$fid = $_POST['fid'];
// 			Yii::app()->db->createCommand('insert into registered_users values ( null, "'.$username.'","'.$fid.'","'.$response.'",CURRENT_DATETIME')->execute(); 	
// 			Yii::log("Received the following params ".CVarDumper::dumpAsString($_POST)) ;
// 			$result = '200' ;	
// 		}else{
// 			$result = '500' ;
// 		}
// 		echo $result ;
// 	}

	public function actionRegister(){
		$result = new stdClass();
		if(isset($_POST['title'])){
						$title = $_POST['title'] ;
						$fname = $_POST['fname'] ;
						$lname = $_POST['lname'] ;
						$email = $_POST['email'];
						$allow = $_POST['allow'];
						Yii::app()->db->createCommand('insert into mc_users (title,fname,lname,email,allow,at_time) values (  "'.$title.'","'.$fname.'","'.$lname.'","'.$email.'",'.$allow.','.'NOW())')->execute();
						Yii::log("Received the following params ".CVarDumper::dumpAsString($_POST)) ;
						$result = '200' ;
					}else{
						$result = '500' ;
					}
					echo $result ;
	}
	
	public function actionGetUserJson(){
			$res = Yii::app()->db->createCommand('select * from mc_users order by id desc limit 1')->queryAll();
			$retVal = new stdClass() ;
			if(count($res)<1) echo "{'status': '404'}" ;
			else{
				if($res[0]['allow']==1)
					$fname = $res[0]['fname'];
				else $fname = 'Guest';
				echo "{'status': '200','fname':'$fname'}" ;
			}
		}
}
