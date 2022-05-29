<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Answers;

class AnswersSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Answers::insert([
            ['questions_id' => '1','answer_title' => 'HighText Machine Language','is_correct' => '0'],
            ['questions_id' => '1','answer_title' => 'HyperText and links Markup Language','is_correct' => '0'],
            ['questions_id' => '1','answer_title' => 'HyperText Markup Language','is_correct' => '1'],
            ['questions_id' => '1','answer_title' => 'None of these','is_correct' => '0'],

            ['questions_id' => '2','answer_title' => 'Head, Title, HTML, body','is_correct' => '0'],
            ['questions_id' => '2','answer_title' => 'HTML, Body, Title, Head-','is_correct' => '0'],
            ['questions_id' => '2','answer_title' => 'HTML, Head, Title, Body','is_correct' => '0'],
            ['questions_id' => '2','answer_title' => 'HTML, Head, Title, Body','is_correct' => '1'],
            
            ['questions_id' => '3','answer_title' => 'color','is_correct' => '1'],
            ['questions_id' => '3','answer_title' => 'background-color','is_correct' => '0'],
            ['questions_id' => '3','answer_title' => 'font-color','is_correct' => '0'],
            ['questions_id' => '3','answer_title' => 'text-color','is_correct' => '0'],
            
            ['questions_id' => '4','answer_title' => 'h3','is_correct' => '0'],
            ['questions_id' => '4','answer_title' => 'h1','is_correct' => '1'],
            ['questions_id' => '4','answer_title' => 'h5','is_correct' => '0'],
            ['questions_id' => '4','answer_title' => 'h6','is_correct' => '0'],

            ['questions_id' => '5','answer_title' => 'br','is_correct' => '1'],
            ['questions_id' => '5','answer_title' => 'a','is_correct' => '0'],
            ['questions_id' => '5','answer_title' => 'pre','is_correct' => '0'],
            ['questions_id' => '5','answer_title' => 'b','is_correct' => '0'],

            ['questions_id' => '6','answer_title' => 'ul','is_correct' => '1'],
            ['questions_id' => '6','answer_title' => 'ol','is_correct' => '0'],
            ['questions_id' => '6','answer_title' => 'li','is_correct' => '0'],
            ['questions_id' => '6','answer_title' => 'i','is_correct' => '0'],

            ['questions_id' => '7','answer_title' => '"\"','is_correct' => '0'],
            ['questions_id' => '7','answer_title' => '"!"','is_correct' => '0'],
            ['questions_id' => '7','answer_title' => '"/"','is_correct' => '1'],
            ['questions_id' => '7','answer_title' => '"."','is_correct' => '0'],

            ['questions_id' => '8','answer_title' =>'The blank space will be shown in black','is_correct' => '0'],
            ['questions_id' => '8','answer_title' => 'The image will be stretched','is_correct' => '0'],
            ['questions_id' => '8','answer_title' => 'The image will be repeated','is_correct' => '1'],
            ['questions_id' => '8','answer_title' => 'The Image would not be isplayed','is_correct' => '0'],

            ['questions_id' => '9','answer_title' => 'ul','is_correct' => '0'],
            ['questions_id' => '9','answer_title' => 'ol','is_correct' => '1'],
            ['questions_id' => '9','answer_title' => 'li','is_correct' => '0'],
            ['questions_id' => '9','answer_title' => 'i','is_correct' => '0'],

            ['questions_id' => '10','answer_title' => 'i','is_correct' => '1'],
            ['questions_id' => '10','answer_title' => 'italic','is_correct' => '0'],
            ['questions_id' => '10','answer_title' => 'it','is_correct' => '0'],
            ['questions_id' => '10','answer_title' => 'pre','is_correct' => '0'],

            ['questions_id' => '11','answer_title' => 'img href = "jtp.png" ','is_correct' => '0'],
            ['questions_id' => '11','answer_title' => 'img url = "jtp.png" ','is_correct' => '0'],
            ['questions_id' => '11','answer_title' => 'img link = "jtp.png" ','is_correct' => '0'],
            ['questions_id' => '11','answer_title' => 'img src = "jtp.png" ','is_correct' => '1'],

            ['questions_id' => '12','answer_title' => 'marquee bg color: "red"','is_correct' => '0'],
            ['questions_id' => '12','answer_title' => 'marquee bg-color = "red"','is_correct' => '0'],
            ['questions_id' => '12','answer_title' => 'marquee bgcolor = "red"','is_correct' => '1'],
            ['questions_id' => '12','answer_title' => 'marquee color = "red"','is_correct' => '0'],

            ['questions_id' => '13','answer_title' => "a format tag.",'is_correct' => '0'],
            ['questions_id' => '13','answer_title' => 'an empty tag.','is_correct' => '1'],
            ['questions_id' => '13','answer_title' => 'All of the above','is_correct' => '0'],
            ['questions_id' => '13','answer_title' => 'None of the above','is_correct' => '0'],

            ['questions_id' => '14','answer_title' => 'i','is_correct' => '1'],
            ['questions_id' => '14','answer_title' => 'ul','is_correct' => '0'],
            ['questions_id' => '14','answer_title' => 'u','is_correct' => '0'],
            ['questions_id' => '14','answer_title' => 'pre','is_correct' => '0'],

            ['questions_id' => '15','answer_title' => 'input type = "checkbox"','is_correct' => '1'],
            ['questions_id' => '15','answer_title' => 'input type = "button"','is_correct' => '0'],
            ['questions_id' => '15','answer_title' => 'checkbox','is_correct' => '0'],
            ['questions_id' => '15','answer_title' => 'input type = "check"','is_correct' => '0'],

            ['questions_id' => '16','answer_title' => 'select','is_correct' => '0'],
            ['questions_id' => '16','answer_title' => 'list','is_correct' => '0'],
            ['questions_id' => '16','answer_title' => 'dropdown','is_correct' => '0'],
            ['questions_id' => '16','answer_title' => 'option','is_correct' => '1'],

            ['questions_id' => '17','answer_title' => "# and #",'is_correct' => '0'],
            ['questions_id' => '17','answer_title' => '{ and }','is_correct' => '0'],
            ['questions_id' => '17','answer_title' => '! and ?','is_correct' => '0'],
            ['questions_id' => '17','answer_title' => '< and >','is_correct' => '1'],

            ['questions_id' => '18','answer_title' => "new line",'is_correct' => '0'],
            ['questions_id' => '18','answer_title' => 'vertical ruler','is_correct' => '0'],
            ['questions_id' => '18','answer_title' => 'new paragraph','is_correct' => '0'],
            ['questions_id' => '18','answer_title' => 'horizontal ruler','is_correct' => '1'],

            ['questions_id' => '19','answer_title' => 'td and /td','is_correct' => '0'],
            ['questions_id' => '19','answer_title' => 'th and /th','is_correct' => '0'],
            ['questions_id' => '19','answer_title' => 'tr and /tr','is_correct' => '1'],
            ['questions_id' => '19','answer_title' => 'None of the above','is_correct' => '0'],

            ['questions_id' => '20','answer_title' => "class",'is_correct' => '0'],
            ['questions_id' => '20','answer_title' => 'id','is_correct' => '1'],
            ['questions_id' => '20','answer_title' => 'type','is_correct' => '0'],
            ['questions_id' => '20','answer_title' => 'None of the above','is_correct' => '0'],
           
        ]);
    }
}
