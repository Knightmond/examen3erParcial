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
            src="{{ Storage::disk("public")->url($proyecto->foto ? $proyecto->foto : "images/proyectos/default.png") }}" alt="">
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
            <label>Nombre del proyecto</label>
            <input wire:model.defer="proyecto.nombre_proyecto" type="text" class="form-control">
            @error('proyecto.nombre_proyecto') <span class="text-danger">{{ $message }}</span>@enderror
        </div>

        <div class="form-group">
            <label>Fecha de inicio</label>
            <input wire:model.defer="proyecto.fecha_inicio" type="date" class="form-control">
            @error('proyecto.fecha_inicio') <span class="text-danger">{{ $message }}</span>@enderror
        </div>

        <div class="form-group">
            <label>Fecha de finalización</label>
            <input wire:model.defer="proyecto.fecha_final" type="date" class="form-control">
            @error('proyecto.fecha_final') <span class="text-danger">{{ $message }}</span>@enderror
        </div>

        <div class="form-group">
            <label>Progreso</label>
            <input wire:model.defer="proyecto.progreso" type="number" max="100" class="form-control">
            @error('proyecto.progreso') <span class="text-danger">{{ $message }}</span>@enderror
        </div>

        <div class="form-group">
            <label>Estado</label>
            <select wire:model="proyecto.estado" class="form-control">
                <option value="">Seleccionar</option>
                <option value="En progreso">En progreso</option>
                <option value="Pendiente">Pendiente</option>
                <option value="Terminado">Terminado</option>
                <option value="Cancelado">Cancelado</option>
            </select>
            @error('proyecto.estado') <span class="text-danger">{{ $message }}</span>@enderror
        </div>
    </div>
</div>
