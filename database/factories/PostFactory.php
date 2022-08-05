<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $paragraphs =  $this->faker->paragraphs(rand(2, 6));
        $title = $this->faker->realText(50);
        $category = $this->faker->randomElement(['Cat1','Cat2','Cat3']);
        $post = "<h1>{$title}</h1>";
            foreach ($paragraphs as $para) {
                $post .= "<p>{$para}</p>";
            }
        $img = $this->faker->imageUrl($width = 640, $height = 480); // 'http://lorempixel.com/640/480/'
        $sentence = $this->faker->sentence($nbWords = 6, $variableNbWords = true)  // 'Sit vitae voluptas sint non voluptates.'
        $text = $this->faker->text($maxNbChars = 200)                          // 'Fuga totam reiciendis qui architecto fugiat nemo. Consequatur recusandae qui cupiditate eos quod.'
        $number = $this->faker->randomNumber(4);
        $name = $this->faker->name($gender = null|'male'|'female');      // 'Dr. Zane Stroman'
        $state = $this->faker->state;                              // 'NewMexico'
        $city = $this->faker->city;
        $postcode = $this->faker->postcode;
        $address = $this->faker->address;
        $country = $this->faker->country;
        $jobTitle   = $this->faker->jobTitle;              // 'Cashier'
        $dob = $this->faker->date($format = 'Y-m-d', $max = 'now'); // '1979-06-09'
        $slug = $this->faker->slug($title);

        return [
            'name' => $this->faker->name,
            'phone' => $this->faker->phoneNumber,
            'salary' => $this->faker->numberBetween(10000, 200000),
            'department' => $this->faker->randomElement(array('accounting', 'marketing', 'sales')),
        ];
    }
}
