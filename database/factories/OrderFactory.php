<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $user=User::inRandomOrder()->first();
        if(!$user)
        {
            $user=User::factory()->create();
        }
        $product=Product::inRandomOrder()->first();
        if(!$product)
        {
            $product=Product::factory()->create();
        }
        return [

           'user_id'=>$user->id,
           'product_id'=>$product->id,
           'product_name'=>$product->product_name,
            'price'=>fake()->numberBetween(100,1000),

        ];
    }
}
