<?php
/**
 * Created by PhpStorm.
 * User: gabornagy
 * Date: 2017. 10. 23.
 * Time: 15:14
 */

$key = '164f5e87aa2b57b8b30fd4331bd17628';
$secret = '4d4a3876aeab21d2b2f71c0fff7bd7da';

$install_url =
    "https://demo.aurora.ngabesz/admin/oauth/authorize?client_id=xxx&redirect_uri=https://demo.aurora.ngabesz/auth.php";

header("Location:".$install_url);