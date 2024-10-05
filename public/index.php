<!DOCTYPE html>
<html itemscope itemtype="http://schema.org/Map" prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb#">
    <head>
        <meta charset="utf-8"/>
        <title>Visualise earth:: an animated map of global wind and weather</title>
        <meta itemprop="name"                                      content="earth"/>
        <meta itemprop="description"     name="description"        content="an animated map of global wind and weather"/>
        <meta itemprop="author"          name="author"             content="Cameron Beccario"/>
        <meta property="og:type"        content="website"/>
        <meta property="og:title"       content="Visualise global scale systems"/>
        <meta property="og:description" content="An animated map of global wind and weather. Visit the community at https://www.facebook.com/EarthWindMap"/>
        <meta property="og:url"         content="http://airquality.iirs.gov.in/meteorology"/>
        <meta property="og:image"       content="http://airquality.iirs.gov.in/meteorology/preview.jpg"/>
        <link rel="shortcut icon" href="./favicon.ico"/>
        <link rel="apple-touch-icon" sizes="120x120" href="/iphone-icon.png"/>
        <link rel="apple-touch-icon" sizes="152x152" href="/ipad-icon.png"/>
        <link rel="stylesheet" type="text/css" href="./styles/styles.css"/>
        <link rel="alternate" hreflang="x-default" href="http://airquality.iirs.gov.in/meteorology"/>
        <style>
        .marquee {
        height: 50px;
        overflow: hidden;
        position: relative;
        /* background: #fefefe; */
        color: #fff;
        /* border: 1px solid #4a4a4a; */
        }
        
        .marquee div.main {
        position: absolute;
        width: 100%;
        height: 100%;
        margin: 0;
        line-height: 50px;
        text-align: center;
        -moz-transform: translateX(100%);
        -webkit-transform: translateX(100%);
        transform: translateX(100%);
        -moz-animation: scroll-left 2s linear infinite;
        -webkit-animation: scroll-left 2s linear infinite;
        animation: scroll-left 20s linear infinite;
        }
        
        @-moz-keyframes scroll-left {
        0% {
        -moz-transform: translateX(100%);
        }
        100% {
        -moz-transform: translateX(-100%);
        }
        }
        
        @-webkit-keyframes scroll-left {
        0% {
        -webkit-transform: translateX(100%);
        }
        100% {
        -webkit-transform: translateX(-100%);
        }
        }
        
        @keyframes scroll-left {
        0% {
        -moz-transform: translateX(100%);
        -webkit-transform: translateX(100%);
        transform: translateX(100%);
        }
        100% {
        -moz-transform: translateX(-100%);
        -webkit-transform: translateX(-100%);
        transform: translateX(-100%);
        }
        }
        .marquee div.main{
        display: flex;
        justify-content: center;
        align-items: center;
        }
        .marquee div.main p{
        margin-right: 15px;
        font-size: 22px;
        }
        </style>
    </head>
    <body data-lang="en">
        <script src="../jquery.min.js"></script>
        <script src="../jquery.vEllipsis.js"></script>
        <script src="../jquery.beefup.min.js"></script>
        <script src="../jquery-ui.js"></script>
        
        <script src="../bootstrap.min.js"></script>
        <script src="../custombox.legacy.min.js"></script>
        <script src="../custombox.min.js"></script>
        <link rel="stylesheet" href="../custombox.min.css">
        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!--About Us window begins-->
        
        <!--
        <div id="AboutUs" tabindex="-1" role="dialog" class="ui-dialog ui-corner-all ui-widget ui-widget-content ui-front wv-panel popup col-md-6" aria-describedby="wv-layers-info-dialog">
            <div id="AboutUsTitleBar" class="ui-dialog-titlebar ui-corner-all ui-widget-header ui-helper-clearfix">
                <span id="AboutUsHeader" class="ui-dialog-title">ABOUT</span>
                <button type="button" class="ui-button ui-corner-all ui-widget ui-button-icon-only ui-dialog-titlebar-close" title="" onclick="Custombox.modal.close();">
                <span class="ui-button-icon ui-icon ui-icon-closethick"></span><span class="ui-button-icon-space"> </span>
                </button>
            </div>
            <div class="wv-dialog wv-layers-info-dialog ui-dialog-content ui-widget-content ps ps--theme_default" id="wv-layers-info-dialog" style="width: auto; min-height: 111px; max-height: 300px; height: auto;overflow-y:auto !important;">
                <div id="AboutUsDesc" class="layer-description">
                                <div align=center>
                                    <video width="320" height="240" controlsList="nodownload" controls autoplay="true" muted="true">
                                                    <source src="air_quality.mp4" type="video/mp4">
                            
                                                            Your browser does not support the video.
                                            </video></div>
                        <p style='text-align:justify'>
                            
                            <!--AIR QUALITY MONITORING & FORECAST<br>-- >
                            In recent years, an increase in the poor air quality events is noted over Indian region. Particularly Delhi and surrounding region witness severely degraded air quality during post monsoon
                            and pre-monsoon seasons. Considering alarming situation of deteriorating air quality in India,
                            an initiative has been taken up at IIRS by synergistic use of numerical prediction
                            models for the forecasting of dust, particulate matter(PM 2.5 and PM 10) and
                            gaseous pollutants (CO, O<sub>3</sub>, SO<sub>2</sub>, NO<sub>x</sub>), ground based inputs and remote sensing
                            data sets of aerosol optical depth and particulate matter (PM 2.5 and PM 10)
                            to monitor air quality of Indian region in a methodological way. A web portal is hosted at IIRS website to disseminate model generated forecast fields and satellite
                                    based inputs for the monitoring and analysis of air quality over Indian region.
                            </p>
                    </div>
                </div>
                <div id="AboutUsAddress" >
                </div>
            </div>
            -->
            <!--About Us window ends-->
            
            
            
            
            <!--Disclaimer window starts-->
            <!--
            <div id="Disclaimer" tabindex="-1" role="dialog" class="ui-dialog ui-corner-all ui-widget ui-widget-content ui-front wv-panel popup col-md-6" aria-describedby="wv-layers-info-dialog">
                
                <div id="DisclaimerTitleBar" class="ui-dialog-titlebar ui-corner-all ui-widget-header ui-helper-clearfix">
                    <span id="DisclaimerHeader" class="ui-dialog-title">Disclaimer</span>
                    <button type="button" class="ui-button ui-corner-all ui-widget ui-button-icon-only ui-dialog-titlebar-close" title="" onclick="Custombox.modal.close();">
                    <span class="ui-button-icon ui-icon ui-icon-closethick"></span><span class="ui-button-icon-space"> </span>
                    </button>
                </div>
                <div class="wv-dialog wv-layers-info-dialog ui-dialog-content ui-widget-content ps ps--theme_default" id="wv-layers-info-dialog" style="width: auto; min-height: 111px; max-height: 250px; height: auto;overflow-y:auto !important;">
                    <div id="DisclaimerDesc" class="layer-description">
                        <p>IIRS is a training and education centre of ISRO. Forecast of various air quality parameters available on this web portal is based on numerical weather prediction model being run at IIRS. These forecasts (disseminated through this website) are purely for experimental purpose. Air quality forecast disseminated through this web portal should not be treated as an official forecast. IIRS is not responsible for any damages or loss experienced due to the usage of the information disseminated through this website.</p>
                    </div>
                </div>
                    
            </div>
            -->
            <!--Disclaimer window ends-->
            
            <!--Contact Us window begins-->
            <!--
            <div id="ContactUs" tabindex="-1" role="dialog" class="ui-dialog ui-corner-all ui-widget ui-widget-content ui-front wv-panel popup col-md-6" aria-describedby="wv-layers-info-dialog">
                
                <div id="ContactUsTitleBar" class="ui-dialog-titlebar ui-corner-all ui-widget-header ui-helper-clearfix">
                    <span id="ContactUsHeader" class="ui-dialog-title">Contact Us</span>
                    <button type="button" class="ui-button ui-corner-all ui-widget ui-button-icon-only ui-dialog-titlebar-close" title="" onclick="Custombox.modal.close();">
                    <span class="ui-button-icon ui-icon ui-icon-closethick"></span><span class="ui-button-icon-space"> </span>
                    </button>
                </div>
                <div class="wv-dialog wv-layers-info-dialog ui-dialog-content ui-widget-content ps ps--theme_default" id="wv-layers-info-dialog" style="width: auto; min-height: 111px; max-height: 180px; height: auto;overflow-y:auto !important;">
                    <div id="ContactUsDesc" class="layer-description">
                        <p style="line-height: normal;">
                            INDIAN INSTITUTE OF REMOTE SENSING, <br>
                            INDIAN SPACE RESEARCH ORGANISATION<br>
                            Dept. of Space, Govt. of India<br>
                            4, Kalidas Road, Dehradun - 248 001 (India)<br>
                            Tel: + 91 - (0)135 - 2524399 Fax:+ 91 - (0)135 - 2741987<br>
                            Email: <a href="#"><span  style="color:white;">director[At]iirs[dot]gov[dot]in </span> </a><br>
                                        </p>
                    </div>
                </div>
            </div>
            -->
            <!--Contact Us window ends-->
            
            <script>
            $(document).ready(function () {
            $().vEllipsis({
            'lines': 2,
            'responsive': true,
            'expandLink': true,                // expand link after char and additional link (from data-expandlink on element)
            'collapseLink': true,              // collapse link after char and additional link (from data-collapselink on element)
            'animationTime': '200',
            });
            //tabModule.init();
            
            });
                var modal1 = new Custombox.modal({
            content: {
            effect: 'scale',
            target: '#AboutUs'
            }, loader: {
            active: false
            }
            });
                    var modal2 = new Custombox.modal({
            content: {
            effect: 'scale',
            target: '#ContactUs'
            }, loader: {
            active: false
            }
            });
                    
            $("#btnTopRightInfo").click(function () {
            $("#TopRightMenu").slideToggle();
            });
            
            $(document).mouseup(function (e)
            {
            var container = $("#TopRightMenu"); // YOUR CONTAINER SELECTOR
            if (!container.is(e.target) // if the target of the click isn't the container...
            && container.has(e.target).length === 0) // ... nor a descendant of the container
            {
            container.hide();
            }
            });
            </script>
            <div style="position: relative;">
            <div style="display: flex; justify-content: space-between;align-items: center;">
                <div>
                    <div class="header" id="myHeader" >
                        <div id="header-logo">
                            <img id="headerImage" src="../images/iirs.png" style="height:100%;width:100%;" />
                        </div>
                        <div id="header-write">
                            <h2>AIR QUALITY MONITORING &amp; FORECAST <span style="margin-right: 0%;margin-top: 0.5%; float:right;font-size: 12px;"></span></h2>
                            <h1>Indian Institute of Remote Sensing, ISRO, Dehradun  </h1>
                        </div>
                    </div>
                </div>
                <div style="width: 60%;">
                    <div class="marquee">
                        <div class="main">
                    <p style="display: flex; flex-direction: row;white-space: nowrap;"> 
                        <span>Date |</span>&nbsp;&nbsp;
                        <span id="data-date" class="local"></span> &nbsp;&nbsp;
                        <span id="toggle-zone" class="text-button"></span>
                    </p>
                    <p style="display: flex; flex-direction: row;white-space: nowrap;"><span>Data | </span>&nbsp;&nbsp;<span id="data-layer"></span>
                </p>
                <p style="display: flex; flex-direction: row;white-space: nowrap;"><span>Source | </span>&nbsp;&nbsp;<span id="data-center"></span></p>
                
            </p>
        </div>
    </div>
</div>
<div>
    <p><strong>BETA</strong></p>
</div>
<div>
    <div >
        <button class="btnRightMenu" id="btnTopRightInfo"><i class="fa fa-info-circle fa-2x"></i></button>
    </div>
</div>
</div>
<div style="position:absolute;
    top:80px; 
    left: 0;
    right: 0;
    width: 100%;
    margin: 0 auto;
    display: flex;
    justify-content: left;">
    <p style="display: flex; justify-content: center;align-items: center;"><span id="scale-label">Scale | </span>
                <canvas id="scale"></canvas>
</div>
</div>

<!-- <div class="header" id="myHeader" >
<div id="header-logo">
    <img id="headerImage" src="../images/iirs.png" style="height:100%;width:100%;" />
</div>
<div id="header-write">
    <h2>AIR QUALITY MONITORING &amp; FORECAST <span style="margin-right: 0%;margin-top: 0.5%; float:right;font-size: 12px;"><strong>BETA</strong></span></h2>
    <h1>Indian Institute of Remote Sensing, ISRO, Dehradun  </h1>
</div>
</div> -->
<!--  <div style="margin-bottom: 0.5%; float:right;font-size: 24px; width:30%;z-index: 11">
<p>Date | <span
id="data-date" class="local"></span> <span
id="toggle-zone" class="text-button"></span>
</p>
<p>Data | <span id="data-layer"></span>
</p>
<p>Source | <span id="data-center"></span></p>
<p><span id="scale-label">Scale | </span>
<canvas id="scale" height="400"></canvas>
</p>
</div>  -->

<!-- <div style="position: absolute;right: 10px;top: 10px;z-index: 2;"> -->
<!-- <div >
<button class="btnRightMenu" id="btnTopRightInfo"><i class="fa fa-info-circle fa-2x"></i></button>
</div> -->

<div id="TopRightMenu" style="display: none;">
<ul>
<li><a onclick="OpenAboutUs()"><i class="fa fa-sticky-note"></i> About</a></li>
<li><a onclick="OpenDisclaimer()"><i class="fa fa-exclamation-triangle"></i> Disclaimer</a></li>
<!-- link for disclaimer on top right -->
<li><a onclick="OpenContactUs()"><i class="fa fa-pencil-square-o"></i> Contact Us</a></li>

</ul>
</div>
<!--[if lte IE 8]><p id="warn">This site requires IE9 or newer.</p><![endif]-->
<div id="display" class="displayarea" style="z-index: -1;">
<svg id="map" class="fill-screen" xmlns="http://www.w3.org/2000/svg" version="1.1"></svg>
<canvas id="animation" class="fill-screen"></canvas>
<canvas id="overlay" class="fill-screen"></canvas>
<svg id="foreground" class="fill-screen" xmlns="http://www.w3.org/2000/svg" version="1.1"></svg>
</div>
<div id="sponsor" class="invisible">
<p><span id="sponsor-hide" class="text-button invisible"> ✕ </span>community</p>
<a id="sponsor-link" href="https://www.facebook.com/EarthWindMap">EarthWindMap</a>
</div>
<div id="details">
<p id="status"></p>
<div id="location">
<p>
<span id="location-coord"></span>
<span id="location-close" class="invisible text-button"> ✕ </span>
</p>
<p>
<span id="location-wind"></span>
<span id="location-wind-units" class="text-button"></span>
</p>
<p>
<span id="location-value"></span>
<span id="location-value-units" class="text-button"></span>
</p>
</div>
<p id="earth">
<span id="show-menu" class="text-button" title="menu">Data Menu</span>
<span id="progress" class="invisible"></span>
</p>
<div id="menu" class="invisible">
<p>Control | <span class="text-button" id="nav-now" title="Current Conditions">Now</span>
<span class="text-button" id="nav-backward-more"> « </span>
<!--        – <span class="text-button" id="nav-backward"> ‹ </span>
– <span class="text-button" id="nav-forward"> › </span>
-->                – <span class="text-button" id="nav-forward-more"> » </span>
<span class="text-button" id="show-location" title="Current Position">〖◯〗</span>
<span class="text-button" id="option-show-grid" title="Toggle Grid">Grid</span>
</p>
<p>Mode | <span
class="text-button" id="wind-mode-enable">Air</span> – <span
class="text-button" id="ocean-mode-enable">Ocean</span>
</p>
<p class="wind-mode">Height | <span
class="surface text-button" id="surface-level" title="Surface">Sfc</span> – <span
class="surface text-button" id="isobaric-1000hPa">1000</span> – <span
class="surface text-button" id="isobaric-850hPa">850</span> – <span
class="surface text-button" id="isobaric-700hPa">700</span> – <span
class="surface text-button" id="isobaric-500hPa">500</span> – <span
class="surface text-button" id="isobaric-250hPa">250</span> – <span
class="surface text-button" id="isobaric-70hPa">70</span> – <span
class="surface text-button" id="isobaric-10hPa">10</span> hPa
</p>
<p class="wind-mode">Overlay | <span
class="text-button" id="overlay-off">None</span>
– <span class="text-button" id="overlay-wind" title="Wind Speed">Wind</span>
– <span class="text-button" id="overlay-tir1" title="TIR1">TIR1</span>
– <span class="text-button" id="overlay-temp" title="Temperature">Temp</span>
– <span class="text-button" id="overlay-relative_humidity" title="Relative Humidity">RH</span>
– <span class="text-button" id="overlay-total_precipitable_water" title="Total Precipitable Water">TPW</span>
– <span class="text-button" id="overlay-total_cloud_water" title="Total Cloud Water">TCW</span>
– <span class="text-button" id="overlay-mean_sea_level_pressure" title="Mean Sea Level Pressure">MSLP</span>
</p>
<!--             <p class="wind-mode"><span style="visibility:hidden">Overlay</span> |
– <span class="text-button" id="overlay-air_density" title="Air Density">AD</span>
        – <span class="text-button" id="overlay-wind_power_density" title="Wind Power Density">WPD</span>
</p>
-->
<p class="ocean-mode invisible">Animate | <span
class="text-button" id="animate-currents" title="Currents">Currents</span>
</p>
<p class="ocean-mode invisible">Overlay | <span
class="text-button" id="overlay-ocean-off">None</span> – <span
class="text-button" id="overlay-currents" title="Currents">Currents</span>
</p>
<p class="ocean-mode invisible"><span style="visibility:hidden">Overlay</span> |</p>
<p>Projection | <span
class="proj text-button" id="atlantis" title="Atlantis">A</span> – <span
class="proj text-button" id="azimuthal_equidistant" title="Azimuthal Equidistant">AE</span> – <span
class="proj text-button" id="conic_equidistant" title="Conic Equidistant">CE</span> – <span
class="proj text-button" id="equirectangular" title="Equirectangular">E</span> – <span
class="proj text-button" id="orthographic" title="Orthographic">O</span> – <span
class="proj text-button" id="stereographic" title="Stereographic">S</span> – <span
class="proj text-button" id="waterman" title="Waterman Butterfly">WB</span> – <span
class="proj text-button" id="winkel3" title="Winkel Tripel">W3</span>
</p>
</p>
</div>
</div>
<script src="//cdnjs.cloudflare.com/ajax/libs/underscore.js/1.6.0/underscore-min.js" charset="utf-8"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/backbone.js/1.1.0/backbone-min.js" charset="utf-8"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/topojson/1.1.0/topojson.min.js" charset="utf-8"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/d3/3.3.10/d3.min.js" charset="utf-8"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/pako/1.0.10/pako.js" charset="utf-8"></script>  <!-- akjha  -->
<script src="./libs/d3.geo/0.0.0/d3.geo.projection.v0.min.js" charset="utf-8"></script>
<script src="./libs/d3.geo/0.0.0/d3.geo.polyhedron.v0.min.js" charset="utf-8"></script>
<script src="./libs/when/2.6.0/when.js" charset="utf-8"></script>
<script src="./libs/earth/1.0.0/micro.js" charset="utf-8"></script>
<script src="./libs/earth/1.0.0/globes.js" charset="utf-8"></script>
<script src="./libs/earth/1.0.0/products.js" charset="utf-8"></script>
<script src="./libs/earth/1.0.0/earth.js" charset="utf-8"></script>
</body>
</html>
