<?php
/**
 * Snowflake Effect
 * Легкий эффект снежинок для WordPress
 */

// Запрет прямого доступа
if (!defined('ABSPATH')) {
    exit;
}

// Не показываем снежинки в админке
if (is_admin()) {
    return;
}

?>
<style>
    .snowflake {
        position: fixed;
        top: -10px;
        color: #1454ccff;
        font-size: 1em;
        pointer-events: none;
        z-index: 9999;
        opacity: 0.8;
        user-select: none;
    }

    @keyframes fall-rotate {
        0% {
            transform: translateY(0) translateX(0) rotate(0deg);
        }
        100% {
            transform: translateY(100vh) translateX(100px) rotate(360deg);
        }
    }

    @keyframes fall-rotate-reverse {
        0% {
            transform: translateY(0) translateX(0) rotate(0deg);
        }
        100% {
            transform: translateY(100vh) translateX(-100px) rotate(-360deg);
        }
    }

    @keyframes fall-spin-fast {
        0% {
            transform: translateY(0) translateX(0) rotate(0deg);
        }
        100% {
            transform: translateY(100vh) translateX(50px) rotate(720deg);
        }
    }
</style>

<script>
    (function() {
        let snowflakeCount = 0;
        const maxSnowflakes = 50;

        function createSnowflake() {
            if (snowflakeCount >= maxSnowflakes) return;
            
            snowflakeCount++;
            const snowflake = document.createElement('div');
            snowflake.className = 'snowflake';
            
            // Разные символы снежинок
            const symbols = ['❅', '❆', '❄', '✻', '✼', '❉'];
            snowflake.innerHTML = symbols[Math.floor(Math.random() * symbols.length)];
            
            snowflake.style.left = Math.random() * 100 + '%';
            snowflake.style.fontSize = Math.random() * 15 + 10 + 'px';
            
            // Случайная анимация вращения с покачиванием
            const animations = ['fall-rotate', 'fall-rotate-reverse', 'fall-spin-fast'];
            snowflake.style.animation = animations[Math.floor(Math.random() * animations.length)] + ' linear forwards';
            snowflake.style.animationDuration = Math.random() * 4 + 6 + 's';
            
            const duration = parseFloat(snowflake.style.animationDuration) * 1000;
            
            document.body.appendChild(snowflake);

            setTimeout(function() {
                snowflake.remove();
                snowflakeCount--;
            }, duration);
        }

        setInterval(createSnowflake, 200);
    })();
</script>