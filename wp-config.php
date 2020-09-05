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
define( 'DB_NAME', 'energying1_seo2' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'energying1_seo2' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'iPdeem71wpseo' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         '<g$Vz7IFVB@,B-=FP9>E^@0ioM]gloGVq?Cx_{Y(Hq|/?.}g3m{:;Bu063J4UWgf' );
define( 'SECURE_AUTH_KEY',  'tj}[ji`G%nE7Ia)M }~5/&p[.aWlbLL@p7o$_men}gq~v:/Tm(UwK EnqBvT8MuT' );
define( 'LOGGED_IN_KEY',    'k!pY[d^!$#B?)h.(Oxc?_]n^;xJR.+p|N0gUDH~D|Q 42LE. S{*.)%)>0y#E8z{' );
define( 'NONCE_KEY',        'Q15{9;L>z%PkhTlhsTmo?+29oR#INH3`nHuiHvNWDB$e#4J_`&v2#AVL8HL,~M G' );
define( 'AUTH_SALT',        'XDkxHh_rq+eDBK#T>e~pU1i-vY^Nfb]rdm9|9ZW!Bj<,Ht+<rDAlv)Pvm%LhHgx}' );
define( 'SECURE_AUTH_SALT', '!)Hdhqb/TQ+|PEVheIUD~TN8g%bf4)e(H#GjOPvg0;&F/iWJLw)gwQeA>DIuTcr*' );
define( 'LOGGED_IN_SALT',   ')ahM7=K3OINk4@|w+8=68D<3);36c^O<`]6*ESo@nf-9R_-l@i.2[rF7R ;eW3)m' );
define( 'NONCE_SALT',       '_rxq{LTkG;=] ~f$Pq/VJUBpn[t07??{+6)L/<B>7Dj!CquyW$Z{hI:*0WB(ti:e' );

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
define( 'WP_DEBUG', true );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
