@include('dashboard.header')
<div class="box">
    <form action="" method="post">
        <div class="columns is-fullwidth">
            <div class="column is-6">
                <div class="field">
                    <label class="label">Jumlah Uang</label>
                    <div class="control has-icons-left">
                        <input class="input is-primary" type="text" placeholder="Nominal">
                        <span class="icon is-left">
                    <i class="fa fa-money"></i>
                </span>
                    </div>
                    <p class="help">Nominal hanya bilangan bulat.</p>
                </div>
                <div class="field">
                    <label class="label">Mata Uang</label>
                    <div class="control has-icons-left">
                        <div class="select is-primary is-fullwidth">
                            <select>
                                <option selected>Currency</option>
                                <option>Paypal - USD</option>
                                <option>Perfect Money - EUR</option>
                                <option>Perfect Money - USD</option>
                            </select>
                        </div>
                        <span class="icon is-left">
                            <i class="fa fa-dollar"></i>
                        </span>
                    </div>
                </div>
                <div class="field">
                    <label class="label">Dikirim Ke</label>
                    <div class="control has-icons-left">
                        <div class="select is-primary is-fullwidth">
                            <select>
                                <option selected>Nama Bank Anda</option>
                                <option>Bank Mandiri</option>
                                <option>Bank Bri</option>
                                <option>Bank Mega</option>
                                <option>Bank Cimb punyaku</option>
                            </select>
                        </div>
                        <span class="icon is-left">
                            <i class="fa fa-bank"></i>
                        </span>
                    </div>
                </div>
            </div>
            <div class="column is-6">
                <div class="field">
                    <label class="label">Pesan Untuk Kami (Optional)</label>
                    <textarea class="textarea is-primary" placeholder="Tulis Pesan yang ingin anda sampaikan ke kami untuk transaksi ini."></textarea>
                </div>
                <div class="field">
                    <label class="label">Yang Anda Dapat</label>
                    <div class="control has-icons-left">
                        <input class="input is-primary" type="text" placeholder="32323233232">
                        <span class="icon is-left">
                    <i class="fa fa-money"></i>
                </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="control has-text-centered">
            <button class="button is-primary">Hitung</button>
            <button class="button is-light">Tambah Transaksi</button>
        </div>
    </form>
</div>
<div class="content">
    <div class="card events-card">
        <header class="card-header">
            <p class="card-header-title">
                History Sell (Exchange)
            </p>
            <a href="#" class="card-header-icon" aria-label="more options">
                  <span class="icon">
                    <i class="fa fa-angle-down" aria-hidden="true"></i>
                  </span>
            </a>
        </header>
        <div class="card-table">
            <div class="content">
                <table class="table is-fullwidth is-striped">
                    <thead>
                    <tr>
                        <td width="5%"><i class="fa fa-bell-o"></i></td>
                        <td>Transaction ID</td>
                        <td>Nominal</td>
                        <td>From</td>
                        <td>To</td>
                        <td>Status</td>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td width="5%"><i class="fa fa-bell-o"></i></td>
                        <td><a>21982791279172</a></td>
                        <td>5 usd</td>
                        <td>Perfect Money</td>
                        <td>Bank Indonesia</td>
                        <td><a class="button is-small is-primary" href="#">Success</a></td>
                    </tr>
                    <tr>
                        <td width="5%"><i class="fa fa-bell-o"></i></td>
                        <td><a>21982791279172</a></td>
                        <td>5 usd</td>
                        <td>Paypal</td>
                        <td>Bank Mandiri</td>
                        <td><a class="button is-small is-primary" href="#">Success</a></td>
                    </tr>
                    <tr>
                        <td width="5%"><i class="fa fa-bell-o"></i></td>
                        <td><a>21982791279172</a></td>
                        <td>5 usd</td>
                        <td>Paypal</td>
                        <td>Bank Indonesia</td>
                        <td><a class="button is-small is-primary" href="#">Success</a></td>
                    </tr>
                    <tr>
                        <td width="5%"><i class="fa fa-bell-o"></i></td>
                        <td><a>21982791279172</a></td>
                        <td>5 usd</td>
                        <td>Paypal</td>
                        <td>Bank Indonesia</td>
                        <td><a class="button is-small is-warning" href="#">Waiting</a></td>
                    </tr>
                    <tr>
                        <td width="5%"><i class="fa fa-bell-o"></i></td>
                        <td><a>21982791279172</a></td>
                        <td>5 usd</td>
                        <td>Paypal</td>
                        <td>Bank Indonesia</td>
                        <td><a class="button is-small is-warning" href="#">Waiting</a></td>
                    </tr>
                    <tr>
                        <td width="5%"><i class="fa fa-bell-o"></i></td>
                        <td><a>21982791279172</a></td>
                        <td>5 usd</td>
                        <td>Paypal</td>
                        <td>Bank Indonesia</td>
                        <td><a class="button is-small is-warning" href="#">Waiting</a></td>
                    </tr>
                    <tr>
                        <td width="5%"><i class="fa fa-bell-o"></i></td>
                        <td><a>21982791279172</a></td>
                        <td>5 usd</td>
                        <td>Paypal</td>
                        <td>Bank Indonesia</td>
                        <td><a class="button is-small is-primary" href="#">Success</a></td>
                    </tr>
                    <tr>
                        <td width="5%"><i class="fa fa-bell-o"></i></td>
                        <td><a>21982791279172</a></td>
                        <td>5 usd</td>
                        <td>Paypal</td>
                        <td>Bank Indonesia</td>
                        <td><a class="button is-small is-primary" href="#">Success</a></td>
                    </tr>
                    <tr>
                        <td width="5%"><i class="fa fa-bell-o"></i></td>
                        <td><a>21982791279172</a></td>
                        <td>5 usd</td>
                        <td>Paypal</td>
                        <td>Bank Indonesia</td>
                        <td><a class="button is-small is-primary" href="#">Success</a></td>
                    </tr>
                    <tr>
                        <td width="5%"><i class="fa fa-bell-o"></i></td>
                        <td><a>21982791279172</a></td>
                        <td>5 usd</td>
                        <td>Paypal</td>
                        <td>Bank Indonesia</td>
                        <td><a class="button is-small is-primary" href="#">Success</a></td>
                    </tr>
                    <tr>
                        <td width="5%"><i class="fa fa-bell-o"></i></td>
                        <td><a>21982791279172</a></td>
                        <td>5 usd</td>
                        <td>Paypal</td>
                        <td>Bank Indonesia</td>
                        <td><a class="button is-small is-primary" href="#">Success</a></td>
                    </tr>
                    <tr>
                        <td width="5%"><i class="fa fa-bell-o"></i></td>
                        <td><a>21982791279172</a></td>
                        <td>5 usd</td>
                        <td>Paypal</td>
                        <td>Bank Indonesia</td>
                        <td><a class="button is-small is-primary" href="#">Success</a></td>
                    </tr>
                    <tr>
                        <td width="5%"><i class="fa fa-bell-o"></i></td>
                        <td><a>21982791279172</a></td>
                        <td>5 usd</td>
                        <td>Paypal</td>
                        <td>Bank Indonesia</td>
                        <td><a class="button is-small is-primary" href="#">Success</a></td>
                    </tr>
                    <tr>
                        <td width="5%"><i class="fa fa-bell-o"></i></td>
                        <td><a>21982791279172</a></td>
                        <td>5 usd</td>
                        <td>Paypal</td>
                        <td>Bank Indonesia</td>
                        <td><a class="button is-small is-primary" href="#">Success</a></td>
                    </tr>
                    <tr>
                        <td width="5%"><i class="fa fa-bell-o"></i></td>
                        <td><a>21982791279172</a></td>
                        <td>5 usd</td>
                        <td>Paypal</td>
                        <td>Bank Indonesia</td>
                        <td><a class="button is-small is-primary" href="#">Success</a></td>
                    </tr>
                    <tr>
                        <td width="5%"><i class="fa fa-bell-o"></i></td>
                        <td><a>21982791279172</a></td>
                        <td>5 usd</td>
                        <td>Paypal</td>
                        <td>Bank Indonesia</td>
                        <td><a class="button is-small is-primary" href="#">Success</a></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <footer class="card-footer">
            <a href="#" class="card-footer-item">Jika ada pertanyaan hubungi kami</a>
        </footer>
    </div>
    <div class="content">
        <table class="table table-borderless">
            <thead>
            <tr>
                <th width="10px">Status</th>
                <th>:</th>
                <th>Description</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td><a class="button is-small is-primary" href="#">Success</a></td>
                <td>:</td>
                <td>Transaksi Sukses</td>
            </tr>
            <tr>
                <td><a class="button is-small is-danger" href="#">Fraud</a></td>
                <td>:</td>
                <td>Transaksi tidak berhasil, terindikasi penipuan sehingga di batalkan.</td>
            </tr>
            <tr>
                <td><a class="button is-small is-info" href="#">Waiting</a></td>
                <td>:</td>
                <td>Menunggu Proses Pembayaran</td>
            </tr>
            <tr>
                <td><a class="button is-small is-light" href="#">Cancel</a></td>
                <td>:</td>
                <td>Transaksi dibatalkan</td>
            </tr>
            <tr>
                <td><a class="button is-small is-dark" href="#">Failed</a></td>
                <td>:</td>
                <td>Transaksi Gagal</td>
            </tr>
            </tbody>
        </table>
    </div>
</div>
@include('dashboard.footer')