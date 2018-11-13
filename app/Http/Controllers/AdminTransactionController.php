<?php

namespace App\Http\Controllers;

use App\StatusTransaction;
use App\Transaction;
use App\TypeTransaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AdminTransactionController extends Controller
{

    public function index()
    {
//        $datas  = Transaction::all();

        $datas   = DB::table('transaction')
            ->join('type_transaction','type_transaction.id','=','transaction.type_transaction_id')
            ->join('status_transaction','status_transaction.id','=','transaction.status_transaction_id')
            ->join('currency','currency.id','=','transaction.currency_id')
            ->join('user_bank','user_bank.id','=','transaction.user_bank_id')
            ->join('user','user.id','=','transaction.user_id')
//            ->where('transaction.user_id',Auth::id())
//            ->where('type_transaction.name','=','sell')
            ->select(
                'transaction.id as transaction_id',
                'transaction.user_id',
                'transaction.amount',
                'transaction.amount_get',
                'transaction.message',
                'transaction.currency_id',
                'transaction.user_bank_id',
                'transaction.type_transaction_id',
                'transaction.status_transaction_id',
                'transaction.created_at',
                'transaction.updated_at',
                'currency.id',
                'currency.currency_name as currency_name',
                'currency.payment_name as currency_payment_name',
                'currency.stock as currency_stock',
                'currency.price as currency_price',
                'currency.account_holder as currency_account_holder',
                'currency.account_number as currency_account_number',
                'currency.message as currency_message',
                'type_transaction.name as trx_type_name',
                'type_transaction.description as trx_type_description',
                'status_transaction.name as trx_name',
                'status_transaction.description as trx_description',
                'user_bank.id as user_bank_id',
                'user_bank.user_id as user_bank_user_id',
                'user_bank.payment_title as user_bank_payment_title',
                'user_bank.description as user_bank_description',
                'user_bank.bank_name as user_bank_name',
                'user_bank.account_holder as user_bank_account_holder',
                'user_bank.account_number as user_bank_account_number',
                'user_bank.currency as user_bank_currency',
                'user.first_name as user_first_name',
                'user.middle_name as user_middle_name',
                'user.last_name as user_last_name',
                'user.email as user_email'
            )
            ->orderBy('transaction.id','desc')
            ->get();

        return view('dashboard.admin.transaction.index',compact('datas'));
    }

    public function show($id)
    {

        $data   = DB::table('transaction')
            ->join('type_transaction','type_transaction.id','=','transaction.type_transaction_id')
            ->join('status_transaction','status_transaction.id','=','transaction.status_transaction_id')
            ->join('currency','currency.id','=','transaction.currency_id')
            ->join('user_bank','user_bank.id','=','transaction.user_bank_id')
            ->where('transaction.id',$id)
            ->select(
                'transaction.id as transaction_id',
                'transaction.user_id',
                'transaction.amount',
                'transaction.amount_get',
                'transaction.message',
                'transaction.currency_id',
                'transaction.user_bank_id',
                'transaction.type_transaction_id',
                'transaction.status_transaction_id',
                'transaction.created_at',
                'transaction.updated_at',
                'currency.id',
                'currency.currency_name as currency_name',
                'currency.payment_name as currency_payment_name',
                'currency.stock as currency_stock',
                'currency.price as currency_price',
                'currency.account_holder as currency_account_holder',
                'currency.account_number as currency_account_number',
                'currency.message as currency_message',
                'type_transaction.name as trx_type_name',
                'type_transaction.description as trx_type_description',
                'status_transaction.id as trx_id',
                'status_transaction.name as trx_name',
                'status_transaction.description as trx_description',
                'user_bank.id as user_bank_id',
                'user_bank.user_id as user_bank_user_id',
                'user_bank.payment_title as user_bank_payment_title',
                'user_bank.description as user_bank_description',
                'user_bank.bank_name as user_bank_name',
                'user_bank.account_holder as user_bank_account_holder',
                'user_bank.account_number as user_bank_account_number',
                'user_bank.currency as user_bank_currency'
            )
            ->first();

        return view('dashboard.admin.transaction.show', ['data' => $data]);
//        return view('dashboard.sell.detail',['data' => $data]);

    }
    public function update(Request $request, $id)
    {
        $data = Transaction::where('id', $id)->first();
        $data->name             = $request->name;
        $data->description      = $request->description;
        $data->save();

        return redirect()->route('typetransaction.index')->with('notification','Data Berhasil di ubah');
    }

    public function isSuccess($id){
        $statusTrx = StatusTransaction::where('name','success')->first();

        $data = Transaction::where('id', $id)->first();
        $data->status_transaction_id  =   $statusTrx['id'];
        $data->save();

        return redirect()->route('transaction.show',$id)->with('notification','Data Berhasil di ubah menjadi success');
    }

    public function isFraud($id){
        $statusTrx = StatusTransaction::where('name','fraud')->first();

        $data = Transaction::where('id', $id)->first();
        $data->status_transaction_id  =   $statusTrx['id'];
        $data->save();

        return redirect()->route('transaction.show',$id)->with('notification','Data Berhasil di ubah menjadi Fraud');
    }

    public function isWaiting($id){
        $statusTrx = StatusTransaction::where('name','waiting')->first();

        $data = Transaction::where('id', $id)->first();
        $data->status_transaction_id  =   $statusTrx['id'];
        $data->save();

        return redirect()->route('transaction.show',$id)->with('notification','Data Berhasil di ubah menjadi waiting');
    }

    public function isCancel($id){
        $statusTrx = StatusTransaction::where('name','cancel')->first();

        $data = Transaction::where('id', $id)->first();
        $data->status_transaction_id  =  $statusTrx['id'];
        $data->save();

        return redirect()->route('transaction.show',$id)->with('notification','Data Berhasil di ubah menjadi Cancel');
    }

    public function isFailed($id){
        $statusTrx = StatusTransaction::where('name','failed')->first();

        $data = Transaction::where('id', $id)->first();
        $data->status_transaction_id  =   $statusTrx['id'];
        $data->save();

        return redirect()->route('transaction.show',$id)->with('notification','Data Berhasil di ubah menjadi Failed');
    }
}
