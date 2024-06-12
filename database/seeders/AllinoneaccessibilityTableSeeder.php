<?php

namespace Skynettechnologies\Allinoneaccessibility\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class AllinoneaccessibilityTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('skynettechnologies_allinoneaccessibility_allinoneaccessibility')->insert([
            [
                'id'      => '1',
                'name'    => 'Skynet Technologies USA LLC',
                'phone'   => '(810)-358-8040',
                'mobile'  => '+91 98470 32299',
                'email'   => 'hello@skynettechnologies.com',
                'website' => 'https://www.skynettechnologies.com/',
                'details' => '3265 Summitrun Drive, Independence, KY, 41051,
                India, Pin - 682017',
                'address' => '3265 Summitrun Drive, Independence, KY, 41051',
                'street'  => 'Summitrun',
                'city'    => 'Jamnagar',
                'state'   => 'Gujarat',
                'country' => 'India',
                'zip'     => '361008',
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
