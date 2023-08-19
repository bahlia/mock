<div class="container">
    <h1 class="my-5">Crear Licitacion</h1>
    <div class="row">
        <div class="col-6">
            <div class="form-floating">
                <input wire:model="title" type="text" class="form-control bg-white" id="title" placeholder="Enter email" name="email">
                <label for="title">Titulo</label>
            </div>
        </div>
        <div class="col-6">
            <div class="form-floating">
                <textarea wire:model="description" class="form-control bg-white" row="20" id="comment" name="text" placeholder="Comment goes here"></textarea>
                <label for="comment">Descripcion</label>
            </div>
        </div>
        <div class="col-6">
            <div class="form-floating mb-3 mt-3">
                <input wire:model="from" type="date" class="form-control bg-white" id="date_from" placeholder="Enter email" name="email">
                <label for="date_from">Fecha de inicio</label>
            </div>
        </div>
        <div class="col-6">
            <div class="form-floating mb-3 mt-3">
                <input wire:model="to" type="date" class="form-control bg-white" id="date_to" placeholder="Enter email" name="email">
                <label for="date_to">Fecha de culminacion</label>
            </div>
        </div>
        <div class="col-3">
            <div class="form-floating mb-3">
                <input wire:model="value" type="number" class="form-control bg-white" id="date_to" placeholder="Enter email" name="email">
                <label for="date_to">Presupuesto</label>
            </div>
        </div>
    </div>
        
        




        <button type="button" class="btn btn-primary" wire:click="saveTender">Guardar</button>
</div>
