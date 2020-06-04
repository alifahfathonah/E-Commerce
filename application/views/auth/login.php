<!DOCTYPE html>
<html>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<head>
    <meta charset="utf-8">
    <title>Login </title>
    <style media="screen">
        #particles-js {
            background-image: url('<?= base_url(); ?>assets/images/efrf.png');
            height: 100vh;
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
            top: 50px;
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

            <?= $this->session->flashdata('message'); ?>
            <h3>Login</h3>
            <form class="form-signin" method="post" action="<?= base_url('auth'); ?>">
                <div>
                    <br>
                    <input type="text" name="email" placeholder="email" autocomplete="off">
                    <br>
                    <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>

                <div>
                    <br>
                    <input type="password" name="password" placeholder="Password">
                    <br>
                    <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                </div><br>


                <input type="submit" name="" value="Login">

                <a href=" <?= base_url('home/'); ?>" class="btn btn-block btn-outline-danger mt-5">
                    Back to Home</a>

            </form>

        </div>
    </div>

</body>

</html>