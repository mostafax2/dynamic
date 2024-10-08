

```markdown
# Dynamic Package

Laravel service for connecting with Dynamic API.

To install the package via Composer, run the following command:

```bash
composer require mostafax/dynamic
```

To publish the package configuration, run:

```bash
php artisan vendor:publish
```

Add the following environment variables to your `.env` file:

```env
DYNAMIC_DOMAIN=http://domain
DYNAMIC_TOKEN=*******************************
DYNAMIC_TIMEOUT=60
DYNAMIC_TOKEN_STATUS='auto' or 'static'
```

If you need to generate a token with every request, add these variables as well:

```env
TENANT_ID=''
CLIENT_ID=''
CLIENT_SECRET=''
RESOURCE=''
GRANT_TYPE=''
```

To use the package, include the namespace:

```php
use Mostafax\Dynamic\Dynamic;
```

Handle the request data in the form of an array:

```php
$data = [
    // request parameters
];
```

To send data with a POST request:

```php
$dynamic = new Dynamic();
$dynamic->postData("API Name", $data);
```

To retrieve data with a GET request:

```php
$dynamic = new Dynamic();
$dynamic->getData("API Name", $data);
```

To collect the response data:

```php
$dynamic = new Dynamic();
$response = $dynamic->getData("API Name", $data);

$response->collect();
$response->json();
$response->body();
```

For any further support, email [mostafa.m.elbiar@gmail.com](mailto:mostafa.m.elbiar@gmail.com).
```
