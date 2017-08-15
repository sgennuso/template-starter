<form id="contactForm" action="https://contact.ubiweb.ca/send" method="get">
	<div class="form-group">
		<label for="formName">{{ $site->trans('Name') }}</label>
		<input id="formName" type="text" name="name" value="" class="form-control" />
	</div>
	<div class="form-group">
		<label for="formEmail">{{ $site->trans('Email') }}</label>
		<input id="formEmail" type="email" name="email" value="" class="form-control" />
	</div>
	<div class="form-group">
		<label for="formMessage">{{ $site->trans('Message') }}</label>
		<textarea id="formMessage" name="message" class="form-control"></textarea>
	</div>
	<input type="hidden" name="redirect" value="{{ $site->getUrl('thank-you') }}" />
	<input type="hidden" name="to" value="{{ $site->global('admin_email') }}" />
	<input type="hidden" name="subject" value="Contact from {{ $site->global('site_title') }}" />
	<button class="btn btn-primary g-recaptcha" data-sitekey="6Lcb8SwUAAAAAAtlDuXw_5PRC3_xZ6ZVE7FkVcen"
	data-callback="submitContactForm">{{ $site->trans('Submit') }}</button>
</form>
