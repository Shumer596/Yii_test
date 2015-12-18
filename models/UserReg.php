<?php

namespace app\models;

use Yii;
use \yii\db\ActiveRecord;
/**
 * This is the model class for table "user".
 *
 * @property integer $user_id
 * @property string name
 * @property string passwd
 * @property string email
 */
class UserReg extends ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'passwd', 'email'],'required'],
            [['name', 'passwd', 'email'], 'string', 'max' => 255],
            ['email', 'email'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'user_id' => Yii::t('app', 'User ID'),
            'name' => Yii::t('app', 'Name'),
            'passwd' => Yii::t('app', 'Password'),
            'email' => Yii::t('app', 'Email'),
        ];
    }
}
