<?php

namespace Skynettechnologies\Allinoneaccessibility\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class AllinoneaccessibilityTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('skynettechnologies_allinoneaccessibility_allinoneaccessibilitys')->insert([
            [
                'id'      => '1',
                'name'    => 'Renfos Technologies Pvt. Ltd.',
                'phone'   => '+91 484-4011 609',
                'mobile'  => '+91 98470 32299',
                'email'   => 'info@lavalite.org',
                'website' => 'https://lavalite.org',
                'details' => 'INFOPARK TBC
                 JNI Stadium Complex, Kaloor
                 Kochi, Kerala,
                 India, Pin - 682017',
                'address' => 'INFOPARK TBC, JNI Stadium Complex',
                'street'  => 'Kaloor',
                'city'    => 'Kochi',
                'state'   => 'Kerala',
                'country' => 'India',
                'zip'     => '682017',
                'lat'     => '9.998856897222739',
                'lng'     => '76.30494149737547',
                'status'  => 'Active',
                'slug'    => 'default',
            ],
        ]);

        DB::table('permissions')->insert([
            [
                'slug'      => 'skynettechnologies.allinoneaccessibility.allinoneaccessibility.view',
                'name'      => 'View Allinoneaccessibility',
            ],
            [
                'slug'      => 'skynettechnologies.allinoneaccessibility.allinoneaccessibility.create',
                'name'      => 'Create Allinoneaccessibility',
            ],
            [
                'slug'      => 'skynettechnologies.allinoneaccessibility.allinoneaccessibility.edit',
                'name'      => 'Update Allinoneaccessibility',
            ],
            [
                'slug'      => 'skynettechnologies.allinoneaccessibility.allinoneaccessibility.delete',
                'name'      => 'Delete Allinoneaccessibility',
            ],


                    ]);

        DB::table('menus')->insert([
            // Admin menu
            [
                'parent_id'   => 1,
                'key'         => null,
                'url'         => 'admin/allinoneaccessibility/allinoneaccessibility',
                'name'        => 'All in One Accessibility',
                'description' => null,
                'icon'        => 'fa-solid fa-universal-access',
                'target'      => null,
                'order'       => 190,
                'status'      => 1,
            ],
            // User menu.
            [
                'parent_id'   => 2,
                'key'         => null,
                'url'         => 'user/allinoneaccessibility/allinoneaccessibility',
                'name'        => 'All in One Accessibility',
                'description' => null,
                'icon'        => 'fa-solid fa-universal-access',
                'target'      => null,
                'order'       => 190,
                'status'      => 1,
            ],
            // Public menu.
            [
                'parent_id'   => 3,
                'key'         => null,
                'url'         => 'allinoneaccessibility',
                'name'        => 'All in One Accessibility',
                'description' => null,
                'icon'        => null,
                'target'      => null,
                'order'       => 190,
                'status'      => 1,
            ],

        ]);

        DB::table('settings')->insert([
            // Uncomment  and edit this section for entering value to settings table.
            /*
            [
                'pacakge'   => 'Allinoneaccessibility',
                'module'    => 'Allinoneaccessibility',
                'user_type' => null,
                'user_id'   => null,
                'key'       => 'skynettechnologies.allinoneaccessibility.allinoneaccessibility.key',
                'name'      => 'Some name',
                'value'     => 'Some value',
                'type'      => 'Default',
                'control'   => 'text',
            ],
            */
        ]);
    }
}
