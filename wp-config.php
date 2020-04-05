<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'wordpress.local' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'wordpress.local' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ')]^ f5nE_Vc=z^vD}!|(4ZC9,hW/z1cm$3C;3]?)N%W2e` Q*Treld</<h8tg8,;' );
define( 'SECURE_AUTH_KEY',  'n;ZU.}R#e<`PQj`j)!>C{6p.0~wok*Adkg.)X%qZ*Q.BnVfyQb&7adu]@)WvbZm_' );
define( 'LOGGED_IN_KEY',    'n-c`8gW( >0=$4W1ou@9O(s;i<g?orj8*}/)%^QJaLu0 sx?JJ@*[zYJo~&W@q;v' );
define( 'NONCE_KEY',        '9d1NE!y`T%AvVOO#*(hMDwOrl92:2[$7K%7>-E S`gz,^>C(ZUSlBuki-V0k>bNX' );
define( 'AUTH_SALT',        '>t-Wsh45^Ihofj?h]B7Z3(Emy;<57xhpcGmql*SMtvp&|(P}O)l0KShZ/P![sH<@' );
define( 'SECURE_AUTH_SALT', '%aO5pF:2Z3=b?HcL}H)ueLo3^hjJ9Fa7MU6;cq3oS5*v:.?<T%I#4QV5*z?}RH+A' );
define( 'LOGGED_IN_SALT',   'J4^D#>z+;3YHQGj7]=udE=qh;d?CiF~1EF?R`Yb>Z<i&2IB&&W4<Q~#NNKWU]B^v' );
define( 'NONCE_SALT',       '@$QKi sNg&-ns@zFZ<eTPX2I2;ql@`J~)5SBH>.kpLnq;4]Y]<k8(g9K3/[J[7H!' );

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
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
