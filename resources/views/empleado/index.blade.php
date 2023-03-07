
@extends('layouts.app')


@section('content')
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <title>Hello, world!</title>
</head>

<body>


@if(Session::has('mensaje'))
{{ Session::get('mensaje') }}
@endif

 <a href="  {{url('empleado/create')}}">registrar nuevo</a>
    
         

        
   
 

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                @php
                $contador = 0;
                @endphp
                <div class="accordion-item">
                <table class="table">
  <thead>
    <td>
      <th scope="col">Name</th>
       
 
    </td>
  </thead>
  </table>
                    @foreach($empleados as $item)
                    <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" href="#collapseOne{{$contador}}">
                 
                        <td>
                            {{ $item['name'] }}
                        </td>
                    </button>
                    </h2>
                    <div id="collapseOne{{$contador}}" class="collapse " data-parent="#accordion">
                        <div class="accordion-body">
                            <table class="table ">

                                <thead class="bg-gray-50">
                                    <tr>
                                        <th>
                                            id
                                        </th>

                                        <th>
                                            name
                                        </th>
                                        <th>
                                            cargo del empleado
                                        </th>
                                        <th>
                                            fecha y hora creacion
                                        </th>

                                        <th>
                                            foto
                                        </th>

                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        <td>
                                            <div>{{ $item->id }} </div>
                                        </td>
                                        <td>
                                            <div>{{ $item->name }} </div>
                                        </td>
                                        <td><div>
                                               {{  $item->cargo_id }}
                                        </div>
                                    </td>

                                   
                                        <td>
                                            <div> {{ \Carbon\Carbon::parse($item->created_at)->format('d/m/Y  h:i:s A') }}</div>
                                        </td>


                                        <td>
                                            <div>
                                                 
                                                 <img src="{{ asset('storage').'/'.$item->Foto }}" style="width: 150px; height:150px;">
                                         </div>
                                        </td>
<td>                                             <a href="{{ url('/empleado/'.$item->id.'/edit') }}"  class="btn btn-success">Editar </a>
</td>

                                        <td>    
                                          
                                            <form action="{{ url('/empleado/'.$item->id) }}" method="POST">
                                            @csrf
                                            {{ method_field('DELETE') }}
                                              <input type="submit" class="btn btn-danger" onclick="return confirm('quieres borrar=?')" value="Delete">
                                           </form>
                                        <td>


                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    @php
                    $contador++;
                    @endphp
                    @endforeach

                </div>
            </div>

        </div>
    </div>


</body>

</html>
 

@endsection

 