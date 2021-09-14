<a class="popup-with-zoom-anim hidden" href="#citiesModal" id="change-city">city</a>
<div class="zoom-anim-dialog mfp-hide popup-dialog big-dialog" id="citiesModal">
    <div class="popup-tab-content padding-0">
        <div class="quick-states" id="country-popup" data-country-id="IN" style="display: block;">
            <div id="regionSearchBox" class="title clr">
                <div class="clr">
                    <div class="locationrequest smallBox br5 col-sm-4">
                        <div class="rel input-container">
                            <div class="input-with-icon">
                                <input id="inputStateCity" class="with-border" type="text" placeholder="Type your city name">
                                <i class="la la-map-marker"></i>
                            </div>
                            <div id="searchDisplay"></div>
                            <div class="suggest bottom abs small br3 error hidden"><span
                                        class="target abs icon"></span>

                                <p></p>
                            </div>
                        </div>
                        <div id="lastUsedCities" class="last-used binded" style="display: none;">Last visited
                            <ul id="last-locations-ul">
                            </ul>
                        </div>
                    </div>
                                        <span style="line-height: 30px;">
                        <span class="flag flag-in"></span> <a href="#countryModal" class="popup-with-zoom-anim">Change Country</a>
                    </span>
                                    </div>
            </div>
            <div class="popular-cities clr">
                <p>Popular cities</p>

                <div class="list row">

                    <ul class="col-lg-12 col-md-12 popularcity">
                        
                        <li><a class="selectme" data-id="1275339" data-name="Mumbai" data-type="city"><span>Mumbai</span></a></li>
                        
                        <li><a class="selectme" data-id="1273294" data-name="Delhi" data-type="city"><span>Delhi</span></a></li>
                        
                        <li><a class="selectme" data-id="1277333" data-name="Bengaluru" data-type="city"><span>Bengaluru</span></a></li>
                        
                        <li><a class="selectme" data-id="1275004" data-name="Kolkata" data-type="city"><span>Kolkata</span></a></li>
                        
                        <li><a class="selectme" data-id="1264527" data-name="Chennai" data-type="city"><span>Chennai</span></a></li>
                        
                        <li><a class="selectme" data-id="1279233" data-name="Ahmedabad" data-type="city"><span>Ahmedabad</span></a></li>
                        
                        <li><a class="selectme" data-id="1269843" data-name="Hyderabad" data-type="city"><span>Hyderabad</span></a></li>
                        
                        <li><a class="selectme" data-id="1259229" data-name="Pune" data-type="city"><span>Pune</span></a></li>
                        
                        <li><a class="selectme" data-id="1255364" data-name="Surat" data-type="city"><span>Surat</span></a></li>
                        
                        <li><a class="selectme" data-id="1267995" data-name="Kanpur" data-type="city"><span>Kanpur</span></a></li>
                        
                        <li><a class="selectme" data-id="1269515" data-name="Jaipur" data-type="city"><span>Jaipur</span></a></li>
                        
                        <li><a class="selectme" data-id="6619347" data-name="Navi Mumbai" data-type="city"><span>Navi Mumbai</span></a></li>
                        
                        <li><a class="selectme" data-id="1264733" data-name="Lucknow" data-type="city"><span>Lucknow</span></a></li>
                        
                        <li><a class="selectme" data-id="1262180" data-name="Nagpur" data-type="city"><span>Nagpur</span></a></li>
                        
                        <li><a class="selectme" data-id="1269743" data-name="Indore" data-type="city"><span>Indore</span></a></li>
                        
                        <li><a class="selectme" data-id="1260086" data-name="Patna" data-type="city"><span>Patna</span></a></li>
                        
                        <li><a class="selectme" data-id="1275841" data-name="Bhopal" data-type="city"><span>Bhopal</span></a></li>
                        
                        <li><a class="selectme" data-id="1264728" data-name="Ludhiana" data-type="city"><span>Ludhiana</span></a></li>
                        
                    </ul>
                </div>
            </div>
            <div class="viewport">
                <div class="full" id="getCities">
                    <div class="col-sm-12 col-md-12 loader" style="display: none"></div>
                    <div id="results" class="animate-bottom">
                        <ul class="column cities">
                            
                            <li class="selected"><a class="selectme" data-id="IN" data-name="All India" data-type="country"><strong>All India</strong></a></li><li class=""><a id="regionIN.01" class="statedata" data-id="IN.01" data-name="Andaman and Nicobar"><span>Andaman and Nicobar <i class="fa fa-angle-right"></i></span></a></li>
                            
                            <li class=""><a id="regionIN.02" class="statedata" data-id="IN.02" data-name="Andhra Pradesh"><span>Andhra Pradesh <i class="fa fa-angle-right"></i></span></a></li>
                            
                            <li class=""><a id="regionIN.30" class="statedata" data-id="IN.30" data-name="Arunachal Pradesh"><span>Arunachal Pradesh <i class="fa fa-angle-right"></i></span></a></li>
                            
                            <li class=""><a id="regionIN.03" class="statedata" data-id="IN.03" data-name="Assam"><span>Assam <i class="fa fa-angle-right"></i></span></a></li>
                            
                            <li class=""><a id="regionIN.34" class="statedata" data-id="IN.34" data-name="Bihar"><span>Bihar <i class="fa fa-angle-right"></i></span></a></li>
                            
                            <li class=""><a id="regionIN.05" class="statedata" data-id="IN.05" data-name="Chandigarh"><span>Chandigarh <i class="fa fa-angle-right"></i></span></a></li>
                            
                            <li class=""><a id="regionIN.37" class="statedata" data-id="IN.37" data-name="Chhattisgarh"><span>Chhattisgarh <i class="fa fa-angle-right"></i></span></a></li>
                            
                            <li class=""><a id="regionIN.06" class="statedata" data-id="IN.06" data-name="Dadra and Nagar Haveli"><span>Dadra and Nagar Haveli <i class="fa fa-angle-right"></i></span></a></li>
                            
                            <li class=""><a id="regionIN.32" class="statedata" data-id="IN.32" data-name="Daman and Diu"><span>Daman and Diu <i class="fa fa-angle-right"></i></span></a></li>
                            
                            <li class=""><a id="regionIN.33" class="statedata" data-id="IN.33" data-name="Goa"><span>Goa <i class="fa fa-angle-right"></i></span></a></li>
                            
                            <li class=""><a id="regionIN.09" class="statedata" data-id="IN.09" data-name="Gujarat"><span>Gujarat <i class="fa fa-angle-right"></i></span></a></li>
                            
                            <li class=""><a id="regionIN.10" class="statedata" data-id="IN.10" data-name="Haryana"><span>Haryana <i class="fa fa-angle-right"></i></span></a></li>
                            
                            <li class=""><a id="regionIN.11" class="statedata" data-id="IN.11" data-name="Himachal Pradesh"><span>Himachal Pradesh <i class="fa fa-angle-right"></i></span></a></li>
                            
                            <li class=""><a id="regionIN.12" class="statedata" data-id="IN.12" data-name="Jammu and Kashmir"><span>Jammu and Kashmir <i class="fa fa-angle-right"></i></span></a></li>
                            
                            <li class=""><a id="regionIN.38" class="statedata" data-id="IN.38" data-name="Jharkhand"><span>Jharkhand <i class="fa fa-angle-right"></i></span></a></li>
                            
                            <li class=""><a id="regionIN.19" class="statedata" data-id="IN.19" data-name="Karnataka"><span>Karnataka <i class="fa fa-angle-right"></i></span></a></li>
                            
                            <li class=""><a id="regionIN.13" class="statedata" data-id="IN.13" data-name="Kerala"><span>Kerala <i class="fa fa-angle-right"></i></span></a></li>
                            
                            <li class=""><a id="regionIN.14" class="statedata" data-id="IN.14" data-name="Laccadives"><span>Laccadives <i class="fa fa-angle-right"></i></span></a></li>
                            
                            <li class=""><a id="regionIN.35" class="statedata" data-id="IN.35" data-name="Madhya Pradesh"><span>Madhya Pradesh <i class="fa fa-angle-right"></i></span></a></li>
                            
                            <li class=""><a id="regionIN.16" class="statedata" data-id="IN.16" data-name="Maharashtra"><span>Maharashtra <i class="fa fa-angle-right"></i></span></a></li>
                            
                            <li class=""><a id="regionIN.17" class="statedata" data-id="IN.17" data-name="Manipur"><span>Manipur <i class="fa fa-angle-right"></i></span></a></li>
                            
                            <li class=""><a id="regionIN.18" class="statedata" data-id="IN.18" data-name="Meghalaya"><span>Meghalaya <i class="fa fa-angle-right"></i></span></a></li>
                            
                            <li class=""><a id="regionIN.31" class="statedata" data-id="IN.31" data-name="Mizoram"><span>Mizoram <i class="fa fa-angle-right"></i></span></a></li>
                            
                            <li class=""><a id="regionIN.20" class="statedata" data-id="IN.20" data-name="Nagaland"><span>Nagaland <i class="fa fa-angle-right"></i></span></a></li>
                            
                            <li class=""><a id="regionIN.07" class="statedata" data-id="IN.07" data-name="NCT"><span>NCT <i class="fa fa-angle-right"></i></span></a></li>
                            
                            <li class=""><a id="regionIN.21" class="statedata" data-id="IN.21" data-name="Odisha"><span>Odisha <i class="fa fa-angle-right"></i></span></a></li>
                            
                            <li class=""><a id="regionIN.22" class="statedata" data-id="IN.22" data-name="Puducherry"><span>Puducherry <i class="fa fa-angle-right"></i></span></a></li>
                            
                            <li class=""><a id="regionIN.23" class="statedata" data-id="IN.23" data-name="Punjab"><span>Punjab <i class="fa fa-angle-right"></i></span></a></li>
                            
                            <li class=""><a id="regionIN.24" class="statedata" data-id="IN.24" data-name="Rajasthan"><span>Rajasthan <i class="fa fa-angle-right"></i></span></a></li>
                            
                            <li class=""><a id="regionIN.29" class="statedata" data-id="IN.29" data-name="Sikkim"><span>Sikkim <i class="fa fa-angle-right"></i></span></a></li>
                            
                            <li class=""><a id="regionIN.25" class="statedata" data-id="IN.25" data-name="Tamil Nadu"><span>Tamil Nadu <i class="fa fa-angle-right"></i></span></a></li>
                            
                            <li class=""><a id="regionIN.40" class="statedata" data-id="IN.40" data-name="Telangana"><span>Telangana <i class="fa fa-angle-right"></i></span></a></li>
                            
                            <li class=""><a id="regionIN.26" class="statedata" data-id="IN.26" data-name="Tripura"><span>Tripura <i class="fa fa-angle-right"></i></span></a></li>
                            
                            <li class=""><a id="regionIN.36" class="statedata" data-id="IN.36" data-name="Uttar Pradesh"><span>Uttar Pradesh <i class="fa fa-angle-right"></i></span></a></li>
                            
                            <li class=""><a id="regionIN.39" class="statedata" data-id="IN.39" data-name="Uttarakhand"><span>Uttarakhand <i class="fa fa-angle-right"></i></span></a></li>
                            
                            <li class=""><a id="regionIN.28" class="statedata" data-id="IN.28" data-name="West Bengal"><span>West Bengal <i class="fa fa-angle-right"></i></span></a></li>
                            
                        </ul>
                    </div>
                </div>
                <div class="table full subregionslinks hidden" id="subregionslinks"></div>
            </div>
        </div>
    </div>
</div>
<!--Country-Cities-changes-Model-->