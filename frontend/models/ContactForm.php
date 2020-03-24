<?php

namespace frontend\models;

use Yii;
use yii\base\Model;

/**
 * ContactForm is the model behind the contact form.
 */
class ContactForm extends Model
{
    public $name;
    public $email;
    public $phone;
//    public $subject;
    public $body;
//    public $verifyCode;


    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            // name, email, subject and body are required
            [['name', 'email', 'phone', 'body'], 'required'],
            // email has to be a valid email address
            ['email', 'email'],
            [['phone'], 'integer', 'min' => 10],
            // verifyCode needs to be entered correctly
//            ['verifyCode', 'captcha'],
        ];
    }

    /**
     * {@inheritdoc}
     */
//    public function attributeLabels()
//    {
//        return [
//            'verifyCode' => 'Verification Code',
//        ];
//    }

    /**
     * Sends an email to the specified email address using the information collected by this model.
     *
     * @param string $email the target email address
     * @return bool whether the email was sent
     */
    public function sendEmail()
    {
        return Yii::$app->mailer->compose('letter_order', ['name' => $this->name, 'phone' => $this->phone, 'email' => $this->email, 'body' => $this->body])
            ->setTo(['budonnyi@gmail.com', 'budonnaya@me.com'])
            ->setFrom([Yii::$app->params['supportEmail'] => Yii::$app->params['senderName']])
            ->setSubject('Сообщение с ПАНДУС ИНФО')
            ->send();
    }
}
