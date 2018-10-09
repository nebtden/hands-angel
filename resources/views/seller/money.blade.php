<div class="box box-info">
    <div class="box-header with-border">
        <h3 class="box-title">Edit</h3>

        <div class="box-tools">

        </div>
    </div>

<form action="/seller/transaction_lipapay" method="post" class="form-horizontal" id="myform">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <div class="box-body">

        <div class="fields-group">

            <div class="form-group 1">

    <label for="amount" class="col-sm-2 control-label">Amount</label>

    <div class="col-sm-8">

        <div class="input-group">
            <input name="amount" id="amount" type="number"  min="0.01" step="0.01" value="" class="form-control trans_id">
</div>


    </div>
</div>
 <div class="box-footer">

            </div>
            <div class="col-sm-8">

                <div class="btn-group pull-right">
    <button type="submit" class="btn btn-info pull-right" data-loading-text="<i class='fa fa-spinner fa-spin '></i> Submit"  >Submit</button>
</div>

               <div class="btn-group pull-left">
</div>
            </div>

        </div>

        </div>
</div>
</form>
</div>
<style>input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
        -webkit-appearance: none !important;
        margin: 0;
    } </style>