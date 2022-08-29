<form method="POST" action="{{ route('contacts.store') }}">
	@csrf
	<div class="mb-3">
		<label for="email" class="form-label">Email</label>
		<input type="email" class="form-control" id="email" name="email" placeholder="Email">
	</div>
	<div class="mb-3">
		<label for="message" class="form-label">Message</label>
		<textarea class="form-control" id="message" name="message" rows="2"></textarea>
	</div>
	<input class="btn btn-primary" type="submit" value="Send">
</form>
