@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Migrations
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($migrations, ['route' => ['migrations.update', $migrations->id], 'method' => 'patch']) !!}

                        @include('migrations.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection