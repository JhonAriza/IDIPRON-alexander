
@extends('layouts.app')


@section('content')

<form action="{{ url('/empleado/'.$item->id) }} "  class="needs-validation" novalidate  method="POST" enctype="multipart/form-data">
@csrf
 {{ method_field('PATCH') }}
 
@include('empleado.form',['modo'=>'Editar'])

</form>


@endsection

