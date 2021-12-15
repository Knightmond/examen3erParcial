<div>
    <form wire:submit.prevent="crear">
        <div class="card">
            <div class="card-header">
                Crear actividad
            </div>
            <div class="card-body">
                @include("livewire.actividad.actividad-formulario")
            </div>
            <div class="card-footer text-muted">
                <button wire:loading.attr="disabled" wire:target="foto" class="btn btn-success btn-sm"><i class="fa fa-save"></i> Guardar</button>
                <a href="{{ route("actividades.index") }}" class="btn btn-secondary btn-sm">Regresar</a>
            </div>
        </div>
    </form>
</div>
