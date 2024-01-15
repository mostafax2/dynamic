
# Dynamic Package

Laravel Service for connect with Dynamic

 


## Installation



to install Package by composer

```composer
  composer require mostafax/dynamic
```

to publish my package

```composer
  php artisan vendor:publish 
```

add this keys to your env file

```env

DYNAMIC_DOMAIN=http://domain
DYNAMIC_TOKEN=*******************************
```

using namespace
```php
use Mostafax\Dynamic\Dynamic;
```
handle date
```php
 $data= [
            //
        ]
```
to send data with method POST
```php
$Dynamic = new Dynamic();
$Dynamic->postData("API Name",$data);
``` 

to get data with method GET
```php
$Dynamic = new Dynamic();

$Dynamic->getData("API Name",$data);
``` 
to collect respones data 

```php
$Dynamic = new Dynamic();

$response = $Dynamic->getData("API Name",$data);

$response->collect();

``` 




 
 
## Authors

- [@mostafax2](https://github.com/mostafax2)


## Environment Variables

To run this project, you will need to add the following environment variables to your .env file

`DYNAMIC_DOMAIN`

`DYNAMIC_TOKEN`


[![MIT License](https://img.shields.io/badge/License-MIT-green.svg)](LICENSE)
 
 
## Tech Stack
 

**Server:** PHP, Laravel


 

## Support

For support, email mostafa.m.elbiar@gmail.com.

