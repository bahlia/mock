<div class="container bg-light">
    <div class="row justify-content-center">

        <div class="col-md-12 my-5  ">
            <h1>Panel empresa</h1>
        </div>  
        <div class="col-sm-4 col-md-8">        

            <div class="card">
                <div class="card-body">
                    <h3>Informacion empresa</h3>
                    <div class="form-floating mb-3">              
                        <input type="text"  class="form-control" id="floatingInput" wire:model="name">
                        <label for="floatingInput">Nombre</label>
                    </div>
                    <div class="form-floating mb-3">              
                        <input type="text"  class="form-control" id="floatingInput" wire:model="name">
                        <label for="floatingInput">Description</label>
                    </div>
                </div>
            </div>


           

            

           
        </div>

        <div class="col-sm-4 col-md-4">

            <div class="card">
                <div class="card-body">
                    <div class="justify-content-center">
                        <h3>Tags</h3>
                    </div> 
                    <ul class="list-unstyled">
                        @foreach ($user["tags"] as $t)
                        <button class="btn btn-success" type="button" wire:click="removeTag({{$loop->index}})"> {{ $t }} X</button>
                        @endforeach
                    </ul>
                    
                    <div class="input-group input-group-sm mb-3">              
                        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" wire:model="newTag">
                    </div>
                    <button class="btn btn-primary" type="button" wire:click="addTag">add tag</button>
                </div>
            </div>

            <div class="card mt-3">
                <div class="card-body">
                    <form class="mt-3">
                        <h3>Categories</h3>
                        <div class="form-floating mb-3">
                            <select class="form-select" id="floatingSelect" type="text" name="categoria" id="categoria" aria-label="Floating label select example" wire:model="myCategories" multiple style="height: 150px ;">
                                @foreach ($categories as $c)
                                    <option value="{{ $c }}">{{ $c }}
                                    </option>
                                @endforeach
                            </select>     
                            <label for="floatingInput">Categorias</label>
                        </div>
                        <button class="btn btn-primary" type="button" wire:click="updateCategories">save categories</button>
                    </form>
                </div>
            </div>

            
        </div>
    </div>
   
</div>

