@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Ips
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($ips, ['route' => ['ips.update', $ips->id], 'method' => 'patch']) !!}

                        @include('ips.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection