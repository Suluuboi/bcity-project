<?php

namespace app\models;

use suluuboi\phpmvc\db\DbModel;

class Contacts extends DBModel
{
    public string $name = '';
    public string $surname = '';
    public string $email = '';

    public static function tableName(): string
    {
        return 'contacts';
    }

    public function attributes(): array
    {
        return ['name', 'surname', 'email'];
    }

    public function labels()
    {
        return [
            'name' => 'Contact Name',
            'surname' => 'Contact Last Name',
            'email' => 'Contact Email Address'
        ];
    }

    public function rules()
    {
        return [
            'name' => [self::RULE_REQUIRED],
            'surname' => [self::RULE_REQUIRED],
            'email' => [self::RULE_REQUIRED, self::RULE_EMAIL]
        ];
    }



    public function save()
    {
        return parent::save();
    }
}