<?php

namespace app\models;

/**
 * This is the model class for table "users".
 *
 * @property int $id
 * @property string $default_adress_id
 * @property string $login
 * @property string $password
 * @property string $name
 * @property string $surname
 * @property string $sex
 * @property string $date_add
 * @property string $email
 */
class Users extends \yii\db\ActiveRecord
{
    const SEX = [
        'мужской',
        'женский',
        'нет информации',
    ];

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'users';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['login', 'password', 'name', 'surname', 'sex','email'], 'required'],
            [['password'], 'string'],
            [['login','sex'], 'string', 'max' => 64],
            [['login'], 'string', 'min' => 4],
            [['password'], 'string', 'min' => 6],
            ['name', 'match', 'pattern' => '^([A-Z][a-z])^', 'message' => 'С большой буквы'],
            ['surname', 'match', 'pattern' => '^([A-Z][a-z])^', 'message' => 'С большой буквы'],
            [['email'], 'string', 'max' => 128],
            [['login'], 'unique'],
            [['email'], 'unique'],
            ['email', 'email'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'login' => 'Логин',
            'password' => 'Пароль',
            'name' => 'Имя',
            'surname' => 'Фамилия',
            'sex' => 'Пол',
            'date_add' => 'Дата создания',
            'email' => 'E-mail',
        ];
    }

}
