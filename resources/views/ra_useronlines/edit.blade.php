@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Ra Useronline
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($raUseronline, ['route' => ['raUseronlines.update', $raUseronline->id], 'method' => 'patch']) !!}

                        @include('ra_useronlines.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection