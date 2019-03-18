
<div class="modal fade flat-popupform" id="popup_register">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body text-center clearfix">
                <form class="form-login form-listing" action="{{ route('register') }}" method="post">
                    @csrf
                    <h3 class="title-formlogin">Sign Up</h3>
                    <span class="input-login icon-form">
                        <input type="text" placeholder="Your Name*" name="name" required="required">
                        <i class="fa fa-user"></i>
                    </span>
                    @if ($errors->has('name'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                    @endif
                    <span class="input-login icon-form">
                        <input type="text" placeholder="E-mail*" name="email"required="required">
                        <i class="fa fa-envelope-o"></i>
                    </span>
                    @if ($errors->has('email'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                    @endif

                    <span class="input-login icon-form">
                        <input type="text" placeholder="Password*"  name="password" required="required">
                        <i class="fa fa-lock"></i>
                    </span>
                    @if ($errors->has('password'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                    @endif
                    <span class="input-login icon-form">
                        <input type="text" placeholder="Repeat Password*" name="password_origin" required="required">
                        <i class="fa fa-lock"></i>
                    </span>
                    <div class="wrap-button signup">
                        <button type="submit" id="logup-button" class=" login-btn effect-button" title="log in">LOG  UP
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Go Top --><a class="go-top effect-button"><i class="fa fa-angle-up"></i></a>
