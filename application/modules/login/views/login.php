<form class="form-signin" action="<?php echo base_url(); ?>login/login/signin" method="post">
    <div >
        <h2 class="form-signin-heading"><img src="<?php echo base_url(); ?>assets/ui/images/email_white.png"/><br><br>Persuratan</h2>
    </div>
    <div class="login-wrap">
        
        <div class="user-login-info">
            <input type="text" class="form-control" name="username" id="username" placeholder="User ID" autofocus>
            <input type="password" name="password" class="form-control" id="password" placeholder="Password">
        </div>
        <label class="checkbox">
            <span class="pull-right">
                <a data-toggle="modal" href="#myModal">Lupa Password?</a></span>
        </label>
        <button class="btn btn-lg btn-login btn-block" type="submit">Login</button></div>
        
    <!-- Modal -->
    <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Forgot Password ?</h4>
                </div>
                <div class="modal-body">
                    <p>Enter your e-mail address below to reset your password.</p>
                    <input type="text" name="email" placeholder="Email" autocomplete="off" class="form-control placeholder-no-fix">

                </div>
                <div class="modal-footer">
                    <button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>
                    <button class="btn btn-success" type="button">Submit</button>
                </div>
            </div>
        </div>
    </div>
    <!-- modal -->
</form>
