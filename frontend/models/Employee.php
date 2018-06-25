<?php

namespace frontend\models;
use Yii;

use yii\base\Model;

class Employee extends Model
{

    const SCENARIO_EMPLOYEE_REGISTER = 'employee_register';
    const SCENARIO_EMPLOYEE_UPDATE = 'employee_update';
    
    public $firstName;
    public $lastName;
    public $middleName;
    public $salary;
    public $email;
    public $birth;
    public $beginWork;
    public $identificationCode;
    public $position;
    public $city;
    
    public function scenarios()
    {
        
        return [
            self::SCENARIO_EMPLOYEE_REGISTER => ['firstName', 'lastName', 'middleName',
                'email', 'birth', 'beginWork', 'city', 'position', 'identificationCode'],
            self::SCENARIO_EMPLOYEE_UPDATE => ['firstName', 'lastName', 'middleName'],
        ];
    }

    public function rules()
    {
        return [
            [['firstName', 'lastName', 'email', 'beginWork', 'position', 'identificationCode'], 'required'],
            [['firstName'], 'string', 'min' => 2],
            [['lastName'], 'string', 'min' => 3],
            [['email'], 'email'],
            [['birth'], 'date', 'format' => 'php:Y-m-d'],
            [['beginWork'], 'date', 'format' => 'php:Y-m-d'],
            [['city'], 'integer'],
            [['position'], 'string'],
            [['identificationCode'], 'string', 'length' => 10],
            [['middleName'], 'required', 'on' => self::SCENARIO_EMPLOYEE_UPDATE],
        ];
    }
    
    public function save()
    {
        $sql = "INSERT INTO collaborator  (id, name, surname, patronymic, 
            email, date_of_birth, date_of_commencement_of_work, city, 
            position, identification_code) 
                VALUES (null, '{$this->firstName}', '{$this->lastName}', '{$this->middleName}', "
                . "'{$this->email}', '{$this->birth}', '{$this->beginWork}', '{$this->city}',"
                . " '{$this->position}', '{$this->identificationCode}')";
                  return Yii::$app->db->createCommand($sql)->execute();
    }
    
    public static function find() {
        
          $sql = 'SELECT * FROM collaborator';
          return   Yii::$app->db->createCommand($sql)->queryAll();
}
}

