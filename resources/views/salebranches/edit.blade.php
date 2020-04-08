@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Salebranches
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($salebranches, ['route' => ['salebranches.update', $salebranches->id], 'method' => 'patch']) !!}

                        @include('salebranches.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection