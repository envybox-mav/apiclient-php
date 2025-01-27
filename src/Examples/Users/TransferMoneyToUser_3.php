<?php

/**
 * @method TransferMoneyToUser Transfer the account's money to the user or transfer the user's money to the account if the money amount is negative.
 */

// Path to your autoload.php
require_once '/path/to/vendor/autoload.php';

use Voximplant\VoximplantApi;
use Voximplant\Resources\Params\TransferMoneyToUserParams;

/**
 * In order to use Voximplant PHP SDK, you need the following:
 * 1. A developer account. If you don't have one, sign up here https://voximplant.com/sign-up/.
 * 2. A private API key. To create it, call the [CreateKey] method. Save the result value in a file.
 */

// Create API Object
$voxApi = new VoximplantApi('path/to/private/api/key.json');

/**
 * @param array $params (See below)
 * user_id - The user ID list. Use the 'all' value to select all users
 * user_name - The user name list that can be used instead of user_id
 * amount - The money amount, $. The absolute amount value must be equal or greater than 0.01
 * application_id - The application ID. It is required if the user_name is specified
 * application_name - The application name that can be used instead of application_id
 * currency - The amount currency. Examples: RUR, EUR, USD
 * strict_mode - Returns error if strict_mode is true and a user or the account hasn't enough money
 * user_transaction_description - The user transaction description
 * account_transaction_description - The account transaction description. The following macro available: ${user_id}, ${user_name}
 */
$params = new TransferMoneyToUserParams();

$params->user_id = 1;
$params->amount = -10000000.0;
$params->strict_mode = false;

// Transfer the all money from the user 1 to the parent account.
$result = $voxApi->Users->TransferMoneyToUser($params);

// Show result
var_dump($result);
