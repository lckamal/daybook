<?php

class DatabaseSeeder extends Seeder {

    public function run()
    {
        Eloquent::unguard();

        // Add calls to Seeders here
        $this->call('UsersTableSeeder');
        $this->call('PostsTableSeeder');
        $this->call('CommentsTableSeeder');
        $this->call('RolesTableSeeder');
        $this->call('PermissionsTableSeeder');
<<<<<<< HEAD
    	$this->call('NavigationGroupsTableSeeder');
        $this->call('AddPermissionsTableSeeder');
	}
=======
    }
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be

}