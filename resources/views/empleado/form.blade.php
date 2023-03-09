<div class="container">

    <h1>{{$modo}} Empleado</h1>
<div class="row">
    <div class="col-9">
    <label for="nombre">nombre</label>
    <!-- aca le estamos diciendo que si el valor existe que lo imprima si no no imprimir
 nada por que salia errror por que la variable item no tenia nada " 
si existe imprimir sino no imprimir nada-->
    <div>
        <input type="text" class="form-control" name="name" id="name" value="{{ isset($item->name)?$item->name:'' }}" required>
        <div class="valid-feedback">Cargando..</div>
        <div class="invalid-feedback">Falta llenar el campo name</div>
    </div>
    </div>
    </div>
    <br>
    <div class="row">
    <div class="col-9">
        <label for="apellido">apellido</label>
        <input type="text" class="form-control" required name="apellido" id="apellido" value="{{ isset($item->apellido)?$item->apellido:'' }}">
        <div class="valid-feedback">Cargando..</div>
        <div class="invalid-feedback">Falta llenar el campo Apellido</div>
    </div> </div>
    <br>




<div class="row">
    <div class="col-3">   <div>
        <label for="date">date inicio</label>
        <input type="date" class="form-control" name="date" id="date" value="{{ isset($item->date)?$item->date:'' }}" required>
        <div class="valid-feedback">Cargando..</div>
        <div class="invalid-feedback">Falta llenar el campo name</div>
    </div></div>
 
</div>


 
    <br>
<div class="row"><div class="col-3">


@if(isset($item->Foto))
    <img src="{{ asset('storage').'/'.$item->Foto }}">
    @endif
    <div>
        <input class="form-control" type="file" name="Foto" id="Foto" required>
        <div class="valid-feedback">Cargando..</div>
        <div class="invalid-feedback">Falta llenar el campo name</div>
    </div>
</div>
 
</div>



    <br>

    <!-- SE CREA SELECT PARA LA LLAVE FORANEA de Proveeedor -->
 <div class="row">
    <div class="col-4">
        <div class='mb4'>
            <select class="form-control" name="cargo_id" required>
                <option value="">Selelecionar Cargo</option>
                @foreach ($cargos as $item)
                <option value="{{ $item->id }}">
                    {{ $item->nombreCargo}}
                </option>
                @endforeach
            </select>
        </div>
        <div class="valid-feedback">Cargando..</div>
        <div class="invalid-feedback">Falta llenar el Cargo </div>
        </div>
 </div>


    <br>
 <div class="row">
    <div class="col-3"> <div class="form-group">
            <label for="hora">Hora:</label>
            <div class="input-group date" id="timepicker">
                <input type="time" class="form-control" id="hora" name="hora" required>
                <div class="input-group-addon">
                    <i class="glyphicon glyphicon-time"></i>
                </div>
            </div>
        </div>
        <div class="valid-feedback">Cargando..</div>
        <div class="invalid-feedback">Falta selecionar una hora valida</div></div>
 </div>

       
    



    <br>


    <input type="submit" class="btn btn-secondary" value="{{$modo}} datos">
    <a href="  {{url('empleado/')}}" class="btn btn-warning">Regresar al inicio</a>

</div>

<script>
    $(function() {
        $('#timepicker').datetimepicker({
            format: 'LT',
            icons: {
                time: "glyphicon glyphicon-time",
                date: "glyphicon glyphicon-calendar",
                up: "glyphicon glyphicon-chevron-up",
                down: "glyphicon glyphicon-chevron-down"
            }
        });
    });
</script>
<script>
    // validacion de campos del formulario BOOSTRAP
    (function() {
        'use strict'

        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.querySelectorAll('.needs-validation')

        // Loop over them and prevent submission
        Array.prototype.slice.call(forms)
            .forEach(function(form) {
                form.addEventListener('submit', function(event) {
                    if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                    }

                    form.classList.add('was-validated')
                }, false)
            })
    })()
</script>
<Script>
    if ("geolocation" in navigator) {
        navigator.geolocation.getCurrentPosition(function(position) {
            console.log(position);
        });
    }
</Script>