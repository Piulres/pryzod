<?php

use Illuminate\Database\Seeder;

class PermissionSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            
            ['id' => 1, 'title' => 'user_management_access',],
            ['id' => 2, 'title' => 'permission_access',],
            ['id' => 3, 'title' => 'permission_create',],
            ['id' => 4, 'title' => 'permission_edit',],
            ['id' => 5, 'title' => 'permission_view',],
            ['id' => 6, 'title' => 'permission_delete',],
            ['id' => 7, 'title' => 'role_access',],
            ['id' => 8, 'title' => 'role_create',],
            ['id' => 9, 'title' => 'role_edit',],
            ['id' => 10, 'title' => 'role_view',],
            ['id' => 11, 'title' => 'role_delete',],
            ['id' => 12, 'title' => 'user_access',],
            ['id' => 13, 'title' => 'user_create',],
            ['id' => 14, 'title' => 'user_edit',],
            ['id' => 15, 'title' => 'user_view',],
            ['id' => 16, 'title' => 'user_delete',],
            ['id' => 17, 'title' => 'book_access',],
            ['id' => 18, 'title' => 'user_action_access',],
            ['id' => 19, 'title' => 'user_action_create',],
            ['id' => 20, 'title' => 'user_action_edit',],
            ['id' => 21, 'title' => 'user_action_view',],
            ['id' => 22, 'title' => 'user_action_delete',],
            ['id' => 23, 'title' => 'internal_notification_access',],
            ['id' => 24, 'title' => 'internal_notification_create',],
            ['id' => 25, 'title' => 'internal_notification_edit',],
            ['id' => 26, 'title' => 'internal_notification_view',],
            ['id' => 27, 'title' => 'internal_notification_delete',],
            ['id' => 28, 'title' => 'category_access',],
            ['id' => 29, 'title' => 'category_create',],
            ['id' => 30, 'title' => 'category_edit',],
            ['id' => 31, 'title' => 'category_view',],
            ['id' => 32, 'title' => 'category_delete',],
            ['id' => 33, 'title' => 'book_create',],
            ['id' => 34, 'title' => 'book_edit',],
            ['id' => 35, 'title' => 'book_view',],
            ['id' => 36, 'title' => 'book_delete',],

        ];

        foreach ($items as $item) {
            \App\Permission::create($item);
        }
    }
}
