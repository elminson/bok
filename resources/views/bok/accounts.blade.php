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
                                    <div class="fro_profile-main">
                                        <div class="fro_profile-main-pic">
                                            <img src="assets/images/users/user-4.jpg" alt="" class="rounded-circle">
                                            <span class="fro-profile_main-pic-change">
                                                                <i class="fas fa-camera"></i>
                                                            </span>
                                        </div>
                                        <div class="fro_profile_user-detail">
                                            <h5 class="fro_user-name">Rosa Dodson</h5>
                                            <p class="mb-0 fro_user-name-post">UI/UX Designer</p>
                                        </div>
                                    </div>
                                </div><!--end col-->

                                <div class="col-lg-4 mb-3 mb-lg-0">
                                    <div class="header-title">Sales Report</div>
                                    <div class="row">
                                        <div class="col-7">
                                            <div class="seling-report">
                                                <h3 class="seling-data mb-1">81.88%</h3>
                                                <ul class="list-inline mb-0">
                                                    <li class="mb-2 list-inline-item text-muted font-13"><i class="mdi mdi-label text-success mr-2"></i>Computers</li>
                                                    <li class="mb-2 list-inline-item text-muted font-13"><i class="mdi mdi-label text-danger mr-2"></i>IPhones</li>
                                                    <li class="mb-2 list-inline-item text-muted font-13"><i class="mdi mdi-label text-warning mr-2"></i>Tablates</li>
                                                </ul>
                                                <h5 class="seling-data-detail">Total delivered</h5>
                                            </div>
                                        </div>
                                        <div class="col-5 align-item-center"><div class="chartjs-size-monitor" style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
                                            <canvas id="pro-doughnut" height="174" width="292" class="chartjs-render-monitor" style="display: block; height: 87px; width: 146px;"></canvas>
                                        </div>
                                    </div>
                                </div><!--end col-->
                                <div class="col-lg-4 mb-2 mb-lg-0">
                                    <div class="header-title">Revenue Report</div>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="seling-report">
                                                <h3 class="seling-data mb-1">$2353</h3>
                                                <p class="text-muted">Today's Revenue</p>
                                                <h5 class="seling-data-detail">Total Payment Clear</h5>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <span class="peity-bar" data-peity="{ &quot;fill&quot;: [&quot;#44a2d2&quot;, &quot;#e6edf3&quot;]}" data-width="100%" data-height="100" style="display: none;">6,2,8,4,3,8,1,3,6,5,9,2,8,1,4,8</span><svg class="peity" height="100" width="100%"><rect data-value="6" fill="#44a2d2" x="1.1145500000000002" y="33.33333333333334" width="8.916400000000001" height="66.66666666666666"></rect><rect data-value="2" fill="#e6edf3" x="12.260050000000001" y="77.77777777777777" width="8.916399999999998" height="22.22222222222223"></rect><rect data-value="8" fill="#44a2d2" x="23.40555" y="11.111111111111114" width="8.9164" height="88.88888888888889"></rect><rect data-value="4" fill="#e6edf3" x="34.551050000000004" y="55.55555555555556" width="8.916399999999996" height="44.44444444444444"></rect><rect data-value="3" fill="#44a2d2" x="45.696549999999995" y="66.66666666666667" width="8.91640000000001" height="33.33333333333333"></rect><rect data-value="8" fill="#e6edf3" x="56.84205" y="11.111111111111114" width="8.91640000000001" height="88.88888888888889"></rect><rect data-value="1" fill="#44a2d2" x="67.98755" y="88.88888888888889" width="8.91640000000001" height="11.111111111111114"></rect><rect data-value="3" fill="#e6edf3" x="79.13305" y="66.66666666666667" width="8.91640000000001" height="33.33333333333333"></rect><rect data-value="6" fill="#44a2d2" x="90.27855" y="33.33333333333334" width="8.91640000000001" height="66.66666666666666"></rect><rect data-value="5" fill="#e6edf3" x="101.42405" y="44.44444444444444" width="8.91640000000001" height="55.55555555555556"></rect><rect data-value="9" fill="#44a2d2" x="112.56954999999999" y="0" width="8.91640000000001" height="100"></rect><rect data-value="2" fill="#e6edf3" x="123.71505" y="77.77777777777777" width="8.916399999999996" height="22.22222222222223"></rect><rect data-value="8" fill="#44a2d2" x="134.86055" y="11.111111111111114" width="8.91640000000001" height="88.88888888888889"></rect><rect data-value="1" fill="#e6edf3" x="146.00605" y="88.88888888888889" width="8.91640000000001" height="11.111111111111114"></rect><rect data-value="4" fill="#44a2d2" x="157.15155" y="55.55555555555556" width="8.91640000000001" height="44.44444444444444"></rect><rect data-value="8" fill="#e6edf3" x="168.29705" y="11.111111111111114" width="8.916399999999982" height="88.88888888888889"></rect></svg>
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
                        <h4 class="mt-0 header-title">Personal Information</h4>
                        <h6>About :</h6>
                        <p class="text-muted font-13">Hi I'm Mark Kearney,has
                            been the industry's standard dummy text ever since the 1500s,
                            when an unknown printer took a galley of type.
                        </p>
                        <hr>
                        <div class="button-list btn-social-icon">
                            <button type="button" class="btn btn-facebook btn-round">
                                <i class="fab fa-facebook-f"></i>
                            </button>

                            <button type="button" class="btn btn-twitter btn-round ml-2">
                                <i class="fab fa-twitter"></i>
                            </button>

                            <button type="button" class="btn btn-info btn-round  ml-2">
                                <i class="fab fa-linkedin"></i>
                            </button>

                            <button type="button" class="btn btn-pink btn-round  ml-2">
                                <i class="fab fa-dribbble"></i>
                            </button>
                        </div>
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
                                    <div class="col-lg-6">
                                        <div class="card shadow-none  overflow-hidden">
                                            <div class="card-body bg-gradient2">
                                                <div class="">
                                                    <div class="card-icon">
                                                        <i class="fas fa-coins"></i>
                                                    </div>
                                                    <h2 class="font-weight-bold text-white">$85750.00</h2>
                                                    <p class="text-white mb-0 font-16">Total payments</p>
                                                </div>
                                                <div class="card">
                                                    <div class="card-body">
                                                        <h4 class="mt-0 header-title mb-3">Contact</h4>
                                                        <ul class="list-unstyled mb-0">
                                                            <li class=""><i class="mdi mdi-phone mr-2 text-success font-18"></i> <b> phone </b> : +91 23456 78910</li>
                                                            <li class="mt-2"><i class="mdi mdi-email-outline text-success font-18 mt-2 mr-2"></i> <b> Email </b> : mannat.theme@gmail.com</li>
                                                            <li class="mt-2"><i class="mdi mdi-map-marker text-success font-18 mt-2 mr-2"></i> <b>Location</b> : USA</li>
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
                                    <div class="col-lg-6">
                                        <div class="card shadow-none overflow-hidden">
                                            <div class="card-body bg-gradient1">
                                                <div class="">
                                                    <div class="card-icon">
                                                        <i class="far fa-user"></i>
                                                    </div>
                                                    <h2 class="font-weight-bold text-white">10</h2>
                                                    <p class="text-white mb-0 font-16">Top 10 Best Saler This Month</p>
                                                </div>

                                            <div class="card">
                                                <div class="card-body">
                                                    <h4 class="mt-0 header-title mb-3">Contact</h4>
                                                    <ul class="list-unstyled mb-0">
                                                        <li class=""><i class="mdi mdi-phone mr-2 text-success font-18"></i> <b> phone </b> : +91 23456 78910</li>
                                                        <li class="mt-2"><i class="mdi mdi-email-outline text-success font-18 mt-2 mr-2"></i> <b> Email </b> : mannat.theme@gmail.com</li>
                                                        <li class="mt-2"><i class="mdi mdi-map-marker text-success font-18 mt-2 mr-2"></i> <b>Location</b> : USA</li>
                                                    </ul>
                                                </div><!--end card-body-->
                                            </div>
                                            </div><!--end card-body-->
                                        </div><!--end card-->
                                    </div><!--end col-->
                                </div><!--end row-->
                            </div><!--end tab-pane-->

                        </div>  <!--end tab-content-->
                    </div><!--end card-body-->
                </div><!--end card-->
            </div><!--end col-->
        </div><!--end row-->
@endsection