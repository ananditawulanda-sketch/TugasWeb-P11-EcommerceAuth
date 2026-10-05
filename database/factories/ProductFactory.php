<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
   public function definition(): array
{
    return [
        'category_id' => \App\Models\Category::factory(),
        'name' => fake()->randomElement([
            'Laptop ASUS VivoBook',
            'Laptop Acer Aspire 5',
            'Smartphone Samsung Galaxy',
            'Smartphone Xiaomi Redmi',
            'Headset Bluetooth',
            'Keyboard Mechanical',
            'Mouse Wireless',
            'Monitor LED 24 Inch',
            'Tas Laptop',
            'Sepatu Sneakers',
            'Kaos Oversize',
            'Jaket Hoodie',
            'Kopi Arabica',
            'Keripik Kentang',
            'Cokelat Premium',
            'Botol Minum Stainless',
            'Jam Tangan Digital',
            'Dompet Kulit',
            'Power Bank',
            'Flashdisk 64GB',
        ]),
            'description' => fake()->paragraph(),
            'price' => fake()->numberBetween(50000, 15000000),
            'stock' => fake()->numberBetween(0, 100),
            'image' => null,
    ];
}
}
