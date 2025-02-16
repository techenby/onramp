<?php

namespace App\Policies;

use App\Models\Term;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class TermPolicy
{
    use HandlesAuthorization;

    public function before($user)
    {
        return $user->isAtLeastEditor() ?: null;
    }

    /**
     * Determine whether the user can view any terms.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the term.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Term  $term
     * @return mixed
     */
    public function view(User $user, Term $term)
    {
        //
    }

    /**
     * Determine whether the user can create terms.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the term.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Term  $term
     * @return mixed
     */
    public function update(User $user, Term $term)
    {
        //
    }

    /**
     * Determine whether the user can delete the term.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Term  $term
     * @return mixed
     */
    public function delete(User $user, Term $term)
    {
        //
    }

    /**
     * Determine whether the user can restore the term.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Term  $term
     * @return mixed
     */
    public function restore(User $user, Term $term)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the term.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Term  $term
     * @return mixed
     */
    public function forceDelete(User $user, Term $term)
    {
        //
    }
}
