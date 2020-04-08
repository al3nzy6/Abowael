@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Ra Upload
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($raUpload, ['route' => ['raUploads.update', $raUpload->id], 'method' => 'patch']) !!}

                        @include('ra_uploads.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection