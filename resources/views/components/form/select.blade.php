<div class="form-group form-group-sm">
    {{ Form::label($name, $labelText, ['class' => 'control-label col-md-3']) }}
    <div class="col-sm-9">
        {{ Form::select($name, $options, $selectedValue,
            array_merge(['class'=>'form-control', 'placeholder' => '...']), $attributes) }}
    </div>
</div>