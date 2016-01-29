<?php

class ArticleController extends Controller
{
	
	public $layout='//layouts/column2';

	
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'users'=>array('@'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	
	public function actionView($id) {

        $modelComment = new Comment;

        if (isset($_POST['Comment'])) {
            $modelComment->attributes = $_POST['Comment'];
            $modelComment->article_id=$id;
            if ($modelComment->save())
                $this->refresh();
        }

        $this->render('view', array(
            'model' => $this->loadModel($id),
            'modelComment' => $modelComment,
        ));
    }

    public function actionCreate()
	{
		$model=new Article;
                
		

		if(isset($_POST['Article']))
		{
			$model->attributes=$_POST['Article'];
                        $model->user_id = Yii::app()->user->id;
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}
        public function actionCreateComment()
	{
		$modelComment=new Comment;
                
		

		if(isset($_POST['Comment']))
		{
			$modelComment->attributes=$_POST['Comment'];
			if($modelComment->save())
				$this->redirect(array('view','id'=>$modelComment->article_id));
		}

		$this->render('create',array(
			'modelComment'=>$modelComment,
		));
	}

	
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		

		if(isset($_POST['Article']))
		{
			$model->attributes=$_POST['Article'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Article');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}
        /*public function actionIndexComment()
	{
		$dataProvider=new CActiveDataProvider('Comment');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	
	*/
	public function loadModel($id)
	{
		$model=Article::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='article-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
