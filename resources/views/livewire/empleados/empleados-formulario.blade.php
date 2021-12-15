<div class="row">
    <div wire:loading wire:target="foto" class="align-items-center">
        <strong>Cargando...</strong>
        <div class="spinner-border ms-auto" role="status" aria-hidden="true"></div>
    </div>

    <div class="col-4">
        @if ($foto != null)
            <img style="border-radius:230px;width:230px;height:230px;" src="{{ $foto->temporaryUrl() }}" alt="">
        @else
            <img style="border-radius:230px;width:230px;height:230px;"
            src="{{ Storage::disk("public")->url($empleado->foto ? $empleado->foto : "images/empleados/default.png") }}" alt="">
        @endif

        <form>
            <div class="form-group">
                <label for="uploadPhoto">Subir foto</label>
                <input wire:model="foto" type="file" class="form-control-file" id="uploadPhoto">
                @error("foto") <span class="text-danger">{{ $message }}</span>@enderror
            </div>
        </form>
    </div>

    <div class="mx-auto col-6">

        <div class="form-group">
            <label>Nombre</label>
            <input wire:model.defer="empleado.nombre" type="text" class="form-control">
            @error('empleado.nombre') <span class="text-danger">{{ $message }}</span>@enderror
        </div>

        <div class="form-group">
            <label>Apellido</label>
            <input wire:model.defer="empleado.apellido" type="text" class="form-control">
            @error('empleado.apellido') <span class="text-danger">{{ $message }}</span>@enderror
        </div>

        <div class="form-group">
            <label>Correo electrónico</label>
            <input wire:model.defer="empleado.email" type="email" class="form-control">
            @error('empleado.email') <span class="text-danger">{{ $message }}</span>@enderror
        </div>

        <div class="form-group">
            <label>Rol o puesto</label>
            <input wire:model.defer="empleado.rol" type="text" class="form-control">
            @error('empleado.rol') <span class="text-danger">{{ $message }}</span>@enderror
        </div>

        <div class="form-group">
            <label>Contraseña</label>
            <input autocomplete="new-password" wire:model="password" type="password" class="form-control">
            @error('password') <span class="text-danger">{{ $message }}</span>@enderror
        </div>

        <div class="form-group">
            <label>Confirmar contraseña</label>
            <input wire:model="confirmar_password" type="password" class="form-control">
            @error('confirmar_password') <span class="text-danger">{{ $message }}</span>@enderror
        </div>
    </div>
</div>
