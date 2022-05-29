<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Questions;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
        Questions::insert([
            ['question_title' => 'HTML stands for -'],
            ['question_title' => 'The correct sequence of HTML tags for starting a webpage is -'],
            ['question_title' => ' Which property is used to set colors in HTML?'],
            ['question_title' => 'Which of the following tag is used for inserting the largest heading in HTML?'],
            ['question_title' => 'Which of the following tag is used to insert a line-break in HTML?'],
            ['question_title' => 'How to create an unordered list (a list with the list items in bullets) in HTML?'],
            ['question_title' => ' Which character is used to represent the closing of a tag in HTML?'],
            ['question_title' => ' If a background image is smaller than the screen on which it is being displayed, what will occur on the webpage?'],
            ['question_title' => 'How to create an ordered list (a list with the list items in numbers) in HTML?'],
            ['question_title' => 'Which of the following element is responsible for making the text italic in HTML?'],
            ['question_title' => 'How to insert an image in HTML?'],
            ['question_title' => 'How to add a background color in HTML?'],
            ['question_title' => '<input> is -'],
            ['question_title' => ' Which of the following tag is used to make the underlined text?'],
            ['question_title' => 'Which of the following tag is used to define options in a drop-down selection list?'],
            ['question_title' => 'HTML tags are enclosed in-'],
            ['question_title' => 'Which is the correct way to comment out something in HTML?'],
            ['question_title' => 'The <hr> tag in HTML is used for -'],
            ['question_title' => 'Which of the following tag is used to add rows in the table?'],
            ['question_title' => 'Which of the following attribute is used to provide a unique name to an element?'],
           
        ]);
    }
}
