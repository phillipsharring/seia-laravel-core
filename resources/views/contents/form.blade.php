<div class="row">

  <div class="form-group col-xs-4 {{ $errors->has('content_type_id') ? 'has-error' : '' }}">
    {!! Form::label('content_type_id', 'Content Type:') !!}
    {!! Form::select('content_type_id', $contentTypes, null, ['class' => 'form-control']) !!}
    {!! $errors->first('content_type_id', '<span class="help-block">:message</span>') !!}
  </div>

  <div class="form-group col-xs-4 {{ $errors->has('category_id') ? 'has-error' : '' }}">
    {!! Form::label('category_id', 'Category:') !!}
    {!! Form::select('category_id', $categories, null, ['class' => 'form-control']) !!}
    {!! $errors->first('category_id', '<span class="help-block">:message</span>') !!}
  </div>

  <div class="form-group col-xs-2 {{ $errors->has('refers_to') ? 'has-error' : '' }}">
    {!! Form::label('refers_to', 'Refers To:') !!}
    {!! Form::text('refers_to', null, ['class' => 'form-control']) !!}
    {!! $errors->first('refers_to', '<span class="help-block">:message</span>') !!}
  </div>

  <div class="form-group col-xs-2 {{ $errors->has('parent_id') ? 'has-error' : '' }}">
    {!! Form::label('parent_id', 'Parent ID:') !!}
    {!! Form::text('parent_id', null, ['class' => 'form-control']) !!}
    {!! $errors->first('parent_id', '<span class="help-block">:message</span>') !!}
  </div>

</div>

<div class="row">

  <div class="form-group col-xs-6 {{ $errors->has('release_at') ? 'has-error' : '' }}">
    {!! Form::label('release_at', 'Release At:') !!}
    {!! Form::text('release_at', null, ['class' => 'form-control']) !!}
    {!! $errors->first('release_at', '<span class="help-block">:message</span>') !!}
  </div>

  <div class="form-group col-xs-6 {{ $errors->has('expire_at') ? 'has-error' : '' }}">
    {!! Form::label('expire_at', 'Expire At:') !!}
    {!! Form::text('expire_at', null, ['class' => 'form-control']) !!}
    {!! $errors->first('expire_at', '<span class="help-block">:message</span>') !!}
  </div>

</div>

<div class="row">

  <div class="form-group col-xs-6 {{ $errors->has('language_id') ? 'has-error' : '' }}">
    {!! Form::label('language_id', 'Language:') !!}
    {!! Form::select('language_id', $languages, null, ['class' => 'form-control']) !!}
    {!! $errors->first('language_id', '<span class="help-block">:message</span>') !!}
  </div>

  <div class="form-group col-xs-6 {{ $errors->has('mime_type') ? 'has-error' : '' }}">
    {!! Form::label('mime_type', 'Mime Type:') !!}
    {!! Form::text('mime_type', null, ['class' => 'form-control', 'placeholder' => 'text/html']) !!}
    {!! $errors->first('mime_type', '<span class="help-block">:message</span>') !!}
  </div>

</div>

<div class="form-group {{ $errors->has('title') ? 'has-error' : '' }}">
  {!! Form::label('title', 'Title:') !!}
  {!! Form::text('title', null, ['class' => 'form-control']) !!}
  {!! $errors->first('title', '<span class="help-block">:message</span>') !!}
</div>

<div class="form-group {{ $errors->has('summary') ? 'has-error' : '' }}">
  {!! Form::label('summary', 'Summary:') !!}
  {!! Form::textarea('summary', null, ['class' => 'form-control', 'rows' => 4]) !!}
  {!! $errors->first('summary', '<span class="help-block">:message</span>') !!}
</div>

<div class="form-group {{ $errors->has('body') ? 'has-error' : '' }}">
  {!! Form::label('body', 'Body:') !!}
  {!! Form::textarea('body', null, ['class' => 'editable', 'rows' => 4]) !!}
  {!! $errors->first('body', '<span class="help-block">:message</span>') !!}
</div>

<div class="form-group {{ $errors->has('media') ? 'has-error' : '' }}">
  {!! Form::label('media', 'Media:') !!}
  {!! Form::text('media', null, ['class' => 'form-control']) !!}
  {!! $errors->first('media', '<span class="help-block">:message</span>') !!}
</div>

<div class="form-group {{ $errors->has('status') ? 'has-error' : '' }}">
  {!! Form::label('status', 'Status:') !!}
  {!! Form::select('status', $statuses, null, ['class' => 'form-control']) !!}
  {!! $errors->first('status', '<span class="help-block">:message</span>') !!}
</div>

<div class="form-submit">
  <button class="btn btn-success">Save Contents</button>
</div>

@section('scripts')
  @parent
  <script type="text/javascript">
    contentsForm();
  </script>
@stop
