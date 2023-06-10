	@extends('layouts.auth')
    
    <div class="box">
		<form action="" method="post" autocomplete="off">
			<h2>sign in</h2>
			<div class="inputBox">
				<input type="text" required="required" name="nip">
				<span>Email</span>
				<i></i>
			</div>
			<div class="inputBox">
				<input type="password" required="required" name="password">
				<span>Password</span>
				<i></i>
			</div>
			<input type="submit" value="Login" name="login">
            <div class="link-register">
                <a href="">Don't have an account?</a>
            </div>
		</form>
	</div>

    <div class="image-page">
        <img src="images/hero2.png" alt="">
    </div>