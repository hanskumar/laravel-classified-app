@extends('layout.master')
@section('title', 'Home page')


@section('content')
	
	<div class="intro-banner" data-background-image="storage/banner/bg.jpg">
   		<div class="container">
	      <div class="row">
	         <div class="col-md-12">
	            <div class="banner-headline">
	               <h3><strong>Buy And Sell</strong>
	                  <br>
	                  <span>Search thousands of classifieds all in one place</span>
	               </h3>
	            </div>
	         </div>
	      </div>
      <div class="row">
         <div class="col-md-12">
            <form autocomplete="off" method="get" action="" accept-charset="UTF-8">
               <div class="intro-banner-search-form margin-top-45">
                  <div class="intro-search-field">
                     <input id="intro-keywords" type="text" class="qucikad-ajaxsearch-input" placeholder="What are you looking for?" data-prev-value="0" data-noresult="More results for">
                     <i class="qucikad-ajaxsearch-close fa fa-times-circle" aria-hidden="true" style="display: none;"></i>
                     <div id="qucikad-ajaxsearch-dropdown" size="0" tabindex="0">
                        <ul>
                           <li class="qucikad-ajaxsearch-li-cats" data-catid="cars-bikes">
                              <img src="../img.icons8.com/dusk/64/000000/traffic-jam.png"/>
                              <span class="qucikad-as-cat">Cars & Bikes</span>
                           </li>
                           <li class="qucikad-ajaxsearch-li-cats" data-catid="electronics-appliances">
                              <img src="../img.icons8.com/dusk/64/000000/tv.png"/>
                              <span class="qucikad-as-cat">Electronics & Appliances</span>
                           </li>
                           <li class="qucikad-ajaxsearch-li-cats" data-catid="home-lifestyle">
                              <img src="../img.icons8.com/dusk/64/000000/home-page.png"/>
                              <span class="qucikad-as-cat">Home & Lifestyle</span>
                           </li>
                           <li class="qucikad-ajaxsearch-li-cats" data-catid="real-estate">
                              <img src="../img.icons8.com/dusk/64/000000/real-estate.png"/>
                              <span class="qucikad-as-cat">Real Estate</span>
                           </li>
                           <li class="qucikad-ajaxsearch-li-cats" data-catid="jobs">
                              <img src="../img.icons8.com/dusk/64/000000/find-matching-job.png"/>
                              <span class="qucikad-as-cat">Jobs</span>
                           </li>
                           <li class="qucikad-ajaxsearch-li-cats" data-catid="services">
                              <img src="../img.icons8.com/dusk/64/000000/services.png"/>
                              <span class="qucikad-as-cat">Services</span>
                           </li>
                           <li class="qucikad-ajaxsearch-li-cats" data-catid="entertainment">
                              <img src="../img.icons8.com/dusk/64/000000/dancing.png"/>
                              <span class="qucikad-as-cat">Entertainment</span>
                           </li>
                           <li class="qucikad-ajaxsearch-li-cats" data-catid="mobiles-tablets">
                              <img src="../img.icons8.com/dusk/64/000000/two-smartphones.png"/>
                              <span class="qucikad-as-cat">Mobiles & Tablets</span>
                           </li>
                        </ul>
                        <div style="display:none" id="def-cats">
                        </div>
                     </div>
                  </div>
                  <div class="intro-search-field with-autocomplete live-location-search">
                     <div class="input-with-icon">
                        <input type="text" id="searchStateCity" name="location" placeholder="Where">
                        <i class="la la-map-marker"></i>
                        <div data-option="yes" class="loc-tracking"><i class="fa fa-crosshairs"></i></div>
                        <input type="hidden" name="latitude" id="latitude" value="">
                        <input type="hidden" name="longitude" id="longitude" value="">
                        <input type="hidden" name="placetype" id="searchPlaceType" value="">
                        <input type="hidden" name="placeid" id="searchPlaceId" value="">
                        <input type="hidden" id="input-keywords" name="keywords" value="">
                        <input type="hidden" id="input-maincat" name="cat" value=""/>
                        <input type="hidden" id="input-subcat" name="subcat" value=""/>
                     </div>
                  </div>
                  <div class="intro-search-button">
                     <button class="button ripple-effect">Search</button>
                  </div>
               </div>
            </form>
         </div>
      </div>
   </div>
</div>

@endsection