<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //permission for genrate_surat
        Permission::create(['name' => 'genrate_surat.index']);
        Permission::create(['name' => 'genrate_surat.create']);
        Permission::create(['name' => 'genrate_surat.edit']);
        Permission::create(['name' => 'genrate_surat.delete']);

        //permission for surat_keluar
        Permission::create(['name' => 'surat_keluar.index']);
        Permission::create(['name' => 'surat_keluar.create']);
        Permission::create(['name' => 'surat_keluar.edit']);
        Permission::create(['name' => 'surat_keluar.delete']);

        //permission for surat_masuk
        Permission::create(['name' => 'surat_masuk.index']);
        Permission::create(['name' => 'surat_masuk.create']);
        Permission::create(['name' => 'surat_masuk.edit']);
        Permission::create(['name' => 'surat_masuk.delete']);

        //permission for murobi
        Permission::create(['name' => 'murobi.index']);
        Permission::create(['name' => 'murobi.create']);
        Permission::create(['name' => 'murobi.edit']);
        Permission::create(['name' => 'murobi.delete']);

        //permission for kader
        Permission::create(['name' => 'kader.index']);
        Permission::create(['name' => 'kader.create']);
        Permission::create(['name' => 'kader.edit']);
        Permission::create(['name' => 'kader.delete']);
        Permission::create(['name' => 'kader.show']);

        //permission for posts
        Permission::create(['name' => 'posts.index']);
        Permission::create(['name' => 'posts.create']);
        Permission::create(['name' => 'posts.edit']);
        Permission::create(['name' => 'posts.delete']);

        //permission for categories
        Permission::create(['name' => 'categories.index']);
        Permission::create(['name' => 'categories.create']);
        Permission::create(['name' => 'categories.edit']);
        Permission::create(['name' => 'categories.delete']);

        //permission for events
        Permission::create(['name' => 'events.index']);
        Permission::create(['name' => 'events.create']);
        Permission::create(['name' => 'events.edit']);
        Permission::create(['name' => 'events.delete']);

        //permission for galeri
        Permission::create(['name' => 'galeri.index']);
        Permission::create(['name' => 'galeri.create']);
        Permission::create(['name' => 'galeri.delete']);

        //permission for videos
        Permission::create(['name' => 'videos.index']);
        Permission::create(['name' => 'videos.create']);
        Permission::create(['name' => 'videos.edit']);
        Permission::create(['name' => 'videos.delete']);

        //permission for users
        Permission::create(['name' => 'users.index']);
        Permission::create(['name' => 'users.create']);
        Permission::create(['name' => 'users.edit']);
        Permission::create(['name' => 'users.delete']);

        //permission for roles
        Permission::create(['name' => 'roles.index']);
        Permission::create(['name' => 'roles.create']);
        Permission::create(['name' => 'roles.edit']);
        Permission::create(['name' => 'roles.delete']);

        //permission for permissions
        Permission::create(['name' => 'permissions.index']);
    }
}
