<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel Crud</title> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    <div class="bg-dark py-3">
      <h3 class="text-white text-center">Laravel Crud</h3>
    </div>
    <div class="container">
      <div class="row d-flex justify-content-center">
        <div class="col-md-10">
          <div class="card border-0 shadow-lg my-4">
            <div class="card-header bg-dark">
              <h3 class="text-white">Create product</h3>
            </div>
            <form action="{{ route('store')}}" method="POST">
                @csrf
            <div class="card-body">
              <div class="mb-3">
                <label for="name" class="form-label h-5">Name</label>
                <input type="text" class="@error('name') is-invalid @enderror form-control form-control-sm" id="name"
                 placeholder="Name" name="Name">
              </div>
              @error('name')
                  <p class="invalid-feedback">{{ $message }}</p>
              @enderror
              <div class="mb-3">
                <label for="sku" class="form-label h-5">Sku</label>
                <input type="text" class="@error('sku') is-invalid @enderror "form-control form-control-sm" id="sku"
                 placeholder="Sku" name="Sku">
                 @error('sku')
                  <p class="invalid-feedback">{{ $message }}</p>
                @enderror
              </div>
              <div class="mb-3">
                <label for="price" class="form-label h-5">Price</label>
                <input type="text" class="@error('price')is-invalid @enderror form-control form-control-sm" id="price" 
                placeholder="Price" name="Price">
                @error('price')
                  <p class="invalid-feedback">{{ $message }}</p>
                @enderror
              </div>
              <div class="mb-3">
                <label for="description" class="form-label h-5">Description</label>
                <textarea placeholder="Description" class="form-control form-control-sm" id="description" name="description" cols="30" rows="5"></textarea>
              </div>
              <div class="mb-3">
                <label for="image" class="form-label h-5">Image</label>
                <input type="file" class="form-control form-control-sm" id="image" placeholder="image" name="Image">
              </div>
              <div class="d-grid">
                <button class="btn btn-sm btn-primary">Submit</button>
              </div>
            </div>
        </form>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
