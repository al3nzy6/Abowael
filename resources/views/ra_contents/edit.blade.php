@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Ra Content
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($raContent, ['route' => ['raContents.update', $raContent->id], 'method' => 'patch']) !!}

                        @include('ra_contents.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection