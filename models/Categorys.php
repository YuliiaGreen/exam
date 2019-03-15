<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%categorys}}".
 *
 * @property int $id
 * @property string $category_name
 * @property string $date_created
 */
class Categorys extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%categorys}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['category_name'], 'required'],
            [['category_name'], 'string'],
            [['date_created'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'category_name' => 'Category Name',
            'date_created' => 'Date Created',
        ];
    }
}
