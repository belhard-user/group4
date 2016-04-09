<div class="form-group">
    {{ Form::label('title', 'Заголовок', ['class' => 'col-sm-2 control-label']) }}
    <div class="col-sm-10">
        {{ Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Title']) }}
    </div>
</div>

<div class="form-group">
    {{ Form::label('short_description', 'Короткое описание', ['class' => 'col-sm-2 control-label']) }}
    <div class="col-sm-10">
        {{ Form::textarea('short_description', null, ['class' => 'form-control', 'placeholder' => 'Short_description']) }}
    </div>
</div>
<div class="form-group">
    {{ Form::label('description', 'Описание', ['class' => 'col-sm-2 control-label']) }}
    <div class="col-sm-10">
        {{ Form::textarea('description', null, ['class' => 'form-control', 'placeholder' => 'Описание']) }}
    </div>
</div>

<div class="form-group">
    {{ Form::label('tag', 'Tag',  ['class' => 'col-sm-2 control-label']) }}
    <div class="col-sm-10">
        {{ Form::select('tag_list[]', $all_tags, null, ['class' => 'form-control', 'multiple']) }}
    </div>
</div>

<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-warning">{{ $btnName }}</button>
    </div>
</div>