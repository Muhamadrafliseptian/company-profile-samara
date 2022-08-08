{{-- <!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>LOGIN APPLICATION</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="{{ url('/template') }}/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ url('/template') }}/bower_components/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ url('/template') }}/bower_components/Ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="{{ url('/template') }}/dist/css/AdminLTE.min.css">
    <link rel="stylesheet" href="{{ url('/template') }}/plugins/iCheck/square/blue.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition login-page">

    <div class="login-box">
        <br><br><br>
        <div class="login-box-body">
            <p class="login-box-msg">
                SILAHKAN LOGIN TERLEBIH DAHULU
            </p>

            <form action="{{ url('/admin/post_login') }}" method="post">
                @csrf
                <div class="form-group has-feedback">
                    <input type="email" class="form-control" name="email" placeholder="Email">
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="password" class="form-control" name="password" placeholder="Password">
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <script src="{{ url('/template') }}/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap 3.3.7 -->
    <script src="{{ url('/template') }}/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- iCheck -->
    <script src="{{ url('/template') }}/plugins/iCheck/icheck.min.js"></script>
    <script>
        $(function() {
            $('input').iCheck({
                checkboxClass: 'icheckbox_square-blue',
                radioClass: 'iradio_square-blue',
                increaseArea: '20%' // optional
            });
        });
    </script>
</body>

</html> --}}



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>LOGIN APPLICATION</title>
    <script src="https://cdn.tailwindcss.com"></script>
  </head>
  <body>
    <!-- component -->
    <div class="bg-white dark:bg-gray-900">
      <div class="flex justify-center h-screen">
        <div
          class="hidden bg-cover lg:block lg:w-2/3"
          style="
            background-image:url({{url('assets/img/log.png')}});
            background-repeat: no-repeat;
            background-size: contain;
            background-color: rgb(120, 149, 255);
          "
        >
          <div class="flex items-center h-full px-20 bg-gray-900 bg-opacity-40">
            <div>
              <h2 class="text-4xl font-bold text-white">Brand</h2>

              <p class="max-w-xl mt-3 text-gray-300">
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. In
                autem ipsa, nulla laboriosam dolores, repellendus perferendis
                libero suscipit nam temporibus molestiae
              </p>
            </div>
          </div>
        </div>

        <div class="flex items-center w-full max-w-md px-6 mx-auto lg:w-2/6">
          <div class="flex-1">
            <img src="{{ url('assets/img/new-logo.png') }}" alt="" />
            <div class="text-center">
              <h2
                class="text-2xl font-bold text-center text-gray-700 dark:text-white"
              >
                Welcome To Integrasia Utama
              </h2>

              <p class="mt-3 text-gray-500 dark:text-gray-300">
                Sign in to access your account
              </p>
            </div>

            <div class="mt-8">
              <form action="{{ url('/admin/post_login') }}" method="post">
                @csrf
                <div>
                  <label
                    for="email"
                    class="block mb-2 text-sm text-gray-600 dark:text-gray-200"
                    >Email Address</label
                  >
                  <input
                    type="email"
                    name="email"
                    id="email"
                    placeholder="example@example.com"
                    class="block w-full px-4 py-2 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-md dark:placeholder-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-700 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40"
                  />
                </div>

                <div class="mt-6">
                  <div class="flex justify-between mb-2">
                    <label
                      for="password"
                      class="text-sm text-gray-600 dark:text-gray-200"
                      >Password</label
                    >
                    <a
                      href="#"
                      class="text-sm text-gray-400 focus:text-blue-500 hover:text-blue-500 hover:underline"
                      >Forgot password?</a
                    >
                  </div>

                  <input
                    type="password"
                    name="password"
                    id="password"
                    placeholder="Your Password"
                    class="block w-full px-4 py-2 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-md dark:placeholder-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-700 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40"
                  />
                </div>

                <div class="mt-6">
                  <button type="submit"
                    class="w-full px-4 py-2 tracking-wide text-white transition-colors duration-200 transform bg-blue-500 rounded-md hover:bg-blue-400 focus:outline-none focus:bg-blue-400 focus:ring focus:ring-blue-300 focus:ring-opacity-50"
                  >
                    Sign in
                  </button>
                </div>
              </form>

              <p class="mt-6 text-sm text-center text-gray-400">
                Don&#x27;t have an account yet?
                <a
                  href="#"
                  class="text-blue-500 focus:outline-none focus:underline hover:underline"
                  >Sign up</a
                >.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
