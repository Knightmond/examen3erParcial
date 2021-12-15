<div>
    <div class="row mx-auto">
        <div class="col-lg-3"></div>
        <div class="col-lg-6 col-sm-12">
            <div class="card mb-3">
                <div class="row g-0">
                    <div class="col-lg-4 text-center">
                        <img
                        style="width:200px;height:200px;"
                        src="{{ Storage::disk('public')->url($proyecto->foto ? $proyecto->foto : 'images/proyectos/default.png') }}"
                        class="m-1 img-fluid rounded-circle">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body mb-2">
                        <h5 class="card-title">{{$proyecto->nombre_proyecto}}</h5>
                        <p class="card-text">Inicio: {{$proyecto->fecha_inicio}}</p>
                        <p class="card-text">Fecha límite: {{$proyecto->fecha_final}}</p>
                        <p class="card-text">Progreso: {{$proyecto->progreso}}%</p>
                        <p class="card-text">Estado: {{$proyecto->estado}}</p>
                        </div>
                        <div class="card-footer">
                            <a href="{{ route('proyectos.index') }}" class="btn btn-primary d-block"><i class="fa fa-home"></i> Regresar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3"></div>
    </div>
</div>
