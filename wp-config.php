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
define( 'DB_NAME', 'child' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'child_db' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', '1234' );

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
define( 'AUTH_KEY',         'CG[zv9mn)dY${W2XNA/1mJ9n.lkeO.g9nMcNwd1jiy] e Fw*=NoYX{.+s~W@=?Y' );
define( 'SECURE_AUTH_KEY',  '`jSa2Vg8RD]pNBLgbckN,bO8ayrG{qL>t2+wId)V-;^BgW;A#`I>{R}P;|9r`sEs' );
define( 'LOGGED_IN_KEY',    'i]!gg?)nQqg2@:$%Lu?cDt$*owrCH$RDa-cYcgwAU&.wlF_W;`#:&sPRg8;/jm,D' );
define( 'NONCE_KEY',        'D&jgE7b;p ,0E|4/s(NOx/5rI$7%RldGHS@k{hMo`CYrgf2XzL@IHgat|s~TOqLD' );
define( 'AUTH_SALT',        'uU$6u}BmRagy-60%lIC|m0W8#B*oO`B9crs+JcpScN:PK%+AlRXLU?3t^Q9PjC0V' );
define( 'SECURE_AUTH_SALT', '>}p;ZJYE%IC{7G%Cc?8@dnU@ozi.38rC<>{ n}d4jhe>,rPTS9Ek]%obuJG*:skQ' );
define( 'LOGGED_IN_SALT',   'Uc:W#88{(5QF-4q06I@FR`Exb5jNtS6X+-AW<tCeLR}5#]E0n^K3Qh*XMgHf-BnW' );
define( 'NONCE_SALT',       'ZP|m_|nK&TZmUAgL(W%ag!>tRUDBX(Ge!6nQZx|EbJ.2EjaGCN$o.i/vZ2N1)DmF' );

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
