<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "myusers".
 *
 * @property int $user_id
 * @property string $username
 * @property string $password
 * @property string $role
 */
class Myusers extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'myusers';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['username', 'password', 'role'], 'required'],
            [['role'], 'string'],
            [['username', 'password'], 'string', 'max' => 255],
            [['username'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'user_id' => 'User ID',
            'username' => 'Username',
            'password' => 'Password',
            'role' => 'Role',
        ];
    }
}
