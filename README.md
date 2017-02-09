# Authcode
PHP string encrypt and decode function. From discuz.

## Installation & loading

Just add this line to your `composer.json` file:

```json
"wilon/authcode": "~5.2"
```

or

```sh
composer require wilon/authcode
```

## A Simple Example

```php
<?php
    use Wilon\Authcode;

    $key = 'IoUwe#(#FFFsfoaHFfa';
    echo $auth = Authcode::encode('String', $key), '<br>';
    echo $result = Authcode::decode($auth, $key), '<br>';
    echo $result2 = Authcode::decode($auth, 'otherKey'), '<br>';    # Can't get 'String'

    // Use expiry.
    echo $auth = Authcode::encode('String', $key, 60), '<br>';
    sleep(61);
    echo $result = Authcode::decode($auth, $key), '<br>';    # Can't get 'String'


```
