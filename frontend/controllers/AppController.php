<?php
/**
 * Created by PhpStorm.
 * User: dmytrobudonnyi
 * Date: 15.06.17
 * Time: 1:49 PM
 */

namespace frontend\controllers;

use yii\web\Controller;

class AppController extends Controller
{
    public function setMeta($title = null, $keywords = null, $description = null)
    {
        $this->view->title = $title;
        $this->view->registerMetaTag(['name' => 'keywords', 'content' => "$keywords"]);
        $this->view->registerMetaTag(['name' => 'description', 'content' => "$description"]);

        return true;
    }
}
