<!doctype html>
  <html lang="en">
    <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
  
      <!-- Bootstrap CSS -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
      <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
    />
      <title>Hello, world!</title>
    </head>
    <body>
<div class="contenedor mt-5">

</div>

        <h1 class="text-center animate__animated animate__backInRight">usuarios Registrados</h1>

        <div class="contenedor">
            <div class="col-2">
                <button type="button" class="btn btn-primary " class="" data-bs-toggle="modal"
                    data-bs-target="#staticBackdrop">
                    create usuario
                </button>
                
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <table  class="table table-striped table-hover card-table table-vcenter text-nowrap">
                        @if ($users->count())
                            <thead class="bg-gray-50">
                                <tr>
                                    <th>
                                        id
                                    </th>

                                    <th>
                                        name
                                    </th>
                                    <th>
                                       email
                                    </th>
                                    <th>
                                    fecha y hora creacion
                                    </th>
                                    
                                    <th>
                                        actions
                                    </th>
                                    
                                </tr>
                            </thead>
                            @foreach ($users as $item)
                                <tbody>
                                    <tr>
                                        <td>
                                            <div>{{ $item['id'] }} </div>
                                        </td>
                                        <td>
                                            <div>{{ $item['name'] }} </div>
                                        </td>

                                        <td>
                                            <div>{{ $item['email'] }}</div>
                                        </td>
                                    
                                        <td>
                                            <div>  {{ \Carbon\Carbon::parse($item->created_at)->format('d/m/Y  h:i:s A') }}</div>
                                        </td>
                                 



                            <td class="d-flex">
                               
                                <a href="update-user/{{ $item['id'] }}">
                                    <button type="button" class="btn btn-primary">Editar</button>
                                </a>

                                <form action="delete-user" method="POST">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $item['id'] }}">
                                    <button type="submit" class="btn btn-danger">eliminar</button>
                                </form>
                            <td>
                                </tr>
                        @endforeach
                        @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>






  <!-- Modal crear-->
  <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
  aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
      <div class="modal-content">
          <div class="container">
              <div class="row">
                  <h1 type="button" class="btn btn-dark">crear</h1>
              </div>
          </div>

          <div class="modal-body">
              <form action="store-user" method="POST">
                  @csrf
                  <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">name</label>
                      <input class="form-control" placeholder="name" name="name">
                  </div>

                  <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Email address</label>
                      <input class="form-control" placeholder="email" name="email">
                  </div>

                  <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">password</label>
                      <input class="form-control" name="password" placeholder="password" type="password">
                  </div>

                  </div>
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary">save</button>
              </form>



              <div class="modal-footer">

              </div>
          </div>
          <div class="modal-footer">

          </div>
      </div>
  </div>
</div>


  

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>