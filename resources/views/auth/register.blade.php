<x-guest-layout>
    <section class="login py-5 border-top-1">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5 col-md-8 align-item-center">
                    <div class="border border">
                        <h3 class="bg-gray p-4">CREAR TU CUENTA</h3>
                        <x-jet-validation-errors class="mb-4" />
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <fieldset class="p-4">
                                <input type="text" placeholder="{{ __('Name') }}" class="border p-3 w-100 my-2" name="name" :value="old('name')" required autofocus autocomplete="name" >
                                <input type="email" placeholder="{{ __('Email') }}" class="border p-3 w-100 my-2" name="email" :value="old('email')" required>
                                <input type="password" placeholder="{{ __('Password') }}" class="border p-3 w-100 my-2" name="password" required autocomplete="new-password" >
                                <input type="password" placeholder="{{ __('Confirm Password') }}" class="border p-3 w-100 my-2" name="password_confirmation" required autocomplete="new-password" >
                                <div class="mt-4">
                                    {!! htmlFormSnippet() !!}
                                </div>
                                <div class="loggedin-forgot d-inline-flex my-3">
                                        <!-- <input type="checkbox" id="registering" class="mt-1"> -->
                                        <!-- <label for="registering" class="px-2">By registering, you accept our <a class="text-primary font-weight-bold" href="terms-condition.html">Terms & Conditions</a></label> -->
                                        <label for="registering" class="px-2"> <a class="text-primary font-weight-bold" href="{{ route('login') }}">{{ __('Already registered?') }}</a></label>
                                </div>
                                <button type="submit" class="d-block py-3 px-4 bg-primary text-white border-0 rounded font-weight-bold"> Registrar </button>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-guest-layout>