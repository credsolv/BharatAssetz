  <!-- Add New Deals -->
  <div class="offcanvas offcanvas-end offcanvas-large" tabindex="-1" id="offcanvas_add">
			<div class="offcanvas-header border-bottom">
				<h5 class="fw-semibold">Add New Property</h5>
				<button type="button"
					class="btn-close custom-btn-close border p-1 me-0 d-flex align-items-center justify-content-center rounded-circle"
					data-bs-dismiss="offcanvas" aria-label="Close">
					<i class="ti ti-x"></i>
				</button>
			</div>
			<div class="offcanvas-body">
				<form action="deals.html">
					<div class="row">
						<div class="col-md-12">
							<div class="mb-3">
								<label class="col-form-label">Property Name <span class="text-danger">*</span></label>
								<input type="text" class="form-control">
							</div>
						</div>
						<div class="col-md-6">
							<div class="mb-3">
								<div class="d-flex align-items-center justify-content-between">
									<label class="col-form-label">Type <span class="text-danger">*</span></label>
									<a href="" class="label-add " data-bs-toggle="offcanvas"
										data-bs-target="#offcanvas_pipeline">
										<i class="ti ti-square-rounded-plus"></i>
										Add New 
									</a>
								</div>
								<select class="select2">
									<option>Auction</option>
									<option>Sales</option>
									<option>Marketing</option>
									<option>Other</option>
								</select>
							</div>
						</div>
						<div class="col-md-6">
							<div class="mb-3">
								<label class="col-form-label">Status <span class="text-danger">*</span></label>
								<select class="select2">
									<option>Pass</option>
									<option>Fail</option>
									<option>Lost</option>
									<option>Won</option>
								</select>
							</div>
						</div>
						<div class="col-lg-3 col-md-6">
							<div class="mb-3">
								<label class="col-form-label">Property Value<span class="text-danger"> *</span></label>
								<input class="form-control" type="text">
							</div>
						</div>
						<div class="col-lg-3 col-md-6">
							<div class="mb-3">
								<label class="col-form-label">Currency <span class="text-danger">*</span></label>
								<select class="select">
									<option>Choose</option>
									<option>Dollar</option>
									<option>Euro</option>
									<option>Pound</option>
									<option>Rupee</option>
								</select>
							</div>
						</div>
						<div class="col-lg-3 col-md-6">
							<div class="mb-3">
								<label class="col-form-label">Period <span class="text-danger">*</span></label>
								<select class="select">
									<option>Choose</option>
									<option>Days</option>
									<option>Month</option>
								</select>
							</div>
						</div>
						<div class="col-lg-3 col-md-6">
							<div class="mb-3">
								<label class="col-form-label">Period Value <span class="text-danger">*</span></label>
								<input class="form-control" type="text">
							</div>
						</div>
						<div class="col-md-12">
							<div class="mb-3">
								<label class="col-form-label">Contact Person<span class="text-danger">*</span></label>
								<select class="multiple-img" multiple="multiple">
                                    <option data-image="{{ asset('assets/img/profiles/avatar.png') }}" selected>Balram Jha</option>
                                    <option data-image="{{ asset('assets/img/profiles/avatar.png') }}">Vijay Shetty</option>
                                    <option data-image="{{ asset('assets/img/profiles/avatar.png') }}">Pratik Bagwe</option>
                            	</select>
							</div>
							<div class="mb-3">
								<label class="col-form-label">Tag Area <span class="text-danger">*</span></label>
								<select class="select" multiple="multiple">
									<option selected>Andheri </option>
									<option selected>Hot Prop</option>
									<option selected>Limited Time</option>
									<option>Discounted</option>
								</select>
							</div>
						</div>
						<div class="col-md-6">
							<div class="mb-3">
								<label class="col-form-label">Emd Date <span class="text-danger">*</span></label>
								<div class="icon-form">
									<span class="form-icon"><i class="ti ti-calendar-check"></i></span>
									<input type="text" class="form-control datetimepicker" placeholder="">
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="mb-3">
								<label class="col-form-label">Auction Date <span
										class="text-danger">*</span></label>
								<div class="icon-form">
									<span class="form-icon"><i class="ti ti-calendar-check"></i></span>
									<input type="text" class="form-control datetimepicker" placeholder="">
								</div>
							</div>
						</div>
						<div class="col-md-12">
							<div class="mb-3">
								<label class="col-form-label">Bank <span class="text-danger">*</span></label>
								<select class="multiple-img" multiple="multiple">
                                    <option data-image="{{ asset('assets/img/profiles/avatar.png') }}">HDFC</option>
                                    <option data-image="{{ asset('assets/img/profiles/avatar.png') }}" selected>SBI</option>
                                    <option data-image="{{ asset('assets/img/profiles/avatar.png') }}">ICICI</option>
                                    <option data-image="{{ asset('assets/img/profiles/avatar.png') }}">BOB</option>
                                    <option data-image="{{ asset('assets/img/profiles/avatar.png') }}">FEDERAL</option>		</select>
							</div>
						</div>
						<div class="col-md-6">
							<div class="mb-3">
								<label class="col-form-label">Anouncement Date<span class="text-danger">*</span></label>
								<div class="icon-form">
									<span class="form-icon"><i class="ti ti-calendar-check"></i></span>
									<input type="text" class="form-control datetimepicker" placeholder="">
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="mb-3">
								<label class="col-form-label">Source <span class="text-danger">*</span></label>
								<select class="select">
									<option>Select</option>
									<option>Google</option>
									<option>Social Media</option>
								</select>
							</div>
						</div>
						<div class="col-md-6">
							<div class="mb-3">
								<label class="col-form-label">Tags <span class="text-danger">*</span></label>
								<input class="input-tags form-control" type="text" data-role="tagsinput" name="Label"
									value="HighValue, Rated">
							</div>
						</div>
						<div class="col-md-6">
							<div class="mb-3">
								<label class="col-form-label">Priority <span class="text-danger">*</span></label>
								<select class="select">
									<option>Select</option>
									<option>High</option>
									<option>Low</option>
									<option>Medium</option>
								</select>
							</div>
						</div>
						<div class="col-lg-12">
							<div class="mb-3">
								<label class="col-form-label">Description <span class="text-danger">*</span></label>
								<div class="summernote"></div>
							</div>
						</div>
					</div>
					<div class="d-flex align-items-center justify-content-end">
						<button type="button" data-bs-dismiss="offcanvas" class="btn btn-light me-2">Cancel</button>
						<button type="button" class="btn btn-primary" data-bs-toggle="modal"
							data-bs-target="#create_success">Create</button>
					</div>
				</form>
			</div>

		</div>
		<!-- /Add New Deals -->

		<!-- Edit Deals -->
		<div class="offcanvas offcanvas-end offcanvas-large" tabindex="-1" id="offcanvas_edit">
			<div class="offcanvas-header border-bottom">
				<h5 class="fw-semibold">Edit Deals</h5>
				<button type="button"
					class="btn-close custom-btn-close border p-1 me-0 d-flex align-items-center justify-content-center rounded-circle"
					data-bs-dismiss="offcanvas" aria-label="Close">
					<i class="ti ti-x"></i>
				</button>
			</div>
			<div class="offcanvas-body">
				<form action="deals.html">
					<div class="row">
						<div class="col-md-12">
							<div class="mb-3">
								<label class="col-form-label">Deal Name <span class="text-danger">*</span></label>
								<input type="text" class="form-control" value="Collins">
							</div>
						</div>
						<div class="col-md-6">
							<div class="mb-3">
								<div class="d-flex align-items-center justify-content-between">
									<label class="col-form-label">Pipeine <span class="text-danger">*</span></label>
									<a href="" class="label-add " data-bs-toggle="offcanvas"
										data-bs-target="#offcanvas_pipeline">
										<i class="ti ti-square-rounded-plus"></i>
										Add New
									</a>
								</div>
								<select class="select2">
									<option>Choose</option>
									<option>Sales</option>
									<option>Marketing</option>
									<option>Calls</option>
								</select>
							</div>
						</div>
						<div class="col-md-6">
							<div class="mb-3">
								<label class="col-form-label">Status <span class="text-danger">*</span></label>
								<select class="select2">
									<option>Choose</option>
									<option>Open</option>
									<option>Lost</option>
									<option>Won</option>
								</select>
							</div>
						</div>
						<div class="col-lg-3 col-md-6">
							<div class="mb-3">
								<label class="col-form-label">Deal Value<span class="text-danger"> *</span></label>
								<input class="form-control" type="text" value="$04,51,000">
							</div>
						</div>
						<div class="col-lg-3 col-md-6">
							<div class="mb-3">
								<label class="col-form-label">Currency <span class="text-danger">*</span></label>
								<select class="select">
									<option>Choose</option>
									<option selected>Dollar</option>
									<option>Euro</option>
									<option>Pound</option>
									<option>Rupee</option>
								</select>
							</div>
						</div>
						<div class="col-lg-3 col-md-6">
							<div class="mb-3">
								<label class="col-form-label">Period <span class="text-danger">*</span></label>
								<select class="select">
									<option>Choose</option>
									<option>Days</option>
									<option>Month</option>
								</select>
							</div>
						</div>
						<div class="col-lg-3 col-md-6">
							<div class="mb-3">
								<label class="col-form-label">Period Value <span class="text-danger">*</span></label>
								<input class="form-control" type="text">
							</div>
						</div>
						<div class="col-md-12">
							<div class="mb-3">
								<label class="col-form-label">Contact <span class="text-danger">*</span></label>
								<select class="multiple-img" multiple="multiple">
									<option data-image="assets/img/profiles/avatar.png" selected>Darlee Robertson
									</option>
									<option data-image="assets/img/profiles/avatar.png">Sharon Roy</option>
									<option data-image="assets/img/profiles/avatar.png">Vaughan Lewis</option>
									<option data-image="assets/img/profiles/avatar.png">Jessica Louise</option>
									<option data-image="assets/img/profiles/avatar.png">Carol Thomas</option>
								</select>
							</div>
							<div class="mb-3">
								<label class="col-form-label">Project <span class="text-danger">*</span></label>
								<select class="select" multiple="multiple">
									<option selected>Devops Design</option>
									<option selected>MargrateDesign</option>
									<option selected>UI for Chat</option>
									<option>Web Chat</option>
								</select>
							</div>
						</div>
						<div class="col-md-6">
							<div class="mb-3">
								<label class="col-form-label">Due Date <span class="text-danger">*</span></label>
								<div class="icon-form">
									<span class="form-icon"><i class="ti ti-calendar-check"></i></span>
									<input type="text" class="form-control datetimepicker" placeholder="">
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="mb-3">
								<label class="col-form-label">Expected Closing Date <span
										class="text-danger">*</span></label>
								<div class="icon-form">
									<span class="form-icon"><i class="ti ti-calendar-check"></i></span>
									<input type="text" class="form-control datetimepicker" placeholder="">
								</div>
							</div>
						</div>
						<div class="col-md-12">
							<div class="mb-3">
								<label class="col-form-label">Assignee <span class="text-danger">*</span></label>
								<select class="multiple-img" multiple="multiple">
									<option data-image="assets/img/profiles/avatar.png">Darlee Robertson</option>
									<option data-image="assets/img/profiles/avatar.png" selected>Sharon Roy</option>
									<option data-image="assets/img/profiles/avatar.png">Vaughan Lewis</option>
									<option data-image="assets/img/profiles/avatar.png">Jessica Louise</option>
									<option data-image="assets/img/profiles/avatar.png">Carol Thomas</option>
								</select>
							</div>
						</div>
						<div class="col-md-6">
							<div class="mb-3">
								<label class="col-form-label">Follow Up Date <span class="text-danger">*</span></label>
								<div class="icon-form">
									<span class="form-icon"><i class="ti ti-calendar-check"></i></span>
									<input type="text" class="form-control datetimepicker" placeholder="">
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="mb-3">
								<label class="col-form-label">Source <span class="text-danger">*</span></label>
								<select class="select">
									<option>Select</option>
									<option>Google</option>
									<option>Social Media</option>
								</select>
							</div>
						</div>
						<div class="col-md-6">
							<div class="mb-3">
								<label class="col-form-label">Tags <span class="text-danger">*</span></label>
								<input class="input-tags form-control" type="text" data-role="tagsinput" name="Label"
									value="Collab, Rated">
							</div>
						</div>
						<div class="col-md-6">
							<div class="mb-3">
								<label class="col-form-label">Priority <span class="text-danger">*</span></label>
								<select class="select">
									<option>Select</option>
									<option>High</option>
									<option>Low</option>
									<option>Medium</option>
								</select>
							</div>
						</div>
						<div class="col-lg-12">
							<div class="mb-3">
								<label class="col-form-label">Description <span class="text-danger">*</span></label>
								<div class="summernote"></div>
							</div>
						</div>
					</div>
					<div class="d-flex align-items-center justify-content-end">
						<button type="button" data-bs-dismiss="offcanvas" class="btn btn-light me-2">Cancel</button>
						<button type="button" class="btn btn-primary">Save Changes</button>

					</div>
				</form>
			</div>

		</div>
		<!-- /Edit Deals -->

		<!-- Delete Deal -->
		<div class="modal fade" id="delete_deal" role="dialog">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-body">
						<div class="text-center">
							<div class="avatar avatar-xl bg-danger-light rounded-circle mb-3">
								<i class="ti ti-trash-x fs-36 text-danger"></i>
							</div>
							<h4 class="mb-2">Remove Deal?</h4>
							<p class="mb-0">Are you sure you want to remove <br> deal you selected.</p>
							<div class="d-flex align-items-center justify-content-center mt-4">
								<a href="#" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</a>
								<a href="deals.html" class="btn btn-danger">Yes, Delete it</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /Delete Deal -->

		<!-- Create Deal -->
		<div class="modal custom-modal fade" id="create_success" role="dialog">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header border-0 m-0 justify-content-end">
						<button class="btn-close" data-bs-dismiss="modal" aria-label="Close">
							<i class="ti ti-x"></i>
						</button>
					</div>
					<div class="modal-body">
						<div class="success-message text-center">
							<div class="success-popup-icon bg-light-blue">
								<i class="ti ti-medal"></i>
							</div>
							<h3>Deal Created Successfully!!!</h3>
							<p>View the details of deal, created</p>
							<div class="col-lg-12 text-center modal-btn">
								<a href="#" class="btn btn-light" data-bs-dismiss="modal">Cancel</a>
								<a href="deals-details.html" class="btn btn-primary">View Details</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /Create Deal -->