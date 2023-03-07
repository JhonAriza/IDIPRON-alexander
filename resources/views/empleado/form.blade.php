<div class="container"> 

<h1>{{$modo}} Empleado</h1> 

<label for="nombre">nombre</label> 
<!-- aca le estamos diciendo que si el valor existe que lo imprima si no no imprimir
 nada por que salia errror por que la variable item no tenia nada " 
si existe imprimir sino no imprimir nada-->

 <input type="text" name="name" id="name" value="{{ isset($item->name)?$item->name:'' }}"><br>
 <label for="apellido">apellido</label> 
<input type="text" name="apellido" id="apellido" value="{{ isset($item->apellido)?$item->apellido:'' }}">
 <br>
 @if(isset($item->Foto))
<img src="{{ asset('storage').'/'.$item->Foto }}">
@endif
<input type="file" name="Foto" id="Foto" >



<br>

   <!-- SE CREA SELECT PARA LA LLAVE FORANEA de Proveeedor -->
   <div class='mb4'>
    <select class="form-control" name="cargo_id">
        <option value="">Selelecionar Cargo</option>
        @foreach ($cargos as $item)
            <option  value="{{ $item->id }}">
                {{ $item->nombreCargo}}
            </option>
        @endforeach
    </select>
</div>


                           
    <input type="submit" class="btn btn-secondary"  value="{{$modo}} datos" > 
<a href="  {{url('empleado/')}}"  class="btn btn-warning">Regresar al inicio</a>

</div>