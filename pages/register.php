<div id="divRegisterWrapper">
	<div class="container">
		<div class="register-header">
			<h2>Register</h2>
		</div>
		<div class="register-body-holder">
			<form action="index.php?page=signup" method="post" class="register-form">
				<fieldset>
		            <div class="input-wrap">
		                <input placeholder="First Name *" name="firstname" value="" type="text">
		            </div>
		            <div class="input-wrap">
		                <input placeholder="Last Name *" name="lastname" value="" type="text">
		            </div>
		            <div class="input-wrap">
		                <input placeholder="Email Address *" name="email" value="" type="email">
		            </div>
		            <div class="input-wrap">
		                <label class="dropdown add">
		                    <select name="country" id="listcountry">
		                        <option value="">Country *</option>
		                        <option value="1">Australia</option>
		                        <option value="4">Belguim</option>
		                        <option value="3">Canada</option>
		                        <option value="7">Denmark</option>
		                        <option value="5">Singapore</option>
		                        <option value="6">Sweden</option>
		                        <option value="2">United States</option>
		                    </select>
		                </label>
		            </div>
		            <div class="input-wrap">
		                <div class="phone-number">
		                    <input placeholder="Phone Number *" name="phone" value="" type="text">
		                </div>
		            </div>
		            <div class="input-wrap">
		                <input placeholder="Postcode *" name="postcode" value="" type="text">
		            </div>
		            <div class="input-wrap">
		                <input name="password" value="" type="password">
		            </div>
		            <div class="agree-wrap">
		                <input id="agree" name="agree" type="checkbox">
		                <label for="agree" class="terms">
		                I agree to
		                <a href="index.php?page=terms">Terms &amp; Conditions</a>
		                </label>
		            </div>
		            <button type="submit">
		            Sign up
		            </button>
	            </fieldset>
			</form>
		</div>
	</div>	
</div>