<div class="modal fade flat-popupform" id="popup_login">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body text-center clearfix">
                <form class="form-login form-listing" role="form" action="{{ route('login') }}" method="post">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <h3 class="title-formlogin">Log in</h3>
                    <div class="form-group has-feedback">
                        {{--<label class="control-label" for="name"> 2222</label></br>--}}
                        <span class="input-login icon-form ">
                            <input type="text" placeholder="Your Name*" name="name" required="required">
                              <i class="fa fa-user"></i>
                        </span>
                    </div>

                    <div class="form-group has-feedback">
                        <span class="input-login icon-form">
                            <input type="password" placeholder="Password*" name="password" required="required"
                                   value=" ">
                            <i class="fa fa-lock"></i>

                        </span>
                    </div>

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
                        <button type="submit" id="login-button" class=" login-btn effect-button"
                                title="log in">LOG IN</button></span>
                </form>
            </div>
        </div>
    </div>
</div>
@section('javascript')
    @parent
    <script type="application/javascript">
        $(function () {

            $(document).on('submit', '#popup_login', function (e) {
                e.preventDefault();

                $('input+span>strong').text('');
                $('input').parent().parent().removeClass('has-error');

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                var data = {
                    "name": $('#popup_login').find("input[name=name]").val(),
                    "password": $('#popup_login').find("input[name=password]").val(),
                }
                /*            $.ajax({
                                type: "POST",
                                url: "  url('login')  ",
                                dataType: 'json',
                                processData: false,
                                contentType: false,
                                cache: false,
                                data: data
                            })
                                .done(function (data) {
                                    $(".alert-success").prop("hidden", false);
                                })
                                .fail(function (data) {
                                    $.each(data.responseJSON, function (key, value) {
                                        var input = '#popup_login input[name=' + key + ']';
                                        $(input + '+span>strong').text(value);
                                        $(input).parent().parent().addClass('has-error');
                                    });
                                });*/
                $.ajax({
                    headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                    type: 'POST',
                    url: "{{ route('login') }}",
                    data: {
                        "name": $('#popup_login').find("input[name=name]").val(),
                        "password": $('#popup_login').find("input[name=password]").val(),
                    },
                    beforeSend:function(){
                        $('#popup_login .has-error').remove()
                    },
                    success: function (data) {
                        // $("#result").html(data.success);
                       location.href='/user/profile'
                    },
                    error: function (request, status, error) {
                        json = $.parseJSON(request.responseText);
                        $.each(json.errors, function (key, value) {
                            $('#popup_login').find("input[name="+key+"]").parent().parent().prepend('<label class="control-label has-error" for="'+key+'"> '+value[0]+'</label></br>');
                        });
                    }
                });
            });
        });
    </script>

@endsection()
