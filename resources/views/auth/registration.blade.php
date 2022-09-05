@extends('auth.auth')
@section('content')

    <body class="hold-transition register-page">
        <div class="register-box">
            <div class="register-logo">
                <b>Management</b>&nbsp;Inventory
            </div>

            <div class="card p-0">
                <div class="card-body register-card-body m-auto">
                    <p class="login-box-msg">Register User Baru</p>
                    <form action="{{ route('register.custom') }}" method="post">
                        @csrf
                        {{-- Name --}}
                        <div class="input-group mb-3">
                            <input type="text" placeholder="Name" id="name" class="form-control" name="name"
                                required autofocus>
                            @if ($errors->has('name'))
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                            @endif
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-user"></span>
                                </div>
                            </div>
                        </div>
                        {{-- EMail --}}
                        <div class="input-group mb-3">
                            <input type="text" placeholder="Email" id="email_address" class="form-control" name="email"
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
                        <div class="input-group mb-3">
                            <input type="password" placeholder="Password" id="password" class="form-control"
                                name="password" required>
                            @if ($errors->has('password'))
                                <span class="text-danger">{{ $errors->first('password') }}</span>
                            @endif
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-user-lock"></span>
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
                    <p class="mt-2">
                        <a href="login" class="text-center">Sudah Mempunyai Akun?</a>
                    </p>
                </div>
                <!-- /.social-auth-links -->
            </div>
            <!-- /.login-card-body -->
        </div>
        </div>

    </body>
@endsection
