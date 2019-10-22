<?php 

namespace frontend\models\forms;

use frontend\models\NewsSearch;
use yii\base\Model;


class SearchForm extends Model {
    public $keyword;

    public function rules() {
        return [
            ['keyword', 'trim'],
            ['keyword', 'required'],
            ['keyword', 'string', 'min' => 3],            
        ];
    }

    public function search(){
        if($this->validate()) {
            $model = new NewsSearch();
            return $model->fulltextSearch($this->keyword);
        }
    }

}