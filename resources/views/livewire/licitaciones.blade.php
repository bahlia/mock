<div class="container">
    <h1 class="my-5">Licitaciones</h1>
    <ul class="nav nav-tabs">
        <li class="nav-item">
          <a class="nav-link active" data-bs-toggle="tab" href="#home">Realizadas</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-bs-toggle="tab" href="#menu1">Recibidas</a>
        </li>
      </ul>
      
      <!-- Tab panes -->
      <div class="tab-content">
        <div class="tab-pane active" id="home">
          <div class="mx-auto mt-3 mb-3 d-flex justify-content-end">
            <button type="button" wire:click="crearLicitaciones" class="btn btn-primary">Crear Licitacion</button>
          </div>
            @foreach ($tenders as $key => $t)
            <div class="card">
                <div class="card-body">
                  <div class="row">
                    <div class="col-8">
                      <h3 class="m-0">{{ $t["title"] }}</h3>
                      <b>{{ $t["company"] }}</b>
                      <p> {{ $t["description"] }} </p>
                    </div>
                    <div class="col-4">
                      <p>
                        <h6 class="fw-bold">Fecha inicio</h6> 
                        <button type="button" class="btn btn-outline-primary">{{ $t["from"] }}</button>
                        <h6 class="fw-bold mt-2">Fecha de culminacion</h6> 
                        <button type="button" class="btn btn-outline-primary">{{ $t["to"] }}</button>
                        
                         <h1 class="mt-3 display-1"> <b> ${{ $t["value"] }} </b> </h1>
                     </p>
                    </div>
                  </div>
                </div>
                <div card-body class="p-3">
                  <button type="button" wire:click="match({{ $key }})" class="btn btn-outline-primary">Ver match</button>
                </div>
              </div>
            @endforeach
            
        </div>
        <div class="tab-pane fade" id="menu1"></div>
      </div>
</div>
