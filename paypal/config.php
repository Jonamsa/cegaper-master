<?php
define('ProPayPal', 0);
if(ProPayPal){
    define("PayPalClientId", "AdSKf6SuMEujOHd4EcELGTQZ_uVVuegecXxnmAuK1g25NzqaifvPe4SRXYMfXFVBpbbR45cYWdPjcXhc");
    define("PayPalSecret", "ED8Rp16KZYf29ey3Ufc6jlxcogDgNpxTYqo47QKHMGDUPPN0gbcbX-QpbfoByhCL4GTNUXeuSy4KcD92");
    define("PayPalBaseUrl", "https://api.paypal.com/v1/");
    define("PayPalENV", "production");
} else {
    define("PayPalClientId", "AdSKf6SuMEujOHd4EcELGTQZ_uVVuegecXxnmAuK1g25NzqaifvPe4SRXYMfXFVBpbbR45cYWdPjcXhc");
    define("PayPalSecret", "ED8Rp16KZYf29ey3Ufc6jlxcogDgNpxTYqo47QKHMGDUPPN0gbcbX-QpbfoByhCL4GTNUXeuSy4KcD92");
    define("PayPalBaseUrl", "https://api.sandbox.paypal.com/v1/");
    define("PayPalENV", "sandbox");
}
?>
