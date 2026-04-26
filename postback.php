<?php
$botToken = "8787663810:AAHp29lN6OFAPJy4sreim1ibV2k9S2QNOxk";
$chatId = "7075957005";

$amount = $_GET['amount'];
$country = $_GET['country'];
$click = $_GET['subid1'];

$message = "🔥 New Conversion!\n";
$message .= "💰 Amount: $amount\n";
$message .= "🌍 Country: $country\n";
$message .= "🆔 Click ID: $click";

$url = "https://api.telegram.org/bot$botToken/sendMessage";
file_get_contents($url . "?chat_id=$chatId&text=" . urlencode($message));
?>
