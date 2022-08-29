<form method="POST" action="{{ route('articles.store') }}">
    @csrf
    <div class="mb-3">
        <label for="slug" class="form-label">Slug</label>
        <input type="text" class="form-control" id="slug" name="slug" placeholder="Slug">
    </div>
    <div class="mb-3">
        <label for="title" class="form-label">Title</label>
        <input type="text" class="form-control" id="title" name="title" placeholder="Vacancy title">
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <textarea class="form-control" id="description" name="description" rows="2"></textarea>
    </div>
    <div class="mb-3">
        <label for="full_description" class="form-label">Full description</label>
        <textarea class="form-control" id="full_description" name="full_description" rows="3"></textarea>
    </div>
    <div class="mb-3">
        <label class="form-check-label" for="is_published">Publish</label>
        <input class="form-check-input" type="checkbox" id="is_published" name="is_published" checked="checked">
    </div>
	<div class="mb-6">
		<label for="tags" class="form-label select-label">Add tags:</label>
		<select id="tags" class="select" name="tags[]" multiple>
			@foreach($tags as $tag)
				<option value="{{ $tag->id }}">{{ $tag->name }}</option>
			@endforeach
		</select>
	</div>
    <input class="btn btn-primary" type="submit" value="Save">
</form>
