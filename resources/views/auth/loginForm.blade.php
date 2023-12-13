@include('layouts/link')

<body class="hold-transition register-page">

    <div class="login-box ">
        <!-- /.login-logo -->
        <div class="card card-outline card-primary">
            <div class="card-header text-center">
                <a href="../../index2.html" class="h1"><b>Médico</b>APP</a>
            </div>
            <div class="card-body">
                <p class="login-box-msg">Connectez-vous pour démarrer votre session !</p>
                <h5 class="container">
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">{{ $message }}</div>
                    @endif
                </h5>
                <form autocomplete="off" action="{{ url('login') }}" method="POST">
                    @csrf
                    {{-- <div class="input-group mb-3">
                        <input type="text" name="name" class="form-control" placeholder="Nom" required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                    </div> --}}

                    <div class="input-group mb-3">
                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                            value="{{ old('email') }}" required autocomplete="off" autofocus placeholder="Email">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" name="password"
                            class="form-control @error('password') is-invalid @enderror" placeholder="Password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="row">

                        <!-- /.col -->
                        <div class="col-6">
                            <button type="submit" class="btn btn-primary btn-block">Se connecter</button>
                        </div>
                        <!-- /.col -->
                        <!-- /.col -->
                        <div class="col-6">
                            <a href="/registerForm" class="text-center btn btn-primary">Creer un compte</a>
                            
                        </div>
                        <!-- /.col -->
                    </div>
                </form>

                <p class="mb-0">                
                    <a href="/resetPasswordForm" class="text-center">Mot de passe oublié</a>
                </p>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
    <!-- /.login-box -->
</body>
