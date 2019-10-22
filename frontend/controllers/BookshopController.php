<?php

namespace frontend\controllers;
use frontend\models\Book;
use Yii;
use frontend\models\Publisher;
class BookshopController extends \yii\web\Controller
{
    public function actionIndex()
    {   
        //$bookList = Book::find()->where(['publisher_id' => 1])->limit(2)->all();
        $bookList = Book::find()->orderBy('date_published')->limit(20)->all();

        return $this->render('index', [
            'bookList' => $bookList,
        ]);
    }

    public function actionCreate() {
        $book = new Book();

        $publishers = Publisher::getList();

        if($book->load(Yii::$app->request->post()) && $book->save()){
           
                Yii::$app->session->setFlash('success', 'Saved');
                return $this->refresh();
        }

        return $this->render('create', [
            'book' => $book,
            'publishers' => $publishers,
        ]);
    }
}
