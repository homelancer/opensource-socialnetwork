<?php
/**
 *    OpenSource-SocialNetwork
 *
 * @package   (Informatikon.com).ossn
 * @author    OSSN Core Team <info@opensource-socialnetwork.com>
 * @copyright 2014 iNFORMATIKON TECHNOLOGIES
 * @license   General Public Licence http://opensource-socialnetwork.com/licence
 * @link      http://www.opensource-socialnetwork.com/licence
 */


echo '<div><div class="layout-installation"><h2>' . ossn_installation_print('ossn:settings') . '</h2><br /><div style="margin:0 auto; width:900px;">';
if (OssnInstallation::isPhp()) {
    echo '<div class="ossn-installation-message ossn-installation-success"> PHP ' . PHP_VERSION . ' </div>';
} else {
    echo '<div class="ossn-installation-message ossn-installation-fail">You have old PHP ' . PHP_VERSION . '. You need PHP 5.3 or Higher </div>';
    $error[] = 'php';
}
if (OssnInstallation::is_mysqli_enabled()) {
    echo '<div class="ossn-installation-message ossn-installation-success"> MYSQLI ENABLED </div>';
} else {
    echo '<div class="ossn-installation-message ossn-installation-fail">MYSQLI PHP EXTENSION REQUIRED</div>';
    $error[] = 'mysqli';
}
if (OssnInstallation::isApache()) {
    echo '<div class="ossn-installation-message ossn-installation-success">APACHE</div>';
} else {
    echo '<div class="ossn-installation-message ossn-installation-fail">APACHE IS REQUIRED.</div>';
    $error[] = 'apache';
}
if (OssnInstallation::is_mod_rewrite()) {
    echo '<div class="ossn-installation-message ossn-installation-success">  MOD_REWRITE</div>';
} else {
    echo '<div class="ossn-installation-message ossn-installation-fail"> MOD_REWRITE</div>';
    $error[] = 'mod_rewrite';
}
if (OssnInstallation::isCurl()) {
    echo '<div class="ossn-installation-message ossn-installation-success">PHP CURL</div>';
} else {
    echo '<div class="ossn-installation-message ossn-installation-fail">PHP CURL</div>';
    $error[] = 'php:curl';
}
if (OssnInstallation::isPhpGd()) {
    echo '<div class="ossn-installation-message ossn-installation-success">PHP GD LIBRARY</div>';
} else {
    echo '<div class="ossn-installation-message ossn-installation-fail">PHP GD LIBRARY</div>';
    $error[] = 'php:gd';
}
if (OssnInstallation::isCon_WRITEABLE()) {
    echo '<div class="ossn-installation-message ossn-installation-success">CONFIGURATION DIRECTORY WRITEABLE</div>';
} else {
    echo '<div class="ossn-installation-message ossn-installation-fail">CONFIGURATION DIRECTORY IS NOT WRITEABLE</div>';
    $error[] = 'permission:configuration';
}
echo '<br />';
if (!isset($error)) {
    echo '<a href="' . ossn_installation_paths()->url . '?page=settings" class="button-blue primary">Next</a>';
}

echo '</div><br /><br /></div>';