<?php

namespace Voximplant\Resources\Params;

class AddAdminRoleParams
{
    /** @var string The admin role name. The length must be less than 50 */
    public $admin_role_name;

    /** @var boolean The admin role enable flag. If false the allowed and denied entries have no affect */
    public $admin_role_active;

    /** @var intlist The admin role ID list separated by the ';' symbol. Use the 'all' value to select all admin roles. The list specifies the roles from which the new role automatically copies all permissions (allowed_entries and denied_entries) */
    public $like_admin_role_id;

    /** @var stringlist The admin role name that can be used instead of like_admin_role_id. The name specifies a role from which the new role automatically copies all permissions (allowed_entries and denied_entries) */
    public $like_admin_role_name;

    /** @var stringlist The list of allowed access entries separated by the ';' symbol (the API function names) */
    public $allowed_entries;

    /** @var stringlist The list of denied access entries separated by the ';' symbol (the API function names) */
    public $denied_entries;
}
