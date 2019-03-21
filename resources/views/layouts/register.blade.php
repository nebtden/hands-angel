<div class="modal fade flat-popupform" id="popup_register">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body text-center clearfix">
                <form class="form-login form-listing" role="form" action="{{ route('register') }}" method="post">
                    @csrf
                    <h3 class="title-formlogin">Sign Up</h3>
                    <div class="form-group has-feedback">
                        <span class="input-login icon-form">
                            <input type="text" placeholder="Your Name*" name="name" required="required">
                            <i class="fa fa-user"></i>
                        </span>
                    </div>

                    <div class="form-group has-feedback">
                        <span class="input-login icon-form">
                            <input type="text" placeholder="E-mail*" name="email" required="required">
                            <i class="fa fa-envelope-o"></i>
                        </span>
                    </div>

                    <div class="form-group has-feedback">
                        <span class="input-login icon-form">
                            <input type="text" placeholder="Password*" name="password" required="required">
                              <i class="fa fa-lock"></i>
                        </span>
                    </div>

                    <div class="form-group has-feedback">
                        <span class="input-login icon-form">
                            <input type="text" placeholder="Repeat Password*" name="password_confirmation" required="required">
                            <i class="fa fa-lock"></i>
                        </span>
                    </div>
                    <div class="wrap-button signup">
                        <button type="submit" id="logup-button" class=" login-btn effect-button" title="log in">LOG UP
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@section('javascript')
    @parent
    <script type="application/javascript">
        $(function () {

            $(document).on('submit', '#popup_register', function (e) {
                e.preventDefault();

                $('input+span>strong').text('');
                $('input').parent().parent().removeClass('has-error');

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $.ajax({
                    headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                    type: 'POST',
                    url: "{{ route('register') }}",
                    data: {
                        "name": $('#popup_register').find("input[name=name]").val(),
                        "email": $('#popup_register').find("input[name=email]").val(),
                        "password": $('#popup_register').find("input[name=password]").val(),
                        "password_confirmation": $('#popup_register').find("input[name=password_confirmation]").val(),
                    },
                    beforeSend: function () {
                        $('#popup_register .has-error').remove()
                    },
                    success: function (data) {
                        // $("#result").html(data.success);
                        location.href = '/user/profile'
                    },
                    error: function (request, status, error) {
                        json = $.parseJSON(request.responseText);
                        $.each(json.errors, function (key, value) {
                            $('#popup_register').find("input[name=" + key + "]").parent().parent().prepend('<label class="control-label has-error" for="' + key + '"> ' + value[0] + '</label></br>');
                        });
                    }
                });
            });
        });
    </script>

@endsection()
