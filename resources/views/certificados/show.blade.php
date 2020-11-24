@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Certificados
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('certificados.show_fields')
                    <a href="{{ route('certificados.index') }}" class="btn btn-default">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection
