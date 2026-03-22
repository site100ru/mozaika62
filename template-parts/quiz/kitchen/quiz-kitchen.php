<section id="quiz" class="quiz-section bg-white py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col">
                <div class="section-title-wrapper text-center">
                    <h2 class="section-title">Узнайте примерную стоимость вашей кухни</h2>
                    <p class="section-subtitle">Ответьте на 7 коротких вопросов</p>
                    <img class="text-center img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/section-title-dec.svg" style="margin-bottom: 60px;" />
                </div>

                <div class="quiz-question-container">
                    <div class="row text-start quiz-question-wrapper">

                        <!-- question-1-kitchen (Планировка) -->
                        <div class="col" id="question-1-kitchen">
                            <h3 class="quiz-section-subtitle mb-4 text-start"><span>1/7</span> Какая планировка кухни Вам нужна?</h3>

                            <div class="row quiz-questions-container">

                                <div class="col-6 col-sm-4 col-xl-3">
                                    <label class="option_item mb-3" for="answer-1-kitchen-1">
                                        <input type="radio" id="answer-1-kitchen-1" name="question-1-kitchen" class="checkbox" value="Прямая" />
                                        <div class="option_inner">
                                            <div class="shadow-wrapper">
                                                <div class="shadow-wrapper-decoration"></div>
                                            </div>
                                            <img loading="lazy" src="<?php echo get_stylesheet_directory_uri(); ?>/template-parts/quiz/img/2-kitchen-1.webp"
                                                style="width: 100%" />
                                        </div>
                                    </label>
                                    <h6 class="quiz-section-h3 mb-4">Прямая</h6>
                                </div>

                                <div class="col-6 col-sm-4 col-xl-3">
                                    <label class="option_item mb-3" for="answer-1-kitchen-2">
                                        <input type="radio" id="answer-1-kitchen-2" name="question-1-kitchen" class="checkbox" value="Угловая" />
                                        <div class="option_inner">
                                            <div class="shadow-wrapper">
                                                <div class="shadow-wrapper-decoration"></div>
                                            </div>
                                            <img loading="lazy" src="<?php echo get_stylesheet_directory_uri(); ?>/template-parts/quiz/img/2-kitchen-2.webp"
                                                style="width: 100%" />
                                        </div>
                                    </label>
                                    <h6 class="quiz-section-h3 mb-4">Угловая</h6>
                                </div>

                                <div class="col-6 col-sm-4 col-xl-3">
                                    <label class="option_item mb-3" for="answer-1-kitchen-3">
                                        <input type="radio" id="answer-1-kitchen-3" name="question-1-kitchen" class="checkbox" value="П-образная" />
                                        <div class="option_inner">
                                            <div class="shadow-wrapper">
                                                <div class="shadow-wrapper-decoration"></div>
                                            </div>
                                            <img loading="lazy" src="<?php echo get_stylesheet_directory_uri(); ?>/template-parts/quiz/img/2-kitchen-3.webp"
                                                style="width: 100%" />
                                        </div>
                                    </label>
                                    <h6 class="quiz-section-h3 mb-4">П-образная</h6>
                                </div>
                            </div>

                            <div class="row align-items-center">
                                <div class="col-3 col-lg-1 mb-3 mb-lg-0">
                                    <div class="progress-title">Готово:</div>
                                </div>

                                <div class="col-9 col-lg-5 mb-3 mb-lg-0">
                                    <div class="progress" role="progressbar" aria-label="Progress" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar" style="width: 0%"></div>
                                    </div>
                                </div>

                                <div class="col-12 col-sm-6 col-lg-3 mb-3 mb-sm-0 order-2 order-sm-1">
                                    <input type="button" disabled value="Назад" class="btn btn-corporate-color-outline-1" />
                                </div>

                                <div class="col-12 col-sm-6 col-lg-3 mb-3 mb-sm-0 order-1 order-sm-2">
                                    <input type="button" id="btn-next-question-1-kitchen" value="Далее" class="btn btn-corporate-color-1" />
                                </div>
                            </div>
                        </div>
                        <!-- /question-1-kitchen -->



                        <!-- question-2-kitchen (Дополнительные особенности) -->
                        <div class="col" id="question-2-kitchen" style="display: none;">
                            <h3 class="quiz-section-subtitle mb-4 text-start"><span>2/7</span> Какие дополнительные особенности кухни Вы хотите?</h3>

                            <div class="row quiz-questions-container">

                                <div class="col-6 col-sm-4 col-xl-3">
                                    <label class="option_item mb-3" for="answer-2-kitchen-1">
                                        <input type="checkbox" id="answer-2-kitchen-1" name="answer-2-kitchen-1" class="checkbox" value="Барная стойка" />
                                        <div class="option_inner">
                                            <div class="shadow-wrapper">
                                                <div class="shadow-wrapper-decoration"></div>
                                            </div>
                                            <img loading="lazy" src="<?php echo get_stylesheet_directory_uri(); ?>/template-parts/quiz/img/3-kitchen-1.webp"
                                                style="width: 100%" />
                                        </div>
                                    </label>
                                    <h6 class="quiz-section-h3 mb-4">Барная стойка</h6>
                                </div>

                                <div class="col-6 col-sm-4 col-xl-3">
                                    <label class="option_item mb-3" for="answer-2-kitchen-2">
                                        <input type="checkbox" id="answer-2-kitchen-2" name="answer-2-kitchen-2" class="checkbox" value="Островок" />
                                        <div class="option_inner">
                                            <div class="shadow-wrapper">
                                                <div class="shadow-wrapper-decoration"></div>
                                            </div>
                                            <img loading="lazy" src="<?php echo get_stylesheet_directory_uri(); ?>/template-parts/quiz/img/3-kitchen-2.webp"
                                                style="width: 100%" />
                                        </div>
                                    </label>
                                    <h6 class="quiz-section-h3 mb-4">Островок</h6>
                                </div>

                                <div class="col-6 col-sm-4 col-xl-3">
                                    <label class="option_item mb-3" for="answer-2-kitchen-3">
                                        <input type="checkbox" id="answer-2-kitchen-3" name="answer-2-kitchen-3" class="checkbox" value="Высота до потолка" />
                                        <div class="option_inner">
                                            <div class="shadow-wrapper">
                                                <div class="shadow-wrapper-decoration"></div>
                                            </div>
                                            <img loading="lazy" src="<?php echo get_stylesheet_directory_uri(); ?>/template-parts/quiz/img/3-kitchen-3.webp"
                                                style="width: 100%" />
                                        </div>
                                    </label>
                                    <h6 class="quiz-section-h3 mb-4">Высота до потолка</h6>
                                </div>
                            </div>

                            <div class="row align-items-center">
                                <div class="col-3 col-lg-1 mb-3 mb-lg-0">
                                    <div class="progress-title">Готово:</div>
                                </div>

                                <div class="col-9 col-lg-5 mb-3 mb-lg-0">
                                    <div class="progress" role="progressbar" aria-label="Progress" aria-valuenow="17" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar" style="width: 17%"></div>
                                    </div>
                                </div>

                                <div class="col-12 col-sm-6 col-lg-3 mb-3 mb-sm-0 order-2 order-sm-1">
                                    <input type="button" value="Назад" class="btn btn-corporate-color-outline-1" />
                                </div>

                                <div class="col-12 col-sm-6 col-lg-3 mb-3 mb-sm-0 order-1 order-sm-2">
                                    <input type="button" id="btn-next-question-2-kitchen" value="Далее" class="btn btn-corporate-color-1" />
                                </div>
                            </div>
                        </div>
                        <!-- /question-2-kitchen -->



                        <!-- question-3-kitchen (Размеры) -->
                        <div class="col" id="question-3-kitchen" style="display: none;">
                            <h3 class="quiz-section-subtitle mb-4 text-start"><span>3/7</span> Введите размеры кухни</h3>

                            <div class="quiz-questions-container">                                
                                <div class="row">
                                    <div class="col-12">
                                        <label for="kitchen-size" class="mb-3">Опишите своими словами размеры кухни, чтобы мы могли учесть все особенности и предложить наиболее точный расчет.</label>
                                        <div>
                                            <input type="text" class="form-control" id="kitchen-size" name="kitchen-size" placeholder="Например: 5 на 3 м или 3,3 м, барная стойка 1 на 1" />
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row align-items-center">
                                <div class="col-3 col-lg-1 mb-3 mb-lg-0">
                                    <div class="progress-title">Готово:</div>
                                </div>

                                <div class="col-9 col-lg-5 mb-3 mb-lg-0">
                                    <div class="progress" role="progressbar" aria-label="Progress" aria-valuenow="34" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar" style="width: 34%"></div>
                                    </div>
                                </div>

                                <div class="col-12 col-sm-6 col-lg-3 mb-3 mb-sm-0 order-2 order-sm-1">
                                    <input type="button" value="Назад" class="btn btn-corporate-color-outline-1" />
                                </div>

                                <div class="col-12 col-sm-6 col-lg-3 mb-3 mb-sm-0 order-1 order-sm-2">
                                    <input type="button" id="btn-next-question-3-kitchen" value="Далее" class="btn btn-corporate-color-1" />
                                </div>
                            </div>
                        </div>
                        <!-- /question-3-kitchen -->



                        <!-- question-4-kitchen (Стиль) -->
                        <div class="col" id="question-4-kitchen" style="display: none;">
                            <h3 class="quiz-section-subtitle mb-4 text-start"><span>4/7</span> Какой стиль кухни Вы рассматриваете?</h3>

                            <div class="row quiz-questions-container">

                                <div class="col-6 col-sm-4 col-xl-3">
                                    <label class="option_item mb-3" for="answer-4-kitchen-1">
                                        <input type="radio" id="answer-4-kitchen-1" name="question-4-kitchen" class="checkbox" value="Современный" />
                                        <div class="option_inner">
                                            <div class="shadow-wrapper">
                                                <div class="shadow-wrapper-decoration"></div>
                                            </div>
                                            <img loading="lazy" src="<?php echo get_stylesheet_directory_uri(); ?>/template-parts/quiz/img/5-kitchen-1.webp"
                                                style="width: 100%" />
                                        </div>
                                    </label>
                                    <h6 class="quiz-section-h3 mb-4">Современный</h6>
                                </div>

                                <div class="col-6 col-sm-4 col-xl-3">
                                    <label class="option_item mb-3" for="answer-4-kitchen-2">
                                        <input type="radio" id="answer-4-kitchen-2" name="question-4-kitchen" class="checkbox" value="Классический" />
                                        <div class="option_inner">
                                            <div class="shadow-wrapper">
                                                <div class="shadow-wrapper-decoration"></div>
                                            </div>
                                            <img loading="lazy" src="<?php echo get_stylesheet_directory_uri(); ?>/template-parts/quiz/img/5-kitchen-2.webp"
                                                style="width: 100%" />
                                        </div>
                                    </label>
                                    <h6 class="quiz-section-h3 mb-4">Классический</h6>
                                </div>

                                <div class="col-6 col-sm-4 col-xl-3">
                                    <label class="option_item mb-3" for="answer-4-kitchen-3">
                                        <input type="radio" id="answer-4-kitchen-3" name="question-4-kitchen" class="checkbox" value="Лофт" />
                                        <div class="option_inner">
                                            <div class="shadow-wrapper">
                                                <div class="shadow-wrapper-decoration"></div>
                                            </div>
                                            <img loading="lazy" src="<?php echo get_stylesheet_directory_uri(); ?>/template-parts/quiz/img/5-kitchen-3.webp"
                                                style="width: 100%" />
                                        </div>
                                    </label>
                                    <h6 class="quiz-section-h3 mb-4">Лофт</h6>
                                </div>

                                <div class="col-6 col-sm-4 col-xl-3">
                                    <label class="option_item mb-3" for="answer-4-kitchen-4">
                                        <input type="radio" id="answer-4-kitchen-4" name="question-4-kitchen" class="checkbox" value="Пока не знаю (нужна консультация)" />
                                        <div class="option_inner">
                                            <div class="shadow-wrapper">
                                                <div class="shadow-wrapper-decoration"></div>
                                            </div>
                                            <img loading="lazy" src="<?php echo get_stylesheet_directory_uri(); ?>/template-parts/quiz/img/5-kitchen-4.webp"
                                                style="width: 100%" />
                                        </div>
                                    </label>
                                    <h6 class="quiz-section-h3 mb-4">Пока не знаю (нужна консультация)</h6>
                                </div>
                            </div>

                            <div class="row align-items-center">
                                <div class="col-3 col-lg-1 mb-3 mb-lg-0">
                                    <div class="progress-title">Готово:</div>
                                </div>

                                <div class="col-9 col-lg-5 mb-3 mb-lg-0">
                                    <div class="progress" role="progressbar" aria-label="Progress" aria-valuenow="51" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar" style="width: 51%"></div>
                                    </div>
                                </div>

                                <div class="col-12 col-sm-6 col-lg-3 mb-3 mb-sm-0 order-2 order-sm-1">
                                    <input type="button" value="Назад" class="btn btn-corporate-color-outline-1" />
                                </div>

                                <div class="col-12 col-sm-6 col-lg-3 mb-3 mb-sm-0 order-1 order-sm-2">
                                    <input type="button" id="btn-next-question-4-kitchen" value="Далее" class="btn btn-corporate-color-1" />
                                </div>
                            </div>
                        </div>
                        <!-- /question-4-kitchen -->



                        <!-- question-5-kitchen (Материал фасада) -->
                        <div class="col" id="question-5-kitchen" style="display: none;">
                            <h3 class="quiz-section-subtitle mb-4 text-start"><span>5/7</span> Какой материал фасада Вы рассматриваете?</h3>

                            <div class="row quiz-questions-container">

                                <div class="col-6 col-sm-4 col-xl-3">
                                    <label class="option_item mb-3" for="answer-5-kitchen-1">
                                        <input type="radio" id="answer-5-kitchen-1" name="question-5-kitchen" class="checkbox" value="ЛДСП" />
                                        <div class="option_inner">
                                            <div class="shadow-wrapper">
                                                <div class="shadow-wrapper-decoration"></div>
                                            </div>
                                            <img loading="lazy" src="<?php echo get_stylesheet_directory_uri(); ?>/template-parts/quiz/img/6-kitchen-1.webp"
                                                style="width: 100%" />
                                        </div>
                                    </label>
                                    <h6 class="quiz-section-h3 mb-4">ЛДСП</h6>
                                </div>

                                <div class="col-6 col-sm-4 col-xl-3">
                                    <label class="option_item mb-3" for="answer-5-kitchen-2">
                                        <input type="radio" id="answer-5-kitchen-2" name="question-5-kitchen" class="checkbox" value="МДФ" />
                                        <div class="option_inner">
                                            <div class="shadow-wrapper">
                                                <div class="shadow-wrapper-decoration"></div>
                                            </div>
                                            <img loading="lazy" src="<?php echo get_stylesheet_directory_uri(); ?>/template-parts/quiz/img/6-kitchen-2.webp"
                                                style="width: 100%" />
                                        </div>
                                    </label>
                                    <h6 class="quiz-section-h3 mb-4">МДФ</h6>
                                </div>

                                <div class="col-6 col-sm-4 col-xl-3">
                                    <label class="option_item mb-3" for="answer-5-kitchen-3">
                                        <input type="radio" id="answer-5-kitchen-3" name="question-5-kitchen" class="checkbox" value="Эмаль" />
                                        <div class="option_inner">
                                            <div class="shadow-wrapper">
                                                <div class="shadow-wrapper-decoration"></div>
                                            </div>
                                            <img loading="lazy" src="<?php echo get_stylesheet_directory_uri(); ?>/template-parts/quiz/img/6-kitchen-3.webp"
                                                style="width: 100%" />
                                        </div>
                                    </label>
                                    <h6 class="quiz-section-h3 mb-4">Эмаль</h6>
                                </div>

                                <div class="col-6 col-sm-4 col-xl-3">
                                    <label class="option_item mb-3" for="answer-5-kitchen-4">
                                        <input type="radio" id="answer-5-kitchen-4" name="question-5-kitchen" class="checkbox" value="Шпон" />
                                        <div class="option_inner">
                                            <div class="shadow-wrapper">
                                                <div class="shadow-wrapper-decoration"></div>
                                            </div>
                                            <img loading="lazy" src="<?php echo get_stylesheet_directory_uri(); ?>/template-parts/quiz/img/6-kitchen-4.webp"
                                                style="width: 100%" />
                                        </div>
                                    </label>
                                    <h6 class="quiz-section-h3 mb-4">Шпон</h6>
                                </div>

                                <div class="col-6 col-sm-4 col-xl-3">
                                    <label class="option_item mb-3" for="answer-5-kitchen-5">
                                        <input type="radio" id="answer-5-kitchen-5" name="question-5-kitchen" class="checkbox" value="Пластик" />
                                        <div class="option_inner">
                                            <div class="shadow-wrapper">
                                                <div class="shadow-wrapper-decoration"></div>
                                            </div>
                                            <img loading="lazy" src="<?php echo get_stylesheet_directory_uri(); ?>/template-parts/quiz/img/6-kitchen-5.webp"
                                                style="width: 100%" />
                                        </div>
                                    </label>
                                    <h6 class="quiz-section-h3 mb-4">Пластик</h6>
                                </div>

                                <div class="col-6 col-sm-4 col-xl-3">
                                    <label class="option_item mb-3" for="answer-5-kitchen-6">
                                        <input type="radio" id="answer-5-kitchen-6" name="question-5-kitchen" class="checkbox" value="AGT" />
                                        <div class="option_inner">
                                            <div class="shadow-wrapper">
                                                <div class="shadow-wrapper-decoration"></div>
                                            </div>
                                            <img loading="lazy" src="<?php echo get_stylesheet_directory_uri(); ?>/template-parts/quiz/img/6-kitchen-6.webp"
                                                style="width: 100%" />
                                        </div>
                                    </label>
                                    <h6 class="quiz-section-h3 mb-4">AGT</h6>
                                </div>

                                <div class="col-6 col-sm-4 col-xl-3">
                                    <label class="option_item mb-3" for="answer-5-kitchen-7">
                                        <input type="radio" id="answer-5-kitchen-7" name="question-5-kitchen" class="checkbox" value="Массив" />
                                        <div class="option_inner">
                                            <div class="shadow-wrapper">
                                                <div class="shadow-wrapper-decoration"></div>
                                            </div>
                                            <img loading="lazy" src="<?php echo get_stylesheet_directory_uri(); ?>/template-parts/quiz/img/6-kitchen-7.webp"
                                                style="width: 100%" />
                                        </div>
                                    </label>
                                    <h6 class="quiz-section-h3 mb-4">Массив</h6>
                                </div>

                                <div class="col-6 col-sm-4 col-xl-3">
                                    <label class="option_item mb-3" for="answer-5-kitchen-8">
                                        <input type="radio" id="answer-5-kitchen-8" name="question-5-kitchen" class="checkbox" value="Пока не знаю (нужна консультация)" />
                                        <div class="option_inner">
                                            <div class="shadow-wrapper">
                                                <div class="shadow-wrapper-decoration"></div>
                                            </div>
                                            <img loading="lazy" src="<?php echo get_stylesheet_directory_uri(); ?>/template-parts/quiz/img/6-kitchen-8.webp"
                                                style="width: 100%" />
                                        </div>
                                    </label>
                                    <h6 class="quiz-section-h3 mb-4">Пока не знаю (нужна консультация)</h6>
                                </div>
                            </div>

                            <div class="row align-items-center">
                                <div class="col-3 col-lg-1 mb-3 mb-lg-0">
                                    <div class="progress-title">Готово:</div>
                                </div>

                                <div class="col-9 col-lg-5 mb-3 mb-lg-0">
                                    <div class="progress" role="progressbar" aria-label="Progress" aria-valuenow="68" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar" style="width: 68%"></div>
                                    </div>
                                </div>

                                <div class="col-12 col-sm-6 col-lg-3 mb-3 mb-sm-0 order-2 order-sm-1">
                                    <input type="button" value="Назад" class="btn btn-corporate-color-outline-1" />
                                </div>

                                <div class="col-12 col-sm-6 col-lg-3 mb-3 mb-sm-0 order-1 order-sm-2">
                                    <input type="button" id="btn-next-question-5-kitchen" value="Далее" class="btn btn-corporate-color-1" />
                                </div>
                            </div>
                        </div>
                        <!-- /question-5-kitchen -->


                        <!-- question-5-5-kitchen (Budget) -->
                        <div class="col" id="question-5-5-kitchen" style="display: none;">
                            <h3 class="quiz-section-subtitle mb-4 text-start"><span>6/7</span> Какой бюджет Вы планируете?</h3>

                            <div class="row quiz-questions-container d-flex flex-column">

                                <div class="col-12 col-md-8">
                                    <label class="d-flex quiz-chek gap-3" for="answer-5-5-kitchen-1">
                                        <div class="option_item">
                                            <input type="radio" id="answer-5-5-kitchen-1" name="question-5-5-kitchen" class="checkbox" value="150 — 200 тыс. руб." />
                                            <div class="option_inner text-start">
                                                <div class="shadow-wrapper-box"></div>
                                                <img loading="lazy" src="<?php echo get_stylesheet_directory_uri(); ?>/template-parts/quiz/ico/checkbox.svg" />
                                            </div>
                                        </div>
                                        <h6 class="quiz-section-h3 mb-4">150 — 200 тыс. руб.</h6>
                                    </label>
                                </div>

                                <div class="col-12 col-md-8">
                                    <label class="d-flex quiz-chek gap-3" for="answer-5-5-kitchen-2">
                                        <div class="option_item">
                                            <input type="radio" id="answer-5-5-kitchen-2" name="question-5-5-kitchen" class="checkbox" value="200 — 300 тыс. руб." />
                                            <div class="option_inner text-start">
                                                <div class="shadow-wrapper-box"></div>
                                                <img loading="lazy" src="<?php echo get_stylesheet_directory_uri(); ?>/template-parts/quiz/ico/checkbox.svg" />
                                            </div>
                                        </div>
                                        <h6 class="quiz-section-h3 mb-4">200 — 300 тыс. руб.</h6>
                                    </label>
                                </div>

                                <div class="col-12 col-md-8">
                                    <label class="d-flex quiz-chek gap-3" for="answer-5-5-kitchen-3">
                                        <div class="option_item">
                                            <input type="radio" id="answer-5-5-kitchen-3" name="question-5-5-kitchen" class="checkbox" value="более 300 тыс. руб." />
                                            <div class="option_inner text-start">
                                                <div class="shadow-wrapper-box"></div>
                                                <img loading="lazy" src="<?php echo get_stylesheet_directory_uri(); ?>/template-parts/quiz/ico/checkbox.svg" />
                                            </div>
                                        </div>
                                        <h6 class="quiz-section-h3 mb-4">более 300 тыс. руб.</h6>
                                    </label>
                                </div>

                                <div class="col-12 col-md-8">
                                    <label class="d-flex quiz-chek gap-3" for="answer-5-5-kitchen-4">
                                        <div class="option_item">
                                            <input type="radio" id="answer-5-5-kitchen-4" name="question-5-5-kitchen" class="checkbox" value="не определился" />
                                            <div class="option_inner text-start">
                                                <div class="shadow-wrapper-box"></div>
                                                <img loading="lazy" src="<?php echo get_stylesheet_directory_uri(); ?>/template-parts/quiz/ico/checkbox.svg" />
                                            </div>
                                        </div>
                                        <h6 class="quiz-section-h3 mb-4">не определился</h6>
                                    </label>
                                </div>
                            </div>

                            <div class="row align-items-center">
                                <div class="col-3 col-lg-1 mb-3 mb-lg-0">
                                    <div class="progress-title">Готово:</div>
                                </div>

                                <div class="col-9 col-lg-5 mb-3 mb-lg-0">
                                    <div class="progress" role="progressbar" aria-label="Progress" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar" style="width: 85%"></div>
                                    </div>
                                </div>

                                <div class="col-12 col-sm-6 col-lg-3 mb-3 mb-sm-0 order-2 order-sm-1">
                                    <input type="button" value="Назад" class="btn btn-corporate-color-outline-1" />
                                </div>

                                <div class="col-12 col-sm-6 col-lg-3 mb-3 mb-sm-0 order-1 order-sm-2">
                                    <input type="button" id="btn-next-question-5-5-kitchen" value="Далее" class="btn btn-corporate-color-1" />
                                </div>
                            </div>
                        </div>
                        <!-- /question-5-5-kitchen -->

                        <!-- question-6-kitchen (Подарок) -->
                        <div class="col" id="question-6-kitchen" style="display: none;">
                            <h3 class="quiz-section-subtitle mb-4 text-start"><span>7/7</span> Какой подарок Вы хотите получить в случае заказа?</h3>

                            <div class="row quiz-questions-container">

                                <div class="col-6 col-sm-4 col-xl-3">
                                    <label class="option_item mb-3" for="answer-6-kitchen-1">
                                        <input type="radio" id="answer-6-kitchen-1" name="question-6-kitchen" class="checkbox" value="Дополнительная скидка 10%" />
                                        <div class="option_inner">
                                            <div class="shadow-wrapper">
                                                <div class="shadow-wrapper-decoration"></div>
                                            </div>
                                            <img loading="lazy" src="<?php echo get_stylesheet_directory_uri(); ?>/template-parts/quiz/img/7-kitchen-1.webp" style="width: 100%" />
                                        </div>
                                    </label>
                                    <h6 class="quiz-section-h3 mb-4">Дополнительная скидка 10%</h6>
                                </div>

                                <div class="col-6 col-sm-4 col-xl-3">
                                    <label class="option_item mb-3" for="answer-6-kitchen-2">
                                        <input type="radio" id="answer-6-kitchen-2" name="question-6-kitchen" class="checkbox" value="Беспроцентная рассрочка на 6 месяцев" />
                                        <div class="option_inner">
                                            <div class="shadow-wrapper">
                                                <div class="shadow-wrapper-decoration"></div>
                                            </div>
                                            <img loading="lazy" src="<?php echo get_stylesheet_directory_uri(); ?>/template-parts/quiz/img/7-kitchen-2.webp" style="width: 100%" />
                                        </div>
                                    </label>
                                    <h6 class="quiz-section-h3 mb-4">Беспроцентная рассрочка на 6 месяцев</h6>
                                </div>

                                <div class="col-6 col-sm-4 col-xl-3">
                                    <label class="option_item mb-3" for="answer-6-kitchen-3">
                                        <input type="radio" id="answer-6-kitchen-3" name="question-6-kitchen" class="checkbox" value="Скидка 15% на заказ шкафа в течении года" />
                                        <div class="option_inner">
                                            <div class="shadow-wrapper">
                                                <div class="shadow-wrapper-decoration"></div>
                                            </div>
                                            <img loading="lazy" src="<?php echo get_stylesheet_directory_uri(); ?>/template-parts/quiz/img/7-kitchen-3.webp" style="width: 100%" />
                                        </div>
                                    </label>
                                    <h6 class="quiz-section-h3 mb-4">Скидка 15% на заказ шкафа в течении года</h6>
                                </div>
                            </div>

                            <div class="row align-items-center">
                                <div class="col-3 col-lg-1 mb-3 mb-lg-0">
                                    <div class="progress-title">Готово:</div>
                                </div>

                                <div class="col-9 col-lg-5 mb-3 mb-lg-0">
                                    <div class="progress" role="progressbar" aria-label="Progress" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar" style="width: 92%"></div>
                                    </div>
                                </div>

                                <div class="col-12 col-sm-6 col-lg-3 mb-3 mb-sm-0 order-2 order-sm-1">
                                    <input type="button" value="Назад" class="btn btn-corporate-color-outline-1" />
                                </div>

                                <div class="col-12 col-sm-6 col-lg-3 mb-3 mb-sm-0 order-1 order-sm-2">
                                    <input type="button" id="btn-next-question-6-kitchen" value="Далее" class="btn btn-corporate-color-1" />
                                </div>
                            </div>
                        </div>
                        <!-- /question-6-kitchen -->



                        <!-- question-final -->
                        <div class="col" id="question-final" style="display: none">
                            <h3 class="quiz-section-subtitle mb-4 text-start">Куда отправить расчет?</h3>

                            <form action="<?php echo get_stylesheet_directory_uri(); ?>/template-parts/quiz/mails/kitchen-quiz.php" id="quiz"
                                method="post" name="quiz" class="form">
                                <div class="loader-box"><span class="loader"></span></div>

                                <input type="hidden" name="form-source" value="quiz-kitchen">
                                <input type="hidden" name="button-context" value="quiz-configurator-kitchen">
                                <input type="hidden" name="form-branch" value="kitchen">

                                <div class="quiz-questions-container">
                                    <div class="row align-items-center">
                                        <div class="col-12 col-md-3 mb-3">
                                            <label class="option_item" for="answer-final-1">
                                                <div class="d-flex quiz-chek gap-2 align-items-center ">
                                                    <input type="checkbox" id="answer-final-1" name="answer-final-1" class="checkbox"
                                                        value="Перезвонить" />
                                                    <div class="option_inner text-start">
                                                        <div class="shadow-wrapper-box"></div>
                                                        <img loading="lazy" src="<?php echo get_stylesheet_directory_uri(); ?>/template-parts/quiz/ico/checkbox.svg" />
                                                    </div>
                                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/template-parts/quiz/ico/messengers-icons.svg" class="qize-feedback-icons">
                                                    <h6 class="quiz-section-h3 mb-0">Перезвонить</h6>
                                                </div>
                                            </label>
                                        </div>

                                        <div class="col-12 col-md-3 mb-3">
                                            <label class="option_item" for="answer-final-2">
                                                <div class="d-flex quiz-chek gap-2 align-items-center">
                                                    <input type="checkbox" id="answer-final-2" name="answer-final-2" class="checkbox" value="Отправить в Whatsapp" />
                                                    <div class="option_inner text-start">
                                                        <div class="shadow-wrapper-box"></div>
                                                        <img loading="lazy" src="<?php echo get_stylesheet_directory_uri(); ?>/template-parts/quiz/ico/checkbox.svg" />
                                                    </div>
                                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/template-parts/quiz/ico/wa-icons.svg" class="qize-feedback-icons">
                                                    <h6 class="quiz-section-h3 mb-0">Отправить в&nbsp;Whatsapp</h6>
                                                </div>
                                            </label>
                                        </div>

                                        <div class="col-12 col-md-3 mb-3">
                                            <label class="option_item" for="answer-final-3">
                                                <div class="d-flex quiz-chek gap-2 align-items-center">
                                                    <input type="checkbox" id="answer-final-3" name="answer-final-3" class="checkbox" value="Отправить в Telegram" />
                                                    <div class="option_inner text-start">
                                                        <div class="shadow-wrapper-box"></div>
                                                        <img loading="lazy" src="<?php echo get_stylesheet_directory_uri(); ?>/template-parts/quiz/ico/checkbox.svg" />
                                                    </div>
                                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/template-parts/quiz/ico/telegram-icons.svg" class="qize-feedback-icons">
                                                    <h6 class="quiz-section-h3 mb-0">Отправить в&nbsp;Telegram</h6>
                                                </div>
                                            </label>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-12 col-md-6 col-xl-3 mt-md-4">
                                            <label for="feedback-phone" class="mb-1">Ваш телефон <span class="form__required">*</span></label>
                                            <div>
                                                <input type="text" class="form-control telMask" id="feedback-phone" name="form-phone" placeholder="Ваш телефон" inputmode="text" />
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-6 col-md-5 mt-4">
                                            <label for="feedback-name" class="mb-1">Как Вас зовут? <span class="form__required">*</span></label>
                                            <div>
                                                <input type="text" class="form-control" id="feedback-name" name="form-name" placeholder="Как Вас зовут" required="" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.quiz-questions-container -->

                                <div class="row align-items-center mt-5 mt-xl-0">
                                    <div class="col-3 col-lg-1 mb-3 mb-lg-0">
                                        <div class="progress-title">Готово:</div>
                                    </div>

                                    <div class="col-9 col-lg-5 mb-3 mb-lg-0">
                                        <div class="progress" role="progressbar" aria-label="Progress" aria-valuenow="100"
                                            aria-valuemin="0" aria-valuemax="100">
                                            <div class="progress-bar" style="width: 100%"></div>
                                        </div>
                                    </div>

                                    <div class="col-12 col-sm-6 col-lg-3 mb-3 mb-sm-0 order-2 order-sm-1">
                                        <input type="button" value="Назад" class="btn btn-corporate-color-outline-1" />
                                    </div>

                                    <div class="col-12 col-sm-6 col-lg-3 mb-3 mb-sm-0 order-1 order-sm-2">
                                        <button type="submit" class="btn btn-corporate-color-1"> Отправить </button>
                                    </div>
                                </div>

                                <!-- Чекбокс политики конфиденциальности -->
                                <div class="row mt-3">
                                    <div class="col-12">
                                        <div class="form-check form__privacy-policy-check">
                                            <label class="form-check-label" for="feedback-privacy-policy">
                                                <input class="form-check-input" type="checkbox" value="" id="feedback-privacy-policy" checked="" required="" />
                                                Оставляя заявку, вы даете свое согласие на обработку персональных данных в соответствие с
                                                <a href="https://oknamobifon.ru/privacy/" data-bs-toggle="modal" data-bs-target="#modal-privacy"> политикой конфиденциальности</a>
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <!-- Скрытые поля для передачи ответов квиза -->
                                <input type="hidden" id="form-question-1-kitchen" name="form-question-1-kitchen" />
                                <input type="hidden" id="form-answer-2-kitchen-1" name="form-answer-2-kitchen-1" />
                                <input type="hidden" id="form-answer-2-kitchen-2" name="form-answer-2-kitchen-2" />
                                <input type="hidden" id="form-answer-2-kitchen-3" name="form-answer-2-kitchen-3" />

                                <input type="hidden" id="form-kitchen-size" name="form-kitchen-size" />
                                <input type="hidden" id="form-question-5-5-kitchen" name="form-question-5-5-kitchen" />

                                <input type="hidden" id="form-question-4-kitchen" name="form-question-4-kitchen" />
                                <input type="hidden" id="form-question-5-kitchen" name="form-question-5-kitchen" />
                                <input type="hidden" id="form-question-6-kitchen" name="form-question-6-kitchen" />
                                <input type="hidden" id="form-answer-final-1" name="form-answer-final-1" />
                                <input type="hidden" id="form-answer-final-2" name="form-answer-final-2" />
                                <input type="hidden" id="form-answer-final-3" name="form-answer-final-3" />
                            </form>
                        </div>
                        <!-- /question-final -->


                        <!-- Quiz director -->
                        <div class="col-xl-3">
                            <div class="row justify-content-center">
                                <div class="col pt-5 text-center text-xl-start">
                                    <div class="title">
                                        <h5 class="quiz-section-h3 quiz-section-h3-title">Нужна конcультация?</h5>
                                        <span class="quiz-section-h3-subtitle">Отвечу на все вопросы</span>
                                    </div>

                                    <div class="img-fluid mb-2 w-100 img-director mt-3">
                                        <img loading="lazy" src="<?php echo get_stylesheet_directory_uri(); ?>/template-parts/quiz/img/director-img.jpg" />
                                    </div>

                                    <div class="job">
                                        <h5 class="quiz-section-h3 quiz-section-h3-title">
                                            Юлия
                                        </h5>
                                        <span class="quiz-section-h3-subtitle">Управляющая магазином</span>
                                    </div>


                                    <div class="d-flex flex-column align-items-center align-items-xl-start">
                                        <a href="tel:89511014610" class="d-flex aling-items-center tel">
                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/template-parts/quiz/ico/mobile-phone-ico.svg">
                                            <span>8 (951) 101-46-10</span>
                                        </a>

                                        <div class="social">
                                            <a href="https://t.me/+79511014610" target="_blank">
                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/telegram-ico.svg" class="ico-button ps-0 pe-2" />
                                            </a>

                                            <a href="https://wa.me/79511014610?web=1&app_absent=1" target="_blank">
                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/whatsapp-ico.svg" class="ico-button pe-2" />
                                            </a>

                                            <a href="https://max.ru/u/f9LHodD0cOJ43FcHRXMZDl7Pj6Znjki8fXkN8cmXFNxOU9f0FntW8dTdUis" target="_blank">
                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/max.svg">
                                            </a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- End quiz director -->
                    </div>
                </div>
                <!-- /.quiz-question-container -->
            </div>
        </div>
    </div>
</section>

<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/template-parts/quiz/quiz.css">

<script type="module" src="<?php echo get_stylesheet_directory_uri(); ?>/template-parts/quiz/kitchen/quiz-kitchen.js"></script>