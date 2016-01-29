<?php

class UserController extends Controller {

    public function actionView($id) {
        $this->render('view', array(
            'model' => $this->loadModel($id),
        ));
    }

    public function actionConfirm($id, $token) {
        $model = $this->loadModel($id);
        if ($model->token == $token) {
            if (isset($_POST['NewPassword']['password'])) {

                $model->attributes = $_POST['NewPassword'];

                $model->save();
            }
            $this->render('confirm', array('model' => $model, 'modelForm' => new NewPassword()));
        } else {
            throw new CHttpException(404, 'The requested page does not exist.');
        }
    }

    public function actionRegister() {
        $model = new User;

        if (isset($_POST['User'])) {

            $model->attributes = $_POST['User'];
            if ($model->save())
                $this->redirect(array('view', 'id' => $model->id));
        }

        $this->render('register', array(
            'model' => $model,
        ));
    }

    public function loadModel($id) {
        $model = User::model()->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }

}
