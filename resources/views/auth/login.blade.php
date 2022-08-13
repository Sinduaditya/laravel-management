@extends('auth.auth')
@section('content')

    <body class="hold-transition login-page">
        <div class="login-box">
            <div class="login-logo">
                <b>Management</b>&nbsp;Inventory
            </div>
            <!-- /.login-logo -->
            <div class="card">
                <div class="card-body login-card-body">
                    <p class="login-box-msg">Login Untuk Memulai Pengelolaan</p>

                    <form action="../../index3.html" method="post">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Username">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-user"></span>
                                </div>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <input type="password" class="form-control" placeholder="Password">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-lock"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <!-- /.col -->
                            <div class="col-4">
                                <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                            </div>
                            <!-- /.col -->
                        </div>
                    </form>
                    <!-- /.social-auth-links -->
                    <p class="mt-2">
                        <a href="/auth/register" class="text-center">Daftar Akun Baru</a>
                    </p>
                </div>
                <!-- /.login-card-body -->
            </div>
        </div>
    </body>
@endsection
