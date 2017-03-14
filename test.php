<?php

use Encryption\Authcode;

require __DIR__ . '/Authcode.php';

$key = 'IoUwe#(#FFFsfoaHFfa';

// useage
echo $auth = Authcode::encode('String', $key), "\n";    # A cryptographic string
echo $result = Authcode::decode($auth, $key), "\n";    # 'String'

// Only correct key can decode
$otherKey = 'xxxxx';
echo $result2 = Authcode::decode($auth, $otherKey), "\n";    # Can't get 'String'

// Use expiry.
echo $auth = Authcode::encode('String', $key, 10), "\n";
sleep(11);
echo $result = Authcode::decode($auth, $key), "\n";    # Can't get 'String'

// Encode remain equal signs
// ** python without '=' base64.b64decode() can't decode
echo $auth = Encryption\Authcode::encodeRemainEqualsigns('String', $key), "\n";
echo $result = Encryption\Authcode::decode($auth, $key), "\n";