@extends('layouts.app')

@section('content')
    <!--begin::Modal - Create App-->
    <div class="" id="kt_modal_create_app" tabindex="-1" aria-hidden="true">
        <!--begin::Modal dialog-->
        <div class="modal-dialog modal-dialog-centered mw-900px">
            <!--begin::Modal content-->
            <div class="modal-content">
                <!--begin::Modal header-->
                <div class="modal-header">
                    <!--begin::Modal title-->
                    <h2>Send Parcel</h2>
                    <!--end::Modal title-->
                    <!--begin::Close-->
                    <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                        <span class="svg-icon svg-icon-1">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
									<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
									<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
								</svg>
							</span>
                        <!--end::Svg Icon-->
                    </div>
                    <!--end::Close-->
                </div>
                <!--end::Modal header-->
                <!--begin::Modal body-->
                <div class="modal-body py-lg-10 px-lg-10">
                    <!--begin::Stepper-->
                    <div class="stepper stepper-pills stepper-column d-flex flex-column flex-xl-row flex-row-fluid" id="kt_modal_create_app_stepper">
                        <!--begin::Aside-->
                        <div class="d-flex justify-content-center justify-content-xl-start flex-row-auto w-100 w-xl-300px">
                            <!--begin::Nav-->
                            <div class="stepper-nav ps-lg-10">
                                <!--begin::Step 1-->
                                <div class="stepper-item current" data-kt-stepper-element="nav">
                                    <!--begin::Line-->
                                    <div class="stepper-line w-40px"></div>
                                    <!--end::Line-->
                                    <!--begin::Icon-->
                                    <div class="stepper-icon w-40px h-40px">
                                        <i class="stepper-check fas fa-check"></i>
                                        <span class="stepper-number">1</span>
                                    </div>
                                    <!--end::Icon-->
                                    <!--begin::Label-->
                                    <div class="stepper-label">
                                        <h3 class="stepper-title">Pickup Address</h3>
                                        <div class="stepper-desc">Define your pickup address</div>
                                    </div>
                                    <!--end::Label-->
                                </div>
                                <!--end::Step 1-->
                                <!--begin::Step 2-->
                                <div class="stepper-item" data-kt-stepper-element="nav">
                                    <!--begin::Line-->
                                    <div class="stepper-line w-40px"></div>
                                    <!--end::Line-->
                                    <!--begin::Icon-->
                                    <div class="stepper-icon w-40px h-40px">
                                        <i class="stepper-check fas fa-check"></i>
                                        <span class="stepper-number">2</span>
                                    </div>
                                    <!--begin::Icon-->
                                    <!--begin::Label-->
                                    <div class="stepper-label">
                                        <h3 class="stepper-title">Receiver Address</h3>
                                        <div class="stepper-desc">Define your receiver address</div>
                                    </div>
                                    <!--begin::Label-->
                                </div>
                                <!--end::Step 2-->
                                <!--begin::Step 3-->
                                <div class="stepper-item" data-kt-stepper-element="nav">
                                    <!--begin::Line-->
                                    <div class="stepper-line w-40px"></div>
                                    <!--end::Line-->
                                    <!--begin::Icon-->
                                    <div class="stepper-icon w-40px h-40px">
                                        <i class="stepper-check fas fa-check"></i>
                                        <span class="stepper-number">3</span>
                                    </div>
                                    <!--end::Icon-->
                                    <!--begin::Label-->
                                    <div class="stepper-label">
                                        <h3 class="stepper-title">Sender</h3>
                                        <div class="stepper-desc">Fill in your details</div>
                                    </div>
                                    <!--end::Label-->
                                </div>
                                <!--end::Step 3-->
                                <!--begin::Step 4-->
                                <div class="stepper-item" data-kt-stepper-element="nav">
                                    <!--begin::Line-->
                                    <div class="stepper-line w-40px"></div>
                                    <!--end::Line-->
                                    <!--begin::Icon-->
                                    <div class="stepper-icon w-40px h-40px">
                                        <i class="stepper-check fas fa-check"></i>
                                        <span class="stepper-number">4</span>
                                    </div>
                                    <!--end::Icon-->
                                    <!--begin::Label-->
                                    <div class="stepper-label">
                                        <h3 class="stepper-title">Receiver</h3>
                                        <div class="stepper-desc">Provide receiver details</div>
                                    </div>
                                    <!--end::Label-->
                                </div>
                                <!--end::Step 4-->
                                <!--begin::Step 5-->
                                <div class="stepper-item" data-kt-stepper-element="nav">
                                    <!--begin::Line-->
                                    <div class="stepper-line w-40px"></div>
                                    <!--end::Line-->
                                    <!--begin::Icon-->
                                    <div class="stepper-icon w-40px h-40px">
                                        <i class="stepper-check fas fa-check"></i>
                                        <span class="stepper-number">5</span>
                                    </div>
                                    <!--end::Icon-->
                                    <!--begin::Label-->
                                    <div class="stepper-label">
                                        <h3 class="stepper-title">Parcels</h3>
                                        <div class="stepper-desc">Provide parcels details</div>
                                    </div>
                                    <!--end::Label-->
                                </div>
                                <!--end::Step 5-->
                            </div>
                            <!--end::Nav-->
                        </div>
                        <!--begin::Aside-->
                        <!--begin::Content-->
                        <div class="flex-row-fluid py-lg-5 px-lg-15">
                            <!--begin::Form-->
                            <form class="form" action="/quotes" method="post" novalidate="novalidate" id="kt_modal_create_app_form">
                                <!--begin::Step 1-->
                                <div class="current" data-kt-stepper-element="content">
                                    <div class="w-100">
                                        <div class="card card-flush py-4">
                                            <!--begin::Card body-->
                                            <div class="card-body pt-0">
                                                <!--begin::Billing address-->
                                                <div class="d-flex flex-column gap-5 gap-md-7">
                                                    <!--begin::Title-->
                                                    <div class="fs-3 fw-bolder mb-n2">Pickup Address</div>
                                                    <!--end::Title-->
                                                    <!--begin::Input group-->
                                                    <div class="d-flex flex-column flex-md-row gap-5">
                                                        <div class="fv-row flex-row-fluid">
                                                            <!--begin::Label-->
                                                            <label class="required form-label">Address Line 1
                                                                <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify your address"></i>
                                                            </label>
                                                            <!--end::Label-->
                                                            <!--begin::Input-->
                                                            <input class="form-control" name="billing_order_address_1" placeholder="Address Line 1" value="" />
                                                            <!--end::Input-->
                                                        </div>
                                                        <div class="flex-row-fluid">
                                                            <!--begin::Label-->
                                                            <label class="form-label">Address Line 2</label>
                                                            <!--end::Label-->
                                                            <!--begin::Input-->
                                                            <input class="form-control" name="billing_order_address_2" placeholder="Address Line 2" />
                                                            <!--end::Input-->
                                                        </div>
                                                    </div>
                                                    <!--end::Input group-->
                                                    <!--begin::Input group-->
                                                    <div class="d-flex flex-column flex-md-row gap-5">
                                                        <div class="flex-row-fluid">
                                                            <!--begin::Label-->
                                                            <label class="form-label">Provence</label>
                                                            <!--end::Label-->
                                                            <!--begin::Input-->
                                                            <input class="form-control" name="billing_order_provence" placeholder="" value="" />
                                                            <!--end::Input-->
                                                        </div>
                                                        <div class="flex-row-fluid">
                                                            <!--begin::Label-->
                                                            <label class="form-label">City</label>
                                                            <!--end::Label-->
                                                            <!--begin::Input-->
                                                            <input class="form-control" name="billing_order_city" placeholder="" value="" />
                                                            <!--end::Input-->
                                                        </div>
                                                        <div class="fv-row flex-row-fluid">
                                                            <!--begin::Label-->
                                                            <label class="required form-label">Postcode</label>
                                                            <!--end::Label-->
                                                            <!--begin::Input-->
                                                            <input class="form-control" name="billing_order_postcode" placeholder="" value="" />
                                                            <!--end::Input-->
                                                        </div>
                                                        <div class="fv-row flex-row-fluid">
                                                            <!--begin::Label-->
                                                            <label class="required form-label">Suburb</label>
                                                            <!--end::Label-->
                                                            <!--begin::Input-->
                                                            <input class="form-control" name="billing_order_suburb" placeholder="" value="" />
                                                            <!--end::Input-->
                                                        </div>
                                                    </div>
                                                    <!--end::Input group-->
                                                </div>
                                                <!--end::Billing address-->
                                            </div>
                                            <!--end::Card body-->
                                        </div>
                                    </div>
                                </div>
                                <!--end::Step 1-->
                                <!--begin::Step 2-->
                                <div data-kt-stepper-element="content">
                                    <div class="w-100">
                                        <div class="card card-flush py-4">
                                            <!--begin::Card body-->
                                            <div class="card-body pt-0">
                                                <!--begin::Billing address-->
                                                <div class="d-flex flex-column gap-5 gap-md-7">
                                                    <!--begin::Title-->
                                                    <div class="fs-3 fw-bolder mb-n2">Pickup Address</div>
                                                    <!--end::Title-->
                                                    <!--begin::Input group-->
                                                    <div class="d-flex flex-column flex-md-row gap-5">
                                                        <div class="fv-row flex-row-fluid">
                                                            <!--begin::Label-->
                                                            <label class="required form-label">Address Line 1
                                                                <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify your address"></i>
                                                            </label>
                                                            <!--end::Label-->
                                                            <!--begin::Input-->
                                                            <input class="form-control" name="receiver_order_address_1" placeholder="Address Line 1" value="" />
                                                            <!--end::Input-->
                                                        </div>
                                                        <div class="flex-row-fluid">
                                                            <!--begin::Label-->
                                                            <label class="form-label">Address Line 2</label>
                                                            <!--end::Label-->
                                                            <!--begin::Input-->
                                                            <input class="form-control" name="receiver_order_address_2" placeholder="Address Line 2" />
                                                            <!--end::Input-->
                                                        </div>
                                                    </div>
                                                    <!--end::Input group-->
                                                    <!--begin::Input group-->
                                                    <div class="d-flex flex-column flex-md-row gap-5">
                                                        <div class="flex-row-fluid">
                                                            <!--begin::Label-->
                                                            <label class="form-label">Provence</label>
                                                            <!--end::Label-->
                                                            <!--begin::Input-->
                                                            <input class="form-control" name="receiver_order_provence" placeholder="" value="" />
                                                            <!--end::Input-->
                                                        </div>
                                                        <div class="flex-row-fluid">
                                                            <!--begin::Label-->
                                                            <label class="form-label">City</label>
                                                            <!--end::Label-->
                                                            <!--begin::Input-->
                                                            <input class="form-control" name="receiver_order_city" placeholder="" value="" />
                                                            <!--end::Input-->
                                                        </div>
                                                        <div class="fv-row flex-row-fluid">
                                                            <!--begin::Label-->
                                                            <label class="required form-label">Postcode</label>
                                                            <!--end::Label-->
                                                            <!--begin::Input-->
                                                            <input class="form-control" name="receiver_order_postcode" placeholder="" value="" />
                                                            <!--end::Input-->
                                                        </div>
                                                        <div class="fv-row flex-row-fluid">
                                                            <!--begin::Label-->
                                                            <label class="required form-label">Suburb</label>
                                                            <!--end::Label-->
                                                            <!--begin::Input-->
                                                            <input class="form-control" name="receiver_order_suburb" placeholder="" value="" />
                                                            <!--end::Input-->
                                                        </div>
                                                    </div>
                                                    <!--end::Input group-->
                                                </div>
                                                <!--end::Billing address-->
                                            </div>
                                            <!--end::Card body-->
                                        </div>
                                    </div>
                                </div>
                                <!--end::Step 2-->
                                <!--begin::Step 3-->
                                <div data-kt-stepper-element="content">
                                    <div class="w-100">
                                        <div class="card card-flush py-4">
                                            <!--begin::Card body-->
                                            <div class="card-body pt-0">
                                                <!--begin::Billing address-->
                                                <div class="d-flex flex-column gap-5 gap-md-7">
                                                    <!--begin::Title-->
                                                    <div class="fs-3 fw-bolder mb-n2">Your details</div>
                                                    <!--end::Title-->
                                                    <!--begin::Input group-->
                                                    <div class="d-flex flex-column flex-md-row gap-5">
                                                        <div class="fv-row flex-row-fluid">
                                                            <!--begin::Label-->
                                                            <label class="required form-label">Full Name</label>
                                                            <!--end::Label-->
                                                            <!--begin::Input-->
                                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                            <input class="form-control" name="sender_name" placeholder="Full Name" value="" />
                                                            <!--end::Input-->
                                                        </div>
                                                        <div class="flex-row-fluid">
                                                            <!--begin::Label-->
                                                            <label class="form-label">Contact number</label>
                                                            <!--end::Label-->
                                                            <!--begin::Input-->
                                                            <input class="form-control" name="sender_phone" placeholder="Contact number" />
                                                            <!--end::Input-->
                                                        </div>
                                                    </div>
                                                    <!--end::Input group-->
                                                    <!--begin::Input group-->
                                                    <div class="d-flex flex-column flex-md-row gap-5">
                                                        <div class="flex-row-fluid">
                                                            <!--begin::Label-->
                                                            <label class="form-label">Email</label>
                                                            <!--end::Label-->
                                                            <!--begin::Input-->
                                                            <input class="form-control" name="sender_email" placeholder="email address" value="" />
                                                            <!--end::Input-->
                                                        </div>
                                                    </div>
                                                    <!--end::Input group-->
                                                </div>
                                                <!--end::Billing address-->
                                            </div>
                                            <!--end::Card body-->
                                        </div>
                                    </div>
                                </div>
                                <!--end::Step 3-->
                                <!--begin::Step 4-->
                                <div data-kt-stepper-element="content">
                                    <div class="w-100">
                                        <div class="card card-flush py-4">
                                            <!--begin::Card body-->
                                            <div class="card-body pt-0">
                                                <!--begin::Billing address-->
                                                <div class="d-flex flex-column gap-5 gap-md-7">
                                                    <!--begin::Title-->
                                                    <div class="fs-3 fw-bolder mb-n2">Receiver details</div>
                                                    <!--end::Title-->
                                                    <!--begin::Input group-->
                                                    <div class="d-flex flex-column flex-md-row gap-5">
                                                        <div class="fv-row flex-row-fluid">
                                                            <!--begin::Label-->
                                                            <label class="required form-label">Full Name</label>
                                                            <!--end::Label-->
                                                            <!--begin::Input-->
                                                            <input class="form-control" name="receiver_name" placeholder="Full Name" value="" />
                                                            <!--end::Input-->
                                                        </div>
                                                        <div class="flex-row-fluid">
                                                            <!--begin::Label-->
                                                            <label class="form-label">Contact number</label>
                                                            <!--end::Label-->
                                                            <!--begin::Input-->
                                                            <input class="form-control" name="receiver_phone" placeholder="Contact number" />
                                                            <!--end::Input-->
                                                        </div>
                                                    </div>
                                                    <!--end::Input group-->
                                                    <!--begin::Input group-->
                                                    <div class="d-flex flex-column flex-md-row gap-5">
                                                        <div class="flex-row-fluid">
                                                            <!--begin::Label-->
                                                            <label class="form-label">Email</label>
                                                            <!--end::Label-->
                                                            <!--begin::Input-->
                                                            <input class="form-control" name="receiver_email" placeholder="email address" value="" />
                                                            <!--end::Input-->
                                                        </div>
                                                    </div>
                                                    <!--end::Input group-->
                                                </div>
                                                <!--end::Billing address-->
                                            </div>
                                            <!--end::Card body-->
                                        </div>
                                    </div>
                                </div>
                                <!--end::Step 4-->
                                <!--begin::Step 5-->
                                <div data-kt-stepper-element="content">
                                    <div class="w-100">
                                        <div class="card card-flush py-4">
                                            <!--begin::Card body-->
                                            <div class="card-body pt-0">
                                                <!--begin::Billing address-->
                                                <div class="d-flex flex-column gap-5 gap-md-7">
                                                    <!--begin::Title-->
                                                    <div class="fs-3 fw-bolder mb-n2">Parcel details</div>
                                                    <!--end::Title-->
                                                    <!--begin::Input group-->
                                                    <div class="d-flex flex-column flex-md-row gap-5">
                                                        <div class="fv-row flex-row-fluid">
                                                            <!--begin::Label-->
                                                            <label class="required form-label">Mass</label>
                                                            <!--end::Label-->
                                                            <!--begin::Input-->
                                                            <input class="form-control" id="mass" placeholder="mass" value="" />
                                                            <!--end::Input-->
                                                        </div>
                                                        <div class="flex-row-fluid">
                                                            <!--begin::Label-->
                                                            <label class="form-label">Length</label>
                                                            <!--end::Label-->
                                                            <!--begin::Input-->
                                                            <input class="form-control" id="length" placeholder="length" />
                                                            <!--end::Input-->
                                                        </div>
                                                    </div>
                                                    <!--end::Input group-->
                                                    <!--begin::Input group-->
                                                    <div class="d-flex flex-column flex-md-row gap-5">
                                                        <div class="flex-row-fluid">
                                                            <!--begin::Label-->
                                                            <label class="form-label">Breadth</label>
                                                            <!--end::Label-->
                                                            <!--begin::Input-->
                                                            <input class="form-control" id="breadth" placeholder="breadth" value="" />
                                                            <!--end::Input-->
                                                        </div>
                                                        <div class="flex-row-fluid">
                                                            <!--begin::Label-->
                                                            <label class="form-label">Height</label>
                                                            <!--end::Label-->
                                                            <!--begin::Input-->
                                                            <input class="form-control" id="height" placeholder="breadth" value="" />
                                                            <!--end::Input-->
                                                        </div>
                                                        <div class="flex-row-fluid">
                                                            <!--begin::Label-->
                                                            <label class="form-label">Units</label>
                                                            <!--end::Label-->
                                                            <!--begin::Input-->
                                                            <input class="form-control" id="units" placeholder="units" value="" />
                                                            <!--end::Input-->
                                                        </div>

                                                    </div>
                                                    <div class="d-flex flex-column flex-md-row gap-5">

                                                        <div class="flex-row-fluid">
                                                            <!--begin::Input-->
                                                            <itemsG id="itemsG"></itemsG>
                                                            <!--end::Input-->
                                                        </div>
                                                        <div class="flex-row-fluid">
                                                            <input type="button" class="btn btn-lg btn-primary" id="addParcel" value="Add">
                                                        </div>
                                                    </div>
                                                    <!--end::Input group-->
                                                </div>
                                                <!--end::Billing address-->
                                            </div>
                                            <!--end::Card body-->
                                        </div>
                                    </div>
                                </div>
                                <!--end::Step 5-->
                                <!--begin::Actions-->
                                <div class="d-flex flex-stack pt-10">
                                    <!--begin::Wrapper-->
                                    <div class="me-2">
                                        <button type="button" class="btn btn-lg btn-light-primary me-3" data-kt-stepper-action="previous">
                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr063.svg-->
                                            <span class="svg-icon svg-icon-3 me-1">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
													<rect opacity="0.5" x="6" y="11" width="13" height="2" rx="1" fill="currentColor" />
													<path d="M8.56569 11.4343L12.75 7.25C13.1642 6.83579 13.1642 6.16421 12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75L5.70711 11.2929C5.31658 11.6834 5.31658 12.3166 5.70711 12.7071L11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25C13.1642 17.8358 13.1642 17.1642 12.75 16.75L8.56569 12.5657C8.25327 12.2533 8.25327 11.7467 8.56569 11.4343Z" fill="currentColor" />
												</svg>
											</span>
                                            <!--end::Svg Icon-->Back</button>
                                    </div>
                                    <!--end::Wrapper-->
                                    <!--begin::Wrapper-->
                                    <div>
                                        <button type="submit" class="btn btn-lg btn-primary" data-kt-stepper-action="submit">
												<span class="indicator-label">Submit
                                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
												<span class="svg-icon svg-icon-3 ms-2 me-0">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
														<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="currentColor" />
														<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="currentColor" />
													</svg>
												</span>
                                                    <!--end::Svg Icon--></span>
                                            <span class="indicator-progress">Please wait...
												<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                        </button>
                                        <button type="button" class="btn btn-lg btn-primary" data-kt-stepper-action="next">Continue
                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                            <span class="svg-icon svg-icon-3 ms-1 me-0">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
													<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="currentColor" />
													<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="currentColor" />
												</svg>
											</span>
                                            <!--end::Svg Icon--></button>
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Actions-->
                            </form>
                            <!--end::Form-->
                        </div>
                        <!--end::Content-->
                    </div>
                    <!--end::Stepper-->
                </div>
                <!--end::Modal body-->
            </div>
            <!--end::Modal content-->
        </div>
        <!--end::Modal dialog-->
    </div>
    <!--end::Modal - Create App-->
@stop

@section('footer')
    <script src="{{ asset('js/custom/utilities/modals/send-parcel.js')}}"></script>
@stop
