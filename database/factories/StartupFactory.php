<?php

namespace Database\Factories;
use App\Models\User;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Startup>
 */
class StartupFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_id' => $this->faker->randomElement(User::where('role_id',2)->pluck('id')),
            'name' => $this->faker->company(),
            'logo' => $this->faker->imageUrl(100, 100, 'false', true),
            'website' => $this->faker->domainName(),
            'startup_category_id' => mt_rand(1,10),
            'country_id' => mt_rand(1,196),
            'description' => $this->faker->sentence(15),
            'document' => '{}',
            'video_teaser' => 'https://www.youtube.com/watch?v=eVU8eJpF06A',
            'product_name'  => $this->faker->word(),
            'product_detail'  => $this->faker->sentence(10),
            'target_market' => $this->faker->sentence(5),
            'photos' => '{}',
            'valuation' => mt_rand(10000,30000),
            'fundraising' => mt_rand(40000,60000),
            'fundraising_detail' => $this->faker->sentence(12),
            'about_founders'=> $this->faker->sentence(13),
            'startup_point' => mt_rand(70,90),
        ];
    }
}
