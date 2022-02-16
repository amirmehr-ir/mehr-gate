## MehrGate Laravel
This package is developed by Amir Hosein Sharifi Mehr for 'https://zarinpal.com'
amirhoseinsharifimehr@gmail.com

---

## Installation
```
composer require amirmehr/mehr-gate
```

## Put current line to 'providers' in config/app.php
```
MehrGate\MehrGateServiceProvider::class
```

## Put current line to 'aliases' in config/app.php
```
'MehrGate' => MehrGate\MehrGateFacade::class
```

# Usage 

## .env variables
```dotenv
MEHR_GATE_CALLBACK=http://localhost/public/verify
MEHR_GATE_TOKEN=xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx
MEHR_GATE_TEST=true
```

## Init request to gate

```php
$result_gate = MehrGate::request( 2000, 'توضیحات', '09185001010' );

if ( isset( $result_gate["Status"] ) && $result_gate["Status"] == 100 ) {
    $result_gate["Authority"];
    $result_gate["StartPay"];
} else {
    $result_gate["Status"];
    $result_gate["Message"];
}
```
Authority (Token) & StartPay must save in DB

## License

The MehrGate is open source licensed under the [MIT license](https://opensource.org/licenses/MIT).


