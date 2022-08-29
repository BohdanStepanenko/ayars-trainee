<div class="col-md-2">
	<div class="card">
		<strong class="card-title">Tags cloud:	</strong>
		@foreach($tags_list as $tag)
			<a href="{{ route('taggable.index', $tag->id) }}" class="label text-bg-primary">{{ $tag->name }}</a>
		@endforeach
	</div>
</div>
