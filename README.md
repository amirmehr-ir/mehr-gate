# About MehrGate

## This package is developed by Amir Hosein Sharifi Mehr for 'https://zarinpal.com'

### +9899181881667 / amirhoseinsharifimehr@gmail.com

---


### config composer.json
put
```
"MehrGate\\": "mehr/mehr-gate/src"
``` 
in following line of composer.json
```json
"autoload": {
    "psr-4": {
        "App\\": "app/",
        "Database\\Factories\\": "database/factories/",
        "Database\\Seeders\\": "database/seeders/",
        "MehrGate\\": "mehr-gate/src"
    }
},
```

### Run current command after edit composer.json
```
composer dumpautoload
```

### Put current line to 'providers' in config/app.php
```
MehrGate\MehrGateServiceProvide::class,
```

### Put current line to 'aliases' in config/app.php
```
'MehrGate' => MehrGate\MehrGateFacade::class
```

----------------------------------
## Usage 

### Init request to gate

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

