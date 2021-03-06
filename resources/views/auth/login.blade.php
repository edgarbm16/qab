<x-guest-layout>

    <section class="login py-5 border-top-1">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5 col-md-8 align-item-center">
                    <div class="border " style="box-shadow: 0px 0px 15px #007bff; border:none;">
                        <h3 class="bg-gray p-4">Iniciar Sesión</h3>
                        <x-jet-validation-errors class="mb-4" />
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <fieldset class="p-4">
                                <input type="email" placeholder="Correo electrónico" class="border p-3 w-100 my-2" name="email" :value="old('email')" required autofocus  style="box-shadow: 0px 0px 3px #007bff; border: none;">
                                <input type="password" placeholder="Contraseña" class="border p-3 w-100 my-2" name="password" required autocomplete="current-password" style="box-shadow: 0px 0px 3px #007bff; border: none;">
                                <div class="loggedin-forgot">
                                        <input type="checkbox" id="keep-me-logged-in" name="remember">
                                        <label for="keep-me-logged-in" class="pt-3 pb-2">Recuérdame</label>
                                </div>
                                <button type="submit" class="d-block py-3 px-5 bg-primary text-white border-0 rounded font-weight-bold mt-3">Iniciar sesión</button>
                                <a class="mt-3 d-block  text-primary" href="{{ route('password.request') }}">¿Olvidaste tu contraseña?</a>
                                <!-- <a class="mt-3 d-inline-block text-primary" href="register.html">Register Now</a> -->
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>   


</x-guest-layout>