<div class="modal fade flat-popupform" id="popup_login">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body text-center clearfix">
                <form class="form-login form-listing" action="{{ route('login') }}" method="post">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <h3 class="title-formlogin">Log in</h3>
                    <span class="input-login icon-form">
                        <input type="text" placeholder="Your Name*" name="name" required="required">
                        <i class="fa fa-user"></i>
                    </span>
                    @if($errors->has('name'))
                        @foreach($errors->get('name') as $message)
                            <label class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i>{{$message}}</label></br>
                        @endforeach
                    @endif
                    <span class="input-login icon-form">
                        <input type="password" placeholder="Password*" name="password" required="required" value="{{ old('username') }}">
                        <i class="fa fa-lock"></i>
                    </span>

                    @if($errors->has('password'))
                        @foreach($errors->get('password') as $message)
                            <label class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i>{{$message}}</label></br>
                        @endforeach
                    @endif
                    <div class="flat-fogot clearfix">
                        <label class="float-left">
                            <span class="input-check">
                                <input type="checkbox" id="rem" name="check" value="0" checked="">
                                <label for="rem" class="remember">Remember me</label>
                            </span>
                        </label>

                        <label class="float-right link-register">
                            <a href="index.html#">Lost your password?</a>
                        </label>
                    </div>
                    <span class="wrap-button">
                        <button type="submit" id="login-button" class=" login-btn effect-button" title="log in">LOG IN</button></span>
                </form>
            </div>
        </div>
    </div>
</div>