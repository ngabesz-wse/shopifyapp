<?php
/**
 * Created by PhpStorm.
 * User: gabornagy
 * Date: 2017. 10. 24.
 * Time: 15:32
 */
$shopname = $_GET['shopname'];
$code = $_GET['code'];
$timestamp = $_GET['timestamp'];

$url = "https://demo.aurora.ngabesz/admin/oauth/access_credential?client_id=xxx&client_secret=yyyy&code=".$code."&timestamp=".$timestamp;

$curl = curl_init();
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($curl, CURLOPT_URL, $url);
$result = curl_exec($curl);
var_dump($result);
var_dump(curl_error($curl));