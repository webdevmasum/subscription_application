<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $plans = [
            ["name" => "starter", "stripe_plan_id" => "prod_S6Z3JZ4kGNpSMh", "stripe_price_id" => "price_1RCLvrGEF1Q9fsWzV2vXLRx9"],
            ["name" => "advanced", "stripe_plan_id" => "prod_S6Z6BqbKcE1hnU", "stripe_price_id" => "price_1RCLyaGEF1Q9fsWzp491hAUq"],
            ["name" => "premium", "stripe_plan_id" => "prod_S6Z74GFPcHnupD", "stripe_price_id" => "price_1RCLzNGEF1Q9fsWz6zBaWUUz"],
        ];
    }
}
