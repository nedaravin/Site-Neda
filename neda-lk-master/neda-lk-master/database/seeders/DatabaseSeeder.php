<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        $site_administrator = (new \Spatie\Permission\Models\Role())->create([
            'name' => 'Site Administrator',
            'guard_name' => 'web'
        ]);

        foreach ([
                     'User',
                     'Gallery',
                     'Page',
                     'News',
                     'Video',
                     'Event',
                     'Document',
                     'Menu'
                 ] as $model) {

            $permission_m = (new \Spatie\Permission\Models\Permission())->create([
                'name' => ucfirst($model) . ' Module Access',
                'guard_name' => 'web'
            ]);

            $permission_m->roles()->sync([$site_administrator->id]);

            $permission_n = (new \Spatie\Permission\Models\Permission())->create([
                'name' => 'Create ' . ucfirst($model),
                'guard_name' => 'web'
            ]);

            $permission_n->roles()->sync([$site_administrator->id]);

            $permission_b = (new \Spatie\Permission\Models\Permission())->create([
                'name' => 'Read ' . ucfirst($model),
                'guard_name' => 'web'
            ]);

            $permission_b->roles()->sync([$site_administrator->id]);

            $permission_v = (new \Spatie\Permission\Models\Permission())->create([
                'name' => 'Update ' . ucfirst($model),
                'guard_name' => 'web'
            ]);

            $permission_v->roles()->sync([$site_administrator->id]);

            $permission_c = (new \Spatie\Permission\Models\Permission())->create([
                'name' => 'Delete ' . ucfirst($model),
                'guard_name' => 'web'
            ]);

            $permission_c->roles()->sync([$site_administrator->id]);

            $permission_x = (new \Spatie\Permission\Models\Permission())->create([
                'name' => 'Restore ' . ucfirst($model),
                'guard_name' => 'web'
            ]);

            $permission_x->roles()->sync([$site_administrator->id]);

            $permission_z = (new \Spatie\Permission\Models\Permission())->create([
                'name' => 'Force Delete ' . ucfirst($model),
                'guard_name' => 'web'
            ]);

            $permission_z->roles()->sync([$site_administrator->id]);

        }

        $admin = (new \App\Models\Auth\User())->create([
            'name' => 'Adlux Admin',
            'email' => 'admin@adlux.asia',
            'email_verified_at' => now(),
            'password' => Hash::make('admin123$'),
            'remember_token' => Str::random(10),
        ]);

        $admin->roles()->attach($site_administrator->id);

    }
}
