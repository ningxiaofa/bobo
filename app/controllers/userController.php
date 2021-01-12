<?php

namespace app\controllers;

use app\models\user;
use \PDO;
use core\lib\model;
use core\lib\conf;
use app\models\userModel;

class userController extends \core\kernel
{
    public function index()
    {
        $model = new userModel();

        // return [
        //     'code' => 1,
        //     'msg' => 'success',
        //     'data' => [
        //         1,2,3
        //     ]
        // ];

        $model->insert($model->table, [
            "username" => "foo123",
            "password" => "123456",
        ]);

        // dump($model->id());

        return [
            'code' => 1,
            'msg' => 'success',
            'id' => $model->id()
        ];
    }

}