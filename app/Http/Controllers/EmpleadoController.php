<?php

namespace App\Http\Controllers;

use App\Models\Empleado;
use App\Models\Cargo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;

class EmpleadoController extends Controller
{
    public $search = '';
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $busqueda = $request->busqueda;
        $datos['empleados']= Empleado::where('name',  'like', '%' . $busqueda . '%')
        ->orwhere('apellido','like', '%' . $busqueda . '%')
            ->paginate(10);
       

          
    
      
      

         
        $cargo['cargos']=Cargo::paginate(10);
 
         return view('empleado.index',$datos,$cargo);   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {  

          $cargo['cargos']=Cargo::paginate(10);
        return view('empleado.create',$cargo);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {  

        $datosEmpleado = request()->except(['_token']);
         if ($request->hasfile('Foto')) {
             $datosEmpleado['Foto']=$request->file('Foto')->store('uploads','public');
         }
         Empleado::insert($datosEmpleado);
   
      // return response()->json($datosEmpleado);
      return redirect('empleado')->with('mensaje','Empleado registrado con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function show(Empleado $empleado)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    { 
        
        $cargo['cargos']=Cargo::paginate(10);
        $item=Empleado::findOrfail($id);

        return view('empleado.edit' ,compact('item'),$cargo);
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $datosEmpleado = request()->except(['_token','_method']);
     
        $cargo['cargos']=Cargo::paginate(10);
        if ($request->hasfile('Foto')) {
            $item=Empleado::findOrfail($id);
            Storage::delete('public/'.$item->Foto);
            $datosEmpleado['Foto']=$request->file('Foto')->store('uploads','public');
        }

        Empleado::where('id','=',$id)->update($datosEmpleado);
        $item=Empleado::findOrfail($id);
        return view('empleado.edit',compact('item'),$cargo);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item=Empleado::findOrfail($id);
        
        if (Storage::delete('public/'.$item->Foto)) {

            Empleado::destroy($id);
        }

        
        return redirect('empleado')->with('mensaje','borrado con exito');;
    }
}
