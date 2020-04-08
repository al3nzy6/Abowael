@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Ra Job Class
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($raJobClass, ['route' => ['raJobClasses.update', $raJobClass->id], 'method' => 'patch']) !!}

                        @include('ra_job_classes.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection