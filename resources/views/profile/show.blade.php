<x-guest-layout>

  <div>
        <section class="section" >
            <!-- Container Start -->
            <div class="container">
            <div class="row">
                <div class="col-md-12">
                <!-- Section title -->
                <div class="section-title">
                    <h2>Mi perfil</h2>
                    <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis, provident!</p> -->
                </div>
                <div class="row">
                <div class="col-lg-3 offset-lg-0 col-md-5 offset-md-1 col-sm-6 col-6">
                    <div class="category-block">
                        <div class="header">
                        <!-- <i class="fa fa-briefcase icon-bg-5"></i>  -->
                        <h4>{{ __('Profile Information') }}</h4>
                        <p>{{ __('Update your account\'s profile information and email address.') }}</p>
                        </div>
                            <ul class="category-list" >
                            <form action="">
                                <label for="name">{{ __('Name') }}</label>
                                <input id="name" type="text"class="border p-3 w-100 my-2" wire:model.defer="state.name" autocomplete="name" >
                                <label for="email">{{ __('Email') }}</label>
                                <input id="email" type="email" class="border p-3 w-100 my-2"  wire:model.defer="state.email" >
                                <button type="submit" class="d-block py-3 px-5 bg-dark text-white border-0 rounded font-weight-bold mt-3">
                                {{ __('Save') }}</button>
                            </form>
                        </ul>
                    </div>
                    </div> <!-- /Category List -->
                    <div class="col-lg-3 offset-lg-0 col-md-5 offset-md-1 col-sm-6 col-6">
                    <div class="category-block">
                        <div class="header">
                        <!-- <i class="fa fa-briefcase icon-bg-5"></i>  -->
                        <h4>{{ __('Update Password') }}</h4>
                        <p>{{ __('Ensure your account is using a long, random password to stay secure.') }}</p>
                        </div>
                            <ul class="category-list" >
                            <form action="">
                                <label for="current_password">{{ __('Current Password') }}</label>
                                <input type="password" id="current_password" class="border p-3 w-100 my-2" name="password" wire:model.defer="state.current_password" autocomplete="current-password" >
                                <label for="password">{{ __('New Password') }}</label>
                                <input id="password" type="password" class="border p-3 w-100 my-2" wire:model.defer="state.password" autocomplete="new-password" >
                                <label for="password_confirmation">{{ __('Confirm Password') }}</label>
                                <input id="password_confirmation" type="password" class="border p-3 w-100 my-2" wire:model.defer="state.password_confirmation" autocomplete="new-password" >
                                <button type="submit" class="d-block py-3 px-5 bg-dark text-white border-0 rounded font-weight-bold mt-3">
                                {{ __('Save') }}</button>
                            </form>
                            </ul>
                        </ul>
                    </div>
                    </div> <!-- /Category List -->
                    <div class="col-lg-3 offset-lg-0 col-md-5 offset-md-1 col-sm-6 col-6">
                    <div class="category-block">
                        <div class="header">
                        <!-- <i class="fa fa-briefcase icon-bg-5"></i>  -->
                        <h4>{{ __('Two Factor Authentication') }}</h4>
                        <p>   {{ __('Add additional security to your account using two factor authentication.') }}</p>
                        </div>
                            <ul class="category-list" >
                            <h4>{{ __('You have not enabled two factor authentication.') }}</h4>
                            <p> {{ __('When two factor authentication is enabled, you will be prompted for a secure, random token during authentication. You may retrieve this token from your phone\'s Google Authenticator application.') }}</p>
                            <!-- <i class="fa fa-laptop icon-bg-1"><p>Windows - Chrome 127.0.0.1, Este dispositivo</p></i>  -->
                            <button type="submit" class="d-block py-3 px-5 bg-dark text-white border-0 rounded font-weight-bold mt-3">
                            {{ __('Enable') }}</button>
                            </ul>
                        </ul>
                    </div>
                    </div> <!-- /Category List -->
                    <!-- Category list -->
                    <div class="col-lg-3 offset-lg-0 col-md-5 offset-md-1 col-sm-6 col-6">
                    <div class="category-block">
                        <div class="header">
                        <!-- <i class="fa fa-briefcase icon-bg-5"></i>  -->
                        <h4>{{ __('Browser Sessions') }}</h4>
                        <p> {{ __('Administre y cierre la sesión de sus sesiones activas en otros navegadores y dispositivos.') }}</p>
                        </div>
                            <ul class="category-list" >
                            <p>{{ __('Si es necesario, puede cerrar la sesión de todas las demás sesiones de su navegador en 
                                todos sus dispositivos. Algunas de sus sesiones recientes se enumeran a continuación; 
                                sin embargo, esta lista puede no ser exhaustiva. Si cree que su cuenta se ha visto comprometida, 
                                también debe actualizar su contraseña.') }}</p>
                            <i class="fa fa-laptop icon-bg-1"><p>Windows - Chrome 127.0.0.1, Este dispositivo</p></i> 
                            <button type="submit" class="d-block py-3 px-5 bg-dark text-white border-0 rounded font-weight-bold mt-3">
                            {{ __('Cerrar sesión en otras sesiones del navegador') }}</button>
                            </ul>
                        </ul>
                    </div>
                    </div> <!-- /Category List -->
                    <!-- Category list -->
                <div class="col-lg-3 offset-lg-0 col-md-5 offset-md-1 col-sm-6 col-6">
                            <div class="category-block">
                                <div class="header">
                                <!-- <i class="fa fa-laptop icon-bg-1"></i>  -->
                                <h4>Borrar cuenta</h4>
                                <p>Elimina permanentemente tu cuenta.</p>
                                </div>
                                <ul class="category-list" >
                                <p>Una vez que se elimine su cuenta, todos sus recursos y datos se eliminarán permanentemente.
                                    Antes de eliminar su cuenta, descargue cualquier dato o información que desee conservar.</p>
                                <button type="submit" class="d-block py-3 px-5 bg-danger text-white border-0 rounded font-weight-bold mt-3">
                                {{ __('Delete Account') }}</button>
                                </ul>
                            </div>
                    </div> 
                </div>
                </div>
            </div>
            </div>
            <!-- Container End -->
        </section>

  </div>
    
</x-guest-layout>