

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Vdc</title>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <!-- style css -->

    <link rel="stylesheet" href="/assets/css/style.css">
</head>
<boyd>
<div class="auth-page">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12">
                <div class="card-box">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 pr-0">
                            <div class="auth-box p-4">
                                <div class="auth-logo mb-3">
                                    <img src="./assets/images/auth-logo.svg">
                                </div>
                                <div class="auth-title mb-2">
                                    <h2 class="mb-1">Sign in</h2>
                                    <h3 class="mb-0">Get started with the  Sales Portal</h3>
                                </div>
                                <div class="auth-form">
                                    <form novalidate method="POST" action="{{ route('login_response') }}">
                                        @csrf
                                        @if($errors->any())
                                            <div class="alert alert-danger">{{$errors->first()}}</div>
                                        @endif
                                        <div class="row">
                                            <div class="col-sm">

                                                <div class="form-field">
                                                    <div class="form-field__control">
                                                        <label for="email" class="form-field__label">Email</label>
                                                        <input id="email" type="email" class="form-field__input @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                                        @error('message')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm">
                                                <div class="form-field mb-3">
                                                    <div class="form-field__control">
                                                        <label for="password" class="form-field__label">Password</label>
                                                        <input id="password" type="password" class="form-field__input @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                                        @error('message')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror                                                        <button class="password-show">
                                                            <img src="./assets/images/Icon awesome-eye-slash.svg">
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm">
                                                <div class="forgot-link">
                                                  @if (Route::has('password.request'))

                                                      <a class="btn btn-link" href="{{ route('password.request') }}">
                                                          {{ __('Forgot Your Password?') }}
                                                      </a>
                                                  @endif
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-4">
                                            <div class="col-sm">
                                                <button type="submit" class="btn btn-admin w-100">Sign in</a>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm">
                                                <div class="auth-line-link">
                                                    <p class="mb-0">Don't have an account?
                                                        <a href="/register">Sign Up!</a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 pl-0">
                            <div class="login-content p-4">
                                <div class="login-check text-center p-5">
                                    <img src="./assets/images/login-check.svg">
                                </div>
                                <div class="login-text">
                                    <p>Sales Portal.</p>
                                    <ul>
                                        <li>Easy To use</li>
                                        <li>Esay access to your clients</li>
                                        <li>and more</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


</boyd>
<script src="/assets/js/jquery-3.5.1.min.js"></script>

<!-- Bootstrap js -->
<script src="/assets/js/bootstrap.min.js"></script>
<script src="/assets/js/bootstrap.bundle.min.js"></script>

<script src="/assets/js/form.js"></script>
</html>
