@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('labels.frontend.contact.box_title'))

@section('content')
    <!--================Home Banner Area =================-->
    <section class="banner_area">
        <div class="banner_inner d-flex align-items-center">
            <div class="container">
                <div class="banner_content">
                    <h2>Contact Us</h2>
                    <div class="page_link">
                        <a href="index">Home</a>
                        <a href="contact">Contact</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Home Banner Area =================-->

    <!--================Contact Area =================-->
    <section class="contact_area">
        <div class="container">
            <div id="mapBox" class="mapBox"
                 data-lat="40.701083"
                 data-lon="-74.1522848"
                 data-zoom="13"
                 data-info="PO Box CT16122 Collins Street West, Victoria 8007, Australia."
                 data-mlat="40.701083"
                 data-mlon="-74.1522848">
            </div>
            <div class="row">
                <div class="col-lg-3">
                    <div class="contact_info">
                        <div class="info_item">
                            <i class="lnr lnr-home"></i>
                            <h6>California, United States</h6>
                            <p>Santa monica bullevard</p>
                        </div>
                        <div class="info_item">
                            <i class="lnr lnr-phone-handset"></i>
                            <h6><a href="#">555 444 5555</a></h6>
                            <p>Mon to Fri 9am to 6 pm</p>
                        </div>
                        <div class="info_item">
                            <i class="lnr lnr-envelope"></i>
                            <h6><a href="#">support@bok.com</a></h6>
                            <p>Send us your query anytime!</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    {{ html()->form('POST', route('frontend.contact.send'))->class('row contact_form')->open() }}
                        <div class="col-md-6">
                            <div class="form-group">

                                {{ html()->text('name', optional(auth()->user())->name)
                                    ->class('form-control')
                                    ->placeholder(__('validation.attributes.frontend.name'))
                                    ->attribute('maxlength', 191)
                                    ->required()
                                    ->autofocus() }}
                            </div>
                            <div class="form-group">

                                {{ html()->email('email', optional(auth()->user())->email)
                                    ->class('form-control')
                                    ->placeholder(__('validation.attributes.frontend.email'))
                                    ->attribute('maxlength', 191)
                                    ->required() }}
                            </div>
                            <div class="form-group">

                                {{ html()->text('phone')
                                    ->class('form-control')
                                    ->placeholder(__('validation.attributes.frontend.phone'))
                                    ->attribute('maxlength', 191)
                                    ->required() }}
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">

                                {{ html()->textarea('message')
                                    ->class('form-control')
                                    ->placeholder(__('validation.attributes.frontend.message'))
                                    ->attribute('rows', 3)
                                    ->required() }}
                            </div>
                        </div>
                        <div class="col-md-12 text-right">
                            <button type="submit" value="submit" class="btn submit_btn">Send Message</button>
                        </div>
                    {{ html()->form()->close() }}
                </div>
            </div>
        </div>
    </section>

    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/jquery.form.js"></script>
    <script src="js/stellar.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="vendors/swiper/js/swiper.min.js"></script>
    @if (config('services.google.google_maps_api_active'))
        <script src="https://maps.googleapis.com/maps/api/js?key=<?=config('services.google.google_maps_api')?>"></script>
    @endif
    <script src="js/gmaps.min.js"></script>

@endsection

@push('after-scripts')
    @if(config('access.captcha.contact'))
        @captchaScripts
    @endif
@endpush