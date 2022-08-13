@extends('auth.auth')
@section('content')

    <body class="hold-transition register-page">
        <div class="register-box">
            <div class="register-logo">
                <b>Management</b>&nbsp;Inventory
            </div>

            <div class="card">
                <div class="card-body register-card-body">
                    <p class="login-box-msg">Register User Baru</p>

                    <form action="../../index3.html" method="post">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Username">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-user"></span>
                                </div>
                            </div>
                        </div>
                        <select name="users" class="custom-select mb-3">
                            <option selected>Pilih User</option>
                            <option value="admin">Admin</option>
                            <option value="user">Pegawai</option>
                        </select>
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
                                <button type="submit" class="btn btn-primary btn-block">Register</button>
                            </div>
                            <!-- /.col -->
                        </div>
                    </form>
                    <!-- /.social-auth-links -->
                    <p class="mt-2">
                        <a href="/auth/login" class="text-center">Sudah Mempunyai Akun?</a>
                    </p>
                </div>
                <!-- /.login-card-body -->
            </div>
        </div>

    </body>
@endsection
