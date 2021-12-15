<div wire:init="cargando"> {{--Root element--}}

    <div class="row justify-content-between">
        <div class="col-md-4 col-sm-12">
            <div class="mb-3 input-group">
                <span class="input-group-text" id="basic-addon1"><i class="fa fa-search"></i></span>
                <input wire:model="search" type="search" class="form-control" placeholder="Buscar..."
                    aria-label="Username" aria-describedby="basic-addon1">
            </div>
        </div>

        <div class="col-md-8 col-sm-12">
            <div class="mb-2">
                <a href="{{ route('actividades.create') }}" type="button" class="btn-sm btn btn-success"><i
                        class="fa fa-tasks"></i> Crear nueva</a>
            </div>
        </div>
    </div>

    @if (count($actividades) > 0)
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                    <th scope="col">Tipo</th>
                    <th scope="col">Título</th>
                    <th scope="col">Proyecto</th>
                    <th scope="col">Empleado responsable</th>
                    <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($actividades as $actividad)
                        <tr>
                            <td>{{$actividad->tipo}}</td>
                            <td>{{$actividad->titulo}}</td>
                            <td>{{$actividad->proyecto_actividad}}</td>
                            <td>{{$actividad->nombre_responsable}}</td>
                            <td>
                                <a href="{{ route('actividades.read', $actividad) }}" title="Mostrar más"
                                    class="btn-sm btn btn-info"><i class="text-white fa fa-id-card"></i></a>
                                <a href="{{ route('actividades.edit', $actividad) }}" title="Editar Actividad"
                                    class="btn-sm btn btn-primary"><i class="fa fa-edit"></i></a>
                                <a href="{{ route('actividades.delete', $actividad) }}" title="Eliminar actividad seleccionada"
                                    class="btn-sm btn btn-danger"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @else
        <img class="mx-auto d-block" style="margin-top:4rem;width: 200px;height:200px;"
            src="{{ Storage::disk('public')->url('images/otros/loading.gif') }}" alt="">
    @endif
    {{ $cargado == true ? $actividades->links() : null }}
</div> {{--Root element--}}

