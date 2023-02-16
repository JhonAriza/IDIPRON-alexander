<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
<div class="container mt-5">
        <div class="d-flex justify-content-center">










        <h1 class="text-center">comprar</h1>

 



    <div class="panel panel-default mt-5 ml-4">
        <div class="panel-body">
            <div class="container">
           
                <div class="row">

                    <div class="col-md-6">
                      
                        <form action="{{ url('storeProduct') }}" method="POST">
                            @csrf
                            <input type="hidden" name="id" value="{{ $id }}">
                            <input type="hidden" name="password" value="123456789">


                             <div  class="col-md-12">
                                <label for="exampleInputEmail1" class="form-label">Nombre completo</label>
                                <input  type="text" name="name" placeholder="Example juan diego al..." class="form-control"  aria-describedby="emailHelp">
                              </div>

                            <div  class="col-md-12">
                                <label for="exampleInputEmail1" class="form-label">Correo electronico</label>
                                <input type="text" name="email" placeholder="Example@gmail.com" class="form-control"  aria-describedby="emailHelp">
                            </div>

                            <div  class="col-md-12">
                                <label for="exampleInputEmail1" class="form-label">Cantidad</label>
                                <input type="number" name="quantity" placeholder="Example ... 1" class="form-control"  aria-describedby="emailHelp">
                            </div>

                            <div  class="col-md-12">
                                <label for="exampleInputEmail1" class="form-label">direccion entrega</label>
                                <input type="text" name="address" placeholder="Example cra 16 # 22 a" class="form-control"  aria-describedby="emailHelp">
                            </div>

                            <div class="col-md-12 text-center">
                                <br>
                               <button type="submit" class="btn btn-success">Comprar ahora</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
      </div>
</div>
</div>
</body>

</html>
<script> 
Swal.fire("prueba de alerta")</script>