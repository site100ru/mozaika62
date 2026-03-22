// Ждем загрузки DOM
document.addEventListener('DOMContentLoaded', function () {

    // снять выбор радио кнопки
    var allRadioGroups = {};

    document.querySelectorAll('input[type="radio"]').forEach(function (input) {
        var groupName = input.getAttribute('name');

        if (input.type === 'radio') {
            if (!allRadioGroups[groupName]) {
                allRadioGroups[groupName] = null;
            }

            input.addEventListener('click', function (e) {
                if (this === allRadioGroups[groupName]) {
                    this.checked = false;
                    allRadioGroups[groupName] = null;
                } else {
                    allRadioGroups[groupName] = this;
                }
            });
        }
    });

    // ============================================
    // ВОПРОС 1 - Планировка кухни
    // ============================================
    var btnNext1Kitchen = document.getElementById('btn-next-question-1-kitchen');
    if (btnNext1Kitchen) {
        btnNext1Kitchen.addEventListener('click', function (e) {
            e.preventDefault();

            if (!document.querySelector('input[name="question-1-kitchen"]:checked')) {
                alert('Для продолжения выберите планировку кухни.');
                return false;
            }

            var answer = document.querySelector('input[name="question-1-kitchen"]:checked').value;
            document.getElementById('form-question-1-kitchen').value = answer;

            document.getElementById('question-1-kitchen').style.display = 'none';
            document.getElementById('question-2-kitchen').style.display = 'block';
        });
    }

    // ============================================
    // ВОПРОС 2 - Дополнительные особенности
    // ============================================
    var btnNext2Kitchen = document.getElementById('btn-next-question-2-kitchen');
    if (btnNext2Kitchen) {
        btnNext2Kitchen.addEventListener('click', function (e) {
            e.preventDefault();

            // Собираем выбранные ответы (можно не выбирать ни одного)
            for (var i = 1; i <= 3; i++) {
                var checkbox = document.getElementById('answer-2-kitchen-' + i);
                if (checkbox && checkbox.checked) {
                    document.getElementById('form-answer-2-kitchen-' + i).value = checkbox.value;
                }
            }

            document.getElementById('question-2-kitchen').style.display = 'none';
            document.getElementById('question-3-kitchen').style.display = 'block';
        });
    }

    // Кнопка "Назад" для вопроса 2
    var btnPrev2Kitchen = document.querySelector('#question-2-kitchen input[value="Назад"]');
    if (btnPrev2Kitchen) {
        btnPrev2Kitchen.addEventListener('click', function (e) {
            e.preventDefault();
            document.getElementById('question-2-kitchen').style.display = 'none';
            document.getElementById('question-1-kitchen').style.display = 'block';
        });
    }

    // ============================================
    // ВОПРОС 3 - Размеры (УПРОЩЕННАЯ ВЕРСИЯ)
    // ============================================
    
    var btnNext3Kitchen = document.getElementById('btn-next-question-3-kitchen');
    if (btnNext3Kitchen) {
        btnNext3Kitchen.addEventListener('click', function (e) {
            e.preventDefault();

            var kitchenSizeInput = document.getElementById('kitchen-size');
            if (!kitchenSizeInput || !kitchenSizeInput.value.trim()) {
                alert('Пожалуйста, укажите размеры кухни.');
                return false;
            }

            // Сохраняем размер кухни
            document.getElementById('form-kitchen-size').value = kitchenSizeInput.value;

            document.getElementById('question-3-kitchen').style.display = 'none';
            document.getElementById('question-4-kitchen').style.display = 'block';
        });
    }

    // Кнопка "Назад" для вопроса 3
    var btnPrev3Kitchen = document.querySelector('#question-3-kitchen input[value="Назад"]');
    if (btnPrev3Kitchen) {
        btnPrev3Kitchen.addEventListener('click', function (e) {
            e.preventDefault();
            document.getElementById('question-3-kitchen').style.display = 'none';
            document.getElementById('question-2-kitchen').style.display = 'block';
        });
    }

    // ============================================
    // ВОПРОС 4 - Стиль
    // ============================================
    var btnNext4Kitchen = document.getElementById('btn-next-question-4-kitchen');
    if (btnNext4Kitchen) {
        btnNext4Kitchen.addEventListener('click', function (e) {
            e.preventDefault();

            if (!document.querySelector('input[name="question-4-kitchen"]:checked')) {
                alert('Для продолжения выберите стиль кухни.');
                return false;
            }

            var answer = document.querySelector('input[name="question-4-kitchen"]:checked').value;
            document.getElementById('form-question-4-kitchen').value = answer;

            document.getElementById('question-4-kitchen').style.display = 'none';
            document.getElementById('question-5-kitchen').style.display = 'block';
        });
    }

    // Кнопка "Назад" для вопроса 4
    var btnPrev4Kitchen = document.querySelector('#question-4-kitchen input[value="Назад"]');
    if (btnPrev4Kitchen) {
        btnPrev4Kitchen.addEventListener('click', function (e) {
            e.preventDefault();
            document.getElementById('question-4-kitchen').style.display = 'none';
            document.getElementById('question-3-kitchen').style.display = 'block';
        });
    }

    // ============================================
    // ВОПРОС 5 - Материал фасада
    // ============================================
    var btnNext5Kitchen = document.getElementById('btn-next-question-5-kitchen');
    if (btnNext5Kitchen) {
        btnNext5Kitchen.addEventListener('click', function (e) {
            e.preventDefault();

            if (!document.querySelector('input[name="question-5-kitchen"]:checked')) {
                alert('Для продолжения выберите материал фасада.');
                return false;
            }

            var answer = document.querySelector('input[name="question-5-kitchen"]:checked').value;
            document.getElementById('form-question-5-kitchen').value = answer;

            document.getElementById('question-5-kitchen').style.display = 'none';
            document.getElementById('question-5-5-kitchen').style.display = 'block';
        });
    }

    // Кнопка "Назад" для вопроса 5
    var btnPrev5Kitchen = document.querySelector('#question-5-kitchen input[value="Назад"]');
    if (btnPrev5Kitchen) {
        btnPrev5Kitchen.addEventListener('click', function (e) {
            e.preventDefault();
            document.getElementById('question-5-kitchen').style.display = 'none';
            document.getElementById('question-4-kitchen').style.display = 'block';
        });
    }

    // ============================================
    // ВОПРОС 5.5 - Бюджет (НОВЫЙ)
    // ============================================
    var btnNext55Kitchen = document.getElementById('btn-next-question-5-5-kitchen');
    if (btnNext55Kitchen) {
        btnNext55Kitchen.addEventListener('click', function (e) {
            e.preventDefault();

            if (!document.querySelector('input[name="question-5-5-kitchen"]:checked')) {
                alert('Для продолжения выберите планируемый бюджет.');
                return false;
            }

            var answer = document.querySelector('input[name="question-5-5-kitchen"]:checked').value;
            document.getElementById('form-question-5-5-kitchen').value = answer;

            document.getElementById('question-5-5-kitchen').style.display = 'none';
            document.getElementById('question-6-kitchen').style.display = 'block';
        });
    }

    // Кнопка "Назад" для вопроса 5.5
    var btnPrev55Kitchen = document.querySelector('#question-5-5-kitchen input[value="Назад"]');
    if (btnPrev55Kitchen) {
        btnPrev55Kitchen.addEventListener('click', function (e) {
            e.preventDefault();
            document.getElementById('question-5-5-kitchen').style.display = 'none';
            document.getElementById('question-5-kitchen').style.display = 'block';
        });
    }

    // ============================================
    // ВОПРОС 6 - Подарок
    // ============================================
    var btnNext6Kitchen = document.getElementById('btn-next-question-6-kitchen');
    if (btnNext6Kitchen) {
        btnNext6Kitchen.addEventListener('click', function (e) {
            e.preventDefault();

            if (!document.querySelector('input[name="question-6-kitchen"]:checked')) {
                alert('Для продолжения выберите подарок.');
                return false;
            }

            var answer = document.querySelector('input[name="question-6-kitchen"]:checked').value;
            document.getElementById('form-question-6-kitchen').value = answer;

            document.getElementById('question-6-kitchen').style.display = 'none';
            document.getElementById('question-final').style.display = 'block';
        });
    }

    // Кнопка "Назад" для вопроса 6
    var btnPrev6Kitchen = document.querySelector('#question-6-kitchen input[value="Назад"]');
    if (btnPrev6Kitchen) {
        btnPrev6Kitchen.addEventListener('click', function (e) {
            e.preventDefault();
            document.getElementById('question-6-kitchen').style.display = 'none';
            document.getElementById('question-5-5-kitchen').style.display = 'block';
        });
    }

    // ============================================
    // ФИНАЛЬНЫЙ ШАГ
    // ============================================

    // Кнопка "Назад" для финального шага
    var btnPrevFinal = document.querySelector('#question-final input[value="Назад"]');
    if (btnPrevFinal) {
        btnPrevFinal.addEventListener('click', function (e) {
            e.preventDefault();
            
            document.getElementById('question-final').style.display = 'none';
            document.getElementById('question-6-kitchen').style.display = 'block';
        });
    }

    // Обработчики для финальных чекбоксов
    for (var i = 1; i <= 3; i++) {
        var checkbox = document.getElementById('answer-final-' + i);
        var hiddenField = document.getElementById('form-answer-final-' + i);

        if (checkbox && hiddenField) {
            (function(cb, hf) {
                cb.addEventListener('change', function () {
                    hf.value = this.checked ? this.value : '';
                });

                if (cb.checked) {
                    hf.value = cb.value;
                }
            })(checkbox, hiddenField);
        }
    }
});