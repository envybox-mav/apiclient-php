<?php

/**
 * @method AddSkill Adds a new ACD operator skill.
 */

// Path to your autoload.php
require_once '/path/to/vendor/autoload.php';

use Voximplant\VoximplantApi;
use Voximplant\Resources\Params\AddSkillParams;

/**
 * In order to use Voximplant PHP SDK, you need the following:
 * 1. A developer account. If you don't have one, sign up here https://voximplant.com/sign-up/.
 * 2. A private API key. To create it, call the [CreateKey] method. Save the result value in a file.
 */

// Create API Object
$voxApi = new VoximplantApi('path/to/private/api/key.json');

/**
 * @param array $params (See below)
 * skill_name - The ACD operator skill name. The length must be less than 512
 */
$params = new AddSkillParams();

$params->skill_name = 'English';

// Add a new skill.
$result = $voxApi->Skills->AddSkill($params);

// Show result
var_dump($result);
