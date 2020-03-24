<?php

namespace frontend\controllers;

use common\models\Category;
use common\models\Lang;
use common\models\Product;
use frontend\models\ResendVerificationEmailForm;
use frontend\models\VerifyEmailForm;
use Yii;
use yii\base\InvalidArgumentException;
use yii\helpers\ArrayHelper;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;
use frontend\controllers\AppController;

/**
 * Site controller
 */
class SiteController extends AppController
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout', 'signup'],
                'rules' => [
                    [
                        'actions' => ['signup'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    public function actionIndex()
    {
        $catalog = Category::find()->where(['status' => 1])->all();
        $carouselItems = Product::find()
            ->joinWith(['categories'])
            ->orderBy('RAND()')
            ->where(['product.status' => 1])
            ->andWhere(['category.status' => 1])
            ->all();

        $model = new ContactForm();

        Lang::getCurrent()->url == 'ru' ? (
        $this->setMeta('Пандусы для людей с инвалидностью переносные автомобильные аллюминий',
            'пандус для инвалидноЙ коляски, рампа для инвалидной коляски, для преодолеванія барьеров, для ступеней, 
            безбарьерная среда, пандус Feal, пандус импортный, пандус телескопический, пандус автомобильный, из двух частей, пандус из трех частей',
            'Безопасные и надежные пандусы для людей с инвалидностью. Официальный дилер в Украине BraunAbility, опыт работы начиная с 2015 года')) : (
        $this->setMeta('Пандуси для людей з інвалідністю переносні автомобільні алюміній',
            'пандус для инвалидноЙ коляски, рампа для инвалидной коляски, для долання перешкод, сходів,
            безбар\'єрне середовище, пандус Feal, пандус імпортний, пандус телескопічний, пандус автомобільний, з двох частин, пандус з трьох частин',
            'Безпечні та надійні пандуси для людей з інвалідністю. Офіційний дилер BraunAbility на території України.'));

        if ($model->load(Yii::$app->request->post()) /*&& $model->validate()*/) {
            $name = $model->name;
            $email = $model->email;
            $body = $model->body;
            if ($model->sendEmail($name, $email, $body)) {
                Yii::$app->session->setFlash('success', 'Дякуємо за повідомлення!');
            } else {
                Yii::$app->session->setFlash('error', 'There was an error sending your message.');
            }

            return $this->refresh();
        }

        return $this->render('index', compact('catalog', 'carouselItems', 'model'));
    }


    /**
     * Displays contact page.
     *
     * @return mixed
     */
    public function actionContact()
    {
        $this->layout = 'subordinary';

        $model = new ContactForm();

        if ($model->load(Yii::$app->request->post()) /*&& $model->validate()*/) {
            $name = $model->name;
            $email = $model->email;
            $phone = $model->phone;
            $body = $model->body;
            if ($model->sendEmail($name, $email, $phone, $body)) {
                Yii::$app->session->setFlash('success', 'Дякуємо за повідомлення!');
            } else {
                Yii::$app->session->setFlash('error', 'There was an error sending your message.');
            }

            return $this->refresh();
        }

        return $this->render('contact', compact('model'));
    }

    /**
     * Displays about page.
     *
     * @return mixed
     */
    public
    function actionAbout()
    {
        $this->layout = 'subordinary';

        return $this->render('about');
    }
}
