<div class="container mt-5">
  <div class="row">

    <div class="col-6">
      <h2 class="my-3">Licitacion</h2>
      <div class="card">
        <div class="card-body">
          <div class="row">
            <div class="col-8">
              <h3 class="m-0">{{ $tender["title"]  }}</h3>
              <p> {{  $tender["description"] }} </p>
            </div>
            <div class="col-4">
              <p>
                <h6 class="fw-bold">Fecha inicio</h6> 
                <button type="button" class="btn btn-outline-primary">{{  $tender["from"] }}</button>
                <h6 class="fw-bold mt-2">Fecha de culminacion</h6> 
                <button type="button" class="btn btn-outline-primary">{{ $tender["to"]  }}</button>
                
                 <h1 class="mt-3 display-1"> <b> ${{$tender["value"] }} </b> </h1>
             </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-6">
      <h2 class="my-3">Empresas encontradas</h2>
      @foreach ($companies as $c)
      <div class="col-12 mb-3">
        <div class="card p-3">
          <div class="row">
            <div class="col-8">
              <h3 class="m-0">{{$c["name"]  }}</h3>
              <p> {{   $c["description"]  }} </p>
            </div>
            <div class="col-4">
              <h6 class="fw-bold">Categorias</h6>
  
            @foreach ($c["categories"] as $cc)
              <span class="btn btn-outline-primary">{{$cc}}</span>
            @endforeach
            </div>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</div>