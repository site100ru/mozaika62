// Глобальные переменные для ответов
var currentBranch = '';
var answer_1;

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
    // ПЕРВЫЙ ВОПРОС - Выбор типа мебели
    // ============================================
    var btnNext1 = document.getElementById('btn-next-question-1');
    if (btnNext1) {
        btnNext1.addEventListener('click', function (e) {
            e.preventDefault();

            // Проверяем что выбран ответ
            if (!document.getElementById('answer-1-1').checked &&
                !document.getElementById('answer-1-2').checked &&
                !document.getElementById('answer-1-3').checked) {
                alert('Для продолжения выберите тип мебели.');
                return false;
            }

            // Записываем ответ
            answer_1 = document.querySelector('input[name="question-1"]:checked').value;
            document.getElementById('form-question-1').value = answer_1;

            // Определяем ветку на основе выбора
            var selectedInput = document.querySelector('input[name="question-1"]:checked');
            if (selectedInput.id === 'answer-1-1') {
                currentBranch = 'kitchen';
                // Сохраняем ветку в форме
                document.getElementById('form-branch').value = currentBranch;
                document.getElementById('question-1').style.display = 'none';
                document.getElementById('question-2-kitchen').style.display = 'block';
            } else if (selectedInput.id === 'answer-1-2') {
                currentBranch = 'wardrobe';
                // Сохраняем ветку в форме
                document.getElementById('form-branch').value = currentBranch;
                document.getElementById('question-1').style.display = 'none';
                document.getElementById('question-2-wardrobe').style.display = 'block';
            } else if (selectedInput.id === 'answer-1-3') {
                currentBranch = 'other';
                // Сохраняем ветку в форме
                document.getElementById('form-branch').value = currentBranch;
                document.getElementById('question-1').style.display = 'none';
                document.getElementById('question-2-other').style.display = 'block';
            }
        });
    }

    // ============================================
    // ВЕТКА КУХНЯ
    // ============================================

    // Кнопка "Далее" для вопроса 2-kitchen (Планировка)
    var btnNext2Kitchen = document.getElementById('btn-next-question-2-kitchen');
    if (btnNext2Kitchen) {
        btnNext2Kitchen.addEventListener('click', function (e) {
            e.preventDefault();

            if (!document.querySelector('input[name="question-2-kitchen"]:checked')) {
                alert('Для продолжения выберите планировку кухни.');
                return false;
            }

            var answer = document.querySelector('input[name="question-2-kitchen"]:checked').value;
            document.getElementById('form-question-2-kitchen').value = answer;

            document.getElementById('question-2-kitchen').style.display = 'none';
            document.getElementById('question-3-kitchen').style.display = 'block';
        });
    }

    // Кнопка "Назад" для вопроса 2-kitchen
    var btnPrev2Kitchen = document.querySelector('#question-2-kitchen input[value="Назад"]');
    if (btnPrev2Kitchen) {
        btnPrev2Kitchen.addEventListener('click', function (e) {
            e.preventDefault();
            document.getElementById('question-2-kitchen').style.display = 'none';
            document.getElementById('question-1').style.display = 'block';
        });
    }

    // Кнопка "Далее" для вопроса 3-kitchen (Дополнительные особенности)
    var btnNext3Kitchen = document.getElementById('btn-next-question-3-kitchen');
    if (btnNext3Kitchen) {
        btnNext3Kitchen.addEventListener('click', function (e) {
            e.preventDefault();

            // Собираем выбранные ответы
            var selectedFeatures = [];
            for (var i = 1; i <= 3; i++) {
                var checkbox = document.getElementById('answer-3-kitchen-' + i);
                if (checkbox && checkbox.checked) {
                    selectedFeatures.push(checkbox.value);
                    document.getElementById('form-answer-3-kitchen-' + i).value = checkbox.value;
                }
            }

            document.getElementById('question-3-kitchen').style.display = 'none';
            document.getElementById('question-4-kitchen').style.display = 'block';
        });
    }

    // Кнопка "Назад" для вопроса 3-kitchen
    var btnPrev3Kitchen = document.querySelector('#question-3-kitchen input[value="Назад"]');
    if (btnPrev3Kitchen) {
        btnPrev3Kitchen.addEventListener('click', function (e) {
            e.preventDefault();
            document.getElementById('question-3-kitchen').style.display = 'none';
            document.getElementById('question-2-kitchen').style.display = 'block';
        });
    }

    // Кнопка "Далее" для вопроса 4-kitchen (Размеры)
    var btnNext4Kitchen = document.getElementById('btn-next-question-4-kitchen');
    if (btnNext4Kitchen) {
        btnNext4Kitchen.addEventListener('click', function (e) {
            e.preventDefault();

            var kitchenSizeInput = document.getElementById('kitchen-size');
            if (!kitchenSizeInput || !kitchenSizeInput.value.trim()) {
                alert('Пожалуйста, укажите размеры кухни.');
                return false;
            }

            // Сохраняем размер кухни
            document.getElementById('form-kitchen-size').value = kitchenSizeInput.value;

            document.getElementById('question-4-kitchen').style.display = 'none';
            document.getElementById('question-5-kitchen').style.display = 'block';
        });
    }

    // Кнопка "Назад" для вопроса 4-kitchen
    var btnPrev4Kitchen = document.querySelector('#question-4-kitchen input[value="Назад"]');
    if (btnPrev4Kitchen) {
        btnPrev4Kitchen.addEventListener('click', function (e) {
            e.preventDefault();
            document.getElementById('question-4-kitchen').style.display = 'none';
            document.getElementById('question-3-kitchen').style.display = 'block';
        });
    }

    // Кнопка "Далее" для вопроса 5-kitchen (Стиль)
    var btnNext5Kitchen = document.getElementById('btn-next-question-5-kitchen');
    if (btnNext5Kitchen) {
        btnNext5Kitchen.addEventListener('click', function (e) {
            e.preventDefault();

            if (!document.querySelector('input[name="question-5-kitchen"]:checked')) {
                alert('Для продолжения выберите стиль кухни.');
                return false;
            }

            var answer = document.querySelector('input[name="question-5-kitchen"]:checked').value;
            document.getElementById('form-question-5-kitchen').value = answer;

            document.getElementById('question-5-kitchen').style.display = 'none';
            document.getElementById('question-6-kitchen').style.display = 'block';
        });
    }

    // Кнопка "Назад" для вопроса 5-kitchen
    var btnPrev5Kitchen = document.querySelector('#question-5-kitchen input[value="Назад"]');
    if (btnPrev5Kitchen) {
        btnPrev5Kitchen.addEventListener('click', function (e) {
            e.preventDefault();
            document.getElementById('question-5-kitchen').style.display = 'none';
            document.getElementById('question-4-kitchen').style.display = 'block';
        });
    }

    // Кнопка "Далее" для вопроса 6-kitchen (Материал)
    var btnNext6Kitchen = document.getElementById('btn-next-question-6-kitchen');
    if (btnNext6Kitchen) {
        btnNext6Kitchen.addEventListener('click', function (e) {
            e.preventDefault();

            if (!document.querySelector('input[name="question-6-kitchen"]:checked')) {
                alert('Для продолжения выберите материал фасада.');
                return false;
            }

            var answer = document.querySelector('input[name="question-6-kitchen"]:checked').value;
            document.getElementById('form-question-6-kitchen').value = answer;

            document.getElementById('question-6-kitchen').style.display = 'none';
            document.getElementById('question-6-5-kitchen').style.display = 'block';
        });
    }

    // Кнопка "Назад" для вопроса 6-kitchen
    var btnPrev6Kitchen = document.querySelector('#question-6-kitchen input[value="Назад"]');
    if (btnPrev6Kitchen) {
        btnPrev6Kitchen.addEventListener('click', function (e) {
            e.preventDefault();
            document.getElementById('question-6-kitchen').style.display = 'none';
            document.getElementById('question-5-kitchen').style.display = 'block';
        });
    }

    // Кнопка "Далее" для вопроса 6-5-kitchen
    var btnNext65Kitchen = document.getElementById('btn-next-question-6-5-kitchen');
    if (btnNext65Kitchen) {
        btnNext65Kitchen.addEventListener('click', function (e) {
            e.preventDefault();

            if (!document.querySelector('input[name="question-6-5-kitchen"]:checked')) {
                alert('Для продолжения выберите планируемый бюджет.');
                return false;
            }

            var answer = document.querySelector('input[name="question-6-5-kitchen"]:checked').value;
            document.getElementById('form-question-6-5-kitchen').value = answer;

            document.getElementById('question-6-5-kitchen').style.display = 'none';
            document.getElementById('question-7-kitchen').style.display = 'block';
        });
    }

    // Кнопка "Назад" для вопроса 6-5-kitchen
    var btnPrev65Kitchen = document.querySelector('#question-6-5-kitchen input[value="Назад"]');
    if (btnPrev65Kitchen) {
        btnPrev65Kitchen.addEventListener('click', function (e) {
            e.preventDefault();
            document.getElementById('question-6-5-kitchen').style.display = 'none';
            document.getElementById('question-6-kitchen').style.display = 'block';
        });
    }

    // Кнопка "Далее" для вопроса 7-kitchen (Подарок)
    var btnNext7Kitchen = document.getElementById('btn-next-question-7-kitchen');
    if (btnNext7Kitchen) {
        btnNext7Kitchen.addEventListener('click', function (e) {
            e.preventDefault();

            if (!document.querySelector('input[name="question-7-kitchen"]:checked')) {
                alert('Для продолжения выберите подарок.');
                return false;
            }

            var answer = document.querySelector('input[name="question-7-kitchen"]:checked').value;
            document.getElementById('form-question-7-kitchen').value = answer;

            document.getElementById('question-7-kitchen').style.display = 'none';
            document.getElementById('question-final').style.display = 'block';
        });
    }

    // Кнопка "Назад" для вопроса 7-kitchen
    var btnPrev7Kitchen = document.querySelector('#question-7-kitchen input[value="Назад"]');
    if (btnPrev7Kitchen) {
        btnPrev7Kitchen.addEventListener('click', function (e) {
            e.preventDefault();
            document.getElementById('question-7-kitchen').style.display = 'none';
            document.getElementById('question-6-5-kitchen').style.display = 'block';
        });
    }

    // ============================================
    // ВЕТКА ШКАФ
    // ============================================

    // Кнопка "Далее" для вопроса 2-wardrobe (Тип шкафа)
    var btnNext2Wardrobe = document.getElementById('btn-next-question-2-wardrobe');
    if (btnNext2Wardrobe) {
        btnNext2Wardrobe.addEventListener('click', function (e) {
            e.preventDefault();

            if (!document.querySelector('input[name="question-2-wardrobe"]:checked')) {
                alert('Для продолжения выберите тип шкафа.');
                return false;
            }

            var answer = document.querySelector('input[name="question-2-wardrobe"]:checked').value;
            document.getElementById('form-question-2-wardrobe').value = answer;

            document.getElementById('question-2-wardrobe').style.display = 'none';
            document.getElementById('question-3-wardrobe').style.display = 'block';
        });
    }

    // Кнопка "Назад" для вопроса 2-wardrobe
    var btnPrev2Wardrobe = document.querySelector('#question-2-wardrobe input[value="Назад"]');
    if (btnPrev2Wardrobe) {
        btnPrev2Wardrobe.addEventListener('click', function (e) {
            e.preventDefault();
            document.getElementById('question-2-wardrobe').style.display = 'none';
            document.getElementById('question-1').style.display = 'block';
        });
    }

    // Кнопка "Далее" для вопроса 3-wardrobe (Тип дверей)
    var btnNext3Wardrobe = document.getElementById('btn-next-question-3-wardrobe');
    if (btnNext3Wardrobe) {
        btnNext3Wardrobe.addEventListener('click', function (e) {
            e.preventDefault();

            if (!document.querySelector('input[name="question-3-wardrobe"]:checked')) {
                alert('Для продолжения выберите тип дверей.');
                return false;
            }

            var answer = document.querySelector('input[name="question-3-wardrobe"]:checked').value;
            document.getElementById('form-question-3-wardrobe').value = answer;

            document.getElementById('question-3-wardrobe').style.display = 'none';
            document.getElementById('question-4-wardrobe').style.display = 'block';
        });
    }

    // Кнопка "Назад" для вопроса 3-wardrobe
    var btnPrev3Wardrobe = document.querySelector('#question-3-wardrobe input[value="Назад"]');
    if (btnPrev3Wardrobe) {
        btnPrev3Wardrobe.addEventListener('click', function (e) {
            e.preventDefault();
            document.getElementById('question-3-wardrobe').style.display = 'none';
            document.getElementById('question-2-wardrobe').style.display = 'block';
        });
    }

    // Кнопка "Далее" для вопроса 4-wardrobe (Материал фасада)
    var btnNext4Wardrobe = document.getElementById('btn-next-question-4-wardrobe');
    if (btnNext4Wardrobe) {
        btnNext4Wardrobe.addEventListener('click', function (e) {
            e.preventDefault();

            if (!document.querySelector('input[name="question-4-wardrobe"]:checked')) {
                alert('Для продолжения выберите материал фасада.');
                return false;
            }

            var answer = document.querySelector('input[name="question-4-wardrobe"]:checked').value;
            document.getElementById('form-question-4-wardrobe').value = answer;

            document.getElementById('question-4-wardrobe').style.display = 'none';
            document.getElementById('question-5-wardrobe').style.display = 'block';
        });
    }

    // Кнопка "Назад" для вопроса 4-wardrobe
    var btnPrev4Wardrobe = document.querySelector('#question-4-wardrobe input[value="Назад"]');
    if (btnPrev4Wardrobe) {
        btnPrev4Wardrobe.addEventListener('click', function (e) {
            e.preventDefault();
            document.getElementById('question-4-wardrobe').style.display = 'none';
            document.getElementById('question-3-wardrobe').style.display = 'block';
        });
    }

    // Кнопка "Далее" для вопроса 5-wardrobe (Ширина)
    var btnNext5Wardrobe = document.getElementById('btn-next-question-5-wardrobe');
    if (btnNext5Wardrobe) {
        btnNext5Wardrobe.addEventListener('click', function (e) {
            e.preventDefault();

            // Проверяем что выбран хотя бы один checkbox
            var hasChecked = false;
            for (var i = 1; i <= 10; i++) {
                var checkbox = document.getElementById('answer-5-wardrobe-' + i);
                if (checkbox && checkbox.checked) {
                    hasChecked = true;
                    document.getElementById('form-answer-5-wardrobe-' + i).value = checkbox.value;
                }
            }

            if (!hasChecked) {
                alert('Для продолжения выберите ширину шкафа.');
                return false;
            }

            document.getElementById('question-5-wardrobe').style.display = 'none';
            document.getElementById('question-6-wardrobe').style.display = 'block';
        });
    }

    // Кнопка "Назад" для вопроса 5-wardrobe
    var btnPrev5Wardrobe = document.querySelector('#question-5-wardrobe input[value="Назад"]');
    if (btnPrev5Wardrobe) {
        btnPrev5Wardrobe.addEventListener('click', function (e) {
            e.preventDefault();
            document.getElementById('question-5-wardrobe').style.display = 'none';
            document.getElementById('question-4-wardrobe').style.display = 'block';
        });
    }

    // Кнопка "Далее" для вопроса 6-wardrobe (Количество дверей)
    var btnNext6Wardrobe = document.getElementById('btn-next-question-6-wardrobe');
    if (btnNext6Wardrobe) {
        btnNext6Wardrobe.addEventListener('click', function (e) {
            e.preventDefault();

            // Проверяем что выбран хотя бы один checkbox
            var hasChecked = false;
            for (var i = 1; i <= 6; i++) {
                var checkbox = document.getElementById('answer-6-wardrobe-' + i);
                if (checkbox && checkbox.checked) {
                    hasChecked = true;
                    document.getElementById('form-answer-6-wardrobe-' + i).value = checkbox.value;
                }
            }

            if (!hasChecked) {
                alert('Для продолжения выберите количество дверей.');
                return false;
            }

            document.getElementById('question-6-wardrobe').style.display = 'none';
            document.getElementById('question-6-5-wardrobe').style.display = 'block';
        });
    }

    // Кнопка "Назад" для вопроса 6-wardrobe
    var btnPrev6Wardrobe = document.querySelector('#question-6-wardrobe input[value="Назад"]');
    if (btnPrev6Wardrobe) {
        btnPrev6Wardrobe.addEventListener('click', function (e) {
            e.preventDefault();
            document.getElementById('question-6-wardrobe').style.display = 'none';
            document.getElementById('question-5-wardrobe').style.display = 'block';
        });
    }

    // Кнопка "Далее" для вопроса 6-5-wardrobe (Бюджет) 
    var btnNext65Wardrobe = document.getElementById('btn-next-question-6-5-wardrobe');
    if (btnNext65Wardrobe) {
        btnNext65Wardrobe.addEventListener('click', function (e) {
            e.preventDefault();

            if (!document.querySelector('input[name="question-6-5-wardrobe"]:checked')) {
                alert('Для продолжения выберите планируемый бюджет.');
                return false;
            }

            var answer = document.querySelector('input[name="question-6-5-wardrobe"]:checked').value;
            document.getElementById('form-question-6-5-wardrobe').value = answer;

            document.getElementById('question-6-5-wardrobe').style.display = 'none';
            document.getElementById('question-7-wardrobe').style.display = 'block';
        });
    }

    // Кнопка "Назад" для вопроса 6-5-wardrobe
    var btnPrev65Wardrobe = document.querySelector('#question-6-5-wardrobe input[value="Назад"]');
    if (btnPrev65Wardrobe) {
        btnPrev65Wardrobe.addEventListener('click', function (e) {
            e.preventDefault();
            document.getElementById('question-6-5-wardrobe').style.display = 'none';
            document.getElementById('question-6-wardrobe').style.display = 'block';
        });
    }

    // Кнопка "Далее" для вопроса 7-wardrobe (Подарок)
    var btnNext7Wardrobe = document.getElementById('btn-next-question-7-wardrobe');
    if (btnNext7Wardrobe) {
        btnNext7Wardrobe.addEventListener('click', function (e) {
            e.preventDefault();

            if (!document.querySelector('input[name="question-7-wardrobe"]:checked')) {
                alert('Для продолжения выберите подарок.');
                return false;
            }

            var answer = document.querySelector('input[name="question-7-wardrobe"]:checked').value;
            document.getElementById('form-question-7-wardrobe').value = answer;

            document.getElementById('question-7-wardrobe').style.display = 'none';
            document.getElementById('question-final').style.display = 'block';
        });
    }

    // Кнопка "Назад" для вопроса 7-wardrobe
    var btnPrev7Wardrobe = document.querySelector('#question-7-wardrobe input[value="Назад"]');
    if (btnPrev7Wardrobe) {
        btnPrev7Wardrobe.addEventListener('click', function (e) {
            e.preventDefault();
            document.getElementById('question-7-wardrobe').style.display = 'none';
            document.getElementById('question-6-5-wardrobe').style.display = 'block';
        });
    }

    // ============================================
    // ВЕТКА ДРУГОЕ
    // ============================================


    // ============================================
    // ОБРАБОТКА ФАЙЛА 
    // ============================================

    var selectedFile = null;

    // Отслеживаем выбор файла
    var fileInput = document.getElementById('question-2-other-file');
    var filePreview = document.getElementById('file-preview');

    if (fileInput) {
        fileInput.addEventListener('change', function(e) {
            if (this.files && this.files.length > 0) {
                selectedFile = this.files[0];
                
                // Показываем информацию о файле
                if (filePreview) {
                    var fileSize = (selectedFile.size / 1024).toFixed(1);
                    filePreview.innerHTML = '📎 <strong>' + selectedFile.name + '</strong> (' + fileSize + ' KB)';
                }
            } else {
                selectedFile = null;
                if (filePreview) {
                    filePreview.innerHTML = '';
                }
            }
        });
    }

    // Обновляем обработчик кнопки "Далее" для question-2-other
    var btnNext2Other = document.getElementById('btn-next-question-2-other');
    if (btnNext2Other) {
        // Удаляем старый обработчик и добавляем новый
        var newBtnNext2Other = btnNext2Other.cloneNode(true);
        btnNext2Other.parentNode.replaceChild(newBtnNext2Other, btnNext2Other);
        
        newBtnNext2Other.addEventListener('click', function (e) {
            e.preventDefault();

            var textarea = document.querySelector('#question-2-other textarea');
            if (!textarea || !textarea.value.trim()) {
                alert('Пожалуйста, опишите ваше изделие.');
                return false;
            }

            document.getElementById('form-question-2-other-description').value = textarea.value;

            if (selectedFile) {
                var hiddenFileInput = document.getElementById('quiz-file-hidden');
                if (hiddenFileInput) {
                    var dataTransfer = new DataTransfer();
                    dataTransfer.items.add(selectedFile);
                    hiddenFileInput.files = dataTransfer.files;
                }
            }

            document.getElementById('question-2-other').style.display = 'none';
            document.getElementById('question-final').style.display = 'block';
        });
    }

    // Кнопка "Назад" для вопроса 2-other
    var btnPrev2Other = document.querySelector('#question-2-other input[value="Назад"]');
    if (btnPrev2Other) {
        btnPrev2Other.addEventListener('click', function (e) {
            e.preventDefault();
            document.getElementById('question-2-other').style.display = 'none';
            document.getElementById('question-1').style.display = 'block';
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
            
            // Возвращаемся к последнему вопросу текущей ветки
            if (currentBranch === 'kitchen') {
                document.getElementById('question-7-kitchen').style.display = 'block';
            } else if (currentBranch === 'wardrobe') {
                document.getElementById('question-7-wardrobe').style.display = 'block';
            } else if (currentBranch === 'other') {
                document.getElementById('question-2-other').style.display = 'block';
            }
        });
    }

    // Обработчики для финальных чекбоксов
    for (var i = 1; i <= 4; i++) {
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