
@extends('layouts.master')
@section('content')


<div class="wrapper">
<h1 id="login-label">Admin Login</h1>
    <hr>
        <form id="login" action="/adminlogin" method="POST">
            <div>
                <label>email:</label>
                <input type="text" name="email" placeholder="email">
            </div>
            <div>
                <label>password:</label>
                <input type="password" name="pword" placeholder="password">
            </div>
            <input type="submit" name="submit" value="login">
        </form>

    <h4 class="jumpto">Don't have an account? <a href="{{ route('adminregister') }}">register</a></h4>
  </div>  


@endsection
