@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Shakawi
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'shakawis.store']) !!}

                        @include('shakawis.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
