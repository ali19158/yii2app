<?php
namespace frontend\controllers;

//use yii\web\Controller;

class HtmlHelperController extends \yii\web\Controller {

    public function actionDemo() {
        return $this->render('demo');
    }

    public function actionEscapeOutput() {
        $comments = [
            [
            'id' => 10,
            'author' => 'Student',
            'text' => 'Hello!',
        ],
        [
            'id' => 11,
            'author' => 'Ali',
            'text' => 'Hello! How are you?',
        ]
    ];

        return $this->render('escape-output', [
            'comments' => $comments,
        ]);
    }
}
