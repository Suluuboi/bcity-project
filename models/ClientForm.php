<?php

namespace app\models;

use suluuboi\phpmvc\db\DbModel;

class ClientForm extends DBModel
{
    public string $name = '';
    public string $code = '';

    public static function tableName(): string
    {
        return 'clients';
    }

    public function attributes(): array
    {
        return ['name', 'code'];
    }

    public function labels()
    {
        return [
            'name' => 'Client Name',
            'code' => 'Clint Code'
        ];
    }

    public function rules()
    {
        return [
            'name' => [self::RULE_REQUIRED],
            'code' => [self::RULE_REQUIRED]
        ];
    }



    public function save()
    {
        return parent::save();
    }
}