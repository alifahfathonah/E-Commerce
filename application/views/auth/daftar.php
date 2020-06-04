<!DOCTYPE html>
<html>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<head>
    <meta charset="utf-8">
    <title>Daftar</title>
    <style media="screen">
        #particles-js {
            background-image: url('<?= base_url(); ?>assets/images/efrf.png');
            height: 120vh;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }

        body {
            width: 100%;
            font: normal 16px Arial, Helvetica, sans-serif;
            color: #333;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        #login {
            background: #fff;
            opacity: 0.9;
            padding: 2em;
            position: absolute;
            top: 20px;
            box-shadow: 5px 5px 3px #6BCEF9;
            left: 150px;
        }

        #login h3 {
            color: #555555;
        }

        #login input[type="text"],
        #login input[type="password"] {
            padding: 20px;
            margin-bottom: 20px;
            border: none;

            border-bottom: 1px solid #5FBDF9;
        }

        #login input[type="submit"] {
            padding: 10px;
            background: #6BCEF9;
            color: #fff;
            border: none;
            opacity: 1;
            display: block;

            float: right;
        }
    </style>
</head>

<body>
    <div id="particles-js">
        <div id="login" class="border-left border-info border-top  rounded">
            <h3>Daftar</h3>
            <form method="post" action="<?= base_url('auth/registration'); ?>">
                <div>
                    <br>
                    <input type="text" name="nama_user" placeholder="Full Name" autocomplete="off">
                    <?= form_error('nama_user', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div>
                    <br>
                    <input type="text" name="email" placeholder="Email" autocomplete="off">
                    <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>

                <div>
                    <br>
                    <input type="password" name="password1" id="password" placeholder="Password">
                    <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                    <div>

                        <input type="password" name="password2" id="password" placeholder="Password">
                        <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>

                        <div>

                        </div><br>

                        <input type="submit" name="submit" value="Login">
            </form>
        </div>
    </div>

</body>

</html>