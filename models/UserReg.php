<?php

namespace app\models;

use Yii;
use \yii\db\ActiveRecord;
/**
 * This is the model class for table "user_reg".
 *
 * @property integer $user_id
 * @property string $user_name
 * @property string $user_passwd
 * @property string $user_email
 */
class UserReg extends ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user_reg';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_name', 'user_passwd', 'user_email'],'required'],
            [['user_name', 'user_passwd', 'user_email'], 'string', 'max' => 255],
            ['user_email', 'email'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'user_id' => Yii::t('app', 'User ID'),
            'user_name' => Yii::t('app', 'Name'),
            'user_passwd' => Yii::t('app', 'Password'),
            'user_email' => Yii::t('app', 'Email'),
        ];
    }
}
