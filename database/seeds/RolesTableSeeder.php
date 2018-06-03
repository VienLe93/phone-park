<?php

use Illuminate\Database\Seeder;
use TCG\Voyager\Models\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     */
    public function run()
    {
        $role = Role::firstOrNew(['name' => 'admin']);
        if (!$role->exists) {
            $role->fill([
                    'display_name' => __('voyager::seeders.roles.admin'),
                ])->save();
        }

        $role = Role::firstOrNew(['name' => 'staff']);
        if (!$role->exists) {
            $role->fill([
                    'display_name' => 'Staff',
                ])->save();
        }

        $role = Role::firstOrNew(['name' => 'agency']);
        if (!$role->exists) {
            $role->fill([
                    'display_name' => 'Agency',
                ])->save();
        }

        $role = Role::firstOrNew(['name' => 'buyer']);
        if (!$role->exists) {
            $role->fill([
                    'display_name' => 'Buyer,
                ])->save();
        }
    }
}
