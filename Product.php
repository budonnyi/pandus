<?php

namespace common\models;

use Yii;
use yii\web\UploadedFile;

/**
 * This is the model class for table "product".
 *
 * @property int $id
 * @property int|null $category_id
 * @property int|null $code
 * @property string|null $url
 * @property int|null $price
 * @property string $image
 * @property string|null $big_image
 * @property string $name_ua
 * @property string $name_ru
 * @property string $description_ru
 * @property string $description_ua
 * @property string $description_short_ru
 * @property string $description_short_ua
 * @property string|null $technical_ru
 * @property string|null $technical_ua
 * @property string $manufacturer
 * @property string|null $class_name
 * @property string|null $country_origyn
 * @property int $availability
 * @property string|null $meta_title_ua
 * @property string|null $meta_title_ru
 * @property string|null $meta_keyword_ua
 * @property string|null $meta_keyword_ru
 * @property string|null $meta_description_ua
 * @property string|null $meta_description_ru
 * @property int $status
 * @property string|null $created_at
 * @property string|null $updated_at
 */
class Product extends \yii\db\ActiveRecord
{
    public $imageFile;
    public $bigImageFile;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'product';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['category_id', 'code', 'price', 'availability', 'status'], 'integer'],
            [['image', 'name_ua', 'name_ru', 'description_ru', 'description_ua', 'description_short_ru', 'description_short_ua', 'manufacturer', 'availability', 'status'], 'required'],
            [['description_ru', 'description_ua', 'description_short_ru', 'description_short_ua', 'technical_ru', 'technical_ua', 'meta_keyword_ua', 'meta_keyword_ru', 'meta_description_ua', 'meta_description_ru'], 'string'],
            [['created_at', 'updated_at'], 'safe'],
            [['url', 'name_ua'], 'string', 'max' => 100],
            [['image', 'big_image', 'name_ru', 'manufacturer', 'meta_title_ua', 'meta_title_ru'], 'string', 'max' => 255],
            [['class_name', 'country_origyn'], 'string', 'max' => 50],
            [['imageFile', 'bigImageFile'], 'file', 'skipOnEmpty' => true, 'extensions' => 'png, jpg, jpeg, gif, pdf'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'category_id' => 'Category ID',
            'code' => 'Code',
            'url' => 'Url',
            'price' => 'Price',
            'image' => 'Image',
            'big_image' => 'Big Image',
            'name_ua' => 'Name Ua',
            'name_ru' => 'Name Ru',
            'description_ru' => 'Description Ru',
            'description_ua' => 'Description Ua',
            'description_short_ru' => 'Description Short Ru',
            'description_short_ua' => 'Description Short Ua',
            'technical_ru' => 'Technical Ru',
            'technical_ua' => 'Technical Ua',
            'manufacturer' => 'Manufacturer',
            'class_name' => 'Class Name',
            'country_origyn' => 'Country Origyn',
            'availability' => 'Availability',
            'meta_title_ua' => 'Meta Title Ua',
            'meta_title_ru' => 'Meta Title Ru',
            'meta_keyword_ua' => 'Meta Keyword Ua',
            'meta_keyword_ru' => 'Meta Keyword Ru',
            'meta_description_ua' => 'Meta Description Ua',
            'meta_description_ru' => 'Meta Description Ru',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    public function beforeSave($insert)
    {
        if ($file = UploadedFile::getInstance($this, 'imageFile')) {
            $dir = '/img/category/';
            $this->image = $file->baseName . '_' . Yii::$app->getSecurity()->generateRandomString(6) . '.' . $file->extension;
            $file->saveAs($dir . $this->image);
        }

        if ($file = UploadedFile::getInstance($this, 'bigImageFile')) {
            $dir = '/img/category/';
            $this->big_image = $file->baseName . '_' . Yii::$app->getSecurity()->generateRandomString(6) . '.' . $file->extension;
            $file->saveAs($dir . $this->big_image);
        }

        return parent::beforeSave($insert);
    }
}
