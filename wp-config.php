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
define('DB_NAME', 'ibro');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'kopH<^(u,dTRj|J}T44ovu9.xR(|U*[P7FyKCoExqu0hr:mKB1`R<uMfhTJB+/I0');
define('SECURE_AUTH_KEY',  'x)Vba*%*BTG_4IbUr^A&kaMbIm70x?,k<NY}F/B&^CZ&? 5jAPw139q[~+eB[|PC');
define('LOGGED_IN_KEY',    'p]XOCXMH lAgsqnBxG[V]%*b&t]N7C)/F|$wqbRE8^Un,U`zl81wLMp]:3lXXx}X');
define('NONCE_KEY',        'A=kPEeN3u_]1_;JPS*5cm|eJ0<6&S2vNLzN[9Em6;sizv(;JW{Q|{7vZ3YPUj68c');
define('AUTH_SALT',        '/`L6y_G?p@aD<!%,@`^q[dzT~8y2N.35)AUJyH|r=o24GXxko[D-e(t4(t|yiGLu');
define('SECURE_AUTH_SALT', 'O~,~Ngidql7Po8DfnQ1KW><<(%mXwn/g:ZK:$NwI)&IwG hfjF4^~Cf)Id-e.H|G');
define('LOGGED_IN_SALT',   '6:,2N OjA3nC?ZHVC>/N4J WzvU9-#jCqw3=n0;S)s{OF.e3yx 9qqM:(i<BxP9K');
define('NONCE_SALT',       'LcOYyu4(?s1,G5)3=lpMVEIu#1le%X{eJmtdB22+ [WN=Bc UO 1I0u^y# 9n7}D');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
