<?php

namespace App\Controllers;

class Users extends BaseController
{
    public function index()
    {
        $data['users'] = [
            [
                'username' => 'admin01',
                'full_name' => 'Samantha Esguerra',
                'role' => 'Administrator'
            ],
            [
                'username' => 'cashier01',
                'full_name' => 'Nicole Santos',
                'role' => 'Cashier'
            ],
            [
                'username' => 'cashier02',
                'full_name' => 'James Cruz',
                'role' => 'Cashier'
            ],
            [
                'username' => 'staff01',
                'full_name' => 'Anne Reyes',
                'role' => 'Staff'
            ],
            [
                'username' => 'manager01',
                'full_name' => 'Mark Garcia',
                'role' => 'Manager'
            ]
        ];

        return view('users', $data);
    }
}