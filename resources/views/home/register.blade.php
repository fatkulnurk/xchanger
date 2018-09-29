<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registration</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <!-- Bulma Version 0.7.1-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.1/css/bulma.min.css" />
    <link href="{{ asset('css/login.css') }}" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="../css/login.css">
</head>

<body>
<section class="hero is-success is-fullheight">
    <div class="hero-body">
        <div class="container">
            <div class="column is-4 is-offset-4 box">
                <div class="has-text-centered">
                    <h3 class="title has-text-grey">Register</h3>
                    <p class="subtitle has-text-grey"></p>
                </div>
                <form>
                    <div class="field">
                        <label class="label">First Name</label>
                        <div class="control">
                            <input class="input is-large" type="email" placeholder="First Name" autofocus="">
                        </div>
                    </div>
                    <div class="field">
                        <label class="label">Middle Name (Optional)</label>
                        <div class="control">
                            <input class="input is-large" type="email" placeholder="Middle Name" autofocus="">
                        </div>
                    </div>
                    <div class="field">
                        <label class="label">Last Name (Optional)</label>
                        <div class="control">
                            <input class="input is-large" type="email" placeholder="Last Name" autofocus="">
                        </div>
                    </div>
                    <div class="field">
                        <label class="label">Email</label>
                        <div class="control">
                            <input class="input is-large" type="email" placeholder="Your Email" autofocus="">
                        </div>
                    </div>
                    <div class="field">
                        <label class="label">Phone Number (optional)</label>
                        <div class="control">
                            <input class="input is-large" type="text" placeholder="Phone Number" autofocus="">
                        </div>
                    </div>
                    <div class="field">
                        <label class="label">Gender</label>
                        <div class="control">
                            <input class="input is-large" type="email" placeholder="Your Email" autofocus="">
                        </div>
                    </div>
                    <div class="field">
                        <label class="label">Birthday</label>
                        <div class="control">
                            <input class="input is-large" type="date" autofocus="">
                        </div>
                    </div>
                    <div class="field">
                        <label class="label">Country</label>
                        <div class="control">
                            <input class="input is-large" type="email" placeholder="Your Email" autofocus="">
                        </div>
                    </div>
                    <hr class="has-background-primary">

                    <div class="field">
                        <label class="label">Password</label>
                        <div class="control">
                            <input class="input is-large" type="password" placeholder="Your Password">
                        </div>
                    </div>
                    <div class="field">
                        <label class="label">Pin (7 digit)</label>
                        <div class="control">
                            <input class="input is-large" type="password" placeholder="Your Pin">
                        </div>
                    </div>
                    <div class="field">
                        <label class="checkbox">
                            <input type="checkbox">
                            Remember me
                        </label>
                    </div>
                    <button class="button is-block is-info is-large is-fullwidth">Daftar</button>
                </form>
            </div>

            <p class="has-text-grey has-text-centered">
                <a href="../">Buat Akun</a> &nbsp;·&nbsp;
                <a href="../">Lupa kata sandi</a> &nbsp;·&nbsp;
                <a href="../">Bantuan?</a>
            </p>
        </div>
    </div>
</section>
<script async type="text/javascript" src="../js/bulma.js"></script>
</body>

</html>