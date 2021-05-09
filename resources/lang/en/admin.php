<?php

return [
    'admin-user' => [
        'title' => 'Users',

        'actions' => [
            'index' => 'Users',
            'create' => 'New User',
            'edit' => 'Edit :name',
            'edit_profile' => 'Edit Profile',
            'edit_password' => 'Edit Password',
        ],

        'columns' => [
            'id' => 'ID',
            'last_login_at' => 'Last login',
            'activated' => 'Activated',
            'email' => 'Email',
            'first_name' => 'First name',
            'forbidden' => 'Forbidden',
            'language' => 'Language',
            'last_name' => 'Last name',
            'password' => 'Password',
            'password_repeat' => 'Password Confirmation',
                
            //Belongs to many relations
            'roles' => 'Roles',
                
        ],
    ],

    'permission' => [
        'title' => 'Permissions',

        'actions' => [
            'index' => 'Permissions',
            'create' => 'New Permission',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'guard_name' => 'Guard name',
            'name' => 'Name',
            
        ],
    ],

    'role' => [
        'title' => 'Roles',

        'actions' => [
            'index' => 'Roles',
            'create' => 'New Role',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'guard_name' => 'Guard name',
            'name' => 'Name',
            
        ],
    ],

    'role-has-permission' => [
        'title' => 'Role Has Permissions',

        'actions' => [
            'index' => 'Role Has Permissions',
            'create' => 'New Role Has Permission',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'permission_id' => 'Permission',
            'role_id' => 'Role',
            
        ],
    ],

    // Do not delete me :) I'm used for auto-generation
];