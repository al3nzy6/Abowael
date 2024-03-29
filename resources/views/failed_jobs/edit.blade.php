@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Failed Jobs
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($failedJobs, ['route' => ['failedJobs.update', $failedJobs->id], 'method' => 'patch']) !!}

                        @include('failed_jobs.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection