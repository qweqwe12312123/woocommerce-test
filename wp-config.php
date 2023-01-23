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
define( 'DB_NAME', 'e13boutique' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'root' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', 'root' );

/** Имя сервера базы данных */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         'I> Q7~Dh%RSYYQ?wY==-.07&]8ix/Jqf(}cw^D<P;)Xm+=m~97fwz=Jy*|Da{x/7' );
define( 'SECURE_AUTH_KEY',  'ddiL]u0wgX%|9P@?uT-Ebi$W@{O`T%F:U<UT a<L_1JF|W9_zK4b1JYk+{b*/jTl' );
define( 'LOGGED_IN_KEY',    '4G;`Fwa+<oIYRb9NO.gZ+}sQH|0vDMFkW76VJg|H_DNR38.Rg;-0k/WS(iu?A[M+' );
define( 'NONCE_KEY',        'U|ZRm=#lRk}FFdGSYtBty+=@/*oqRa[1c  ##dQ~cBc#h8ZG>gw5KZ e 292oF7c' );
define( 'AUTH_SALT',        '%gGhMxRc]v~B-t;O#c6D|PW0IG*~-o7j<0=H[.}@eEN`uD|DlA^~(:=.[#Gb@KTl' );
define( 'SECURE_AUTH_SALT', 'g{}3OdER(vJT`i,zks?i!f`2O`A6+vhSzEr5(Y.^s!byOd[vh$f5La|~SFsX^<pn' );
define( 'LOGGED_IN_SALT',   '}}qM]GShxQqSf[xQ=>o.)%Q$RM8:f7@{l8 Z4?0J;IkN/[% =:> ^/dJ[ K@Gq*u' );
define( 'NONCE_SALT',       '>`E4d4XsvzQi*e_jkLzr;,nH!8+D;1WE|oZEHB-JOjWcfxV-YB}!n4C!dkS6xL?T' );

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
