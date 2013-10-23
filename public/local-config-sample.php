<?php
/**
 * The local configuration file for WordPress.
 *
 * This file extends the default configurations defined in wp-config.php
 * with environment specific configuration details. This approach is
 * useful when developing within a team and for complex deployment processes.
 *
 * !!!!! Start this file off with the environment this install is configured to.
 *
 * Example:
 * define('WP_ENV', 'development');
 *
 * !!!!! This file must include the MySQL database connection details
 * (DB_NAME, DB_USER, DB_PASSWORD, DB_HOST).
 *
 * In addition, you may also specific environment specific parameters.
 */

/**
 * Define the environment this instance is configured to.
 *
 * Examples are: development, staging, production.
 *
 * Use this to configure WordPress to a specific environment.
 */
define('WP_ENV', 'production');

/** The name of the database for WordPress */
define('DB_NAME', 'database_name_here');

/** MySQL database username */
define('DB_USER', 'username_here');

/** MySQL database password */
define('DB_PASSWORD', 'password_here');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a
 * unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**#@-*/

/** Enables PHP error reporting. */
define('WP_DEBUG', false);

define('WP_DEBUG_LOG', true);

/** Disable minified scripts and styles and use full versions instead. */
define('SCRIPT_DEBUG', false);

/** Saves database queries for query analyzing. Not recommended for production. */
define('SAVEQUERIES', false);

/** Profile Request/Response time. */
define('REQUEST_MICROTIME', microtime(true));