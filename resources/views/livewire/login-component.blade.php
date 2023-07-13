<div>
    <div class="auth-wrapper">
        <div class="auth-content text-center">
            <a href="{{ route('home') }}">
                <img src="assets/images/logo.png" alt="" class="img-fluid mb-4">
            </a>
            <div class="card borderless">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="card-body" wire:ignore.self>
                            @if ($isLogin)
                            <form wire:submit.prevent='LoginUser'>
                                <h4 class="mb-3 f-w-400">Signin</h4>
                                <hr>
                                <div class="form-group mb-3">
                                    <input wire:model='email_login' type="text" class="form-control" id="Email_Login"
                                        placeholder="Email address">
                                    @error('email_login')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group mb-4">
                                    <input wire:model='password_login' type="password" class="form-control" id="Password_Login"
                                        placeholder="Password">
                                    @error('password_login')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="custom-control custom-checkbox text-left mb-4 mt-2">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                    <label class="custom-control-label" for="customCheck1">Save credentials.</label>
                                </div>
                                <button type="submit" class="btn btn-block btn-primary mb-4">Sign In</button>
                                <hr>
                                <p class="mb-2 text-muted">Forgot password? <a href="auth-reset-password.html"
                                        class="f-w-400">Reset</a></p>
                                <p class="mb-0 text-muted">Don’t have an account? <a href="javascript:void(0)"
                                        class="f-w-400" wire:click='changeLoginRegis'>Signup</a></p>
                            </form>
                            @else
                            <form action="">
                                <h4 class="f-w-400">Sign up</h4>
                                <hr>
                                <div class="form-group mb-3">
                                    <input type="text" class="form-control" id="Email_Regis"
                                        placeholder="Email address">
                                </div>
                                <div class="form-group mb-3">
                                    <input type="password" class="form-control" id="Password_Regis"
                                        placeholder="Password">
                                </div>
                                <div class="form-group mb-4">
                                    <input type="password" class="form-control" id="Co_Password_Regis"
                                        placeholder="Confirm Password">
                                </div>
                                <div class="custom-control custom-checkbox  text-left mb-4 mt-2">
                                    <input type="checkbox" class="custom-control-input" id="customCheck2">
                                    <label class="custom-control-label" for="customCheck2">Send me the <a href="#!">
                                            Newsletter</a> weekly.</label>
                                </div>
                                <button class="btn btn-primary btn-block mb-4">Sign up</button>
                                <hr>
                                <p class="mb-2">Already have an account? <a href="javascript:void(0)" class="f-w-400"
                                        wire:click='changeLoginRegis'>Signin</a></p>
                            </form>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>