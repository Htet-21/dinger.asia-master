@extends('layouts.app')

@section('content')

<div id="contact-sale-page" class="container-fluid">
    <div class="container">
        <div class="row">

            <div class="col-md-7 col-sm-6 col-12">

                <div id="login-div">
                    <div style="margin-top:5vh;" id="login-icon-div">
                        <img id="login-cloud" src="/images/cloud-opacity.svg" />
                    </div>
                    <h1>Create Your Store With<br>
                        <b>Dinger</b></h1><br>
                    <img id="bf-left-icon" src="/images/bf-left.svg" />
                    <img id="login-cloud-1" src="/images/cloud-icon.svg" />
                </div>

            </div>

            <div class="col-md-5 col-sm-7 col-12">
                <form style="margin-top:5vh;" id="contact-sale-form" action="" method="post">
                    <div class="form-group">
                        <label>Username</label>
                        <input name="name" type="text" class="form-control" placeholder="Username" />
                    </div>
                    <div class="form-group">
                        <label>Shop name</label>
                        <input name="shop_name" type="text" class="form-control" placeholder="Shop name" />
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input name="email" type="email" class="form-control" placeholder="Email" />
                    </div>
                    <div class="form-group">
                        <label>Phone</label>
                        <input name="phone" type="phone" class="form-control" placeholder="Phone" />
                    </div>
                    <div class="form-group">
                        <label>Bank Name</label>
                        <input name="bank" type="text" class="form-control" placeholder="Bank Name" />
                    </div>
                    <div class="form-group">
                        <label>Bank Account Number</label>
                        <input name="bank_account" type="text" class="form-control" placeholder="Bank Account Number" />
                    </div>
                    <div class="form-group">
                        <label>NRC</label>
                        <input name="nrc" type="text" class="form-control" placeholder="NRC" />
                    </div>
                    <div class="form-group">
                        <input type="checkbox" name="agree-check" value="true">Agree <b style="color:#007bff;"><a href="#">Terms & Conditions</a></b><br>
                    </div>

                    <div class="form-group">
                        <input id="login-btn-submit" name="contact_support" type="submit" value="Sign Up" />
                    </div>
                    <p id="login-p">Already have an account? <a href="/sign-up">Login here.</a></p>
                </form>
            </div>

        </div>
    </div>
</div>

<img src="/images/grass.png" id="footer-grass" />



@stop