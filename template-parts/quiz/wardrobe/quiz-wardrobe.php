<section id="quiz" class="quiz-section bg-white py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col">
                <div class="section-title-wrapper text-center">
                    <h2 class="section-title">Узнайте примерную стоимость вашего шкафа</h2>
                    <p class="section-subtitle">Ответьте на 7 коротких вопросов</p>
                    <img class="text-center img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/section-title-dec.svg" style="margin-bottom: 60px;" />
                </div>

                <div class="quiz-question-container">
                    <div class="row text-start quiz-question-wrapper">

                        <!-- question-1-wardrobe (Тип шкафа) -->
                        <div class="col" id="question-1-wardrobe">
                            <h3 class="quiz-section-subtitle mb-4 text-start"><span>1/7</span> Какой тип шкафа Вам нужен?</h3>

                            <div class="row quiz-questions-container">

                                <div class="col-6 col-sm-4 col-xl-3">
                                    <label class="option_item mb-3" for="answer-1-wardrobe-1">
                                        <input type="radio" id="answer-1-wardrobe-1" name="question-1-wardrobe" class="checkbox" value="Встроенный" />
                                        <div class="option_inner">
                                            <div class="shadow-wrapper">
                                                <div class="shadow-wrapper-decoration"></div>
                                            </div>
                                            <img loading="lazy" src="<?php echo get_stylesheet_directory_uri(); ?>/template-parts/quiz/img/2-wardrobe-1.webp"
                                                style="width: 100%" />
                                        </div>
                                    </label>
                                    <h6 class="quiz-section-h3 mb-4">Встроенный</h6>
                                </div>

                                <div class="col-6 col-sm-4 col-xl-3">
                                    <label class="option_item mb-3" for="answer-1-wardrobe-2">
                                        <input type="radio" id="answer-1-wardrobe-2" name="question-1-wardrobe" class="checkbox" value="Корпусный" />
                                        <div class="option_inner">
                                            <div class="shadow-wrapper">
                                                <div class="shadow-wrapper-decoration"></div>
                                            </div>
                                            <img loading="lazy" src="<?php echo get_stylesheet_directory_uri(); ?>/template-parts/quiz/img/2-wardrobe-2.webp"
                                                style="width: 100%" />
                                        </div>
                                    </label>
                                    <h6 class="quiz-section-h3 mb-4">Корпусный</h6>
                                </div>

                                <div class="col-6 col-sm-4 col-xl-3">
                                    <label class="option_item mb-3" for="answer-1-wardrobe-3">
                                        <input type="radio" id="answer-1-wardrobe-3" name="question-1-wardrobe" class="checkbox" value="Гардеробный" />
                                        <div class="option_inner">
                                            <div class="shadow-wrapper">
                                                <div class="shadow-wrapper-decoration"></div>
                                            </div>
                                            <img loading="lazy" src="<?php echo get_stylesheet_directory_uri(); ?>/template-parts/quiz/img/2-wardrobe-3.webp"
                                                style="width: 100%" />
                                        </div>
                                    </label>
                                    <h6 class="quiz-section-h3 mb-4">Гардеробный</h6>
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
                                    <input type="button" id="btn-next-question-1-wardrobe" value="Далее" class="btn btn-corporate-color-1" />
                                </div>
                            </div>
                        </div>
                        <!-- /question-1-wardrobe -->



                        <!-- question-2-wardrobe (Тип дверей) -->
                        <div class="col" id="question-2-wardrobe" style="display: none;">
                            <h3 class="quiz-section-subtitle mb-4 text-start"><span>2/7</span> Какого типа двери Вы хотите?</h3>

                            <div class="row quiz-questions-container">

                                <div class="col-6 col-sm-4 col-xl-3">
                                    <label class="option_item mb-3" for="answer-2-wardrobe-1">
                                        <input type="radio" id="answer-2-wardrobe-1" name="question-2-wardrobe" class="checkbox" value="Купе" />
                                        <div class="option_inner">
                                            <div class="shadow-wrapper">
                                                <div class="shadow-wrapper-decoration"></div>
                                            </div>
                                            <img loading="lazy" src="<?php echo get_stylesheet_directory_uri(); ?>/template-parts/quiz/img/3-wardrobe-1.webp"
                                                style="width: 100%" />
                                        </div>
                                    </label>
                                    <h6 class="quiz-section-h3 mb-4">Купе</h6>
                                </div>

                                <div class="col-6 col-sm-4 col-xl-3">
                                    <label class="option_item mb-3" for="answer-2-wardrobe-2">
                                        <input type="radio" id="answer-2-wardrobe-2" name="question-2-wardrobe" class="checkbox" value="Распашные" />
                                        <div class="option_inner">
                                            <div class="shadow-wrapper">
                                                <div class="shadow-wrapper-decoration"></div>
                                            </div>
                                            <img loading="lazy" src="<?php echo get_stylesheet_directory_uri(); ?>/template-parts/quiz/img/3-wardrobe-2.webp"
                                                style="width: 100%" />
                                        </div>
                                    </label>
                                    <h6 class="quiz-section-h3 mb-4">Распашные</h6>
                                </div>

                                <div class="col-6 col-sm-4 col-xl-3">
                                    <label class="option_item mb-3" for="answer-2-wardrobe-3">
                                        <input type="radio" id="answer-2-wardrobe-3" name="question-2-wardrobe" class="checkbox" value="Радиусные" />
                                        <div class="option_inner">
                                            <div class="shadow-wrapper">
                                                <div class="shadow-wrapper-decoration"></div>
                                            </div>
                                            <img loading="lazy" src="<?php echo get_stylesheet_directory_uri(); ?>/template-parts/quiz/img/3-wardrobe-3.webp"
                                                style="width: 100%" />
                                        </div>
                                    </label>
                                    <h6 class="quiz-section-h3 mb-4">Радиусные</h6>
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
                                    <input type="button" id="btn-next-question-2-wardrobe" value="Далее" class="btn btn-corporate-color-1" />
                                </div>
                            </div>
                        </div>
                        <!-- /question-2-wardrobe -->



                        <!-- question-3-wardrobe (Материал фасада) -->
                        <div class="col" id="question-3-wardrobe" style="display: none;">
                            <h3 class="quiz-section-subtitle mb-4 text-start"><span>3/7</span> Какой материал фасада Вы хотите?</h3>

                            <div class="row quiz-questions-container">

                                <div class="col-6 col-sm-4 col-xl-3">
                                    <label class="option_item mb-3" for="answer-3-wardrobe-1">
                                        <input type="radio" id="answer-3-wardrobe-1" name="question-3-wardrobe" class="checkbox" value="ЛДСП" />
                                        <div class="option_inner">
                                            <div class="shadow-wrapper">
                                                <div class="shadow-wrapper-decoration"></div>
                                            </div>
                                            <img loading="lazy" src="<?php echo get_stylesheet_directory_uri(); ?>/template-parts/quiz/img/4-wardrobe-1.webp"
                                                style="width: 100%" />
                                        </div>
                                    </label>
                                    <h6 class="quiz-section-h3 mb-4">ЛДСП</h6>
                                </div>

                                <div class="col-6 col-sm-4 col-xl-3">
                                    <label class="option_item mb-3" for="answer-3-wardrobe-2">
                                        <input type="radio" id="answer-3-wardrobe-2" name="question-3-wardrobe" class="checkbox" value="Пескоструй" />
                                        <div class="option_inner">
                                            <div class="shadow-wrapper">
                                                <div class="shadow-wrapper-decoration"></div>
                                            </div>
                                            <img loading="lazy" src="<?php echo get_stylesheet_directory_uri(); ?>/template-parts/quiz/img/4-wardrobe-2.webp"
                                                style="width: 100%" />
                                        </div>
                                    </label>
                                    <h6 class="quiz-section-h3 mb-4">Пескоструй</h6>
                                </div>

                                <div class="col-6 col-sm-4 col-xl-3">
                                    <label class="option_item mb-3" for="answer-3-wardrobe-3">
                                        <input type="radio" id="answer-3-wardrobe-3" name="question-3-wardrobe" class="checkbox" value="Зеркало" />
                                        <div class="option_inner">
                                            <div class="shadow-wrapper">
                                                <div class="shadow-wrapper-decoration"></div>
                                            </div>
                                            <img loading="lazy" src="<?php echo get_stylesheet_directory_uri(); ?>/template-parts/quiz/img/4-wardrobe-3.webp"
                                                style="width: 100%" />
                                        </div>
                                    </label>
                                    <h6 class="quiz-section-h3 mb-4">Зеркало</h6>
                                </div>

                                <div class="col-6 col-sm-4 col-xl-3">
                                    <label class="option_item mb-3" for="answer-3-wardrobe-4">
                                        <input type="radio" id="answer-3-wardrobe-4" name="question-3-wardrobe" class="checkbox" value="Комбинированный" />
                                        <div class="option_inner">
                                            <div class="shadow-wrapper">
                                                <div class="shadow-wrapper-decoration"></div>
                                            </div>
                                            <img loading="lazy" src="<?php echo get_stylesheet_directory_uri(); ?>/template-parts/quiz/img/4-wardrobe-4.webp"
                                                style="width: 100%" />
                                        </div>
                                    </label>
                                    <h6 class="quiz-section-h3 mb-4">Комбинированный</h6>
                                </div>

                                <div class="col-6 col-sm-4 col-xl-3">
                                    <label class="option_item mb-3" for="answer-3-wardrobe-5">
                                        <input type="radio" id="answer-3-wardrobe-5" name="question-3-wardrobe" class="checkbox" value="Пока не знаю (нужна консультация)" />
                                        <div class="option_inner">
                                            <div class="shadow-wrapper">
                                                <div class="shadow-wrapper-decoration"></div>
                                            </div>
                                            <img loading="lazy" src="<?php echo get_stylesheet_directory_uri(); ?>/template-parts/quiz/img/4-wardrobe-5.webp"
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
                                    <div class="progress" role="progressbar" aria-label="Progress" aria-valuenow="34" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar" style="width: 34%"></div>
                                    </div>
                                </div>

                                <div class="col-12 col-sm-6 col-lg-3 mb-3 mb-sm-0 order-2 order-sm-1">
                                    <input type="button" value="Назад" class="btn btn-corporate-color-outline-1" />
                                </div>

                                <div class="col-12 col-sm-6 col-lg-3 mb-3 mb-sm-0 order-1 order-sm-2">
                                    <input type="button" id="btn-next-question-3-wardrobe" value="Далее" class="btn btn-corporate-color-1" />
                                </div>
                            </div>
                        </div>
                        <!-- /question-3-wardrobe -->



                        <!-- question-4-wardrobe (Ширина) -->
                        <div class="col" id="question-4-wardrobe" style="display: none;">
                            <h3 class="quiz-section-subtitle mb-4 text-start"><span>4/7</span> Какая ориентировочная ширина шкафа планируется?</h3>

                            <div class="row quiz-questions-container">

                                <div class="col-12 col-md-8 col-lg-3">
                                    <label class="d-flex quiz-chek gap-3" for="answer-4-wardrobe-1">
                                        <div class="option_item">
                                            <input type="checkbox" id="answer-4-wardrobe-1" name="answer-4-wardrobe-1" class="checkbox" value="1м" />
                                            <div class="option_inner text-start">
                                                <div class="shadow-wrapper-box"></div>
                                                <img loading="lazy" src="<?php echo get_stylesheet_directory_uri(); ?>/template-parts/quiz/ico/checkbox.svg" />
                                            </div>
                                        </div>
                                        <h6 class="quiz-section-h3 mb-4">1м</h6>
                                    </label>
                                </div>

                                <div class="col-12 col-md-8 col-lg-3">
                                    <label class="d-flex quiz-chek gap-3" for="answer-4-wardrobe-2">
                                        <div class="option_item">
                                            <input type="checkbox" id="answer-4-wardrobe-2" name="answer-4-wardrobe-2" class="checkbox" value="1,5м" />
                                            <div class="option_inner text-start">
                                                <div class="shadow-wrapper-box"></div>
                                                <img loading="lazy" src="<?php echo get_stylesheet_directory_uri(); ?>/template-parts/quiz/ico/checkbox.svg" />
                                            </div>
                                        </div>
                                        <h6 class="quiz-section-h3 mb-4">1,5м</h6>
                                    </label>
                                </div>

                                <div class="col-12 col-md-8 col-lg-3">
                                    <label class="d-flex quiz-chek gap-3" for="answer-4-wardrobe-3">
                                        <div class="option_item">
                                            <input type="checkbox" id="answer-4-wardrobe-3" name="answer-4-wardrobe-3" class="checkbox" value="2м" />
                                            <div class="option_inner text-start">
                                                <div class="shadow-wrapper-box"></div>
                                                <img loading="lazy" src="<?php echo get_stylesheet_directory_uri(); ?>/template-parts/quiz/ico/checkbox.svg" />
                                            </div>
                                        </div>
                                        <h6 class="quiz-section-h3 mb-4">2м</h6>
                                    </label>
                                </div>

                                <div class="col-12 col-md-8 col-lg-3">
                                    <label class="d-flex quiz-chek gap-3" for="answer-4-wardrobe-4">
                                        <div class="option_item">
                                            <input type="checkbox" id="answer-4-wardrobe-4" name="answer-4-wardrobe-4" class="checkbox" value="2,5м" />
                                            <div class="option_inner text-start">
                                                <div class="shadow-wrapper-box"></div>
                                                <img loading="lazy" src="<?php echo get_stylesheet_directory_uri(); ?>/template-parts/quiz/ico/checkbox.svg" />
                                            </div>
                                        </div>
                                        <h6 class="quiz-section-h3 mb-4">2,5м</h6>
                                    </label>
                                </div>

                                <div class="col-12 col-md-8 col-lg-3">
                                    <label class="d-flex quiz-chek gap-3" for="answer-4-wardrobe-5">
                                        <div class="option_item">
                                            <input type="checkbox" id="answer-4-wardrobe-5" name="answer-4-wardrobe-5" class="checkbox" value="3м" />
                                            <div class="option_inner text-start">
                                                <div class="shadow-wrapper-box"></div>
                                                <img loading="lazy" src="<?php echo get_stylesheet_directory_uri(); ?>/template-parts/quiz/ico/checkbox.svg" />
                                            </div>
                                        </div>
                                        <h6 class="quiz-section-h3 mb-4">3м</h6>
                                    </label>
                                </div>

                                <div class="col-12 col-md-8 col-lg-3">
                                    <label class="d-flex quiz-chek gap-3" for="answer-4-wardrobe-6">
                                        <div class="option_item">
                                            <input type="checkbox" id="answer-4-wardrobe-6" name="answer-4-wardrobe-6" class="checkbox" value="3,5м" />
                                            <div class="option_inner text-start">
                                                <div class="shadow-wrapper-box"></div>
                                                <img loading="lazy" src="<?php echo get_stylesheet_directory_uri(); ?>/template-parts/quiz/ico/checkbox.svg" />
                                            </div>
                                        </div>
                                        <h6 class="quiz-section-h3 mb-4">3,5м</h6>
                                    </label>
                                </div>

                                <div class="col-12 col-md-8 col-lg-3">
                                    <label class="d-flex quiz-chek gap-3" for="answer-4-wardrobe-7">
                                        <div class="option_item">
                                            <input type="checkbox" id="answer-4-wardrobe-7" name="answer-4-wardrobe-7" class="checkbox" value="4м" />
                                            <div class="option_inner text-start">
                                                <div class="shadow-wrapper-box"></div>
                                                <img loading="lazy" src="<?php echo get_stylesheet_directory_uri(); ?>/template-parts/quiz/ico/checkbox.svg" />
                                            </div>
                                        </div>
                                        <h6 class="quiz-section-h3 mb-4">4м</h6>
                                    </label>
                                </div>

                                <div class="col-12 col-md-8 col-lg-3">
                                    <label class="d-flex quiz-chek gap-3" for="answer-4-wardrobe-8">
                                        <div class="option_item">
                                            <input type="checkbox" id="answer-4-wardrobe-8" name="answer-4-wardrobe-8" class="checkbox" value="4,5м" />
                                            <div class="option_inner text-start">
                                                <div class="shadow-wrapper-box"></div>
                                                <img loading="lazy" src="<?php echo get_stylesheet_directory_uri(); ?>/template-parts/quiz/ico/checkbox.svg" />
                                            </div>
                                        </div>
                                        <h6 class="quiz-section-h3 mb-4">4,5м</h6>
                                    </label>
                                </div>

                                <div class="col-12 col-md-8 col-lg-3">
                                    <label class="d-flex quiz-chek gap-3" for="answer-4-wardrobe-9">
                                        <div class="option_item">
                                            <input type="checkbox" id="answer-4-wardrobe-9" name="answer-4-wardrobe-9" class="checkbox" value="5м" />
                                            <div class="option_inner text-start">
                                                <div class="shadow-wrapper-box"></div>
                                                <img loading="lazy" src="<?php echo get_stylesheet_directory_uri(); ?>/template-parts/quiz/ico/checkbox.svg" />
                                            </div>
                                        </div>
                                        <h6 class="quiz-section-h3 mb-4">5м</h6>
                                    </label>
                                </div>

                                <div class="col-12 col-md-8 col-lg-3">
                                    <label class="d-flex quiz-chek gap-3" for="answer-4-wardrobe-10">
                                        <div class="option_item">
                                            <input type="checkbox" id="answer-4-wardrobe-10" name="answer-4-wardrobe-10" class="checkbox" value="Более 5 м" />
                                            <div class="option_inner text-start">
                                                <div class="shadow-wrapper-box"></div>
                                                <img loading="lazy" src="<?php echo get_stylesheet_directory_uri(); ?>/template-parts/quiz/ico/checkbox.svg" />
                                            </div>
                                        </div>
                                        <h6 class="quiz-section-h3 mb-4">Более 5 м</h6>
                                    </label>
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
                                    <input type="button" id="btn-next-question-4-wardrobe" value="Далее" class="btn btn-corporate-color-1" />
                                </div>
                            </div>
                        </div>
                        <!-- /question-4-wardrobe -->



                        <!-- question-5-wardrobe (Количество дверей) -->
                        <div class="col" id="question-5-wardrobe" style="display: none;">
                            <h3 class="quiz-section-subtitle mb-4 text-start"><span>5/7</span> Какое количество дверей Вы предполагаете?</h3>

                            <div class="row quiz-questions-container">

                                <div class="col-12 col-md-8 col-lg-3">
                                    <label class="d-flex quiz-chek gap-3" for="answer-5-wardrobe-1">
                                        <div class="option_item">
                                            <input type="checkbox" id="answer-5-wardrobe-1" name="answer-5-wardrobe-1" class="checkbox" value="1" />
                                            <div class="option_inner text-start">
                                                <div class="shadow-wrapper-box"></div>
                                                <img loading="lazy" src="<?php echo get_stylesheet_directory_uri(); ?>/template-parts/quiz/ico/checkbox.svg" />
                                            </div>
                                        </div>
                                        <h6 class="quiz-section-h3 mb-4">1</h6>
                                    </label>
                                </div>

                                <div class="col-12 col-md-8 col-lg-3">
                                    <label class="d-flex quiz-chek gap-3" for="answer-5-wardrobe-2">
                                        <div class="option_item">
                                            <input type="checkbox" id="answer-5-wardrobe-2" name="answer-5-wardrobe-2" class="checkbox" value="2" />
                                            <div class="option_inner text-start">
                                                <div class="shadow-wrapper-box"></div>
                                                <img loading="lazy" src="<?php echo get_stylesheet_directory_uri(); ?>/template-parts/quiz/ico/checkbox.svg" />
                                            </div>
                                        </div>
                                        <h6 class="quiz-section-h3 mb-4">2</h6>
                                    </label>
                                </div>

                                <div class="col-12 col-md-8 col-lg-3">
                                    <label class="d-flex quiz-chek gap-3" for="answer-5-wardrobe-3">
                                        <div class="option_item">
                                            <input type="checkbox" id="answer-5-wardrobe-3" name="answer-5-wardrobe-3" class="checkbox" value="3" />
                                            <div class="option_inner text-start">
                                                <div class="shadow-wrapper-box"></div>
                                                <img loading="lazy" src="<?php echo get_stylesheet_directory_uri(); ?>/template-parts/quiz/ico/checkbox.svg" />
                                            </div>
                                        </div>
                                        <h6 class="quiz-section-h3 mb-4">3</h6>
                                    </label>
                                </div>

                                <div class="col-12 col-md-8 col-lg-3">
                                    <label class="d-flex quiz-chek gap-3" for="answer-5-wardrobe-4">
                                        <div class="option_item">
                                            <input type="checkbox" id="answer-5-wardrobe-4" name="answer-5-wardrobe-4" class="checkbox" value="4" />
                                            <div class="option_inner text-start">
                                                <div class="shadow-wrapper-box"></div>
                                                <img loading="lazy" src="<?php echo get_stylesheet_directory_uri(); ?>/template-parts/quiz/ico/checkbox.svg" />
                                            </div>
                                        </div>
                                        <h6 class="quiz-section-h3 mb-4">4</h6>
                                    </label>
                                </div>

                                <div class="col-12 col-md-8 col-lg-3">
                                    <label class="d-flex quiz-chek gap-3" for="answer-5-wardrobe-5">
                                        <div class="option_item">
                                            <input type="checkbox" id="answer-5-wardrobe-5" name="answer-5-wardrobe-5" class="checkbox" value="5" />
                                            <div class="option_inner text-start">
                                                <div class="shadow-wrapper-box"></div>
                                                <img loading="lazy" src="<?php echo get_stylesheet_directory_uri(); ?>/template-parts/quiz/ico/checkbox.svg" />
                                            </div>
                                        </div>
                                        <h6 class="quiz-section-h3 mb-4">5</h6>
                                    </label>
                                </div>

                                <div class="col-12 col-md-8 col-lg-3">
                                    <label class="d-flex quiz-chek gap-3" for="answer-5-wardrobe-6">
                                        <div class="option_item">
                                            <input type="checkbox" id="answer-5-wardrobe-6" name="answer-5-wardrobe-6" class="checkbox" value="Более 5" />
                                            <div class="option_inner text-start">
                                                <div class="shadow-wrapper-box"></div>
                                                <img loading="lazy" src="<?php echo get_stylesheet_directory_uri(); ?>/template-parts/quiz/ico/checkbox.svg" />
                                            </div>
                                        </div>
                                        <h6 class="quiz-section-h3 mb-4">Более 5</h6>
                                    </label>
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
                                    <input type="button" id="btn-next-question-5-wardrobe" value="Далее" class="btn btn-corporate-color-1" />
                                </div>
                            </div>
                        </div>
                        <!-- /question-5-wardrobe -->


                        <!-- question-5-5-wardrobe (Budget) -->
                        <div class="col" id="question-5-5-wardrobe" style="display: none;">
                            <h3 class="quiz-section-subtitle mb-4 text-start"><span>6/7</span> Какой бюджет Вы планируете?</h3>

                            <div class="row quiz-questions-container d-flex flex-column">

                                <div class="col-12 col-md-8">
                                    <label class="d-flex quiz-chek gap-3" for="answer-5-5-wardrobe-1">
                                        <div class="option_item">
                                            <input type="radio" id="answer-5-5-wardrobe-1" name="question-5-5-wardrobe" class="checkbox" value="75 — 100 тыс. руб." />
                                            <div class="option_inner text-start">
                                                <div class="shadow-wrapper-box"></div>
                                                <img loading="lazy" src="<?php echo get_stylesheet_directory_uri(); ?>/template-parts/quiz/ico/checkbox.svg" />
                                            </div>
                                        </div>
                                        <h6 class="quiz-section-h3 mb-4">75 — 100 тыс. руб.</h6>
                                    </label>
                                </div>

                                <div class="col-12 col-md-8">
                                    <label class="d-flex quiz-chek gap-3" for="answer-5-5-wardrobe-2">
                                        <div class="option_item">
                                            <input type="radio" id="answer-5-5-wardrobe-2" name="question-5-5-wardrobe" class="checkbox" value="100 — 150 тыс. руб." />
                                            <div class="option_inner text-start">
                                                <div class="shadow-wrapper-box"></div>
                                                <img loading="lazy" src="<?php echo get_stylesheet_directory_uri(); ?>/template-parts/quiz/ico/checkbox.svg" />
                                            </div>
                                        </div>
                                        <h6 class="quiz-section-h3 mb-4">100 — 150 тыс. руб.</h6>
                                    </label>
                                </div>

                                <div class="col-12 col-md-8">
                                    <label class="d-flex quiz-chek gap-3" for="answer-5-5-wardrobe-3">
                                        <div class="option_item">
                                            <input type="radio" id="answer-5-5-wardrobe-3" name="question-5-5-wardrobe" class="checkbox" value="более 150 тыс. руб." />
                                            <div class="option_inner text-start">
                                                <div class="shadow-wrapper-box"></div>
                                                <img loading="lazy" src="<?php echo get_stylesheet_directory_uri(); ?>/template-parts/quiz/ico/checkbox.svg" />
                                            </div>
                                        </div>
                                        <h6 class="quiz-section-h3 mb-4">более 150 тыс. руб.</h6>
                                    </label>
                                </div>

                                <div class="col-12 col-md-8">
                                    <label class="d-flex quiz-chek gap-3" for="answer-5-5-wardrobe-4">
                                        <div class="option_item">
                                            <input type="radio" id="answer-5-5-wardrobe-4" name="question-5-5-wardrobe" class="checkbox" value="не определился" />
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
                                    <input type="button" id="btn-next-question-5-5-wardrobe" value="Далее" class="btn btn-corporate-color-1" />
                                </div>
                            </div>
                        </div>
                        <!-- /question-5-5-wardrobe -->


                        <!-- question-6-wardrobe (Подарок) -->
                        <div class="col" id="question-6-wardrobe" style="display: none;">
                            <h3 class="quiz-section-subtitle mb-4 text-start"><span>7/7</span> Какой подарок Вы хотите получить в случае заказа?</h3>

                            <div class="row quiz-questions-container">

                                <div class="col-6 col-sm-4 col-xl-3">
                                    <label class="option_item mb-3" for="answer-6-wardrobe-1">
                                        <input type="radio" id="answer-6-wardrobe-1" name="question-6-wardrobe" class="checkbox" value="Дополнительная скидка 10%" />
                                        <div class="option_inner">
                                            <div class="shadow-wrapper">
                                                <div class="shadow-wrapper-decoration"></div>
                                            </div>
                                            <img loading="lazy" src="<?php echo get_stylesheet_directory_uri(); ?>/template-parts/quiz/img/7-wardrobe-1.webp"
                                                style="width: 100%" />
                                        </div>
                                    </label>
                                    <h6 class="quiz-section-h3 mb-4">Дополнительная скидка 10%</h6>
                                </div>

                                <div class="col-6 col-sm-4 col-xl-3">
                                    <label class="option_item mb-3" for="answer-6-wardrobe-2">
                                        <input type="radio" id="answer-6-wardrobe-2" name="question-6-wardrobe" class="checkbox" value="Беспроцентная рассрочка на 6 месяцев" />
                                        <div class="option_inner">
                                            <div class="shadow-wrapper">
                                                <div class="shadow-wrapper-decoration"></div>
                                            </div>
                                            <img loading="lazy" src="<?php echo get_stylesheet_directory_uri(); ?>/template-parts/quiz/img/7-wardrobe-2.webp"
                                                style="width: 100%" />
                                        </div>
                                    </label>
                                    <h6 class="quiz-section-h3 mb-4">Беспроцентная рассрочка на 6 месяцев</h6>
                                </div>

                                <div class="col-6 col-sm-4 col-xl-3">
                                    <label class="option_item mb-3" for="answer-6-wardrobe-3">
                                        <input type="radio" id="answer-6-wardrobe-3" name="question-6-wardrobe" class="checkbox" value="Скидка 15% на заказ шкафа в течение года" />
                                        <div class="option_inner">
                                            <div class="shadow-wrapper">
                                                <div class="shadow-wrapper-decoration"></div>
                                            </div>
                                            <img loading="lazy" src="<?php echo get_stylesheet_directory_uri(); ?>/template-parts/quiz/img/7-wardrobe-3.webp"
                                                style="width: 100%" />
                                        </div>
                                    </label>
                                    <h6 class="quiz-section-h3 mb-4">Скидка 15% на заказ шкафа в течение года</h6>
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
                                    <input type="button" id="btn-next-question-6-wardrobe" value="Далее" class="btn btn-corporate-color-1" />
                                </div>
                            </div>
                        </div>
                        <!-- /question-6-wardrobe -->



                        <!-- question-final -->
                        <div class="col" id="question-final" style="display: none">
                            <h3 class="quiz-section-subtitle mb-4 text-start">Куда отправить расчет?</h3>

                            <form action="<?php echo get_stylesheet_directory_uri(); ?>/template-parts/quiz/mails/wardrobe-quiz.php" id="quiz"
                                method="post" name="quiz" class="form">
                                <div class="loader-box"><span class="loader"></span></div>

                                <input type="hidden" name="form-source" value="quiz-wardrobe">
                                <input type="hidden" name="button-context" value="quiz-configurator-wardrobe">
                                <input type="hidden" name="form-branch" value="wardrobe">

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
                                <input type="hidden" id="form-question-1-wardrobe" name="form-question-1-wardrobe" />
                                <input type="hidden" id="form-question-2-wardrobe" name="form-question-2-wardrobe" />
                                <input type="hidden" id="form-question-3-wardrobe" name="form-question-3-wardrobe" />
                                <input type="hidden" id="form-answer-4-wardrobe-1" name="form-answer-4-wardrobe-1" />
                                <input type="hidden" id="form-answer-4-wardrobe-2" name="form-answer-4-wardrobe-2" />
                                <input type="hidden" id="form-answer-4-wardrobe-3" name="form-answer-4-wardrobe-3" />
                                <input type="hidden" id="form-answer-4-wardrobe-4" name="form-answer-4-wardrobe-4" />
                                <input type="hidden" id="form-answer-4-wardrobe-5" name="form-answer-4-wardrobe-5" />
                                <input type="hidden" id="form-answer-4-wardrobe-6" name="form-answer-4-wardrobe-6" />
                                <input type="hidden" id="form-answer-4-wardrobe-7" name="form-answer-4-wardrobe-7" />
                                <input type="hidden" id="form-answer-4-wardrobe-8" name="form-answer-4-wardrobe-8" />
                                <input type="hidden" id="form-answer-4-wardrobe-9" name="form-answer-4-wardrobe-9" />
                                <input type="hidden" id="form-answer-4-wardrobe-10" name="form-answer-4-wardrobe-10" />
                                <input type="hidden" id="form-answer-5-wardrobe-1" name="form-answer-5-wardrobe-1" />
                                <input type="hidden" id="form-answer-5-wardrobe-2" name="form-answer-5-wardrobe-2" />
                                <input type="hidden" id="form-answer-5-wardrobe-3" name="form-answer-5-wardrobe-3" />
                                <input type="hidden" id="form-answer-5-wardrobe-4" name="form-answer-5-wardrobe-4" />
                                <input type="hidden" id="form-answer-5-wardrobe-5" name="form-answer-5-wardrobe-5" />
                                <input type="hidden" id="form-answer-5-wardrobe-6" name="form-answer-5-wardrobe-6" />
                                <input type="hidden" id="form-question-5-5-wardrobe" name="form-question-5-5-wardrobe" />
                                <input type="hidden" id="form-question-6-wardrobe" name="form-question-6-wardrobe" />
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

<script type="module" src="<?php echo get_stylesheet_directory_uri(); ?>/template-parts/quiz/wardrobe/quiz-wardrobe.js"></script>