<?php

namespace Database\Seeders;

use App\Models\Payment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PaymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $payments = [
            "to'langan",
            "to'liq emas",
            "to'lanmagan"
        ];

        foreach ($payments as $payment) {
            Payment::create([
                'status' => $payment
            ]);
        };
    }
}
