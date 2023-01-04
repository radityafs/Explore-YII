<?php

namespace app\controllers;

use yii\httpclient\Client;

class MovieController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $client = new Client();
        $response = $client->createRequest()
            ->setMethod('GET')
            ->setUrl('http://localhost:3000/api/movie/trending')
            ->send();
        $data = $response->data;
        return $this->render('index', [
            'data' => $data,
        ]);
    }
}
