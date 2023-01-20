<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки базы данных
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'osu.povt' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'root' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', '' );

/** Имя сервера базы данных */
define( 'DB_HOST', '127.0.0.1' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'y5@]$^Gz$d#M5r?N0]&QoG#ZGb^+Oc{%$iNs+)A<02@bQZg549O|JyW0#QUKt>/e' );
define( 'SECURE_AUTH_KEY',  'l6*oZH.V OfSzu4tKhn0E<bQEMK}MO5?`kfm<:b|q@uUev=bYw5%hIk#FX4.T*QU' );
define( 'LOGGED_IN_KEY',    'B>{d;,RmxR@Er1S/^m-==[#LWg9-_110^YdhLE^rviqyH>V{Zo2@6vL(^A3;8IIP' );
define( 'NONCE_KEY',        ')f6x U*#|/S}O^`_XFZkgcd~G-y5uz9w[!oZn]Ku$L5T[W3`R3WP@$G8%I8p(A#@' );
define( 'AUTH_SALT',        '~EIhnLgE,5/PdF*imE`cd8Dw{}LQr47}Cg[@L_mq+T!Q*`:V8yw|a81]2zW[7EQL' );
define( 'SECURE_AUTH_SALT', '|9^[1u^-~a6ir}T]TLi;?83]dQ[4$?-p<;wXkWc,{2t+&YI]n`|8#JUxxDkkx>(5' );
define( 'LOGGED_IN_SALT',   'B;On54&bgNP65o@mYQjZr$C9Io*[Ts(!$u=@[5/s^dXp5:<jk+?8e@ofi-p#a:j_' );
define( 'NONCE_SALT',       'Tc=QSIuaG./+t:>oO6g&_d}6uhry@=5/Jk9u,q%ifpg5loEsp:)x#zhP,JTT8lw3' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
