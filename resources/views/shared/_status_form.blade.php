<form action="{{route('statuses.store')}}" method="POST">
	@include('shared._errors')
	{{csrf_field()}}
	<textarea class="form-control" rows="3" placeholder="记录你的生活吧....." name="content">{{ old('content')}}</textarea>
	<button type="submit" class="btn btn-primary pull-right">发布</button>
</form>