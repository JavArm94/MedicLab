@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Localidad
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($localidad, ['route' => ['localidades.update', $localidad->id], 'method' => 'patch']) !!}

                        @include('localidades.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection