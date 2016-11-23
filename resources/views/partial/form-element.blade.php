<div class="form-group">
    {!! Form::label( trans('user.' . $prop)) !!}
    {!! Form::text($prop, isset($value) ? $value : '',
        array('required',
              'class'=>'form-control',
              'placeholder'=> trans('user.' . $prop))) !!}
</div>
