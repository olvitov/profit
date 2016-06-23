<?php
/**
 * Created by PhpStorm.
 * User: olvit
 * Date: 23.06.2016
 * Time: 14:10
 */

namespace App\Controllers;

use App\View;


class News
{
    protected $view;
    public function __construct()
    {
        $this->view = new View();
    }

    public function action($action) {

        $methodName = 'action' . $action;
        $this->beforeAction();
        return $this->$methodName();
    }

    protected function beforeAction()
    {
        echo 'Счетчик';
    }

    protected function actionIndex() {


        $this->view->title = 'Мой сайт!';
        $this->view->news = \App\Models\News::findAll();
        $this->view->display(__DIR__ . '/../templates/index.php');

    }

    protected function actionOne()
    {
        $id = (int)$_GET['id'];
        $this->view->article = \App\Models\News::findById($id);
        $this->view->display(__DIR__ . '/../templates/one.php');
    }

}
