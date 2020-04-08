<!-- Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('date', 'Date:') !!}
    {!! Form::text('date', null, ['class' => 'form-control']) !!}
</div>

<!-- First Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('first_name', 'First Name:') !!}
    {!! Form::text('first_name', null, ['class' => 'form-control']) !!}
</div>

<!-- Second Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('second_name', 'Second Name:') !!}
    {!! Form::text('second_name', null, ['class' => 'form-control']) !!}
</div>

<!-- Third Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('third_name', 'Third Name:') !!}
    {!! Form::text('third_name', null, ['class' => 'form-control']) !!}
</div>

<!-- Family Field -->
<div class="form-group col-sm-6">
    {!! Form::label('family', 'Family:') !!}
    {!! Form::text('family', null, ['class' => 'form-control']) !!}
</div>

<!-- Id Num Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_num', 'Id Num:') !!}
    {!! Form::text('id_num', null, ['class' => 'form-control']) !!}
</div>

<!-- Mobile Field -->
<div class="form-group col-sm-6">
    {!! Form::label('mobile', 'Mobile:') !!}
    {!! Form::text('mobile', null, ['class' => 'form-control']) !!}
</div>

<!-- Reg Day Field -->
<div class="form-group col-sm-6">
    {!! Form::label('reg_day', 'Reg Day:') !!}
    {!! Form::number('reg_day', null, ['class' => 'form-control']) !!}
</div>

<!-- Reg Month Field -->
<div class="form-group col-sm-6">
    {!! Form::label('reg_month', 'Reg Month:') !!}
    {!! Form::number('reg_month', null, ['class' => 'form-control']) !!}
</div>

<!-- Reg Year Field -->
<div class="form-group col-sm-6">
    {!! Form::label('reg_year', 'Reg Year:') !!}
    {!! Form::number('reg_year', null, ['class' => 'form-control']) !!}
</div>

<!-- Area Field -->
<div class="form-group col-sm-6">
    {!! Form::label('area', 'Area:') !!}
    {!! Form::number('area', null, ['class' => 'form-control']) !!}
</div>

<!-- Job Field -->
<div class="form-group col-sm-6">
    {!! Form::label('job', 'Job:') !!}
    {!! Form::number('job', null, ['class' => 'form-control']) !!}
</div>

<!-- Sharing Field -->
<div class="form-group col-sm-6">
    {!! Form::label('sharing', 'Sharing:') !!}
    {!! Form::number('sharing', null, ['class' => 'form-control']) !!}
</div>

<!-- Id Pic Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_pic', 'Id Pic:') !!}
    {!! Form::text('id_pic', null, ['class' => 'form-control']) !!}
</div>

<!-- Profile Pc Field -->
<div class="form-group col-sm-6">
    {!! Form::label('profile_pc', 'Profile Pc:') !!}
    {!! Form::text('profile_pc', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('families.index') }}" class="btn btn-default">Cancel</a>
</div>
