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
    // ВОПРОС 1 - Тип шкафа
    // ============================================
    var btnNext1Wardrobe = document.getElementById('btn-next-question-1-wardrobe');
    if (btnNext1Wardrobe) {
        btnNext1Wardrobe.addEventListener('click', function (e) {
            e.preventDefault();

            if (!document.querySelector('input[name="question-1-wardrobe"]:checked')) {
                alert('Для продолжения выберите тип шкафа.');
                return false;
            }

            var answer = document.querySelector('input[name="question-1-wardrobe"]:checked').value;
            document.getElementById('form-question-1-wardrobe').value = answer;

            document.getElementById('question-1-wardrobe').style.display = 'none';
            document.getElementById('question-2-wardrobe').style.display = 'block';
        });
    }

    // ============================================
    // ВОПРОС 2 - Тип дверей
    // ============================================
    var btnNext2Wardrobe = document.getElementById('btn-next-question-2-wardrobe');
    if (btnNext2Wardrobe) {
        btnNext2Wardrobe.addEventListener('click', function (e) {
            e.preventDefault();

            if (!document.querySelector('input[name="question-2-wardrobe"]:checked')) {
                alert('Для продолжения выберите тип дверей.');
                return false;
            }

            var answer = document.querySelector('input[name="question-2-wardrobe"]:checked').value;
            document.getElementById('form-question-2-wardrobe').value = answer;

            document.getElementById('question-2-wardrobe').style.display = 'none';
            document.getElementById('question-3-wardrobe').style.display = 'block';
        });
    }

    // Кнопка "Назад" для вопроса 2
    var btnPrev2Wardrobe = document.querySelector('#question-2-wardrobe input[value="Назад"]');
    if (btnPrev2Wardrobe) {
        btnPrev2Wardrobe.addEventListener('click', function (e) {
            e.preventDefault();
            document.getElementById('question-2-wardrobe').style.display = 'none';
            document.getElementById('question-1-wardrobe').style.display = 'block';
        });
    }

    // ============================================
    // ВОПРОС 3 - Материал фасада
    // ============================================
    var btnNext3Wardrobe = document.getElementById('btn-next-question-3-wardrobe');
    if (btnNext3Wardrobe) {
        btnNext3Wardrobe.addEventListener('click', function (e) {
            e.preventDefault();

            if (!document.querySelector('input[name="question-3-wardrobe"]:checked')) {
                alert('Для продолжения выберите материал фасада.');
                return false;
            }

            var answer = document.querySelector('input[name="question-3-wardrobe"]:checked').value;
            document.getElementById('form-question-3-wardrobe').value = answer;

            document.getElementById('question-3-wardrobe').style.display = 'none';
            document.getElementById('question-4-wardrobe').style.display = 'block';
        });
    }

    // Кнопка "Назад" для вопроса 3
    var btnPrev3Wardrobe = document.querySelector('#question-3-wardrobe input[value="Назад"]');
    if (btnPrev3Wardrobe) {
        btnPrev3Wardrobe.addEventListener('click', function (e) {
            e.preventDefault();
            document.getElementById('question-3-wardrobe').style.display = 'none';
            document.getElementById('question-2-wardrobe').style.display = 'block';
        });
    }

    // ============================================
    // ВОПРОС 4 - Ширина
    // ============================================
    var btnNext4Wardrobe = document.getElementById('btn-next-question-4-wardrobe');
    if (btnNext4Wardrobe) {
        btnNext4Wardrobe.addEventListener('click', function (e) {
            e.preventDefault();

            // Проверяем что выбран хотя бы один checkbox
            var hasChecked = false;
            for (var i = 1; i <= 10; i++) {
                var checkbox = document.getElementById('answer-4-wardrobe-' + i);
                if (checkbox && checkbox.checked) {
                    hasChecked = true;
                    document.getElementById('form-answer-4-wardrobe-' + i).value = checkbox.value;
                }
            }

            if (!hasChecked) {
                alert('Для продолжения выберите ширину шкафа.');
                return false;
            }

            document.getElementById('question-4-wardrobe').style.display = 'none';
            document.getElementById('question-5-wardrobe').style.display = 'block';
        });
    }

    // Кнопка "Назад" для вопроса 4
    var btnPrev4Wardrobe = document.querySelector('#question-4-wardrobe input[value="Назад"]');
    if (btnPrev4Wardrobe) {
        btnPrev4Wardrobe.addEventListener('click', function (e) {
            e.preventDefault();
            document.getElementById('question-4-wardrobe').style.display = 'none';
            document.getElementById('question-3-wardrobe').style.display = 'block';
        });
    }

    // ============================================
    // ВОПРОС 5 - Количество дверей
    // ============================================
    var btnNext5Wardrobe = document.getElementById('btn-next-question-5-wardrobe');
    if (btnNext5Wardrobe) {
        btnNext5Wardrobe.addEventListener('click', function (e) {
            e.preventDefault();

            // Проверяем что выбран хотя бы один checkbox
            var hasChecked = false;
            for (var i = 1; i <= 6; i++) {
                var checkbox = document.getElementById('answer-5-wardrobe-' + i);
                if (checkbox && checkbox.checked) {
                    hasChecked = true;
                    document.getElementById('form-answer-5-wardrobe-' + i).value = checkbox.value;
                }
            }

            if (!hasChecked) {
                alert('Для продолжения выберите количество дверей.');
                return false;
            }

            document.getElementById('question-5-wardrobe').style.display = 'none';
            document.getElementById('question-5-5-wardrobe').style.display = 'block';
        });
    }

    // Кнопка "Назад" для вопроса 5
    var btnPrev5Wardrobe = document.querySelector('#question-5-wardrobe input[value="Назад"]');
    if (btnPrev5Wardrobe) {
        btnPrev5Wardrobe.addEventListener('click', function (e) {
            e.preventDefault();
            document.getElementById('question-5-wardrobe').style.display = 'none';
            document.getElementById('question-4-wardrobe').style.display = 'block';
        });
    }

    // ============================================
    // ВОПРОС 5.5 - Бюджет
    // ============================================
    var btnNext55Wardrobe = document.getElementById('btn-next-question-5-5-wardrobe');
    if (btnNext55Wardrobe) {
        btnNext55Wardrobe.addEventListener('click', function (e) {
            e.preventDefault();

            if (!document.querySelector('input[name="question-5-5-wardrobe"]:checked')) {
                alert('Для продолжения выберите планируемый бюджет.');
                return false;
            }

            var answer = document.querySelector('input[name="question-5-5-wardrobe"]:checked').value;
            document.getElementById('form-question-5-5-wardrobe').value = answer;

            document.getElementById('question-5-5-wardrobe').style.display = 'none';
            document.getElementById('question-6-wardrobe').style.display = 'block';
        });
    }

    // Кнопка "Назад" для вопроса 5.5
    var btnPrev55Wardrobe = document.querySelector('#question-5-5-wardrobe input[value="Назад"]');
    if (btnPrev55Wardrobe) {
        btnPrev55Wardrobe.addEventListener('click', function (e) {
            e.preventDefault();
            document.getElementById('question-5-5-wardrobe').style.display = 'none';
            document.getElementById('question-5-wardrobe').style.display = 'block';
        });
    }

    // ============================================
    // ВОПРОС 6 - Подарок
    // ============================================
    var btnNext6Wardrobe = document.getElementById('btn-next-question-6-wardrobe');
    if (btnNext6Wardrobe) {
        btnNext6Wardrobe.addEventListener('click', function (e) {
            e.preventDefault();

            if (!document.querySelector('input[name="question-6-wardrobe"]:checked')) {
                alert('Для продолжения выберите подарок.');
                return false;
            }

            var answer = document.querySelector('input[name="question-6-wardrobe"]:checked').value;
            document.getElementById('form-question-6-wardrobe').value = answer;

            document.getElementById('question-6-wardrobe').style.display = 'none';
            document.getElementById('question-final').style.display = 'block';
        });
    }

    // Кнопка "Назад" для вопроса 6
    var btnPrev6Wardrobe = document.querySelector('#question-6-wardrobe input[value="Назад"]');
    if (btnPrev6Wardrobe) {
        btnPrev6Wardrobe.addEventListener('click', function (e) {
            e.preventDefault();
            document.getElementById('question-6-wardrobe').style.display = 'none';
            document.getElementById('question-5-5-wardrobe').style.display = 'block';
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
            document.getElementById('question-6-wardrobe').style.display = 'block';
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