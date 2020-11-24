<?php

namespace App\Http\Livewire;

use Carbon\Carbon;
use App\Models\Medico;

use Livewire\Component;
use App\Models\Certificado;
use Illuminate\Support\Facades\Auth;

class Reportexmedico extends Component
{
    public $fecha_ini, $fecha_fin;
    public $idMedico;
    public $contador;

    public function sumar()
    {
        $this->contador +=1;
    
    }
   
   
    public function mount($idMedico=null)
    {
        if (empty($idMedico))
        {
            $this->idMedico = Auth::id();
        }else{
            $this->idMedico = $idMedico;
        }
    }
    
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
        $this->sumar();
        $contador = $this->contador + 1;  
        $medico = Medico::findOrFail($this->idMedico);
        $certificados = $medico->certificados;
            
        
        
       return view('livewire.reportexmedico',[
            'medico' => $medico,
            'certificados' => $certificados,
            'contador' => $contador
       ]);
    }
}
