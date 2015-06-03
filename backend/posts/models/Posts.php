<?php

namespace backend\posts\models;

use Yii;

/**
 * This is the model class for table "posts".
 *
 * @property integer $id
 * @property string $title
 * @property string $description
 * @property string $img
 * @property string $date
 * @property integer $cat_id
 * @property string $long
 * @property integer $parrent_id
 */
class Posts extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'posts';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [[ 'title', 'lang'], 'required'],
            [['id', 'cat_id', 'parrent_id'], 'integer'],
            [['description'], 'string'],
            [['title'], 'string', 'max' => 250],
            [['img', 'date'], 'string', 'max' => 50],
            [['lang'], 'string', 'max' => 10]
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
            'description' => 'Description',
            'img' => 'Img',
            'date' => 'Date',
            'cat_id' => 'Category',
            'lang' => 'Lang',
            'parrent_id' => 'Parrent ID',
        ];
    }
}
