<form>
	<div class="form-group">
		<label for="formName">{{ $site->trans('Name') }}</label>
		<input id="formName" type="text" name="name" value="" class="form-control" />
	</div>
	<div class="form-group">
		<label for="formEmail">{{ $site->trans('Email') }}</label>
		<input id="formEmail" type="email" name="email" value="" class="form-control" />
	</div>
	<button type="submit" class="btn btn-primary">{{ $site->trans('Submit') }}</button>
</form>
