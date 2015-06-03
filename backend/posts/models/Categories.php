<?php

namespace backend\posts\models;

use Yii;

/**
 * This is the model class for table "categories".
 *
 * @property integer $id
 * @property string $title
 * @property string $lang
 * @property integer $paret_id
 * @property string $img
 * @property string $description
 */
class Categories extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'categories';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'paret_id'], 'required'],
            [['paret_id'], 'integer'],
            [['description'], 'string'],
            [['title', 'lang'], 'string', 'max' => 250],
            [['img'], 'string', 'max' => 50]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'lang' => 'Lang',
            'paret_id' => 'Paret ID',
            'img' => 'Img',
            'description' => 'Description',
        ];
    }
}
