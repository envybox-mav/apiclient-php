<?php

/**
 * @method CreateKey Creates a public/private key pair. You can optionally specify one or more roles for the key, see [this article](https://voximplant.com/docs/introduction/introduction_to_voximplant/basic_concepts/service_accounts) for details.
 */

// Path to your autoload.php
require_once '/path/to/vendor/autoload.php';

use Voximplant\VoximplantApi;
use Voximplant\Resources\Params\CreateKeyParams;

/**
 * In order to use Voximplant PHP SDK, you need the following:
 * 1. A developer account. If you don't have one, sign up here https://voximplant.com/sign-up/.
 * 2. A private API key. To create it, call the [CreateKey] method. Save the result value in a file.
 */

// Create API Object
$voxApi = new VoximplantApi('path/to/private/api/key.json');

/**
 * @param array $params (See below)
 * description - The key's description
 * role_id - The role ID list. Use it instead of **role_name**, but not combine with
 * role_name - The role name list. Use it instead of **role_id**, but not combine with
 */
$params = new CreateKeyParams();


// Create a key pair.
$result = $voxApi->RoleSystem->CreateKey($params);

// Show result
var_dump($result);
