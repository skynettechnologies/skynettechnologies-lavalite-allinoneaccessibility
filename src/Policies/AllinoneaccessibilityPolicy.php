<?php

namespace Skynettechnologies\Allinoneaccessibility\Policies;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Skynettechnologies\Allinoneaccessibility\Models\Allinoneaccessibility;

class AllinoneaccessibilityPolicy
{


    /**
     * Determine if the given user can view the allinoneaccessibility.
     *
     * @param Authenticatable $user
     * @param Allinoneaccessibility $allinoneaccessibility
     *
     * @return bool
     */
    public function view(Authenticatable $user, Allinoneaccessibility $allinoneaccessibility)
    {
        if ($user->canDo('allinoneaccessibility.allinoneaccessibility.view') && $user->isAdmin()) {
            return true;
        }

        return $allinoneaccessibility->user_id == user_id() && $allinoneaccessibility->user_type == user_type();
    }

    /**
     * Determine if the given user can create a allinoneaccessibility.
     *
     * @param Authenticatable $user
     *
     * @return bool
     */
    public function create(Authenticatable $user)
    {
        return  $user->canDo('allinoneaccessibility.allinoneaccessibility.create');
    }

    /**
     * Determine if the given user can update the given allinoneaccessibility.
     *
     * @param Authenticatable $user
     * @param Allinoneaccessibility $allinoneaccessibility
     *
     * @return bool
     */
    public function update(Authenticatable $user, Allinoneaccessibility $allinoneaccessibility)
    {
        if ($user->canDo('allinoneaccessibility.allinoneaccessibility.edit') && $user->isAdmin()) {
            return true;
        }

        return $allinoneaccessibility->user_id == user_id() && $allinoneaccessibility->user_type == user_type();
    }

    /**
     * Determine if the given user can delete the given allinoneaccessibility.
     *
     * @param Authenticatable $user
     *
     * @return bool
     */
    public function destroy(Authenticatable $user, Allinoneaccessibility $allinoneaccessibility)
    {
        return $allinoneaccessibility->user_id == user_id() && $allinoneaccessibility->user_type == user_type();
    }

    /**
     * Determine if the given user can verify the given allinoneaccessibility.
     *
     * @param Authenticatable $user
     *
     * @return bool
     */
    public function verify(Authenticatable $user, Allinoneaccessibility $allinoneaccessibility)
    {
        if ($user->canDo('allinoneaccessibility.allinoneaccessibility.verify')) {
            return true;
        }

        return false;
    }

    /**
     * Determine if the given user can approve the given allinoneaccessibility.
     *
     * @param Authenticatable $user
     *
     * @return bool
     */
    public function approve(Authenticatable $user, Allinoneaccessibility $allinoneaccessibility)
    {
        if ($user->canDo('allinoneaccessibility.allinoneaccessibility.approve')) {
            return true;
        }

        return false;
    }

    /**
     * Determine if the user can perform a given action ve.
     *
     * @param [type] $user    [description]
     * @param [type] $ability [description]
     *
     * @return [type] [description]
     */
    public function before($user, $ability)
    {
        if ($user->isSuperuser()) {
            return true;
        }
    }
}
