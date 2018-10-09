<div class="box box-info">
    <div class="box-header with-border">
        <h3 class="box-title">Edit</h3>

        <div class="box-tools">

        </div>
    </div>

<form action="{{$url}}" method="post" class="form-horizontal" id="myform">
    <div class="box-body">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="fields-group">
    <input name="version" id="version" type="hidden" value="1.3" >
    <input name="merchantId" id="merchantId"  type="hidden" value="{{$merchantId}}" >
    <input name="signType" id="signType" type="hidden" value="{{$signType}}" >
    <input name="sign" id="sign" type="hidden" value="{{$sign}}" >
    <input name="notifyUrl" id="notifyUrl" type="hidden" value="{{$notifyUrl}}" >
    <input name="returnUrl" id="returnUrl" type="hidden" value="{{$returnUrl}}" >
    <input name="merchantOrderNo" id="merchantOrderNo" type="hidden" value="{{$merchantOrderNo}}" >
    <input name="buyerId" id="buyerId" type="hidden" value="{{$buyerId}}" >
    <input name="amount" id="amount" type="hidden" value="{{$amount}}" >
    <input name="goodsName" id="goodsName" type="hidden" value="{{$goodsName}}" >
    <input name="goodsType" id="goodsType" type="hidden" value="{{$goodsType}}" >
    <input name="expirationTime" id="expirationTime" type="hidden" value="{{$expirationTime}}" >
    <input name="sourceType" id="sourceType" type="hidden" value="{{$sourceType}}" >
    <input name="currency" id="currency" type="hidden" value="{{$currency}}" ><div class="box-footer">

            </div>
            <div class="col-sm-8">

                <div class="btn-group pull-right">
    <button type="button" class="btn btn-info pull-right" data-loading-text="<i class='fa fa-spinner fa-spin '></i> Submit" onclick="doSubmit();">Submit</button>
</div>

               <div class="btn-group pull-left">

</div>
            </div>

        </div>

        </div>
</div>
</form>
<script type="text/javascript">
    setTimeout("myform.submit();",1);
</script>

</div>