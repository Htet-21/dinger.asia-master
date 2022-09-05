@extends('layouts.app')

@section('content')

<div id="contact-sale-page" class="container-fluid">
    <div class="container">
        <div class="row">

            <div class="col-md-7 col-sm-6 col-12">

                <div id="login-div">
                    <div id="login-icon-div">
                        <img id="login-cloud" src="/images/cloud-opacity.svg" />
                    </div>
                    <h1>Login To Your Store With<br>
                        <b>Dinger</b></h1><br>
                    <img id="bf-left-icon" src="/images/bf-left.svg" />
                    <img id="login-cloud-1" src="/images/cloud-icon.svg" />
                </div>

            </div>

            <div class="col-md-5 col-sm-7 col-12">
                <form style="margin-top:20vh;" id="contact-sale-form" action="" method="post">
                    <div class="form-group">
                        <label>Username</label>
                        <input name="name" type="text" class="form-control" placeholder="Username" />
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input name="password" type="password" class="form-control" placeholder="Password" />
                    </div>
                    <div class="form-group">
                        <input id="login-btn-submit" name="contact_support" type="submit" value="Log In" />
                    </div>
                    <p id="login-p">If you don't have an dinger account. <a href="/sign-up">Sign Up here.</a></p>
                </form>
            </div>

        </div>
    </div>
</div>

<img src="/images/grass.png" id="footer-grass" />



@stop