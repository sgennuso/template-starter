<form id="contactForm" action="https://contact.ubiweb.ca/mail" method="post">
	<div class="form-group">
		<label for="formName">{{ $site->trans('Name') }}</label>
		<input id="formName" type="text" name="_name" value="" class="form-control" />
	</div>
	<div class="form-group">
		<label for="formEmail">{{ $site->trans('Email') }}</label>
		<input id="formEmail" type="email" name="_email" value="" class="form-control" />
	</div>
	<div class="form-group">
		<label for="formMessage">{{ $site->trans('Message') }}</label>
		<textarea id="formMessage" name="_message" class="form-control"></textarea>
	</div>
	<input type="hidden" name="donotfill" value="" />
	<input type="hidden" name="redirect" value="{{ $site->getUrl('thank-you') }}" />
	<input type="hidden" name="to" value="{{ $site->global('admin_email') }}" />
	<input type="hidden" name="subject" value="Contact from {{ $site->global('site_title') }}" />
	<button class="btn btn-primary g-recaptcha" data-sitekey="{{ env('CAPTCHA_SITE_KEY') }}"
	data-callback="submitContactForm">{{ $site->trans('Submit') }}</button>
</form>
<script>
function submitContactForm(token) {
	document.getElementById("contactForm").submit();
}
</script>
