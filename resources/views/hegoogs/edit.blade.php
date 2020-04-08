@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Hegoog
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($hegoog, ['route' => ['hegoogs.update', $hegoog->id], 'method' => 'patch']) !!}

                        @include('hegoogs.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection