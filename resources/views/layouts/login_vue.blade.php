<div class="modal fade flat-popupform" id="popup_login">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body text-center clearfix">
                <form class="form-login form-listing"  @submit.prevent="submit"  action="{{ route('login') }}" method="post">
                    <input type="hidden" name="_token" v-model="login._token" value="{{ csrf_token() }}">
                    <h3 class="title-formlogin">Log in</h3>
                    <span class="input-login icon-form">
                        <input type="text" placeholder="Your Name*" name="name" v-model="login.name" required="required">
                        <i class="fa fa-user"></i>
                    </span>


                    <span class="input-login icon-form">
                        <input type="password" placeholder="Password*" name="password" v-model="login.password" required="required" value="{{ old('username') }}">
                        <i class="fa fa-lock"></i>
                    </span>


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
@section('javascript')
    <script>
        var login_vm = new Vue({
            el:'#popup_login',
            data:{
                login:{}
            },
            methods:{
                submit(){
                    var url = "{{ route('login') }}";

                    this.login._token = $('meta[name="csrf-token"]').attr('content');
                    var formData = JSON.stringify(this.login);
                    this.$http.post(url,formData).then(function(data){
                        console.log(data)
                        // this.$router.push({path:'/'})
                        window.location.replace("/home");
                    } ).catch(function(){
                        console.log("服务器异常！");
                    });
                }
            }
        })
    </script>
@endsection
