<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "adress".
 *
 * @property int $id
 * @property int $user_id
 * @property int $post_code
 * @property string $country
 * @property string $city
 * @property string $street
 * @property string $house_number
 * @property string $flat_number
 *
 * @property Users $user
 */
class Adress extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'adress';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['post_code'], 'integer'],
            [['post_code', 'country', 'city', 'street', 'house_number'], 'required'],
            [['city', 'street', 'house_number', 'flat_number'], 'string', 'max' => 64],
            [['country'], 'string', 'max' => 2],
            ['country', 'match', 'pattern' => '^([A-Z])^', 'message' => 'Только большие англ. буквы'],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => Users::className(), 'targetAttribute' => ['user_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => 'User ID',
            'post_code' => 'Post Code',
            'country' => 'Country',
            'city' => 'City',
            'street' => 'Street',
            'house_number' => 'House Number',
            'flat_number' => 'Flat Number',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(Users::className(), ['id' => 'user_id']);
    }
}
