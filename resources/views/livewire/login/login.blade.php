<div>
    <div class="row">
        <div class="mx-auto col-md-5">
            <form wire:submit.prevent="login">
                <div class="mb-3">
                    <label class="form-label">Correo eletrónico</label>
                    <input type="email" wire:model="email" class="form-control" placeholder="example@gmail.com">
                    @error("email") <span class="text-danger">{{$message}}</span> @enderror
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                    <label class="form-label">Contraseña</label>
                    <input type="password" wire:model="password" class="form-control" placeholder="********">
                    @error("password") <span class="text-danger">{{$message}}</span> @enderror
                </div>
                <button type="submit" class="btn btn-primary">Iniciar sesion</button>
            </form>
        </div>
    </div>
</div>
