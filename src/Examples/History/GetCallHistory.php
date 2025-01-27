<?php

/**
 * @method GetCallHistory Gets the call history.
 */

// Path to your autoload.php
require_once '/path/to/vendor/autoload.php';

use Voximplant\VoximplantApi;
use Voximplant\Resources\Params\GetCallHistoryParams;

/**
 * In order to use Voximplant PHP SDK, you need the following:
 * 1. A developer account. If you don't have one, sign up here https://voximplant.com/sign-up/.
 * 2. A private API key. To create it, call the [CreateKey] method. Save the result value in a file.
 */

// Create API Object
$voxApi = new VoximplantApi('path/to/private/api/key.json');

/**
 * @param array $params (See below)
 * from_date - The from date in the selected timezone in 24-h format: YYYY-MM-DD HH:mm:ss
 * to_date - The to date in the selected timezone in 24-h format: YYYY-MM-DD HH:mm:ss
 * timezone - The selected timezone or the 'auto' value (the account location)
 * call_session_history_id - The call session history ID list. The sessions IDs can be accessed in JS scenario via the sessionID property of the AppEvents.Started event
 * application_id - The application ID
 * application_name - The application name, can be used instead of application_id
 * user_id - The user ID list. If it's specified, the output will contain the calls from the listed users only
 * rule_name - The rule name to filter. Will be applied only if you set application_id or application_name
 * remote_number - The remote number list
 * local_number - The local number list
 * call_session_history_custom_data - The custom_data to filter sessions
 * with_calls - Set true to get the bound calls
 * with_records - Set true to get the bound records
 * with_other_resources - Set true to get other resources usage (see [ResourceUsageType])
 * child_account_id - The child account ID list. Use the 'all' value to select all child accounts
 * children_calls_only - Set true to get the children account calls only
 * with_header - Set false to get a CSV file without the column names if the output=csv
 * desc_order - Set true to get records in the descent order
 * with_total_count - Set false to omit the 'total_count' and increase performance
 * count - The number of returning records. In the synchronous mode, the maximum value is 1000
 * offset - The number of records to skip in the output with a maximum value of 10000
 * output - The output format. The following values available: json, csv
 * is_async - Set true to get records in the asynchronous mode (for csv output only). Use this mode to download large amounts of data. See the [GetHistoryReports], [DownloadHistoryReport] functions for details
 */
$params = new GetCallHistoryParams();

$params->from_date = '2020-02-25 00:00:00';
$params->to_date = '2020-02-26 00:00:00';
$params->count = 1;
$params->timezone = 'Etc/GMT';
$params->with_calls = true;
$params->with_records = true;

// Get the first call session history record with calls and record URLs from the 2020-02-25 00:00:00 UTC to the 2020-02-26 00:00:00 UTC.
$result = $voxApi->History->GetCallHistory($params);

// Show result
var_dump($result);
