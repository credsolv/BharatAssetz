	<!-- Add User -->
	<div class="offcanvas offcanvas-end offcanvas-large" tabindex="-1" id="offcanvas_add">
			<div class="offcanvas-header border-bottom">
				<h5 class="fw-semibold">Add New Branch with User</h5>
				<button type="button"
					class="btn-close custom-btn-close border p-1 me-0 d-flex align-items-center justify-content-center rounded-circle"
					data-bs-dismiss="offcanvas" aria-label="Close">
					<i class="ti ti-x"></i>
				</button>
			</div>
			<div class="offcanvas-body">
				<form action="manage-users.html">
					<div>
						<!-- Basic Info -->
						<div>
							<div class="row">
								<div class="col-md-12">
									<div class="profile-pic-upload">
										<div class="profile-pic">
											<span><i class="ti ti-photo"></i></span>
										</div>
										<div class="upload-content">
											<div class="upload-btn">
												<input type="file">
												<span>
													<i class="ti ti-file-broken"></i>Upload File
												</span>
											</div>
											<p>JPG, GIF or PNG. Max size of 800K</p>
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="mb-3">
										<label class="col-form-label"> Name of Branch <span class="text-danger">*</span></label>
										<input type="text" class="form-control">
									</div>
								</div>
								<div class="col-md-6">
									<div class="mb-3">
										<label class="col-form-label"> Name of User <span class="text-danger">*</span></label>
										<input type="text" class="form-control">
									</div>
								</div>
								<div class="col-md-6">
									<div class="mb-3">
										<label class="col-form-label">User Name <span
												class="text-danger">*</span></label>
										<input type="text" class="form-control">
									</div>
								</div>
								<div class="col-md-6">
									<div class="mb-3">
										<div class="d-flex justify-content-between align-items-center">
											<label class="col-form-label">Email <span
													class="text-danger">*</span></label>
											<div class="status-toggle small-toggle-btn d-flex align-items-center">
												<span class="me-2 label-text">Email Opt Out</span>
												<input type="checkbox" id="user1" class="check" checked="">
												<label for="user1" class="checktoggle"></label>
											</div>
										</div>
										<input type="text" class="form-control">
									</div>
								</div>
								<div class="col-md-6">
									<div class="mb-3">
										<label class="col-form-label">Role <span class="text-danger">*</span></label>
										<input type="text" class="form-control">
									</div>
								</div>
								<div class="col-md-6">
									<div class="mb-3">
										<label class="col-form-label">Phone Number <span class="text-danger">*</span></label>
										<input type="text" class="form-control">
									</div>
								</div>
								
								<div class="col-md-6">
									<div class="mb-3">
										<label class="col-form-label">Password <span class="text-danger">*</span></label>
										<div class="icon-form-end">
											<span class="form-icon" onclick="togglePasswordVisibility('password')"><i class="ti ti-eye-off" id="password-icon"></i></span>
											<input type="password" class="form-control" id="password">
										</div>
									</div>
								</div>

								<div class="col-md-6">
									<div class="mb-3">
										<label class="col-form-label">Repeat Password <span class="text-danger">*</span></label>
										<div class="icon-form-end">
											<span class="form-icon" onclick="togglePasswordVisibility('repeat-password')"><i class="ti ti-eye-off" id="repeat-password-icon"></i></span>
											<input type="password" class="form-control" id="repeat-password">
										</div>
									</div>
								</div>

								
								
								<div class="col-md-6">
									<div class="mb-3">
										<label class="col-form-label">Location <span
												class="text-danger">*</span></label>
										<select class="select">
											<option>Choose</option>
											<option>Germany</option>
											<option>USA</option>
											<option>Canada</option>
											<option>India</option>
											<option>China</option>
										</select>
									</div>
								</div>
								<div class="col-md-6">
									<div class="radio-wrap">
										<label class="col-form-label">Status</label>
										<div class="d-flex align-items-center">
											<div class="me-2">
												<input type="radio" class="status-radio" id="active1" name="status"
													checked="">
												<label for="active1">Active</label>
											</div>
											<div>
												<input type="radio" class="status-radio" id="inactive1" name="status">
												<label for="inactive1">Inactive</label>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- /Basic Info -->
					</div>
					<div class="d-flex align-items-center justify-content-end">
						<a href="#" class="btn btn-light me-2" data-bs-dismiss="offcanvas">Cancel</a>
						<button type="submit" class="btn btn-primary">Create</button>
					</div>
				</form>
			</div>

		</div>
		<!-- /Add User -->

		<!-- Edit User -->
		<div class="offcanvas offcanvas-end offcanvas-large" tabindex="-1" id="offcanvas_edit">
			<div class="offcanvas-header border-bottom">
				<h5 class="fw-semibold">Edit User</h5>
				<button type="button"
					class="btn-close custom-btn-close border p-1 me-0 d-flex align-items-center justify-content-center rounded-circle"
					data-bs-dismiss="offcanvas" aria-label="Close">
					<i class="ti ti-x"></i>
				</button>
			</div>
			<div class="offcanvas-body">
				<form action="manage-users.html">
					<div>
						<!-- Basic Info -->
						<div>
							<div class="row">
								<div class="col-md-12">
									<div class="profile-pic-upload">
										<div class="profile-pic">
											<span><i class="ti ti-photo"></i></span>
										</div>
										<div class="upload-content">
											<div class="upload-btn">
												<input type="file">
												<span>
													<i class="ti ti-file-broken"></i>Upload File
												</span>
											</div>
											<p>JPG, GIF or PNG. Max size of 800K</p>
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="mb-3">
										<label class="col-form-label"> Name <span class="text-danger">*</span></label>
										<input type="text" class="form-control" value="Darlee Robertson">
									</div>
								</div>
								<div class="col-md-6">
									<div class="mb-3">
										<label class="col-form-label">User Name <span
												class="text-danger">*</span></label>
										<input type="text" class="form-control" value="Darlee Robertson">
									</div>
								</div>
								<div class="col-md-6">
									<div class="mb-3">
										<div class="d-flex justify-content-between align-items-center">
											<label class="col-form-label">Email <span
													class="text-danger">*</span></label>
											<div class="status-toggle small-toggle-btn d-flex align-items-center">
												<span class="me-2 label-text">Email Opt Out</span>
												<input type="checkbox" id="user1" class="check" checked="">
												<label for="user1" class="checktoggle"></label>
											</div>
										</div>
										<input type="text" class="form-control" value="robertson@example.com">
									</div>
								</div>
								<div class="col-md-6">
									<div class="mb-3">
										<label class="col-form-label">Role <span class="text-danger">*</span></label>
										<input type="text" class="form-control" value="Facility Manager">
									</div>
								</div>
								<div class="col-md-6">
									<div class="mb-3">
										<label class="col-form-label">Phone 1 <span class="text-danger">*</span></label>
										<input type="text" class="form-control" value="	+1 989757485">
									</div>
								</div>
								<div class="col-md-6">
									<div class="mb-3">
										<label class="col-form-label">Phone 2</label>
										<input type="text" class="form-control" value="	+1 989757485">
									</div>
								</div>
								<div class="col-md-6">
									<div class="mb-3">
										<label class="col-form-label">Password <span
												class="text-danger">*</span></label>
										<div class="icon-form-end">
											<span class="form-icon"><i class="ti ti-eye-off"></i></span>
											<input type="password" class="form-control" value="****">
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="mb-3">
										<label class="col-form-label">Repeat Password <span
												class="text-danger">*</span></label>
										<div class="icon-form-end">
											<span class="form-icon"><i class="ti ti-eye-off"></i></span>
											<input type="password" class="form-control" value="****">
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="mb-3">
										<label class="col-form-label">Location <span
												class="text-danger">*</span></label>
										<select class="select">
											<option>Choose</option>
											<option selected>Germany</option>
											<option>USA</option>
											<option>Canada</option>
											<option>India</option>
											<option>China</option>
										</select>
									</div>
								</div>
								<div class="col-md-6">
									<div class="radio-wrap">
										<label class="col-form-label">Status</label>
										<div class="d-flex align-items-center">
											<div class="me-2">
												<input type="radio" class="status-radio" id="active1" name="status"
													checked="">
												<label for="active1">Active</label>
											</div>
											<div>
												<input type="radio" class="status-radio" id="inactive1" name="status">
												<label for="inactive1">Inactive</label>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- /Basic Info -->
					</div>
					<div class="d-flex align-items-center justify-content-end">
						<a href="#" class="btn btn-light me-2" data-bs-dismiss="offcanvas">Cancel</a>
						<button type="submit" class="btn btn-primary">Create</button>
					</div>
				</form>
			</div>

		</div>
		<!-- /Edit User -->

		<!-- Delete User -->
		<div class="modal fade" id="delete_contact" role="dialog">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-body">
						<div class="text-center">
							<div class="avatar avatar-xl bg-danger-light rounded-circle mb-3">
								<i class="ti ti-trash-x fs-36 text-danger"></i>
							</div>
							<h4 class="mb-2">Remove users?</h4>
							<p class="mb-0">Are you sure you want to remove it</p>
							<div class="d-flex align-items-center justify-content-center mt-4">
								<a href="#" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</a>
								<a href="manage-users.html" class="btn btn-danger">Yes, Delete it</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /Delete User -->


		<script>
								function togglePasswordVisibility(fieldId) {
									var passwordField = document.getElementById(fieldId);
									var passwordIcon = document.getElementById(fieldId + '-icon');
									if (passwordField.type === "password") {
										passwordField.type = "text";
										passwordIcon.classList.remove('ti-eye-off');
										passwordIcon.classList.add('ti-eye');
									} else {
										passwordField.type = "password";
										passwordIcon.classList.remove('ti-eye');
										passwordIcon.classList.add('ti-eye-off');
									}
								}
								</script>