@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Video Class
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($videoClass, ['route' => ['videoClasses.update', $videoClass->id], 'method' => 'patch']) !!}

                        @include('video_classes.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection