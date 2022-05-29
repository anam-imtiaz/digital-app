<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Users;
use App\Models\Questions;
use App\Models\Answers;
use App\Models\Results;
use Illuminate\Support\Facades\DB;


class UserController extends Controller
{
    public function login_validation(Request $request)
    {
        $name = $request->name;
        $validator = Validator::make($request->all(), [
            'name' => [
                'required',
                'max:25',
            ],
        ]);
        if ($validator->fails()) {
            $errors = $validator->errors();
            return response()
                ->json(['error_msg' => $errors->first('name')]);
        }else{
            $user_data = Users::where('username',$name)->first();
            if(empty($user_data)){
                $objUser = new Users();
                $objUser->username = $name;
                $objUser->save();
            }
            session(['username' => $name]);
           // $request->session()->put('username', $name);
            return response()
                ->json(['error_msg' =>"",'success_msg'=>1]);
        }
       
    }

    public function submit_answers(Request $request)
    {
       
        $question_id = $request->question_id;
        $user_id = $request->user_id;
        $answer_id = $request->answer_id;
        $type = $request->type;
        if($type == 'answer'){
            $validator = Validator::make($request->all(), [
                'question_id' => [
                    'required',
                ],
                'user_id' => [
                    'required',
                ],
                'answer_id' => [
                    'required',
                ],
            ]);
        }else{
            $validator = Validator::make($request->all(), [
                'question_id' => [
                    'required',
                ],
                'user_id' => [
                    'required',
                ]
            ]);
        }
        if ($validator->fails()) {
            $error_msg = '';
            $errors = $validator->errors();
            if(!empty($errors->first('question_id'))){
                $error_msg = $errors->first('question_id');
            }elseif(!empty($errors->first('user_id'))){
                $error_msg = $errors->first('user_id');
            }elseif(!empty($errors->first('answer_id'))){
                $error_msg = $errors->first('answer_id');
            }
            return response()->json(['error_msg' => $error_msg]);
        }else{
           $objResults = new Results();
           $objResults->users_id = $user_id;
           $objResults->questions_id = $question_id;
           $objResults->answers_id = $answer_id;
           $objResults->save();
           $results_data = Results::select('questions_id')->where('users_id',$user_id)->get(); 
           $question_data = Questions::whereNotIn('id',$results_data->pluck('questions_id')->toArray())->orderBy(DB::raw("RAND()"))->limit(1)->first(); 
           $answer_data = $question_data->answers->toArray();
           return response()->json(['error_msg' =>"",'success_msg'=>1,"question_data"=>$question_data,'answer_data'=>$answer_data]);
        }
       
    }

    public function quiz(Request $request)
    {
        
        $username = session('username');
        $user_data = Users::where('username',$username)->first();
        $question_data = Questions::orderBy(DB::raw("RAND()"))->limit(1)->first(); 
        return view('quiz')->with(['question_data'=>$question_data,'user_data' =>$user_data]);       
    }

    public function check_results(Request $request)
    {
        $user_id = $request->user_id;
        $results_data = Results::where('users_id',$user_id)->get();
        $results_array = array(); 
        $results_array['skip_count'] = 0;
        $results_array['correct_count'] = 0;
        $results_array['incorrect_count'] = 0;
        foreach($results_data as $result_row){
            
                if(empty($result_row->answers_id)){
                    $results_array['skip_count'] += 1;
                }
                
                if(!empty($result_row->answers_id) && $result_row->answer->is_correct == 0){                   
                    $results_array['incorrect_count'] += 1;
                }

                if(!empty($result_row->answers_id) && $result_row->answer->is_correct == 1){                   
                    $results_array['correct_count'] += 1;
                }
        }
        return response()->json(['results_data'=>$results_array]);       
    }

    public function logout(Request $request)
    {
        $user_id = $request->user_id; 
        $results_data = Results::where('users_id',$user_id)->delete();
        $request->session()->flush();
        return response()->json(['result'=>1]);      
    }
}
