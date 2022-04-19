# Http Status Codes and API Response
![run-tests](https://github.com/Rigsto/api-http-status/workflows/run-tests/badge.svg)
[![Latest Version](https://img.shields.io/github/v/release/rigsto/api-http-status?label=Release&sort=semver)](https://github.com/Rigsto/api-http-status/releases)
[![Packagist Version](https://img.shields.io/packagist/v/rigsto/api-http-status?label=Packagist)](https://packagist.org/packages/rigsto/api-http-status)
[![PHP Version Required](https://img.shields.io/packagist/php-v/rigsto/api-http-status?label=PHP%20Version)]()
[![MIT License](https://img.shields.io/github/license/rigsto/api-http-status)](LICENSE)

A simple enum class for HTTP status codes and their associated API response.

All codes are taken from [Wikipedia](https://en.wikipedia.org/wiki/List_of_HTTP_status_codes).

## Installation
Using composer;
```bash
$ composer require rigsto/api-http-status
```

## Usage
### Http Status Code

#### Enum
```php
<?php

use Rigsto\ApiHttpStatus\HttpStatus;

HttpStatus::OK;
HttpStatus::NOT_FOUND;
HttpStatus::INTERNAL_SERVER_ERROR;
HttpStatus::BAD_REQUEST;
HttpStatus::UNAUTHORIZED;
```

#### Functions
`getStatusCode()` will return the status code.<br>
`getName()` will return the http name.<br>
`getCategory()` will return the http category.<br>
`isSuccess()` will return true if the status code is a success code.
```php
<?php

use Rigsto\ApiHttpStatus\HttpStatus;

$http = HttpStatus::OK;
$http->getStatusCode(); // 200
$http->getName(); // Ok
$http->getCategory(); // Success
$http->isSuccess(); // true

$http = HttpStatus::UNAUTHORIZED;
$http->getStatusCode(); // 401
$http->getName(); // Unauthorized
$http->getCategory(); // Client Error
$http->isSuccess(); // false

$http = HttpStatus::INTERNAL_SERVER_ERROR;
$http->getStatusCode(); // 500
$http->getName(); // Internal Server Error
$http->getCategory(); // Server Error
$http->isSuccess(); // false
```

#### Generate Http Status From Code
`isValidCode()` will return `true` if the code is valid and `false` if it is not.<br>
`fromCode()` will return an `HttpStatus` object if the code is valid and `null` if it is not.

```php
<?php

use Rigsto\ApiHttpStatus\HttpStatus;

$code = 200;
$codeValidity = HttpStatus::isValidCode($code); // true
$http = HttpStatus::fromCode($code); // HttpStatus::OK

$code = 999
$codeValidity = HttpStatus::isValidCode($code); // false
$http = HttpStatus::fromCode($code); // null
```

### Api Response
`generateResponse(HttpStatus, ?message, ?data)` will return json string of the http status, message, and data.<br>
`HttpStatus` is required, but `message` and `data` are optional. If `message` is null, then message will be generated from http status name.
```php
<?php

use Rigsto\ApiHttpStatus\HttpStatus;
use Rigsto\ApiHttpStatus\ApiResponse;

$data = [...];
$response = ApiResponse::generateResponse(HttpStatus::OK, null, $data);
// {"success": true, "code": 200, "message": "Ok", "data": [...]}

$response = ApiResponse::generateResponse(HttpStatus::BAD_REQUEST, 'Custom Message', $data);
// {"success": false, "code": 400, "message": "Custom Message", "data": [...]}

$response = ApiResponse::generateResponse(HttpStatus::INTERNAL_SERVER_ERROR, null, null);
// {"success": false, "code": 500, "message": "Internal Server Error", "data": null}
```

`generatePaginationResponse(HttpStatus, ?message, ?data` will return json string of http status, message, and paginate data.<br>
Function concept same as `generateResponse()` but with pagination data.
```php
<?php

use Rigsto\ApiHttpStatus\HttpStatus;
use Rigsto\ApiHttpStatus\ApiResponse;

$data = ["your data here" => "..."];
$response = ApiResponse::generatePaginationResponse(HttpStatus::OK, null, $data);
```
```json
{
  "success": true,
  "code": 200,
  "message": "Ok",
  "data": {
    "data": {
      "your data here":"..."
    },
    "pagination": {
      "total": 50,
      "per_page": 10,
      "current_page": 1,
      "last_page": 5,
      "from": 1,
      "to": 10
    }
  }
}
```