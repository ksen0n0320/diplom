<?php

/** @var yii\web\View $this */
use yii\bootstrap5\Html;
$this->title = 'Pet.home';
?>
<div class="site-index">

    <div class="jumbotron text-center bg-transparent mt-5 mb-5">
        <h1 class="display-4">КТО МЫ</h1>
    </div>

    <div class="body-content">
    
    <div class="container ">
        <div class="row justify-content-around">
            <div class="col-md-5">
                <p>Приют для живтных «Pet.home» существует в Санкт-Петербурге уже более 6 лет. В стенах приюта содержатся брошенные, оказавшиеся на улице и просто никому не нужные животные.</p>
                <p>В приюте проживают более 100 животных, с разной судьбой и разного возраста. Большинство питомнцев отданы  добрыми людьми или бывшими хозяевами. У каждого свой характер — кто-то ласковый, кто-то пугливый,  игривый или стеснительный, грустный, своенравный или веселый. </p>
                <p>Наша команда волонтеров старается сделать всё от них зависящее, чтобы все питомцы чувствовали в стенах приюта уют и хоть малую частичку дома. Однако мы не можем заменить им дом и заботливых хозяев в полной мере. К сожалению, многие люди боятся брать животное из приюта, думая, что тут все больные или чем-то хуже других, но на самом деле все проблемы не в животных, а в людях, что плохо к ним относились до приюта. Вы же можете спасти хотя бы одну кошачью или собачью жизнь, подарить живому существу тёплый дом, любовь и ласку!</p>
                </div>
            <div class="col-md-6 carousel-container">
                <div id="carouselExampleIndicators" class="carousel slide bcustom-carousel" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="5" aria-label="Slide 6"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="6" aria-label="Slide 7"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="7" aria-label="Slide 8"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="8" aria-label="Slide 9"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="9" aria-label="Slide 10"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="10" aria-label="Slide 11"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="11" aria-label="Slide 12"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="https://dp-danilova.сделай.site/web/assets/image/1.webp" class="d-block w-100 " alt="помещеение для кошек">
                    </div>
                    <div class="carousel-item">
                        <img src="https://dp-danilova.сделай.site/web/assets/image/2.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="https://dp-danilova.сделай.site/web/assets/image/3.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="https://dp-danilova.сделай.site/web/assets/image/4.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="https://dp-danilova.сделай.site/web/assets/image/5.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="https://dp-danilova.сделай.site/web/assets/image/6.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="https://dp-danilova.сделай.site/web/assets/image/7.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="https://dp-danilova.сделай.site/web/assets/image/8.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="https://dp-danilova.сделай.site/web/assets/image/9.jpg" class="d-block w-100" alt="...">
                    </div>               
                    <div class="carousel-item">
                        <img src="https://dp-danilova.сделай.site/web/assets/image/10.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="https://dp-danilova.сделай.site/web/assets/image/11.jpg" class="d-block w-100" alt="...">
                    </div>
                </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                </button>
                </div>
            </div>
        </div>
        
    </div>
    
    <div class="text-center">
        <p><a class="btn btn-lg btn-success" href="https://dp-danilova.сделай.site/pet/catalog"> Познакомиться со всеми</a></p>
    </div>

    <div class="jumbotron text-center bg-transparent mt-5 mb-5">
        <h1 class="display-4">УСЛОВИЯ СОДЕРЖАНИЯ</h1>
    </div>
    <div class="container">
        <div class="row gx-5 gy-5 justify-content-space-around">
            <div class="col-md-4">
                <img src="https://dp-danilova.сделай.site/web/assets/image/info1.png" class="d-block w-100" alt="...">
            </div>
            <div class="col-md-4">
                <img src="https://dp-danilova.сделай.site/web/assets/image/info2.png" class="d-block w-100" alt="...">
            </div>
            <div class="col-md-4">
                <img src="https://dp-danilova.сделай.site/web/assets/image/info3.png" class="d-block w-100" alt="...">
            </div>
            <div class="col-md-4">
                <img src="https://dp-danilova.сделай.site/web/assets/image/info4.png" class="d-block w-100" alt="...">
            </div>
            <div class="col-md-4">
                <img src="https://dp-danilova.сделай.site/web/assets/image/info5.png" class="d-block w-100" alt="...">
            </div>
            <div class="col-md-4">
                <img src="https://dp-danilova.сделай.site/web/assets/image/info6.png" class="d-block w-100" alt="...">
            </div>
        </div>
    </div>

</div>
