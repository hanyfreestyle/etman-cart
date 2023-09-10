@extends('web.layouts.app')
@section('breadcrumb')
    <x-website.breadcrumb >
        {{ Breadcrumbs::render($SinglePageView['breadcrumb']) }}
    </x-website.breadcrumb>
@endsection
@section('content')
    <div class="section">
        <div class="container">

            <div class="row">
                <div class="col-lg-12">
                    <h1 class="def_h1 def_border " >{{$PageMeta->body_h1}}</h1>
                </div>
            </div>


            <div class="row">

                <div class="col-lg-6">
                    <div id="map" class="contact_map_1" data-zoom="17" data-latitude="31.202236" data-longitude="29.882242"></div>
                    <div class="mt-3 contact_page">
                        <h2>{{ __('web/address.ad1_title') }}</h2>
                        <ul class="contact_info">
                            <li>
                                <i class="ti-location-pin"></i>
                                <p class="footer_address">
                                    {!! nl2br(__('web/address.ad1_address')) !!}
                                </p>
                            </li>
                            <li>
                                <i class="ti-mobile"></i>
                                <p class="forcDir footer_phone">
                                    {!! nl2br(__('web/address.ad1_phone')) !!}
                                </p>
                            </li>

                            <li>
                                <i class=" far fa-clock"></i>
                                <p class="footer_address"><strong>{{__('web/address.ad1_hours')}}</strong>
                                    <br>
                                    {!!  nl2br(__('web/address.ad1_hours_text')) !!}
                                </p>
                            </li>
                        </ul>

                        @if($agent->isMobile())
                            <div class="text-center mt-3">
                                <a target="_blank" href="https://goo.gl/maps/GTWAx3WN26qAXofy7" class="btn btn-border-fill"> <i class="fas fa-map-marker-alt"></i>{{__('web/address.Get_Direction')}}</a>
                            </div>
                        @endif
                    </div>
                </div>

                <div class="col-lg-6 pt-2 pt-lg-0 mt-4 mt-lg-0">
                    <div id="sub_map" class="contact_map_1" data-zoom="17" data-latitude="31.238890" data-longitude="29.956199" ></div>
                    <div class="mt-3 contact_page">
                        <h2>{{ __('web/address.ad2_title') }}</h2>
                        <ul class="contact_info">
                            <li>
                                <i class="ti-location-pin"></i>
                                <p class="footer_address">
                                    {!! nl2br(__('web/address.ad2_address')) !!}
                                </p>
                            </li>
                            <li>
                                <i class="ti-mobile"></i>
                                <p class="forcDir footer_phone">
                                    {!! nl2br(__('web/address.ad2_phone')) !!}
                                </p>
                            </li>

                            <li>
                                <i class=" far fa-clock"></i>
                                <p class="footer_address"><strong>{{__('web/address.ad1_hours')}}</strong>
                                    <br>
                                    {!!  nl2br(__('web/address.ad2_hours_text')) !!}
                                </p>
                            </li>
                        </ul>
                        @if($agent->isMobile())
                            <div class="text-center mt-3">
                                <a target="_blank" href="https://goo.gl/maps/hjDuzdSQEWuu4tpd8" class="btn btn-border-fill"> <i class="fas fa-map-marker-alt"></i> {{__('web/address.Get_Direction')}}</a>
                            </div>
                        @endif

                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="section bg_gray">
        <div class="container">
            <div class="row">
                @if(false == $agent->isMobile())
                <div class="col-lg-4">
                    <div class="conatct_img">
                        <img src="{{getDefPhotoPath($DefPhotoList,'contact-from')}}" class="rounded"  alt="about_img"/>
                    </div>
                </div>
                @endif
                <div class="col-lg-8 contactform">

                    <h2 class="def_h2">{{__('web/contact_form.title')}}</h2>

                    <p class="leads"> {!! __('web/contact_form.des') !!}</p>
                    <div class="field_form">
                        <form method="post" name="">
                            <div class="row">
                                <div class="form-group col-md-6 mb-3">
                                    <input required placeholder="{{__('web/contact_form.name')}}" id="first-name" class="form-control" name="name" type="text">
                                </div>
                                <div class="form-group col-md-6 mb-3">
                                    <input required placeholder="{{__('web/contact_form.email')}}" id="email" class="form-control" name="email" type="email">
                                </div>
                                <div class="form-group col-md-6 mb-3">
                                    <input required placeholder="{{__('web/contact_form.Phone')}}" id="phone" class="form-control" name="phone">
                                </div>
                                <div class="form-group col-md-6 mb-3">
                                    <input placeholder="{{__('web/contact_form.subject')}}" id="subject" class="form-control" name="subject">
                                </div>
                                <div class="form-group col-md-12 mb-3">
                                    <textarea required placeholder="{{__('web/contact_form.Message')}}" id="description" class="form-control" name="message" rows="4"></textarea>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <button type="submit" title="{{__('web/contact_form.Submit')}}" class="btn btn-fill-out" id="submitButton" name="submit" value="Submit">{{__('web/contact_form.Submit')}}</button>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>



    <div class="section mt-3 mt-lg-3 pb-5">
        <x-website.block-faq-carousel :faq-categories="$FaqCategories" />
    </div>

@endsection


@section('googleMaps')
    <script src="https://maps.googleapis.com/maps/api/js?key={{$WebConfig->google_api}}&amp;callback=initMap"></script>
@endsection
