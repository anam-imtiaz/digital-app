@extends('layouts.app')
@section('content')
<div id="login-form-wrap">
  <h4> <span class="question_heading">Question</span> <span class="question_counter">1</span> @if($user_data)( {{$user_data->username}}) @endif</h4>
  <form id="login-form" action="" method="post">
    <div class="error_class" id="error_msg"></div>
    <p class="question_title"> 
        {{$question_data->question_title}}
    </p>
      <input type="hidden" name="user_id" id="user_id" value="{{$user_data->id}}">
       <input type="hidden" name="question_id" id="question_id" value="{{$question_data->id}}">
       <div class="question_answer_div">
        @foreach($question_data->answers as $row)
        <div class="radio">
              <label>
                  <input type="radio" name="question_answer_options" id="question_answer_options" value="{{$row->id}}" >
                  {{$row->answer_title}}
              </label>     
        </div>
        @endforeach
    </div>
  <p>
  <button class="btn  btn-primary btn_skip" onclick="check_skip_question()" type="button">Skip </button>
  <button class="btn btn-primary  btn_next" onclick="check_next_question()" type="button"> Next </button>
  <button class="btn btn-primary  btn_results btn-lg" style="display:none;" onclick="check_results()" type="button"> Check Results </button>
  <button class="btn btn-primary  btn_logout" style="display:none;" onclick="logout_quiz()" type="button"> Logout </button>
    </p>
  </form>
  <div id="create-account-wrap">
  </div><!--create-account-wrap-->
</div><!--login-form-wrap-->
@endsection