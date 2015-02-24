<?php

/** Database settings for WordPress */
define('DB_NAME', getenv('DB_NAME'));
define('DB_USER', getenv('DB_USER'));
define('DB_PASSWORD', getenv('DB_PASSWORD'));
define('DB_HOST', getenv('DB_HOST') ?: 'localhost');

/** Site URL settings */
define('WP_HOME', getenv('WP_HOME'));
define('WP_SITEURL', getenv('WP_SITEURL'));

/** Environment settings */
define('WP_DEBUG', true);
define('SAVEQUERIES', WP_DEBUG);
define('SCRIPT_DEBUG', WP_DEBUG);