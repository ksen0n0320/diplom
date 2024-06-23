<?php

use app\models\User;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\UserSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Забрать питомца';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="people-rules">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
    
    <div class="jumbotron  text-center bg-transparent mt-5 mb-5">
        <h1 class="display-5" >Вы решили забрать питомца из приюта</h1>
    </div>

    <div class="jumbotron  bg-transparent mt-5 mb-5">
        <h1 class="display-8">Обязательные правила</h1>
    </div>

    <div class="container ">
        <div class="row justify-content-around ">
            <div class="col-md-6">  
                <p class="text-md-start">
                    1. Перед приездом в приют необходимо заполнить анкету по кнопке ниже. После заполнения необходимо отписаться администратору на email (ссылка указана на странице "Контакты"). 
                </p>
                <p class="text-md-start">
                    2. После проверки Вашей анкеты администратор с Вами свяжется и сообщит, когда можно приехать в приют на знакомство с животным и собеседованием с волонтерами. Также, администратор может отказать в отдаче животного без объяснения причины, если вы не прошли по критериям приюта. Нам важны подробные ответы на вопросы в анкете, а не просто "Да", "Нет".
                </p>
                <p class="text-md-start">
                    3. В приют с собой обязательно приносить сумку-переноску и паспорт. Без этих вещей животное вам не отдадут.
                </p>
                <p class="text-md-start">
                    4. Заранее подготовьте дома лоточек с бортиком (без сетки), древесный наполнитель, миски для воды и еды, игрушки (мышки, мячики и т.д).
                </p>
                <p class="text-md-start">
                    5. Все животные отдаются лицам от 20 лет. Если вы не достигли возраста 20 лет, то взять животное вы можете с родителями или законными представителями.
                </p>
                <p class="text-md-start">
                    6. Также, стоит понимать, что бездомные животные перенесли тяжелую жизнь на улице, мы не знаем, как они питались и что им пришлось пережить. При поступлении в приют сдаются основные анализы на инфекции питомцев, но полностью все здоровье животного мы проверить не можем. У некоторых животных дома могут возникнут какие-то проблемы, с которыми необходимо обращаться к ветеринару. У животных нет полиса ОМС, как у людей, все приемы, анализы и лечение необходимо оплачивать по ценам ветклиники. Будьте готовы к тому, что животное может заболеть и придется потратить на его лечение какую-то сумму.
                </p>
            </div>
            <div class="col">
                <img src="https://dp-danilova.сделай.site/web/assets/image/puppy.jpg" width="600" height="600" alt="...">
            </div>
    </div>
    </div>
    
    <div class="text-center">
        <p><a class="btn btn-lg btn-success" href="https://dp-danilova.сделай.site/user/create"> Анкета потенциального хозяина</a></p>
    </div>

</div>
