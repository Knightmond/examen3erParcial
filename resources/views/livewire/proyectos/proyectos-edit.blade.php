<div>
    <form wire:submit.prevent="editar">
        <div class="card">
            <div class="card-header">
                Editar proyecto
            </div>
            <div class="card-body">
                @include("livewire.proyectos.proyectos-formulario")
            </div>
            <div class="card-footer text-muted">
                <button wire:loading.attr="disabled" wire:target="foto" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i> Editar</button>
                <a href="{{ route("proyectos.index") }}" class="btn btn-secondary btn-sm">Regresar</a>
            </div>
        </div>
    </form>
</div>
