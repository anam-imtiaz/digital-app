@extends('layouts.app')
@section('content')
<div id="login-form-wrap">
  <h2>Digital App Quiz</h2>
  <form id="login-form" action="" method="post">
  <div class="alert alert-danger" style="display:none;" id="error_msg"></div>
  <div class="form-group">
    <input  class="form-control input-lg" id="name" name="name" placeholder="Enter Your Name" required><i class="validation"><span></span><span></span></i>
  </div>
    <p>
   
    </p>
    <p>
       </p>
    <p>
    <input type="button" onclick="submit_login()" id="submit" value="Submit">
    </p>
  </form>
  <div id="create-account-wrap">
  </div><!--create-account-wrap-->
</div><!--login-form-wrap-->
@endsection