@extends('layouts.cus')
@section('browsertitle')customerregister @stop
@section('content')

<div class="registration-form">
      <form class="def-modal-form" action="" method="POST">
        <div class="cancel-icon close-form"></div>

        <label for="registration-from" class="header"><h3>Customer Registration</h3></label>

   		
        <input type="text" class="text-field first-name" name="fn" placeholder="Firstname">
        
       
        <input type="text" class="text-field last-name" name="ln" placeholder="Lastname">
        
        
        <input type="email" class="text-field email" name="em" placeholder="Email">
       
       
        <input type="text" class="text-field username" name="un" placeholder="Username">
        
       
        <input type="password" class="text-field password" name="pass" placeholder="Password">
        
        
        <input type="password" class="text-field confirm-password" name="cpass" placeholder="Confirm Password">
        
        <input type="submit" class="def-button" name="reg" value="Register">

        <p class="login-option"><a href=""> Have an account already? Login</a></p>
      </form>
</div>

@endsection