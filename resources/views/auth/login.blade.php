@extends('auth.auth')
@section('content')

    <body class="hold-transition login-page">
        <div class="login-box">
            <div class="login-logo">
                <b>Management</b>&nbsp;Inventory
            </div>
            <!-- /.login-logo -->
            <div class="card p-0">
                <div class="card-body login-card-body ">
                    <h5 class="login-box-msg">Login Untuk Memulai Pengelolaan</h5>

                    <form method="POST" action="{{ route('login.custom') }}">
                        @csrf
                        <div class="input-group mb-3 p-0">
                            <input type="text" placeholder="Email" id="email" class="form-control" name="email"
                                required autofocus>
                            @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                            @endif
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-mail-bulk"></span>
                                </div>
                            </div>
                        </div>
                        <div class="input-group mb-3 p-0">
                            <input type="password" placeholder="Password" id="password" class="form-control"
                                name="password" required>
                            @if ($errors->has('password'))
                                <span class="text-danger">{{ $errors->first('password') }}</span>
                            @endif
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
                        <a href="{{ route('register-user') }}" class="text-center">Daftar Akun Baru</a>
                    </p>
                </div>
                <!-- /.login-card-body -->
            </div>
        </div>
    </body>
@endsection
