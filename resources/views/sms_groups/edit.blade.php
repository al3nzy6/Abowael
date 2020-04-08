@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Sms Groups
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($smsGroups, ['route' => ['smsGroups.update', $smsGroups->id], 'method' => 'patch']) !!}

                        @include('sms_groups.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection