<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\GroupsSeach */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="groups-index">

<!--    <h1><?= Html::encode($this->title) ?></h1>-->
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('<i class="glyphicon glyphicon-plus"> </i>เพิ่มกลุ่มงาน', ['create'], ['class' => 'btn btn-primary']) ?>
    </p>
    <div>
        <div>
        <div>     </div> 
    
    </div>
    </div>
    <div class="panel panel-info">
  <div class="panel-heading"><i class="glyphicon glyphicon-home"> </i>กลุ่มงาน</div>
  <div class="panel-body">
  <?= GridView::widget([
        'dataProvider' => $dataProvider,
 //       'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

          //  'id',
            'namegroup',

//            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>  
  </div>
</div>
  
</div>
