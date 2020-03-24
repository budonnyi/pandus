<?php
/**
 * Created by PhpStorm.
 * User: dmytrobudonnyi
 * Date: 15.06.17
 * Time: 1:49 PM
 */

namespace frontend\controllers;

use common\models\Category;
use common\models\Product;
use common\models\Lang;
use common\models\Video;
use common\models\Widget;
use yii\data\Pagination;


class CategoryController extends AppController
{
    public function actionIndex()
    {
        $this->layout = 'subordinary';

        $catalog = Category::find()->where(['status' => 1])->all();

        (Lang::getCurrent()->url == 'ru') ? (
        $this->setMeta('Пандусы для людей с инвалидностью аллюминиевые легкие практичные и удобные',
            'пандус для инвалидноЙ коляски, рампа для инвалидной коляски, для преодолеванія барьеров, для ступеней',
            'Безопасные и надежные пандусы для людей с инвалидностью. Официальный дилер в Украине BraunAbility, опыт работы начиная с 2015 года.
            Пандусы импортнае и Украинского производства.')) : (
        $this->setMeta('Пандуси для людей з інвалідністю алюмінієві легкі та зручні ',
            'пандус для инвалидноЙ коляски, рампа для инвалидной коляски, для долання перешкод, сходів',
            'Безпечні та надійні пандуси для людей з інвалідністю. Офіційний дилер BraunAbility на території України, досвід роботи починаючи з 2015 року. 
            Пандуси імпортні та Українського виробництва.'));
        return $this->render('index', compact('catalog'));
    }

    public function actionCategory($url)
    {
        $this->layout = 'subordinary';

        $lang = Lang::getCurrent()->url;

        $category = Category::find()->where(['url' => $url])->one();

        $category->viewedCounter();

        $widgets = Widget::find()->where(['in', 'widget_name', explode(', ', $category->widgets)])->all();
        $videos = Video::find()->where(['in', 'video_name', explode(', ', $category->video)])->all();
        $products = Product::find()->where(['category_id' => $category['id']])->andWhere(['status' => 1])->orderBy(['name_ru' => SORT_ASC])->all();

        $metatitle = '';
        foreach ($products as $item) {
            $del_ = [
                'автомобильный',
                'автомобільний',
                'розкладний',
                'сплошной',
                'суцільний',
                'раскладной',
                'Пандус',
                'телескопический',
                'телескопічний',
                'складаний',
                'складной',
            ];
            $metatitle .= preg_replace("~\b(" . implode('|', $del_) . ")\b~uis", '', $item->{'name_' . $lang});
        }

        (Lang::getCurrent()->url == 'ru')
            ? ($this->setMeta($category->{'meta_title_' . $lang} . ' ' . $metatitle,
            $category->{'meta_keywords_' . $lang} . 'пандус для инвалидноЙ коляски, рампа для инвалидной коляски, для преодолеванія барьеров, для ступеней ',
            $category->{'meta_description_' . $lang}))
            : ($this->setMeta($category->{'meta_title_' . $lang} . ' ' . $metatitle,
            $category->{'meta_keywords_' . $lang} . 'пандус для инвалидноЙ коляски, рампа для инвалидной коляски, для долання перешкод, сходів',
            $category->{'meta_description_' . $lang}));

        //error when there are not any categories
        if (empty($category)) {
            throw new \yii\web\HttpException(404, 'Запрошенной категории не существует.');
        }

        return $this->render('category', compact('category', 'url', 'widgets', 'products', 'videos'));
    }
}
