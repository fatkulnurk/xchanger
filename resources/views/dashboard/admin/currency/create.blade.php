<form action="{{ route('currency.store') }}" method="post">
    {{ csrf_field() }}
    <label>Currency Name</label>
    <br>
    <input type="text" name="currency_name">
    <br>
    <label>Payment Name</label>
    <br>
    <input type="text" name="payment_name">
    <br>
    <label>Stock</label>
    <br>
    <input type="text" name="stock">
    <br>
    <label>Price</label>
    <br>
    <input type="number" name="price">
    <br>
    <label>Account Holder</label>
    <br>
    <input type="text" name="account_holder">
    <br>
    <label>Account Number</label>
    <br>
    <input type="text" name="account_number">
    <br>
    <label>Message</label>
    <br>
    <textarea placeholder="WKWKKWK" name="message"></textarea>
    <br>
    <button type="submit">Submit</button>
    <button type="reset">Cancel</button>
</form>