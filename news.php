<?php
require_once "composer/vendor/autoload.php";

use Pheal\Pheal;
use Pheal\Core\Config;

$keyID = "2998486";
$vcode = "wL7VpSdTsoq9pzvMK1NgViSOwTTUkoVjSDG5pcMZK3ZhRddulqsAcgzBw0jfzD16";

Config::getInstance()->cache = new \Pheal\Cache\FileStorage('/tmp/phealcache/');
Config::getInstance()->access = new \Pheal\Access\StaticCheck();

$pheal = new Pheal($keyID, $vCode);

try {
    $response = $pheal->accountScope->APIKeyInfo();

    echo sprintf(
        "API mask: %s",
        $response->apiMask
    );
} catch (\Pheal\Exceptions\PhealException $e) {
    echo sprintf(
        "an exception was caught! Type: %s Message: %s",
        get_class($e),
        $e->getMessage()
    );
}
?>
