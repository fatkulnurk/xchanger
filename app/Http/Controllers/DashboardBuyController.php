<?php

namespace App\Http\Controllers;

use App\Transaction;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\StatusTransaction;
use App\TypeTransaction;
use App\UserBank;
use App\Currency;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Telegram\Bot\Laravel\Facades\Telegram;
use Validator;

class DashboardBuyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $data   = DB::table('transaction')
            ->join('type_transaction','type_transaction.id','=','transaction.type_transaction_id')
            ->join('status_transaction','status_transaction.id','=','transaction.status_transaction_id')
            ->join('currency','currency.id','=','transaction.currency_id')
            ->join('user_bank','user_bank.id','=','transaction.user_bank_id')
            ->where('transaction.user_id',Auth::id())
            ->where('type_transaction.name','=','buy')
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
                'currency.id as currency_id',
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
                'user_bank.currency as user_bank_currency'
            )
            ->orderBy('transaction.id','desc')
            ->get();

        return view('dashboard.buy.list',['data' => $data]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $currency   = Currency::all();
        $bank       = UserBank::where('user_id',Auth::id())->get();

        return view('dashboard.buy.add',[
            'currency'  => $currency,
            'bank'      => $bank
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validate =  Validator::make($request->all(),[
            'amount'        => 'required',
            'currency'       => 'required',
            'bank'          => 'required',
            'message'       => 'nullable'
        ]);

        // if validation fails
        if($validate->fails()){

            $message = 'Transaksi Gagal, Ada formulir yang belum di isi.';

        }else{

            $currency           = Currency::find($request->currency);
            $typetransaction    = TypeTransaction::where('name','buy')->get();
            $statustransaction  = StatusTransaction::where('name','waiting')->get();

            $count_amount_get   = $currency->price * $request->amount;


            // if count button click
            if(isset($request->count)){
                return redirect()->route('sell')->with('count_money',$count_amount_get);
            }else{
                $data                           = new Transaction();
                $data->user_id                  = Auth::id();
                $data->amount                   = $request->amount;
                $data->amount_get               = doubleval($count_amount_get);
                $data->message                  = $request->message;
                $data->currency_id              = $request->currency;
                $data->user_bank_id             = $request->bank;
                $data->type_transaction_id      = $typetransaction[0]->id;
                $data->status_transaction_id    = $statustransaction[0]->id;

                $data->save();
                $message = 'Transaksi Berhasil di tambahkan, silakan cek di daftar Pembelian anda.';


            }


            // Get Last Time in GMT +7
            $date_now = Carbon::now(new \DateTimeZone('Asia/Jakarta'))->format('l, d F Y [ H:i ]');

            // send message to telegram
            $text =
                "----- <b>Pemberitahuan Terbaru</b> -----\n"
                . "BELI UANG [BUY] \n"
                . "\nUser ID: [ ".Auth::id()." ] | ".Auth::user()->email."\n"
                . "<b>Total Uang: </b>\n"
                . "$request->amount \n"
                . "<b>Jumlah yang di dapat: </b>\n "
                . doubleval($count_amount_get)."\n"
                . "Catatan User : \n"
                . $request->message . "\n"
                . "Tanggal : ". $date_now."\n"
                . "-----------------------------------------";

            Telegram::sendMessage([
                'chat_id' => env('TELEGRAM_BOT_GROUP_ID', ''),
                'parse_mode' => 'HTML',
                'text' => $text
            ]);

            return redirect()->route('buy')->with('notification',$message);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data   = DB::table('transaction')
            ->join('type_transaction','type_transaction.id','=','transaction.type_transaction_id')
            ->join('status_transaction','status_transaction.id','=','transaction.status_transaction_id')
            ->join('currency','currency.id','=','transaction.currency_id')
            ->join('user_bank','user_bank.id','=','transaction.user_bank_id')
            ->where('transaction.user_id',Auth::id())
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
            ->get();

        return view('dashboard.buy.detail',['data' => $data]);
    }

}
