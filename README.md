# TC Kimlik Numarası Sorgulama
Api Aracılığıyla TC Kimlik Numarası Sorgulama

# Kurulum
Komut Satırında Çalıştır:
```
composer require mertkose/tc-kimlik-no-sorgula
```
# Kullanım
```
require 'vendor/autoload.php';

use Sorgula\Sorgula;

$veri = new Sorgula();

echo $veri->tc_sorgula("0000000000","mert","köse","1992");
// Doğrulama doğruysa 1,hatalıysa 0 değeri döndürür.
```
