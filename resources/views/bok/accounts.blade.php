@extends('bok.layouts.app')

@section('title', app_name() . ' | ' . __('navs.frontend.dashboard') )
<link href="assets/plugins/ticker/jquery.jConveyorTicker.css" rel="stylesheet" type="text/css">
<link href="assets/plugins/dropify/css/dropify.min.css" rel="stylesheet">


<!-- App css -->
<link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="assets/css/icons.css" rel="stylesheet" type="text/css">
<link href="assets/css/metismenu.min.css" rel="stylesheet" type="text/css">
<link href="assets/css/style.css" rel="stylesheet" type="text/css">

<style type="text/css">.apexcharts-canvas {
        position: relative;
        user-select: none;
        /* cannot give overflow: hidden as it will crop tooltips which overflow outside chart area */
    }

    /* scrollbar is not visible by default for legend, hence forcing the visibility */
    .apexcharts-canvas ::-webkit-scrollbar {
        -webkit-appearance: none;
        width: 6px;
    }
    .apexcharts-canvas ::-webkit-scrollbar-thumb {
        border-radius: 4px;
        background-color: rgba(0,0,0,.5);
        box-shadow: 0 0 1px rgba(255,255,255,.5);
        -webkit-box-shadow: 0 0 1px rgba(255,255,255,.5);
    }

    .apexcharts-inner {
        position: relative;
    }

    .legend-mouseover-inactive {
        transition: 0.15s ease all;
        opacity: 0.20;
    }

    .apexcharts-series-collapsed {
        opacity: 0;
    }

    .apexcharts-gridline, .apexcharts-text {
        pointer-events: none;
    }

    .apexcharts-tooltip {
        border-radius: 5px;
        box-shadow: 2px 2px 6px -4px #999;
        cursor: default;
        font-size: 14px;
        left: 62px;
        opacity: 0;
        pointer-events: none;
        position: absolute;
        top: 20px;
        overflow: hidden;
        white-space: nowrap;
        z-index: 12;
        transition: 0.15s ease all;
    }
    .apexcharts-tooltip.light {
        border: 1px solid #e3e3e3;
        background: rgba(255, 255, 255, 0.96);
    }
    .apexcharts-tooltip.dark {
        color: #fff;
        background: rgba(30,30,30, 0.8);
    }
    .apexcharts-tooltip * {
        font-family: inherit;
    }

    .apexcharts-tooltip .apexcharts-marker,
    .apexcharts-area-series .apexcharts-area,
    .apexcharts-line {
        pointer-events: none;
    }

    .apexcharts-tooltip.active {
        opacity: 1;
        transition: 0.15s ease all;
    }

    .apexcharts-tooltip-title {
        padding: 6px;
        font-size: 15px;
        margin-bottom: 4px;
    }
    .apexcharts-tooltip.light .apexcharts-tooltip-title {
        background: #ECEFF1;
        border-bottom: 1px solid #ddd;
    }
    .apexcharts-tooltip.dark .apexcharts-tooltip-title {
        background: rgba(0, 0, 0, 0.7);
        border-bottom: 1px solid #222;
    }

    .apexcharts-tooltip-text-value,
    .apexcharts-tooltip-text-z-value {
        display: inline-block;
        font-weight: 600;
        margin-left: 5px;
    }

    .apexcharts-tooltip-text-z-label:empty,
    .apexcharts-tooltip-text-z-value:empty {
        display: none;
    }

    .apexcharts-tooltip-text-value,
    .apexcharts-tooltip-text-z-value {
        font-weight: 600;
    }

    .apexcharts-tooltip-marker {
        width: 12px;
        height: 12px;
        position: relative;
        top: 0px;
        margin-right: 10px;
        border-radius: 50%;
    }

    .apexcharts-tooltip-series-group {
        padding: 0 10px;
        display: none;
        text-align: left;
        justify-content: left;
        align-items: center;
    }

    .apexcharts-tooltip-series-group.active .apexcharts-tooltip-marker {
        opacity: 1;
    }
    .apexcharts-tooltip-series-group.active, .apexcharts-tooltip-series-group:last-child {
        padding-bottom: 4px;
    }
    .apexcharts-tooltip-y-group {
        padding: 6px 0 5px;
    }
    .apexcharts-tooltip-candlestick {
        padding: 4px 8px;
    }
    .apexcharts-tooltip-candlestick > div {
        margin: 4px 0;
    }
    .apexcharts-tooltip-candlestick span.value {
        font-weight: bold;
    }

    .apexcharts-xaxistooltip {
        opacity: 0;
        padding: 9px 10px;
        pointer-events: none;
        color: #373d3f;
        font-size: 13px;
        text-align: center;
        border-radius: 2px;
        position: absolute;
        z-index: 10;
        background: #ECEFF1;
        border: 1px solid #90A4AE;
        transition: 0.15s ease all;
    }

    .apexcharts-xaxistooltip:after, .apexcharts-xaxistooltip:before {
        left: 50%;
        border: solid transparent;
        content: " ";
        height: 0;
        width: 0;
        position: absolute;
        pointer-events: none;
    }

    .apexcharts-xaxistooltip:after {
        border-color: rgba(236, 239, 241, 0);
        border-width: 6px;
        margin-left: -6px;
    }
    .apexcharts-xaxistooltip:before {
        border-color: rgba(144, 164, 174, 0);
        border-width: 7px;
        margin-left: -7px;
    }

    .apexcharts-xaxistooltip-bottom:after, .apexcharts-xaxistooltip-bottom:before {
        bottom: 100%;
    }

    .apexcharts-xaxistooltip-bottom:after {
        border-bottom-color: #ECEFF1;
    }
    .apexcharts-xaxistooltip-bottom:before {
        border-bottom-color: #90A4AE;
    }

    .apexcharts-xaxistooltip-top:after, .apexcharts-xaxistooltip-top:before {
        top: 100%;
    }
    .apexcharts-xaxistooltip-top:after {
        border-top-color: #ECEFF1;
    }
    .apexcharts-xaxistooltip-top:before {
        border-top-color: #90A4AE;
    }

    .apexcharts-xaxistooltip.active {
        opacity: 1;
        transition: 0.15s ease all;
    }

    .apexcharts-yaxistooltip {
        opacity: 0;
        padding: 4px 10px;
        pointer-events: none;
        color: #373d3f;
        font-size: 13px;
        text-align: center;
        border-radius: 2px;
        position: absolute;
        z-index: 10;
        background: #ECEFF1;
        border: 1px solid #90A4AE;
    }

    .apexcharts-yaxistooltip:after, .apexcharts-yaxistooltip:before {
        top: 50%;
        border: solid transparent;
        content: " ";
        height: 0;
        width: 0;
        position: absolute;
        pointer-events: none;
    }
    .apexcharts-yaxistooltip:after {
        border-color: rgba(236, 239, 241, 0);
        border-width: 6px;
        margin-top: -6px;
    }
    .apexcharts-yaxistooltip:before {
        border-color: rgba(144, 164, 174, 0);
        border-width: 7px;
        margin-top: -7px;
    }

    .apexcharts-yaxistooltip-left:after, .apexcharts-yaxistooltip-left:before {
        left: 100%;
    }
    .apexcharts-yaxistooltip-left:after {
        border-left-color: #ECEFF1;
    }
    .apexcharts-yaxistooltip-left:before {
        border-left-color: #90A4AE;
    }

    .apexcharts-yaxistooltip-right:after, .apexcharts-yaxistooltip-right:before {
        right: 100%;
    }
    .apexcharts-yaxistooltip-right:after {
        border-right-color: #ECEFF1;
    }
    .apexcharts-yaxistooltip-right:before {
        border-right-color: #90A4AE;
    }

    .apexcharts-yaxistooltip.active {
        opacity: 1;
    }

    .apexcharts-xcrosshairs, .apexcharts-ycrosshairs {
        pointer-events: none;
        opacity: 0;
        transition: 0.15s ease all;
    }

    .apexcharts-xcrosshairs.active, .apexcharts-ycrosshairs.active {
        opacity: 1;
        transition: 0.15s ease all;
    }

    .apexcharts-ycrosshairs-hidden {
        opacity: 0;
    }

    .apexcharts-zoom-rect {
        pointer-events: none;
    }
    .apexcharts-selection-rect {
        cursor: move;
    }

    .svg_select_points, .svg_select_points_rot {
        opacity: 0;
        visibility: hidden;
    }
    .svg_select_points_l, .svg_select_points_r {
        cursor: ew-resize;
        opacity: 1;
        visibility: visible;
        fill: #888;
    }
    .apexcharts-canvas.zoomable .hovering-zoom {
        cursor: crosshair
    }
    .apexcharts-canvas.zoomable .hovering-pan {
        cursor: move
    }

    .apexcharts-xaxis,
    .apexcharts-yaxis {
        pointer-events: none;
    }

    .apexcharts-zoom-icon,
    .apexcharts-zoom-in-icon,
    .apexcharts-zoom-out-icon,
    .apexcharts-reset-zoom-icon,
    .apexcharts-pan-icon,
    .apexcharts-selection-icon,
    .apexcharts-menu-icon,
    .apexcharts-toolbar-custom-icon {
        cursor: pointer;
        width: 20px;
        height: 20px;
        line-height: 24px;
        color: #6E8192;
        text-align: center;
    }

    .apexcharts-zoom-icon svg,
    .apexcharts-zoom-in-icon svg,
    .apexcharts-zoom-out-icon svg,
    .apexcharts-reset-zoom-icon svg,
    .apexcharts-menu-icon svg {
        fill: #6E8192;
    }
    .apexcharts-selection-icon svg {
        fill: #444;
        transform: scale(0.76)
    }
    .apexcharts-zoom-icon.selected svg,
    .apexcharts-selection-icon.selected svg,
    .apexcharts-reset-zoom-icon.selected svg {
        fill: #008FFB;
    }
    .apexcharts-selection-icon:not(.selected):hover svg,
    .apexcharts-zoom-icon:not(.selected):hover svg,
    .apexcharts-zoom-in-icon:hover svg,
    .apexcharts-zoom-out-icon:hover svg,
    .apexcharts-reset-zoom-icon:hover svg,
    .apexcharts-menu-icon:hover svg {
        fill: #333;
    }

    .apexcharts-selection-icon, .apexcharts-menu-icon {
        position: relative;
    }
    .apexcharts-reset-zoom-icon {
        margin-left: 5px;
    }
    .apexcharts-zoom-icon, .apexcharts-reset-zoom-icon, .apexcharts-menu-icon {
        transform: scale(0.85);
    }

    .apexcharts-zoom-in-icon, .apexcharts-zoom-out-icon {
        transform: scale(0.7)
    }

    .apexcharts-zoom-out-icon {
        margin-right: 3px;
    }

    .apexcharts-pan-icon {
        transform: scale(0.62);
        position: relative;
        left: 1px;
        top: 0px;
    }
    .apexcharts-pan-icon svg {
        fill: #fff;
        stroke: #6E8192;
        stroke-width: 2;
    }
    .apexcharts-pan-icon.selected svg {
        stroke: #008FFB;
    }
    .apexcharts-pan-icon:not(.selected):hover svg {
        stroke: #333;
    }

    .apexcharts-toolbar {
        position: absolute;
        z-index: 11;
        top: 0px;
        right: 3px;
        max-width: 176px;
        text-align: right;
        border-radius: 3px;
        padding: 0px 6px 2px 6px;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .apexcharts-toolbar svg {
        pointer-events: none;
    }

    .apexcharts-menu {
        background: #fff;
        position: absolute;
        top: 100%;
        border: 1px solid #ddd;
        border-radius: 3px;
        padding: 3px;
        right: 10px;
        opacity: 0;
        min-width: 110px;
        transition: 0.15s ease all;
        pointer-events: none;
    }

    .apexcharts-menu.open {
        opacity: 1;
        pointer-events: all;
        transition: 0.15s ease all;
    }

    .apexcharts-menu-item {
        padding: 6px 7px;
        font-size: 12px;
        cursor: pointer;
    }
    .apexcharts-menu-item:hover {
        background: #eee;
    }

    @media screen and (min-width: 768px) {
        .apexcharts-toolbar {
            /*opacity: 0;*/
        }

        .apexcharts-canvas:hover .apexcharts-toolbar {
            opacity: 1;
        }
    }

    .apexcharts-datalabel.hidden {
        opacity: 0;
    }

    .apexcharts-pie-label,
    .apexcharts-datalabel, .apexcharts-datalabel-label, .apexcharts-datalabel-value {
        cursor: default;
        pointer-events: none;
    }

    .apexcharts-pie-label-delay {
        opacity: 0;
        animation-name: opaque;
        animation-duration: 0.3s;
        animation-fill-mode: forwards;
        animation-timing-function: ease;
    }

    .apexcharts-canvas .hidden {
        opacity: 0;
    }

    .apexcharts-hide .apexcharts-series-points {
        opacity: 0;
    }

    .apexcharts-area-series .apexcharts-series-markers .apexcharts-marker.no-pointer-events,
    .apexcharts-line-series .apexcharts-series-markers .apexcharts-marker.no-pointer-events, .apexcharts-radar-series path, .apexcharts-radar-series polygon {
        pointer-events: none;
    }

    /* markers */

    .apexcharts-marker {
        transition: 0.15s ease all;
    }

    @keyframes opaque {
        0% {
            opacity: 0;
        }
        100% {
            opacity: 1;
        }
    }</style><style type="text/css">/* Chart.js */
    @-webkit-keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}@keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}.chartjs-render-monitor{-webkit-animation:chartjs-render-animation 0.001s;animation:chartjs-render-animation 0.001s;}</style><style type="text/css">@keyframes resizeanim { from { opacity: 0; } to { opacity: 0; } } .resize-triggers { animation: 1ms resizeanim; visibility: hidden; opacity: 0; } .resize-triggers, .resize-triggers > div, .contract-trigger:before { content: " "; display: block; position: absolute; top: 0; left: 0; height: 100%; width: 100%; overflow: hidden; } .resize-triggers > div { background: #eee; overflow: auto; } .contract-trigger:before { width: 200%; height: 200%; }</style></head>

@section('content')
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body border-bottom">
                        <div class="fro_profile">
                            <div class="row">

                                <div class="col-lg-4 mb-3 mb-lg-0">
                                    <ul class="nav nav-pills file-category mb-0" id="pills-tab" role="tablist">
                                        <li class="nav-item file-category-block">
                                            <a class="nav-link file-category-folder bg-soft-primary" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">
                                                <i class="mdi mdi-cash-multiple"></i>
                                            </a>
                                            <p class="mb-0 mt-1">Open Account</p>
                                        </li>
                                        <li class="nav-item file-category-block">
                                            <a class="nav-link file-category-folder bg-soft-pink active" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">
                                                <i class="mdi mdi-bell"></i>
                                            </a>
                                            <p class="mb-0 mt-1">Alerts</p>
                                        </li>
                                        <li class="nav-item file-category-block">
                                            <a class="nav-link file-category-folder bg-soft-success" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">
                                                <i class="mdi mdi-checkbook"></i>
                                            </a>
                                            <p class="mb-0 mt-1">Bill Pay</p>
                                        </li>
                                        <li class="nav-item file-category-block">
                                            <a class="nav-link file-category-folder bg-soft-warning" id="pills-home-tab-1" data-toggle="pill" href="#pills-home-1" role="tab" aria-controls="pills-home" aria-selected="true">
                                                <i class="mdi mdi-account-arrow-right"></i>
                                            </a>
                                            <p class="mb-0 mt-1">Transfers</p>
                                        </li>
                                        <li class="nav-item file-category-block">
                                            <a class="nav-link file-category-folder bg-soft-info" id="pills-contact-tab-1" data-toggle="pill" href="#pills-contact-1" role="tab" aria-controls="pills-contact" aria-selected="false">
                                                <i class="mdi dripicons-tags"></i>
                                            </a>
                                            <p class="mb-0 mt-1">Special Offers</p>
                                        </li>
                                        <li class="nav-item file-category-block">
                                            <a class="nav-link file-category-folder bg-soft-purple" id="pills-profile-tab-2" data-toggle="pill" href="#pills-profile-2" role="tab" aria-controls="pills-profile" aria-selected="false">
                                                <i class="mdi mdi-email-mark-as-unread"></i>
                                            </a>
                                            <p class="mb-0 mt-1">Messages</p>
                                        </li>


                                    </ul>

                                </div><!--end col-->

                                <div class="col-lg-4 mb-3 mb-lg-0">
                                    <div class="header-title">Sales Report</div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="seling-report">
                                                <button type="button" class="btn btn-lg btn-block btn-success btn-square btn-skew waves-effect waves-light">
                                                    <span>
                                                        <i class="mdi mdi-check-all mr-2"></i>
                                                        Lock/unlock your ATM/debit card
                                                    </span>
                                                </button>
                                                <button type="button" class="btn btn-lg btn-block btn-success btn-square btn-skew waves-effect waves-light">
                                                    <span>
                                                        <i class="mdi mdi-check-all mr-2"></i>
                                                        Set daily purchase and ATM withdrawal limits
                                                    </span>
                                                </button>
                                                <button type="button" class="btn btn-lg btn-block btn-success btn-square btn-skew waves-effect waves-light">
                                                    <span>
                                                        <i class="mdi mdi-check-all mr-2"></i>
                                                        Set Travel Notice
                                                    </span>
                                                </button>
                                                <button type="button" class="btn btn-lg btn-block btn-success btn-square btn-skew waves-effect waves-light">
                                                    <span>
                                                        <i class="mdi mdi-check-all mr-2"></i>
                                                        Report a lost or stolen card
                                                    </span>
                                                </button>
                                            </div>
                                        </div>

                                    </div>
                                </div><!--end col-->
                                <div class="col-lg-4 mb-2 mb-lg-0">
                                    <div class="header-title">Total Current Balance</div>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="seling-report">
                                                <h3 class="seling-data mb-1">@money($totalBalance)</h3>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <span class="peity-bar" data-peity="{ &quot;fill&quot;: [&quot;#44a2d2&quot;, &quot;#e6edf3&quot;]}" data-width="100%" data-height="100" style="display: none;">6,2,8,4,3,8,1,3,6,5,9,2,8,1,4,8</span>
                                            <svg class="peity" height="100" width="100%">
                                                <rect data-value="6" fill="#44a2d2" x="1.1145500000000002" y="33.33333333333334" width="8.916400000000001" height="66.66666666666666"></rect>
                                                <rect data-value="2" fill="#e6edf3" x="12.260050000000001" y="77.77777777777777" width="8.916399999999998" height="22.22222222222223"></rect>
                                                <rect data-value="8" fill="#44a2d2" x="23.40555" y="11.111111111111114" width="8.9164" height="88.88888888888889"></rect>
                                                <rect data-value="4" fill="#e6edf3" x="34.551050000000004" y="55.55555555555556" width="8.916399999999996" height="44.44444444444444"></rect>
                                                <rect data-value="3" fill="#44a2d2" x="45.696549999999995" y="66.66666666666667" width="8.91640000000001" height="33.33333333333333"></rect>
                                                <rect data-value="8" fill="#e6edf3" x="56.84205" y="11.111111111111114" width="8.91640000000001" height="88.88888888888889"></rect>
                                                <rect data-value="1" fill="#44a2d2" x="67.98755" y="88.88888888888889" width="8.91640000000001" height="11.111111111111114"></rect>
                                                <rect data-value="3" fill="#e6edf3" x="79.13305" y="66.66666666666667" width="8.91640000000001" height="33.33333333333333"></rect>
                                                <rect data-value="6" fill="#44a2d2" x="90.27855" y="33.33333333333334" width="8.91640000000001" height="66.66666666666666"></rect>
                                                <rect data-value="5" fill="#e6edf3" x="101.42405" y="44.44444444444444" width="8.91640000000001" height="55.55555555555556"></rect>
                                                <rect data-value="9" fill="#44a2d2" x="112.56954999999999" y="0" width="8.91640000000001" height="100"></rect>
                                                <rect data-value="2" fill="#e6edf3" x="123.71505" y="77.77777777777777" width="8.916399999999996" height="22.22222222222223"></rect>
                                            </svg>
                                            <p class="text-muted">Balance past 12 months</p>
                                        </div>
                                    </div>
                                </div><!--end col-->
                            </div><!--end row-->
                        </div><!--end f_profile-->
                    </div><!--end card-body-->
                </div><!--end card-->
            </div><!--end col-->
        </div><!--end row-->

        <div class="row">
            <div class="col-lg-3">

                <div class="card">
                    <div class="card-body">
                        <div class="account-features">

                            <h2>Account features</h2>

                            <div class="features-group">
                                <div class="details-row-blank">
                                    <div class="row-label-blank">Paperless statements:  <button type="button" class="btn btn-soft-primary waves-effect waves-light">View statements<span class="ada-hidden">&nbsp;for accounts</span></button></div>
                                    <div class="row-value-blank">

                                    </div>
                                    <div class="clear-both"></div>
                                </div>
                            </div>
                            <div class="features-group">
                                <div class="details-row-blank">
                                    <div class="row-label-blank">Alerts:</div>
                                    <div class="row-value-blank">
                                        <button type="button" class="btn btn-soft-primary waves-effect waves-light">Edit alerts settings</button>
                                    </div>
                                    <div class="clear-both"></div>
                                </div>
                            </div>
                            <div class="features-group">
                                <div class="details-row-blank">
                                    <div class="row-label-blank">PayPal:</div>
                                    <div class="row-value-blank">
                                        <button type="button" class="btn btn-soft-primary waves-effect waves-light">Learn more&nbsp; about PayPal</button>
                                    </div>
                                    <div class="clear-both"></div>
                                </div>
                            </div>
                            <div class="features-group">

                                <div class="details-row-blank">
                                    <div class="row-label-blank">Digital Wallets &amp; Virtual Cards:</div>
                                    <div class="row-value-blank">
                                        <button type="button" class="btn btn-soft-primary waves-effect waves-light">Edit settings</button>
                                    </div>
                                    <div class="clear-both"></div>
                                </div>
                            </div>
                            <div class="features-group-last"></div>
                        </div>
                       <hr />

                    </div><!--end card-body-->
                </div><!--end card-->


            </div><!--end col-->

            <div class="col-lg-9">
                <div class="card">
                    <div class="card-body">
                        <div class="tab-content" id="profile-tabContent">
                            <div class="tab-pane fade show active" id="profile-dash">
                                <h4 class="header-title mt-0">Overview</h4>
                                <div class="chart-demo dash-apex-chart m-0" style="position: relative;">
                                    <div id="d2_overview" class="apex-charts" style="min-height: 364px;">

                                <div class="row">
                                    @foreach($accounts as $account)
                                    <div class="col-lg-6">

                                        <div class="card shadow-none  overflow-hidden">

                                            <div class="card-body bg-gradient2">
                                                <div class="">
                                                    <div class="card-icon">
                                                        <i class="fas fa-coins"></i>
                                                    </div>
                                                    <h2 class="font-weight-bold text-white">@money($account->balance)</h2>
                                                </div>
                                                <div class="card">
                                                    <div class="card-body">
                                                        <h4 class="mt-0 header-title mb-3">Account Info</h4>
                                                        <ul class="list-unstyled mb-0">
                                                            <li class=""><i class="mdi mdi-calendar mr-2 text-success font-18"></i> <b> Type: </b> {{ ucfirst($account->account_type) }} </li>
                                                            <li class=""><i class="mdi mdi-briefcase-download-outline mr-2 text-success font-18"></i> <b> Account number: </b> {{ $account->number}} </li>
                                                            <li class=""><i class="mdi mdi-routes mr-2 text-success font-18"></i> <b> Routing number: </b> {{ $account->route_number }} </li>
                                                            <li class=""><i class="mdi dripicons-location mr-2 text-success font-18"></i> <b> Tracking number: </b> {{ $account->tracking_number }} </li>
                                                            <li class=""><i class="mdi mdi-calendar mr-2 text-success font-18"></i> <b> Account Opened Date:</b> {{ date('d-M-y', strtotime($account->created_at)) }} </li>
                                                        </ul>
                                                    </div><!--end card-body-->
                                                </div>
                                            </div>

                                            <div class="card-body">
                                                <div class="" style="position: relative;">

                                                    <div class="resize-triggers"><div class="expand-trigger">
                                                            <div style="width: 382px; height: 251px;"></div></div>
                                                        <div class="contract-trigger"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div><!--end col-->
                                    @endforeach

                                </div><!--end row-->
                            </div><!--end tab-pane-->

                        </div>  <!--end tab-content-->
                    </div><!--end card-body-->
                </div><!--end card-->
            </div><!--end col-->
        </div><!--end row-->
@endsection