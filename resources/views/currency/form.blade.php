<div class="form-group {{ $errors->has('currency_name, payment_name, stock, price, account_holder, account_number, message') ? 'has-error' : ''}}">
    <label for="currency_name, payment_name, stock, price, account_holder, account_number, message" class="control-label">{{ 'Currency Name, Payment Name, Stock, Price, Account Holder, Account Number, Message' }}</label>
    <textarea class="form-control" rows="5" name="currency_name, payment_name, stock, price, account_holder, account_number, message" type="textarea" id="currency_name, payment_name, stock, price, account_holder, account_number, message" >{{ $currency->currency_name, payment_name, stock, price, account_holder, account_number, message or ''}}</textarea>
    {!! $errors->first('currency_name, payment_name, stock, price, account_holder, account_number, message', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
