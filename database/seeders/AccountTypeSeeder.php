<?php

namespace Database\Seeders;

use App\Models\AccountType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AccountTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $types = [
            [
                'name' => 'General',
                'code' => 'general',
                'description' => 'General Accounts',
                'active' => 1
            ],
            [
                'name' => 'Cash',
                'code' => 'cash',
                'description' => 'Cash Accounts',
                'active' => 1
            ],
            [
                'name' => 'Mobile Money',
                'code' => 'momo',
                'description' => 'Mobile Money Accounts',
                'active' => 1
            ],
            [
                'name' => 'Savings Account',
                'code' => 'savings-account',
                'description' => 'Savings Accounts',
                'active' => 1
            ],
            [
                'name' => 'Current Account',
                'code' => 'current-account',
                'description' => 'Current Accounts',
                'active' => 1
            ],
            [
                'name' => 'Investment',
                'code' => 'investment',
                'description' => 'Investment Accounts',
                'active' => 1
            ],
            [
                'name' => 'Insurance',
                'code' => 'insurance',
                'description' => 'Insurance Accounts',
                'active' => 1
            ],
            [
                'name' => 'Loan',
                'code' => 'loan',
                'description' => 'Loan Accounts',
                'active' => 1
            ],
            [
                'name' => 'Credit Card',
                'code' => 'credit-card',
                'description' => 'Credit Card Accounts',
                'active' => 1
            ]
        ];

        collect($types)->each(function ($type) {
            AccountType::firstOrCreate(
                [
                    'code' => $type['code']
                ],
                $type
            );
        });
    }
}
