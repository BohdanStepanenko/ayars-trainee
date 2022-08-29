<form method="post" action="{{ route('articles.update', $article->id) }}">
	@method('put')
	@csrf
	<div class="mb-3">
		<label for="slug" class="form-label">Slug</label>
		<input type="text" class="form-control" id="slug" name="slug" value="{{ $article->slug }}">
	</div>
	<div class="mb-3">
		<label for="title" class="form-label">Title</label>
		<input type="text" class="form-control" id="title" name="title" value="{{ $article->title }}">
	</div>
	<div class="mb-3">
		<label for="description" class="form-label">Description</label>
		<textarea class="form-control" id="description" name="description" rows="2">{{ $article->description }}</textarea>
	</div>
	<div class="mb-3">
		<label for="full_description" class="form-label">Full description</label>
		<textarea class="form-control" id="full_description" name="full_description" rows="3">{{ $article->full_description }}</textarea>
	</div>
	<div class="mb-3">
		<label class="form-check-label" for="is_published">Publish</label>
		<input class="form-check-input" type="checkbox" id="is_published" name="is_published" checked="{{ $article->is_published == 1 ? 'checked' : '' }}">
	</div>

	<div class="mb-6">
		<label for="tags" class="form-label select-label">Add tags</label>
		<select id="tags" class="select" name="tags[]" multiple>
			@foreach($tags as $tag)
				<option value="{{ $tag->id }}" {{ $article->tags->find($tag->id) != null ? "selected" : '' }}>{{ $tag->name }}</option>
			@endforeach

	</div>
	<input class="btn btn-primary" type="submit" value="Update">
</form>
