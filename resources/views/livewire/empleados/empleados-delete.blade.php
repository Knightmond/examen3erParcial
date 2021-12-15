<div>
    <div class="row mx-auto text-center">
        <div class="col-lg-3"></div>
        <div class="col-lg-6 col-sm-12">
            <div class="card mb-3">
                <div class="row g-0">
                    <div class="col-lg-4 text-center">
                        <img
                        style="width:200px;height:200px;"
                        src="{{ Storage::disk('public')->url($empleado->foto ? $empleado->foto : 'images/empleados/default.png') }}"
                        class="m-1 img-fluid rounded-circle">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body mb-3">
                        <h5 class="card-title">{{$empleado->nombre." ".$empleado->apellido}}</h5>
                        <p class="card-text">Correo: {{$empleado->email}}</p>
                        <p class="card-text">Rol: {{$empleado->rol}}</p>
                        </div>
                        <div class="card-footer">
                            <button wire:click="delete" class="btn btn-danger btn-sm">Eliminar</button>
                            <a href="{{route('empleados.index')}}" class="btn btn-secondary btn-sm">Cancelar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3"></div>
    </div>
</div>
