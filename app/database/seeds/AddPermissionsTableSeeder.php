<?php

class AddPermissionsTableSeeder extends Seeder {

    public function run()
    {
        $permissions = array(
            
            array(
                'name'      => 'manage_pages',
                'display_name'      => 'manage pages'
            ),
            array(
                'name'      => 'manage_navigation',
                'display_name'      => 'manage navigaiton'
            ),
            array(
                'name'      => 'manage_navigation_groups',
                'display_name'      => 'manage navigation group'
            ),
        );

        DB::table('permissions')->insert( $permissions );

    }

}
