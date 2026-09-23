<?php

namespace Gegok12\HelloTeacher\Database\Seeders;

use Gegok12\HelloTeacher\Models\MotivationalQuote;
use Illuminate\Database\Seeder;

class MotivationalQuoteSeeder extends Seeder
{
    public function run(): void
    {
        $quotes = [
            // Teaching & Education
            [
                'quote' => 'Teaching is the one profession that creates all other professions.',
                'author' => 'Unknown',
                'category' => 'teaching',
            ],
            [
                'quote' => 'The art of teaching is the art of assisting discovery.',
                'author' => 'Mark Van Doren',
                'category' => 'teaching',
            ],
            [
                'quote' => 'A teacher takes a hand, opens a mind, and touches a heart.',
                'author' => 'Unknown',
                'category' => 'teaching',
            ],
            [
                'quote' => 'Teaching is not a profession; it\'s a passion. Without passion, you can\'t teach.',
                'author' => 'Anonymous',
                'category' => 'teaching',
            ],
            [
                'quote' => 'The best teachers are those who show you where to look but don\'t tell you what to see.',
                'author' => 'Alexandra K. Trenfor',
                'category' => 'teaching',
            ],
            [
                'quote' => 'Education is not the filling of a pail, but the lighting of a fire.',
                'author' => 'William Butler Yeats',
                'category' => 'teaching',
            ],
            [
                'quote' => 'A teacher is one who makes himself progressively unnecessary.',
                'author' => 'Thomas Carruthers',
                'category' => 'teaching',
            ],
            [
                'quote' => 'Teachers are expected to reach unattainable goals with inadequate tools. The miracle is that learning ever occurs at all.',
                'author' => 'Baudelaire',
                'category' => 'teaching',
            ],

            // Inspiration
            [
                'quote' => 'Your attitude determines your altitude.',
                'author' => 'Zig Ziglar',
                'category' => 'inspiration',
            ],
            [
                'quote' => 'The only way to do great work is to love what you do.',
                'author' => 'Steve Jobs',
                'category' => 'inspiration',
            ],
            [
                'quote' => 'Success is not final, failure is not fatal. It is the courage to continue that counts.',
                'author' => 'Winston Churchill',
                'category' => 'inspiration',
            ],
            [
                'quote' => 'Don\'t watch the clock; do what it does. Keep going.',
                'author' => 'Sam Levenson',
                'category' => 'inspiration',
            ],
            [
                'quote' => 'Believe you can and you\'re halfway there.',
                'author' => 'Theodore Roosevelt',
                'category' => 'inspiration',
            ],
            [
                'quote' => 'The future belongs to those who believe in the beauty of their dreams.',
                'author' => 'Eleanor Roosevelt',
                'category' => 'inspiration',
            ],

            // Motivation for Teachers
            [
                'quote' => 'Teaching is the one job that creates all jobs.',
                'author' => 'Unknown',
                'category' => 'motivation',
            ],
            [
                'quote' => 'A good teacher is like a candle - it consumes itself to light the way for others.',
                'author' => 'Mustafa Kemal Atatürk',
                'category' => 'motivation',
            ],
            [
                'quote' => 'Teaching young people is investing in the future.',
                'author' => 'Stephen Covey',
                'category' => 'motivation',
            ],
            [
                'quote' => 'The influence of a good teacher can never be erased.',
                'author' => 'Unknown',
                'category' => 'motivation',
            ],
            [
                'quote' => 'Teaching is a noble profession that shapes the minds and hearts of tomorrow\'s leaders.',
                'author' => 'Unknown',
                'category' => 'motivation',
            ],
            [
                'quote' => 'Every student can learn, just not on the same day or in the same way.',
                'author' => 'George Evans',
                'category' => 'motivation',
            ],
            [
                'quote' => 'Teaching is the one career that creates all other careers.',
                'author' => 'Unknown',
                'category' => 'motivation',
            ],
            [
                'quote' => 'A teacher\'s job is to make themselves dispensable.',
                'author' => 'Unknown',
                'category' => 'motivation',
            ],

            // Professional Growth
            [
                'quote' => 'The capacity to learn is a gift; the ability to learn is a skill; the willingness to learn is a choice.',
                'author' => 'Unknown',
                'category' => 'professional_growth',
            ],
            [
                'quote' => 'Teaching is learning twice.',
                'author' => 'Joseph Joubert',
                'category' => 'professional_growth',
            ],
            [
                'quote' => 'The greatest teacher takes joy from student progress, not from being an expert.',
                'author' => 'Simon Sinek',
                'category' => 'professional_growth',
            ],
            [
                'quote' => 'Continuous improvement is better than delayed perfection.',
                'author' => 'Mark Twain',
                'category' => 'professional_growth',
            ],
        ];

        foreach ($quotes as $quote) {
            MotivationalQuote::create($quote);
        }
    }
}
