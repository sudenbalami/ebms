<div id="divAddEmployeeWrapper">
	<div class="container">
		<div class="employee-header"><h1>Add Employee</h1></div>
		<div class="employee-body">
			<form action="index.php?page=eadd" class="employee-form" enctype="multipart/form-data" method="POST">
				<fieldset>
					<div class="input-wrap">
		                <input placeholder="Employee Id" name="eid" value="" type="text">
		            </div>
		            <div class="input-wrap">
		                <input name="ephoto" value="upload photo" type="file">
		            </div>
		            <div class="input-wrap">
		                <input placeholder="Employee Name" name="ename" value="" type="text">
		            </div>
		            <div class="input-wrap">
		                <input placeholder="Employee Designation" name="edesignation" value="" type="text">
		            </div>
		            <div class="input-wrap">
		                <input placeholder="Employee Email" name="email" value="" type="email">
		            </div>
		            <div class="input-wrap">
		                <input placeholder="Employee Phone" name="ephone" value="" type="text">
		            </div>
		            <div class="input-wrap">
		                <input placeholder="Employee Join" name="ejoin" value="" type="text">
		            </div>
		            <div class="input-wrap">
		                <input placeholder="Employee Address" name="eaddress" value="" type="text">
		            </div>
		            <button type="submit">Sign up</button>
				</fieldset>
			</form>
		</div>
	</div>
</div>