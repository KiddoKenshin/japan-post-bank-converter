# japan-post-bank-converter
A simple PHP Library that convert JapanPost Bank (Yuucho) Kigou Bangou to Standard Bank Format, vice versa.

## Installation
### With Composer
```bash
$ composer require kiddokenshin/japan-post-bank-converter
```
```json
{
    "require": {
        "kiddokenshin/japan-post-bank-converter": ">=1.0.0"
    }
}
```
```php
<?php
require 'vendor/autoload.php';

use KiddoKenshin\JapanPostBankConverter\JapanPostBankConverter;

```

### Without Composer
```php
<?php
require 'path/to/JapanPostBankConverter.php';

use KiddoKenshin\JapanPostBankConverter\JapanPostBankConverter;

```

## Usage
```php
// Sample: http://www.jp-bank.japanpost.jp/kojin/sokin/koza/kj_sk_kz_furikomi_ksk.html
$bankFormat = JapanPostBankConverter::convertKigouBangouToStandardBankFormat('11930', '12345671');
$kigouBangou = JapanPostBankConverter::convertBankFormatToKigouBangou('一九八', '1234567');
// or
$kigouBangou = JapanPostBankConverter::convertBankFormatToKigouBangou('198', '1234567');
```

## Disclaimer
This library does not guarantee the correctness of the result output as JapanPost might change it's logic.
Current logic is from a research result from someone anonymous.

Anything else, feel free to raise your issue [here](https://github.com/KiddoKenshin/japan-post-bank-converter)
