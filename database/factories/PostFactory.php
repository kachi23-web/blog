<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' =>$this->faker-> jobTitle(),
            'content' => $this-> faker-> paragraph(), 
            'image_url' =>$this-> faker-> url(), 
            'userId' => $this-> faker-> randomDigitNotNull(),
            //'name'=> $this->faker->Country, 
        ];
    }
}
