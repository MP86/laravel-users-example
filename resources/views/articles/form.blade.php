<div class="form-group">
	{!! Form::label('Title', 'Title') !!}
	{!! Form::text('Title', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('Body', 'Body') !!}
	@if ($create)
	{!! Form::Body('Body', null, ['class' => 'form-control']) !!}
	@else
	{!! Form::Body('Body', null, ['class' => 'form-control', 'readonly' => true]) !!}
	@endif
</div>
<div class="form-group">
	{!! Form::submit($submitButtonText, ['class' => 'btn btn-primary form-control']) !!}
</div>