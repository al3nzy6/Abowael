@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Sound Class
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($soundClass, ['route' => ['soundClasses.update', $soundClass->id], 'method' => 'patch']) !!}

                        @include('sound_classes.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection