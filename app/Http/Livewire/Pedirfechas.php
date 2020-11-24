<?php

namespace App\Http\Livewire;

use Carbon\Carbon;
use Livewire\Component;
use App\Models\Certificado;
use App\Models\Medico;

class Pedirfechas extends Component
{
    public $fecha_ini, $fecha_fin;
    public $certificados, $medico;
   
    
    public function render()
    {

    	$fi = Carbon::parse(Carbon::now())->format('Y-m-d').' 00:00:00';
    	$ff = Carbon::parse(Carbon::now())->format('Y-m-d').' 23:59:59';

    	if($this->fecha_ini !== '')
    	{
            $fi = Carbon::parse($this->fecha_ini)->format('Y-m-d');
            //.' 00:00:00';
            $ff = Carbon::parse($this->fecha_fin)->format('Y-m-d');
            //.' 23:59:59';
    	}

    	
		//$certificados = Certificado::whereBetween('certificados.fechaCertificado',[$fi , $ff ]);
					//->paginate(10);


        //$total = Certificado::whereBetween('certificados.fechaCertificado',[$fi , $ff ])->where('estatus','PENDIENTE')->count('total');
	
        //return $certificados ; //view('reportes.certificadosXmedico.index')->with('certificados','$certificados');

        // return view('reportes.certificados',[
        // 	'certificados' => $certificados,
        // 	//'sumaTotal' => $total
        // ]);

        $medico = Medico::findOrFail(1);
              
        $certificados = $medico->certificados()->whereBetween('fechaCertificado',[$fi , $ff ])->get();
        
       return view('livewire.pedirfechas')->with('medico',$medico)->with('certificados', $certificados);
    }
}
