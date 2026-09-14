<?php

namespace App\Controllers;

class Customers extends BaseController
{
    public function index()
    {
        $data['customers'] = [
            [
                'full_name' => 'Juan Dela Cruz',
                'email' => 'juan.delacruz@example.com',
                'phone' => '09123456789'
            ],
            [
                'full_name' => 'Maria Santos',
                'email' => 'maria.santos@example.com',
                'phone' => '09134567890'
            ],
            [
                'full_name' => 'Carlo Reyes',
                'email' => 'carlo.reyes@example.com',
                'phone' => '09145678901'
            ],
            [
                'full_name' => 'Angela Garcia',
                'email' => 'angela.garcia@example.com',
                'phone' => '09156789012'
            ],
            [
                'full_name' => 'Paolo Mendoza',
                'email' => 'paolo.mendoza@example.com',
                'phone' => '09167890123'
            ]
        ];

        return view('customers', $data);
    }
}