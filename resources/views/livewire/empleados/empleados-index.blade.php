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
                <a href="{{ route('empleados.create') }}" type="button" class="btn-sm btn btn-success"><i
                        class="fa fa-user-plus"></i> Crear nuevo</a>
            </div>
        </div>
    </div>

    @if (count($empleados) > 0)
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                    <th>Foto</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido</th>
                    <th scope="col">Correo electrónico</th>
                    <th scope="col">Rol</th>
                    <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($empleados as $empleado)
                        <tr>
                            <th>
                                <img style="border-radius:35px;width: 35px;height:35px;"
                                    src="{{Storage::disk("public")->url($empleado->foto ? $empleado->foto : 'images/empleados/default.png') }}" alt="">
                            </th>
                            <td>{{$empleado->nombre}}</td>
                            <td>{{$empleado->apellido}}</td>
                            <td>{{$empleado->email}}</td>
                            <td>{{$empleado->rol}}</td>
                            <td>
                                <a href="{{ route('empleados.read', $empleado) }}" title="Mostrar más"
                                    class="btn-sm btn btn-info"><i class="text-white fa fa-id-card"></i></a>
                                <a href="{{ route('empleados.edit', $empleado) }}" title="Editar perfil"
                                    class="btn-sm btn btn-primary"><i class="fa fa-edit"></i></a>
                                <a href="{{ route('empleados.delete', $empleado) }}" title="Eliminar perfil seleccionado más"
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
    {{ $cargado == true ? $empleados->links() : null }}
</div> {{--Root element--}}
