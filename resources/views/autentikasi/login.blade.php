<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Focus Admin: Widget</title>

    <link rel="shortcut icon" href="http://placehold.it/64.png/000/fff">
    <link rel="apple-touch-icon" sizes="144x144" href="http://placehold.it/144.png/000/fff">
    <link rel="apple-touch-icon" sizes="114x114" href="http://placehold.it/114.png/000/fff">
    <link rel="apple-touch-icon" sizes="72x72" href="http://placehold.it/72.png/000/fff">
    <link rel="apple-touch-icon" sizes="57x57" href="http://placehold.it/57.png/000/fff">

    <link href="{{ url('/template/theme') }}/css/lib/font-awesome.min.css" rel="stylesheet">
    <link href="{{ url('/template/theme') }}/css/lib/themify-icons.css" rel="stylesheet">
    <link href="{{ url('/template/theme') }}/css/lib/bootstrap.min.css" rel="stylesheet">
    <link href="{{ url('/template/theme') }}/css/lib/helper.css" rel="stylesheet">
    <link href="{{ url('/template/theme') }}/css/style.css" rel="stylesheet">
</head>

<body class="bg-primary">
    <div class="unix-login">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="login-content">
                        <div class="login-form">
                            <h4>LOGIN APLIKASI</h4>
                            <form method="POST" action="{{ url('/admin/post_login') }}">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label>Email address</label>
                                    <input type="email" name="email" class="form-control" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" name="password" class="form-control" placeholder="Password">
                                </div>
                                <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30">
                                    Sign in
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
