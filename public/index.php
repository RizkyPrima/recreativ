<?php
// DEBUG: temporary diagnostics - paste at VERY TOP of public/index.php
echo "<pre>--- DEBUG START ---\n";

// Environment values
echo "getenv('CI_ENVIRONMENT'): " . (getenv('CI_ENVIRONMENT') ?: '(none)') . PHP_EOL;
echo "getenv('APP_BASE_URL'): " . (getenv('APP_BASE_URL') ?: '(none)') . PHP_EOL;
echo "getenv('VERCEL_URL'): " . (getenv('VERCEL_URL') ?: '(none)') . PHP_EOL;

// Check if production override file exists on runtime
$prodPath = __DIR__ . '/../app/Config/Production/Cache.php';
echo "Production Cache file exists: " . (file_exists($prodPath) ? 'YES' : 'NO') . " -> $prodPath" . PHP_EOL;

// Try to instantiate Config\Cache and show handler
try {
    $conf = new \Config\Cache();
    echo "Config\\Cache handler property: " . ($conf->handler ?? '(no handler)') . PHP_EOL;
    $r = new ReflectionClass($conf);
    echo "Config\\Cache class file: " . $r->getFileName() . PHP_EOL;
} catch (\Throwable $e) {
    echo "Error instantiating Config\\Cache: " . $e->getMessage() . PHP_EOL;
}

// Also check Production namespace if exists
try {
    if (class_exists('\Config\Production\Cache')) {
        $pc = new \Config\Production\Cache();
        echo "Config\\Production\\Cache handler: " . ($pc->handler ?? '(no handler)') . PHP_EOL;
        $rp = new ReflectionClass($pc);
        echo "Config\\Production\\Cache file: " . $rp->getFileName() . PHP_EOL;
    } else {
        echo "Config\\Production\\Cache class: (not found)\n";
    }
} catch (\Throwable $e) {
    echo "Error with Production Cache class: " . $e->getMessage() . PHP_EOL;
}

echo "--- DEBUG END ---</pre>";
exit;

// === original file content (unchanged below debug block) ===

// Check PHP version.
$minPhpVersion = '7.4'; // If you update this, don't forget to update `spark`.
if (version_compare(PHP_VERSION, $minPhpVersion, '<')) {
    $message = sprintf(
        'Your PHP version must be %s or higher to run CodeIgniter. Current version: %s',
        $minPhpVersion,
        PHP_VERSION
    );

    exit($message);
}

// Path to the front controller (this file)
define('FCPATH', __DIR__ . DIRECTORY_SEPARATOR);

// Ensure the current directory is pointing to the front controller's directory
if (getcwd() . DIRECTORY_SEPARATOR !== FCPATH) {
    chdir(FCPATH);
}

/*
 *---------------------------------------------------------------
 * BOOTSTRAP THE APPLICATION
 *---------------------------------------------------------------
 * This process sets up the path constants, loads and registers
 * our autoloader, along with Composer's, loads our constants
 * and fires up an environment-specific bootstrapping.
 */

// Load our paths config file
// This is the line that might need to be changed, depending on your folder structure.
require FCPATH . '../app/Config/Paths.php';
// ^^^ Change this line if you move your application folder

$paths = new Config\Paths();

// Location of the framework bootstrap file.
require rtrim($paths->systemDirectory, '\\/ ') . DIRECTORY_SEPARATOR . 'bootstrap.php';

// Load environment settings from .env files into $_SERVER and $_ENV
require_once SYSTEMPATH . 'Config/DotEnv.php';
(new CodeIgniter\Config\DotEnv(ROOTPATH))->load();

// Define ENVIRONMENT
if (! defined('ENVIRONMENT')) {
    define('ENVIRONMENT', env('CI_ENVIRONMENT', 'production'));
}

// Load Config Cache
// $factoriesCache = new \CodeIgniter\Cache\FactoriesCache();
// $factoriesCache->load('config');
// ^^^ Uncomment these lines if you want to use Config Caching.

/*
 * ---------------------------------------------------------------
 * GRAB OUR CODEIGNITER INSTANCE
 * ---------------------------------------------------------------
 *
 * The CodeIgniter class contains the core functionality to make
 * the application run, and does all the dirty work to get
 * the pieces all working together.
 */

$app = Config\Services::codeigniter();
$app->initialize();
$context = is_cli() ? 'php-cli' : 'web';
$app->setContext($context);

/*
 *---------------------------------------------------------------
 * LAUNCH THE APPLICATION
 *---------------------------------------------------------------
 * Now that everything is set up, it's time to actually fire
 * up the engines and make this app do its thang.
 */

$app->run();

// Save Config Cache
// $factoriesCache->save('config');
// ^^^ Uncomment this line if you want to use Config Caching.

// Exits the application, setting the exit code for CLI-based applications
// that might be watching.
exit(EXIT_SUCCESS);
