<?php

namespace App\Policies;

use App\Models\Stock;
use Dcs\Admin\Models\SysUser;
use Illuminate\Auth\Access\HandlesAuthorization;

class StockPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \Dcs\Admin\Models\SysUser  $sysUser
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(SysUser $sysUser)
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \Dcs\Admin\Models\SysUser  $sysUser
     * @param  \App\Models\Stock  $stock
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(SysUser $sysUser, Stock $stock)
    {
        //
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \Dcs\Admin\Models\SysUser  $sysUser
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(SysUser $sysUser)
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \Dcs\Admin\Models\SysUser  $sysUser
     * @param  \App\Models\Stock  $stock
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(SysUser $sysUser, Stock $stock)
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \Dcs\Admin\Models\SysUser  $sysUser
     * @param  \App\Models\Stock  $stock
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(SysUser $sysUser, Stock $stock)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \Dcs\Admin\Models\SysUser  $sysUser
     * @param  \App\Models\Stock  $stock
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(SysUser $sysUser, Stock $stock)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \Dcs\Admin\Models\SysUser  $sysUser
     * @param  \App\Models\Stock  $stock
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(SysUser $sysUser, Stock $stock)
    {
        //
    }
}
