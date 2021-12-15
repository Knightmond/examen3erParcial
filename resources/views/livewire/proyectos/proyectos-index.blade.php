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
                <a href="{{ route('proyectos.create') }}" type="button" class="btn-sm btn btn-success"><i
                        class="fa fa-project-diagram"></i> Crear nuevo</a>
            </div>
        </div>
    </div>

    @if (count($proyectos) > 0)
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                    <th>Foto</th>
                    <th scope="col">Nombre del proyecto</th>
                    <th scope="col">Fecha de inicio</th>
                    <th scope="col">Fecha de finalización</th>
                    <th scope="col">Progreso</th>
                    <th scope="col">Estado</th>
                    <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($proyectos as $proyecto)
                        <tr>
                            <th>
                                <img style="border-radius:35px;width: 35px;height:35px;"
                                    src="{{Storage::disk("public")->url($proyecto->foto ? $proyecto->foto : 'images/proyectos/default.png') }}" alt="">
                            </th>
                            <td>{{$proyecto->nombre_proyecto}}</td>
                            <td>{{$proyecto->fecha_inicio}}</td>
                            <td>{{$proyecto->fecha_final}}</td>
                            <td>{{$proyecto->progreso}}</td>
                            <td>{{$proyecto->estado}}</td>
                            <td>
                                <a href="{{ route('proyectos.read', $proyecto) }}" title="Mostrar más"
                                    class="btn-sm btn btn-info"><i class="text-white fa fa-eye"></i></a>
                                <a href="{{ route('proyectos.edit', $proyecto) }}" title="Editar perfil"
                                    class="btn-sm btn btn-primary"><i class="fa fa-edit"></i></a>
                                <a href="{{ route('proyectos.delete', $proyecto) }}" title="Eliminar perfil seleccionado más"
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
    {{ $cargado == true ? $proyectos->links() : null }}
</div> {{--Root element--}}
