<section class="parallax-section">
    <div class="parallax-background"></div>

    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-lg-10">
                <h2 class="mb-2">Запишитесь на бесплатную консультацию в нашем салоне</h2>
                <p>На консультации Вы узнаете:</p>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/section-title-dec.svg" class="mb-5">
            </div>
        </div>

        <div class="row g-4 mb-5">
            <div class="col-lg-3 col-md-6">
                <div class="d-flex d-lg-block text-center text-lg-center align-items-center">
                    <div class="mb-0 mb-lg-3 me-3 me-lg-0 flex-shrink-0">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/icon1.svg" alt="Увидите много разнообразных вариантов мебели." class="img-fluid">
                    </div>
                    <p class="mb-0 text-start text-lg-center">Увидите много разнообразных вариантов мебели.</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="d-flex d-lg-block text-center text-lg-center align-items-center">
                    <div class="mb-0 mb-lg-3 me-3 me-lg-0 flex-shrink-0">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/icon2.svg" alt="Узнаете преимущества и недостатки всех материалов." class="img-fluid">
                    </div>
                    <p class="mb-0 text-start text-lg-center">Узнаете преимущества и недостатки всех материалов.</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="d-flex d-lg-block text-center text-lg-center align-items-center">
                    <div class="mb-0 mb-lg-3 me-3 me-lg-0 flex-shrink-0">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/icon3.svg" alt="Узнаете реальную стоимость и время изготовления." class="img-fluid">
                    </div>
                    <p class="mb-0 text-start text-lg-center">Узнаете реальную стоимость и время изготовления.</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="d-flex d-lg-block text-center text-lg-center align-items-center">
                    <div class="mb-0 mb-lg-3 me-3 me-lg-0 flex-shrink-0">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/icon4.svg" alt="Получите ответы на все свои вопросы." class="img-fluid">
                    </div>
                    <p class="mb-0 text-start text-lg-center">Получите ответы на все свои вопросы.</p>
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-auto">
                <a href="#" type="button" class="btn btn-lg btn-corporate-color-1" data-bs-toggle="modal" data-bs-target="#callbackModalConsul">Записаться на консультацию</a>
            </div>
        </div>
    </div>
</section>

<style>
    .parallax-section {
        position: relative;
        min-height: 470px;
        display: flex;
        align-items: center;
        padding: 60px 0;
        overflow: hidden;
    }

    .parallax-background {
        position: absolute;
        top: -50px;
        left: 0;
        width: 100%;
        height: 100%;
        min-height: 640px;
        background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/img/paralax.webp');
        background-size: 100%;
        background-repeat: no-repeat;
        z-index: -1;
        transition: background-position 2s ease;
    }

    @media (max-width: 1200px) {
        .parallax-background {
            background-size: auto;
            background-position: center;
            top: 50px;
        }
    }
</style>