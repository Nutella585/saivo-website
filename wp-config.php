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
define( 'DB_NAME', "id19070785_saivo_db" );


/** Имя пользователя базы данных */
define( 'DB_USER', "id19070785_admin" );


/** Пароль к базе данных */
define( 'DB_PASSWORD', "socgo4-Zyccew-zyhgon" );


/** Имя сервера базы данных */
define( 'DB_HOST', "localhost" );


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
define( 'AUTH_KEY',         'BQRbQ27*?TR@Hvsh5OY8|Bs |nrtaGflMc&<=3_Qer.cMO`B3YYcWq&_**H%4TTI' );

define( 'SECURE_AUTH_KEY',  ',MGhA{`9< 2[IPZ LIn@X@[DKP)n}%3uibmyJ2{?w6&&[UAc/nT.}i`!IF&NY=zg' );

define( 'LOGGED_IN_KEY',    'T7CN|=Z*8b`u^ylY[!Z0i<GSsT{2v7V5YkHFtb*kZ$gccP1Ceuh>e|E]y~.LiZH&' );

define( 'NONCE_KEY',        '-!3iBjw)/X71u|Keic |[Cio_sCTgN/>sa>Oy/j4s9Q0GYM}.=`0I?Gb(Zf<6Cz2' );

define( 'AUTH_SALT',        '2X@v1q~M}t,~VKEFz{5$a&: `sCwJk0UTIDwCOc[UiQITF=D)9(ymM6eRi$[Xd,,' );

define( 'SECURE_AUTH_SALT', 'J3]M5]Zi$ac1FKtUCy,Pd+QI+%)UK|^T{ZoEi13G%mg}#HnBoSd);MfslyvSS{*h' );

define( 'LOGGED_IN_SALT',   'i.,tBsaEnOV6VS`8pZjd{Of@Z}BA::3!+6H:L$j<uoCkv@[_cmN:x( 4+Z!GWYkm' );

define( 'NONCE_SALT',       'oqj3RB<+Ww$=%&F^ 1bC,t4nk6%~yI^GF[%CaWeBQT`X31^`C-hazqAaQiI{FY;4' );


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
