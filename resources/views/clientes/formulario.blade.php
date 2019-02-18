@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                Informe abaixo os dados do cliente
                <a href="{{url('home')}}"> Listagem de Clientes!</a>
                </div>

                <div class="card-body">

                    @if(Session::has('Sucesso'))
                        <div class="alert alert-sucess"> {{'Sucesso'}}</div>

                    @endif
                  {!! Form::open(['url' => 'clientes/salvar']) !!}

                  {!!Form::label('nome','Nome')!!}
                  {!! Form::input('varchar','nome', '', ['class' => 'form-control', 'autofocus'])!!}
                  

                  {!!Form::label('endereco','Endereco')!!}
                  {!! Form::input('varchar','endereco', '', ['class' => 'form-control'])!!}


                  {!!Form::label('email','Email')!!}
                  {!! Form::input('varchar','email', '', ['class' => 'form-control'])!!}
                  
                  {!! Form::submit('Salvar',['class' => 'btn btn-primary'])!!}


                  {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
