<?php
use yii\base\Model;
/**
 * EntryForm is the model behind the login form.
 */
class EntryForm extends Model
{
    public $name;
    public $email;
    public function rules()
    {
        return [
            [['name', 'email'], 'required'],
            ['email', 'email'],
        ];
    }
}