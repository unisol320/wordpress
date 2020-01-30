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
define( 'DB_NAME', 'wordpress' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'z%0zs)u7PqrG$]9~>Lj Ayxq3gY2^#2GrNAfV)lfxgHk+nG2s`0za:+2(u@2Pt$2' );
define( 'SECURE_AUTH_KEY',  'lD=7q|O<J4==^)rLvyC?gKRJ&HX_)x:I4wowsj?ip}cyY#t@cPdH0Uh:Mdy938pW' );
define( 'LOGGED_IN_KEY',    '8|jA+Aq}<4a`|&hK^Bp3Ey]:(PEc?B(Fe`YX&&Un!y||3!>gNNB=/]%h2Zl:?Sa7' );
define( 'NONCE_KEY',        'zJs},OTjA#.qn2d0?3=X=<(-WXEps! B(mnp{RH:`O<3xkMr>P]bb>F]8#W^,bD ' );
define( 'AUTH_SALT',        's6Ma@Ps t)z=4JOr/*lr>W}* -xqD/c7|AU3p;9l2%$Y-dv=_5/M:xuG#sI(n(^I' );
define( 'SECURE_AUTH_SALT', 'abyF%&*.s_6Z<( q?D$~x0Xk#jT<5/rtYje|cNC0Y5A_Y5ThXli8MJOq*A/Mly80' );
define( 'LOGGED_IN_SALT',   'ROH*aN7tPh=E09wRZH4+G#aGL=Z~d-`LtY1D+h_+[0VR(k* aWfW$3D(/AhS;R4[' );
define( 'NONCE_SALT',       'GzbY5: u*n$@{o)?*B><t_b=}WLy_S-QSe L}S{@i,96WqvjQ4OB8SBDOmN}wyX(' );

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
