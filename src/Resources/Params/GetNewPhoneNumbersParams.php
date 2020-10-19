<?php

namespace Voximplant\Resources\Params;

class GetNewPhoneNumbersParams
{
    /** @var string The country code. */
    public $country_code;

    /** @var string The phone category name. See the GetPhoneNumberCategories function. */
    public $phone_category_name;

    /** @var string The country state. See the GetPhoneNumberCategories and GetPhoneNumberCountryStates functions. */
    public $country_state;

    /** @var number The phone region ID. See the [GetPhoneNumberRegions] method. */
    public $phone_region_id;

    /** @var number The max returning record count. */
    public $count;

    /** @var number The first N records will be skipped in the output. */
    public $offset;
}
