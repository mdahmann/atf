<?php
    define('PERCH_LICENSE_KEY', 'P21605-FXN166-GZZ022-ZMM805-VKU025');

    define("PERCH_DB_USERNAME", 'perch');
    define("PERCH_DB_PASSWORD", 'GhostCa$h68');
    define("PERCH_DB_SERVER", "localhost");
    define("PERCH_DB_DATABASE", "atthefork");
    define("PERCH_DB_PREFIX", "perch2_");
    define("PERCH_IMAGE_LIB", 'imagick');

      /* define("PERCH_DB_USERNAME", 'mdahmann_atf');
    define("PERCH_DB_PASSWORD", 'GhostCa$h68');
    define("PERCH_DB_SERVER", "localhost");
    define("PERCH_DB_DATABASE", "mdahmann_atthefork");*/

    define('PERCH_TZ', 'UTC');

    define('PERCH_EMAIL_FROM', 'mdahmann@gmail.com');
    define('PERCH_EMAIL_FROM_NAME', 'Miles Dahmann');

    define('PERCH_LOGINPATH', '/at-the-fork/perch');
    define('PERCH_PATH', str_replace(DIRECTORY_SEPARATOR.'config', '', __DIR__));
    define('PERCH_CORE', PERCH_PATH.DIRECTORY_SEPARATOR.'core');

    define('PERCH_RESFILEPATH', PERCH_PATH . DIRECTORY_SEPARATOR . 'resources');
    define('PERCH_RESPATH', PERCH_LOGINPATH . '/resources');

    define('PERCH_HTML5', true);
