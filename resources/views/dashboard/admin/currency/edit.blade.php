@foreach($data as $data)
<form action="{{ route('currency.update', $data->id) }}" method="Post">

    {{ csrf_field() }}

    {{ method_field('PUT') }}

    <label>Currency Name</label>
    <br>
    <input type="text" name="currency_name" value="{{ $data->currency_name }}">
    <br>
    <label>Payment Name</label>
    <br>
    <input type="text" name="payment_name" value="{{ $data->payment_name }}">
    <br>
    <label>Stock</label>
    <br>
    <input type="text" name="stock" value="{{ $data->stock }}">
    <br>
    <label>Price</label>
    <br>
    <input type="number" name="price" value="{{ $data->price }}">
    <br>
    <label>Account Holder</label>
    <br>
    <input type="text" name="account_holder" value="{{ $data->account_holder }}">
    <br>
    <label>Account Number</label>
    <br>
    <input type="text" name="account_number" value="{{ $data->account_number }}">
    <br>
    <label>Message</label>
    <br>
    <textarea name="message">{{ $data->message }}</textarea>
    <br>
    <button type="submit">Submit</button>
    <button type="reset">Cancel</button>
</form>

@endforeach