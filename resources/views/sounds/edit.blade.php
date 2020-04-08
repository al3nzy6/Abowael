@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Sound
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($sound, ['route' => ['sounds.update', $sound->id], 'method' => 'patch']) !!}

                        @include('sounds.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection