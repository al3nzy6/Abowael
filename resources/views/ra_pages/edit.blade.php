@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Ra Pages
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($raPages, ['route' => ['raPages.update', $raPages->id], 'method' => 'patch']) !!}

                        @include('ra_pages.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection