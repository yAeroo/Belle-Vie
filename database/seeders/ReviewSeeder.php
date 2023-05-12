<?php

namespace Database\Seeders;

use App\Models\Review;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Reseña #1
        $review1 = new Review();
        $review1->user_id = '3';
        $review1->place_id = '1';
        $review1->review = 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nemo quam voluptate ullam repudiandae laudantium pariatur officiis dolore sequi autem quaerat! Saepe nisi quae obcaecati dolore et minus blanditiis neque delectus?';
        $review1->save();

        // Reseña #2
        $review2 = new Review();
        $review2->user_id = '4';
        $review2->place_id = '2';
        $review2->review = 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nemo quam voluptate ullam repudiandae laudantium pariatur officiis dolore sequi autem quaerat! Saepe nisi quae obcaecati dolore et minus blanditiis neque delectus?';
        $review2->save();

        // Reseña #3
        $review3 = new Review();
        $review3->user_id = '4';
        $review3->place_id = '6';
        $review3->review = 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nemo quam voluptate ullam repudiandae laudantium pariatur officiis dolore sequi autem quaerat! Saepe nisi quae obcaecati dolore et minus blanditiis neque delectus?';
        $review3->save();

        // Reseña #4
        $review4 = new Review();
        $review4->user_id = '3';
        $review4->place_id = '6';
        $review4->review = 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nemo quam voluptate ullam repudiandae laudantium pariatur officiis dolore sequi autem quaerat! Saepe nisi quae obcaecati dolore et minus blanditiis neque delectus?';
        $review4->save();

        // Reseña #5
        $review5 = new Review();
        $review5->user_id = '4';
        $review5->place_id = '1';
        $review5->review = 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nemo quam voluptate ullam repudiandae laudantium pariatur officiis dolore sequi autem quaerat! Saepe nisi quae obcaecati dolore et minus blanditiis neque delectus?';
        $review5->save();
    }
}
