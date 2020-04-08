@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Ra Counter
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($raCounter, ['route' => ['raCounters.update', $raCounter->id], 'method' => 'patch']) !!}

                        @include('ra_counters.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection