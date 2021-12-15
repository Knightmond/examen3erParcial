<div class="row">
    <div wire:loading wire:target="foto" class="align-items-center">
        <strong>Cargando...</strong>
        <div class="spinner-border ms-auto" role="status" aria-hidden="true"></div>
    </div>

    <div class="mx-auto col-6">

        <div class="form-group">
            <label>Tipo</label>
            <select wire:model="actividad.tipo">
                <option value="">Seleccionar</option>
                <option value="Reparar">Reparar</option>
                <option value="Feature">Feature</option>
                <option value="Investigar">Investigar</option>
            </select>
            @error('actividad.tipo') <span class="text-danger">{{ $message }}</span>@enderror
        </div>

        <div class="form-group">
            <label>Título</label>
            <input wire:model.defer="actividad.titulo" type="text" class="form-control">
            @error('actividad.titulo') <span class="text-danger">{{ $message }}</span>@enderror
        </div>

        <div class="form-group">
            <label>Proyecto</label>
            <select wire:model.defer="actividad.id_proyecto">
                <option value="">Seleccionar</option>
                @foreach ($proyectos as $proyecto)
                    <option value="{{$proyecto->id}}">{{$proyecto->nombre_proyecto}}</option>
                @endforeach
            </select>
            @error('actividad.id_proyecto') <span class="text-danger">{{ $message }}</span>@enderror
        </div>

        <div class="form-group">
            <label>Empleado responsable</label>
            <select wire:model.defer="actividad.id_empleado">
                <option value="">Seleccionar</option>
                @foreach ($empleados as $empleado)
                    <option value="{{$empleado->id}}">{{$empleado->nombre}}</option>
                @endforeach
            </select>
            @error('actividad.id_empleado') <span class="text-danger">{{ $message }}</span>@enderror
        </div>

        <div class="form-group">
            <label>Descripcion</label>
            <textarea wire:model="actividad.descripcion" id="" cols="30" rows="10" class="form-control">
            </textarea>
            @error('actividad.descripcion') <span class="text-danger">{{ $message }}</span>@enderror
        </div>
    </div>
</div>
