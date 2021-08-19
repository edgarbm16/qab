
<x-guest-layout>

    <section class="login py-5 border-top-1">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5 col-md-8 align-item-center">
                    <div class="border">
                        <h3 class="bg-gray p-4">Recuperar contraseña</h3>   
                        @if (session('status'))
                            <div class="mb-4 font-medium text-sm text-green-600">
                                {{ session('status') }}
                            </div>
                        @endif                  
                        <x-jet-validation-errors class="mb-4" />
                        <form method="POST" action="{{ route('password.email') }}">
                            @csrf
                            <fieldset class="p-4">
                                <div class="loggedin-forgot">
                                    <label for="keep-me-logged-in" class="pt-3 pb-2" style="text-align:center;"> {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}</label>
                                </div>
                                <input type="email" placeholder="{{ __('Email') }}" class="border p-3 w-100 my-2" name="email" :value="old('email')" required autofocus>
                                <button type="submit" class="d-block py-3 px-5 bg-primary text-white border-0 rounded font-weight-bold mt-3"> {{ __('Email Password Reset Link') }}</button>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>   


</x-guest-layout>