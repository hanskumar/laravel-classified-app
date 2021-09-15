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
                              <img src="{{ asset('images/icons/traffic-jam.png') }}"/>
                              <span class="qucikad-as-cat">Cars & Bikes</span>
                           </li>
                           <li class="qucikad-ajaxsearch-li-cats" data-catid="electronics-appliances">
                              <img src="{{ asset('images/icons/tv.png')}}"/>
                              <span class="qucikad-as-cat">Electronics & Appliances</span>
                           </li>
                           <li class="qucikad-ajaxsearch-li-cats" data-catid="home-lifestyle">
                              <img src="{{ asset('images/icons//home-page.png') }}"/>
                              <span class="qucikad-as-cat">Home & Lifestyle</span>
                           </li>
                           <li class="qucikad-ajaxsearch-li-cats" data-catid="real-estate">
                              <img src="{{ asset('images/icons/real-estate.png')}}"/>
                              <span class="qucikad-as-cat">Real Estate</span>
                           </li>
                           <li class="qucikad-ajaxsearch-li-cats" data-catid="jobs">
                              <img src="{{ asset('images/icons/find-matching-job.png') }}"/>
                              <span class="qucikad-as-cat">Jobs</span>
                           </li>
                           <li class="qucikad-ajaxsearch-li-cats" data-catid="services">
                              <img src="{{ asset('images/icons/services.png')}}"/>
                              <span class="qucikad-as-cat">Services</span>
                           </li>
                           <li class="qucikad-ajaxsearch-li-cats" data-catid="entertainment">
                              <img src="{{ asset('images/icons/dancing.png') }} "/>
                              <span class="qucikad-as-cat">Entertainment</span>
                           </li>
                           <li class="qucikad-ajaxsearch-li-cats" data-catid="mobiles-tablets">
                              <img src="{{ asset('images/icons/two-smartphones.png') }}"/>
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


<!-- Category Boxes -->
<div class="section margin-top-65">
   <div class="container">
      <div class="row">
         <div class="col-xl-12">
            <div class="section-headline centered margin-bottom-15">
               <h3>All Categories</h3>
            </div>
            <div class="categories-container">
               <a href="category/cars-bikes.html" class="category-box">
                  <div class="category-box-icon margin-bottom-10">
                     <div class="category-icon">
                        <img class="lazy-load" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"  data-original="https://img.icons8.com/dusk/64/000000/traffic-jam.png" alt="Cars & Bikes">
                     </div>
                  </div>
                  <div class="category-box-counter">29</div>
                  <div class="category-box-content">
                     <h3>Cars & Bikes <small>(29)</small></h3>
                  </div>
                  <div class="category-box-arrow">
                     <i class="fa fa-chevron-right"></i>
                  </div>
               </a>
               <a href="category/electronics-appliances.html" class="category-box">
                  <div class="category-box-icon margin-bottom-10">
                     <div class="category-icon">
                        <img class="lazy-load" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"  data-original="https://img.icons8.com/dusk/64/000000/tv.png" alt="Electronics & Appliances">
                     </div>
                  </div>
                  <div class="category-box-counter">11</div>
                  <div class="category-box-content">
                     <h3>Electronics & Appliances <small>(11)</small></h3>
                  </div>
                  <div class="category-box-arrow">
                     <i class="fa fa-chevron-right"></i>
                  </div>
               </a>
               <a href="category/home-lifestyle.html" class="category-box">
                  <div class="category-box-icon margin-bottom-10">
                     <div class="category-icon">
                        <img class="lazy-load" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"  data-original="https://img.icons8.com/dusk/64/000000/home-page.png" alt="Home & Lifestyle">
                     </div>
                  </div>
                  <div class="category-box-counter">12</div>
                  <div class="category-box-content">
                     <h3>Home & Lifestyle <small>(12)</small></h3>
                  </div>
                  <div class="category-box-arrow">
                     <i class="fa fa-chevron-right"></i>
                  </div>
               </a>
               <a href="category/real-estate.html" class="category-box">
                  <div class="category-box-icon margin-bottom-10">
                     <div class="category-icon">
                        <img class="lazy-load" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"  data-original="https://img.icons8.com/dusk/64/000000/real-estate.png" alt="Real Estate">
                     </div>
                  </div>
                  <div class="category-box-counter">33</div>
                  <div class="category-box-content">
                     <h3>Real Estate <small>(33)</small></h3>
                  </div>
                  <div class="category-box-arrow">
                     <i class="fa fa-chevron-right"></i>
                  </div>
               </a>
               <a href="category/jobs.html" class="category-box">
                  <div class="category-box-icon margin-bottom-10">
                     <div class="category-icon">
                        <img class="lazy-load" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"  data-original="https://img.icons8.com/dusk/64/000000/find-matching-job.png" alt="Jobs">
                     </div>
                  </div>
                  <div class="category-box-counter">10</div>
                  <div class="category-box-content">
                     <h3>Jobs <small>(10)</small></h3>
                  </div>
                  <div class="category-box-arrow">
                     <i class="fa fa-chevron-right"></i>
                  </div>
               </a>
               <a href="category/services.html" class="category-box">
                  <div class="category-box-icon margin-bottom-10">
                     <div class="category-icon">
                        <img class="lazy-load" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"  data-original="https://img.icons8.com/dusk/64/000000/services.png" alt="Services">
                     </div>
                  </div>
                  <div class="category-box-counter">43</div>
                  <div class="category-box-content">
                     <h3>Services <small>(43)</small></h3>
                  </div>
                  <div class="category-box-arrow">
                     <i class="fa fa-chevron-right"></i>
                  </div>
               </a>
               <a href="category/entertainment.html" class="category-box">
                  <div class="category-box-icon margin-bottom-10">
                     <div class="category-icon">
                        <img class="lazy-load" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"  data-original="https://img.icons8.com/dusk/64/000000/dancing.png" alt="Entertainment">
                     </div>
                  </div>
                  <div class="category-box-counter">3</div>
                  <div class="category-box-content">
                     <h3>Entertainment <small>(3)</small></h3>
                  </div>
                  <div class="category-box-arrow">
                     <i class="fa fa-chevron-right"></i>
                  </div>
               </a>
               <a href="category/mobiles-tablets.html" class="category-box">
                  <div class="category-box-icon margin-bottom-10">
                     <div class="category-icon">
                        <img class="lazy-load" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"  data-original="https://img.icons8.com/dusk/64/000000/two-smartphones.png" alt="Mobiles & Tablets">
                     </div>
                  </div>
                  <div class="category-box-counter">20</div>
                  <div class="category-box-content">
                     <h3>Mobiles & Tablets <small>(20)</small></h3>
                  </div>
                  <div class="category-box-arrow">
                     <i class="fa fa-chevron-right"></i>
                  </div>
               </a>
            </div>
            <!-- <div class="quickad-section text-center margin-top-15" id="quickad-top">
               <div class="text-center visible-md visible-lg"><a href="https://codentheme.com/?ref=bylancer"><img src="storage/site/top.png"/></a></div>
               <div class="text-center visible-sm"></div>
               <div class="text-center visible-xs"></div>
            </div> -->
         </div>
      </div>
   </div>
</div>

<!-- Features POST -->
<div class="section margin-top-45 padding-top-65 padding-bottom-65">
   <div class="container">
      <div class="row">
         <div class="col-xl-12">
            <div class="section-headline margin-top-0 margin-bottom-35">
               <h3>Premium Ad</h3>
               <a href="listing8f38.html?filter=premium" class="headline-link">View More</a>
            </div>
            <div class="listings-container grid-layout margin-top-35">
               <div class="row" style="width: 100%;">
                  <div class="col-xl-4">
                     <div class='feat_property '>
                        <div class="thumb">
                           <img class="img-whp lazy-load" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"  data-original="https://classified.bylancer.com/storage/products/thumb/1566563924_logoresize.png" alt="Cosmetic Dentistry">
                           <div class="thmb_cntnt">
                              <ul class="tag mb0">
                                 <li class="list-inline-item urgent">
                                    <a href="#">
                                       Urgent
                                 </li>
                              </ul>
                           </div>
                        </div>
                        <div class="details">
                        <div class="tc_content">
                        <p class="text-thm"><a href="category/home-lifestyle/health-beauty-products.html"><i class="la la-tags"></i> Health - Beauty Products</a></p>
                        <h4><a href="ad/5209/cosmetic-dentistry.html">Cosmetic Dentistry</a></h4>
                        <p><i class="la la-map-marker"></i> Mumbai</p>
                        <ul class="prop_details mb0">
                        <li class="list-inline-item">Cosmetic dentistry has an emphasison recuperating the aesthetic appearance and enhances one’s smile as well ...</li>
                        </ul>
                        </div>
                        <div class="listing-footer">
                        <a class="author-link" href="profile/therapeuo.html"><i class="fa fa-user" aria-hidden="true"></i> therapeuo</a>
                        <span><i class="fa fa-calendar-o" aria-hidden="true"></i> 2 years ago</span>
                        </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-4">
                     <div class='feat_property '>
                        <div class="thumb">
                           <img class="img-whp lazy-load" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"  data-original="https://classified.bylancer.com/storage/products/thumb/1541481944_bloom-blossom-flora-130154.jpg" alt="Rent a home ">
                           <div class="thmb_cntnt">
                              <ul class="tag mb0">
                                 <li class="list-inline-item urgent"><a href="#"> Urgent</li>
                              </ul>
                              <a class="fp_price" href="#">3,000 &#8377;</a>
                           </div>
                        </div>
                        <div class="details">
                           <div class="tc_content">
                              <p class="text-thm"><a href="category/real-estate/commercial-property-for-rent.html"><i class="la la-tags"></i> Commercial Property for Rent</a></p>
                              <h4><a href="ad/2042/rent-home.html">Rent a home </a></h4>
                              <p><i class="la la-map-marker"></i> Bhawanipatna</p>
                              <ul class="prop_details mb0">
                                 <li class="list-inline-item"><img src="storage/icons/move-type.svg" width="14"/> Ad type: Professional</li>
                              </ul>
                           </div>
                           <div class="listing-footer">
                              <a class="author-link" href="profile/asserru.html"><i class="fa fa-user" aria-hidden="true"></i> asserru</a>
                              <span><i class="fa fa-calendar-o" aria-hidden="true"></i> 2 years ago</span>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-4">
                     <div class='feat_property '>
                        <div class="thumb">
                           <img class="img-whp lazy-load" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"  data-original="https://classified.bylancer.com/storage/products/thumb/5ffd1d5a8b8df_82701123575.jpg" alt="Unique Fashionable Men Sports Shoes">
                           <div class="thmb_cntnt">
                              <ul class="tag mb0">
                              </ul>
                              <a class="fp_price" href="#">850 &#8377;</a>
                           </div>
                        </div>
                        <div class="details">
                           <div class="tc_content">
                              <p class="text-thm"><a href="category/entertainment/fashion-designers-stylists.html"><i class="la la-tags"></i> Fashion Designers - Stylists</a></p>
                              <h4><a href="ad/7346/unique-fashionable-men-sports-shoes.html">Unique Fashionable Men Sports Shoes</a></h4>
                              <p><i class="la la-map-marker"></i> Amritsar</p>
                              <ul class="prop_details mb0">
                                 <li class="list-inline-item"><img src="storage/icons/move-type.svg" width="14"/> Ad type: Professional</li>
                              </ul>
                           </div>
                           <div class="listing-footer">
                              <a class="author-link" href="profile/terabaayayaa933889.html"><i class="fa fa-user" aria-hidden="true"></i> terabaayayaa933889</a>
                              <span><i class="fa fa-calendar-o" aria-hidden="true"></i> 7 months ago</span>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-4">
                     <div class='feat_property '>
                        <div class="thumb">
                           <img class="img-whp lazy-load" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"  data-original="https://classified.bylancer.com/storage/products/thumb/1610364031_vashikaran-specialist-aghori-baba-ji-91-7508576634.jpg" alt="Love Problem Solution Aghori Baba Ji  +91-7508576634">
                           <div class="thmb_cntnt">
                              <ul class="tag mb0">
                              </ul>
                           </div>
                        </div>
                        <div class="details">
                           <div class="tc_content">
                              <p class="text-thm"><a href="category/services/legal-services.html"><i class="la la-tags"></i> Legal Services</a></p>
                              <h4><a href="ad/7344/love-problem-solution-aghori-baba-ji-91-7508576634.html">Love Problem Solution Aghori Baba Ji  +91-7508576634</a></h4>
                              <p><i class="la la-map-marker"></i> Mumbai</p>
                              <ul class="prop_details mb0">
                                 <li class="list-inline-item"><img src="storage/icons/move-type.svg" width="14"/> Ad type: Professional</li>
                              </ul>
                           </div>
                           <div class="listing-footer">
                              <a class="author-link" href="profile/Aghori.html"><i class="fa fa-user" aria-hidden="true"></i> Aghori</a>
                              <span><i class="fa fa-calendar-o" aria-hidden="true"></i> 7 months ago</span>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-4">
                     <div class='feat_property '>
                        <div class="thumb">
                           <img class="img-whp lazy-load" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"  data-original="https://classified.bylancer.com/storage/products/thumb/5ff73441c56c9_2917247706.jpg" alt="Yyy">
                           <div class="thmb_cntnt">
                              <ul class="tag mb0">
                              </ul>
                              <a class="fp_price" href="#">5,000 &#8377;</a>
                           </div>
                        </div>
                        <div class="details">
                           <div class="tc_content">
                              <p class="text-thm"><a href="category/cars-bikes/bikes-scooters.html"><i class="la la-tags"></i> Bikes & Scooters</a></p>
                              <h4><a href="ad/7338/yyy.html">Yyy</a></h4>
                              <p><i class="la la-map-marker"></i> Krishnagiri</p>
                              <ul class="prop_details mb0">
                                 <li class="list-inline-item">Yyuu</li>
                              </ul>
                           </div>
                           <div class="listing-footer">
                              <a class="author-link" href="profile/ramjay9750508858.html"><i class="fa fa-user" aria-hidden="true"></i> ramjay9750508858</a>
                              <span><i class="fa fa-calendar-o" aria-hidden="true"></i> 7 months ago</span>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-4">
                     <div class='feat_property '>
                        <div class="thumb">
                           <img class="img-whp lazy-load" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"  data-original="https://classified.bylancer.com/storage/products/thumb/5ff613858c530_70370155649.jpg" alt="Homoeopathic Doctor">
                           <div class="thmb_cntnt">
                              <ul class="tag mb0">
                              </ul>
                              <a class="fp_price" href="#">200 &#8377;</a>
                           </div>
                        </div>
                        <div class="details">
                           <div class="tc_content">
                              <p class="text-thm"><a href="category/services/legal-services.html"><i class="la la-tags"></i> Legal Services</a></p>
                              <h4><a href="ad/7336/homoeopathic-doctor.html">Homoeopathic Doctor</a></h4>
                              <p><i class="la la-map-marker"></i> Alwar</p>
                              <ul class="prop_details mb0">
                                 <li class="list-inline-item"><img src="storage/icons/move-type.svg" width="14"/> Ad type: Professional</li>
                              </ul>
                           </div>
                           <div class="listing-footer">
                              <a class="author-link" href="profile/indoriahomoeo240412.html"><i class="fa fa-user" aria-hidden="true"></i> indoriahomoeo240412</a>
                              <span><i class="fa fa-calendar-o" aria-hidden="true"></i> 7 months ago</span>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-4">
                     <div class='feat_property '>
                        <div class="thumb">
                           <img class="img-whp lazy-load" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"  data-original="https://classified.bylancer.com/storage/products/thumb/5ff54d2466533_42016112819.jpg" alt="Call boy paid">
                           <div class="thmb_cntnt">
                              <ul class="tag mb0">
                              </ul>
                              <a class="fp_price" href="#">25,000 &#8377;</a>
                           </div>
                        </div>
                        <div class="details">
                           <div class="tc_content">
                              <p class="text-thm"><a href="category/jobs/full-time-jobs.html"><i class="la la-tags"></i> Full Time Jobs</a></p>
                              <h4><a href="ad/7333/call-boy-paid.html">Call boy paid</a></h4>
                              <p><i class="la la-map-marker"></i> Chandigarh</p>
                              <ul class="prop_details mb0">
                                 <li class="list-inline-item">+91</li>
                              </ul>
                           </div>
                           <div class="listing-footer">
                              <a class="author-link" href="profile/mm7675066944567.html"><i class="fa fa-user" aria-hidden="true"></i> mm7675066944567</a>
                              <span><i class="fa fa-calendar-o" aria-hidden="true"></i> 7 months ago</span>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-4">
                     <div class='feat_property '>
                        <div class="thumb">
                           <img class="img-whp lazy-load" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"  data-original="https://classified.bylancer.com/storage/products/thumb/5ff46bf6249b5_78612174153.jpg" alt="Call boy">
                           <div class="thmb_cntnt">
                              <ul class="tag mb0">
                              </ul>
                              <a class="fp_price" href="#">25,000 &#8377;</a>
                           </div>
                        </div>
                        <div class="details">
                           <div class="tc_content">
                              <p class="text-thm"><a href="category/jobs/full-time-jobs.html"><i class="la la-tags"></i> Full Time Jobs</a></p>
                              <h4><a href="ad/7331/call-boy.html">Call boy</a></h4>
                              <p><i class="la la-map-marker"></i> Chandigarh</p>
                              <ul class="prop_details mb0">
                                 <li class="list-inline-item"><img src="storage/icons/move-type.svg" width="14"/> Ad type: Professional</li>
                                 <li class="list-inline-item"><img src="#" width="14"/> Salary: 25000</li>
                              </ul>
                           </div>
                           <div class="listing-footer">
                              <a class="author-link" href="profile/mm7675066944567.html"><i class="fa fa-user" aria-hidden="true"></i> mm7675066944567</a>
                              <span><i class="fa fa-calendar-o" aria-hidden="true"></i> 7 months ago</span>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-4">
                     <div class='feat_property '>
                        <div class="thumb">
                           <img class="img-whp lazy-load" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"  data-original="https://classified.bylancer.com/storage/products/thumb/1609682056_rera.jpg" alt="mointg5yt">
                           <div class="thmb_cntnt">
                              <ul class="tag mb0">
                              </ul>
                              <a class="fp_price" href="#">599 &#8377;</a>
                           </div>
                        </div>
                        <div class="details">
                           <div class="tc_content">
                              <p class="text-thm"><a href="category/cars-bikes/bikes-scooters.html"><i class="la la-tags"></i> Bikes & Scooters</a></p>
                              <h4><a href="ad/7329/mointg5yt.html">mointg5yt</a></h4>
                              <p><i class="la la-map-marker"></i> Mumbai</p>
                              <ul class="prop_details mb0">
                                 <li class="list-inline-item"><img src="storage/icons/move-type.svg" width="14"/> Ad type: Professional</li>
                                 <li class="list-inline-item"><img src="storage/icons/brand-car.svg" width="14"/> Brand Name: Jeep</li>
                                 <li class="list-inline-item"><img src="storage/icons/transmission.svg" width="14"/> Transmission: Manual</li>
                                 <li class="list-inline-item"><img src="#" width="14"/> Condition: Used</li>
                              </ul>
                           </div>
                           <div class="listing-footer">
                              <a class="author-link" href="profile/rahulkhan00707.html"><i class="fa fa-user" aria-hidden="true"></i> rahulkhan00707</a>
                              <span><i class="fa fa-calendar-o" aria-hidden="true"></i> 7 months ago</span>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-4">
                     <div class='feat_property '>
                        <div class="thumb">
                           <img class="img-whp lazy-load" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"  data-original="https://classified.bylancer.com/storage/products/thumb/5fef55e2b8a3b_9489445924.jpg" alt="Hello ">
                           <div class="thmb_cntnt">
                              <ul class="tag mb0">
                              </ul>
                              <a class="fp_price" href="#">69 &#8377;</a>
                           </div>
                        </div>
                        <div class="details">
                           <div class="tc_content">
                              <p class="text-thm"><a href="category/electronics-appliances/computer-peripherals.html"><i class="la la-tags"></i> Computer Peripherals</a></p>
                              <h4><a href="ad/7325/hello.html">Hello </a></h4>
                              <p><i class="la la-map-marker"></i> Port Blair</p>
                              <ul class="prop_details mb0">
                                 <li class="list-inline-item">hello new ees ar</li>
                              </ul>
                           </div>
                           <div class="listing-footer">
                              <a class="author-link" href="profile/rlila073016477.html"><i class="fa fa-user" aria-hidden="true"></i> rlila073016477</a>
                              <span><i class="fa fa-calendar-o" aria-hidden="true"></i> 7 months ago</span>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-4">
                     <div class='feat_property '>
                        <div class="thumb">
                           <img class="img-whp lazy-load" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"  data-original="https://classified.bylancer.com/storage/products/thumb/5fed065c2a176_35294194625.png" alt="دارجه 28">
                           <div class="thmb_cntnt">
                              <ul class="tag mb0">
                              </ul>
                              <a class="fp_price" href="#">1,800 &#8377;</a>
                           </div>
                        </div>
                        <div class="details">
                           <div class="tc_content">
                              <p class="text-thm"><a href="category/cars-bikes/bikes-scooters.html"><i class="la la-tags"></i> Bikes & Scooters</a></p>
                              <h4><a href="ad/7323/dargh-28.html">دارجه 28</a></h4>
                              <p><i class="la la-map-marker"></i> Bamboo Flat</p>
                              <ul class="prop_details mb0">
                                 <li class="list-inline-item">استعمال خفيف</li>
                              </ul>
                           </div>
                           <div class="listing-footer">
                              <a class="author-link" href="profile/webdeveloper456.html"><i class="fa fa-user" aria-hidden="true"></i> webdeveloper456</a>
                              <span><i class="fa fa-calendar-o" aria-hidden="true"></i> 8 months ago</span>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-4">
                     <div class='feat_property '>
                        <div class="thumb">
                           <img class="img-whp lazy-load" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"  data-original="https://classified.bylancer.com/storage/products/thumb/5feca156912ac_49689140226.png" alt="فيات 128">
                           <div class="thmb_cntnt">
                              <ul class="tag mb0">
                              </ul>
                              <a class="fp_price" href="#">25,000 &#8377;</a>
                           </div>
                        </div>
                        <div class="details">
                           <div class="tc_content">
                              <p class="text-thm"><a href="category/cars-bikes/bikes-scooters.html"><i class="la la-tags"></i> Bikes & Scooters</a></p>
                              <h4><a href="ad/7321/fyat-128.html">فيات 128</a></h4>
                              <p><i class="la la-map-marker"></i> Bamboo Flat</p>
                              <ul class="prop_details mb0">
                                 <li class="list-inline-item">فابريكه</li>
                              </ul>
                           </div>
                           <div class="listing-footer">
                              <a class="author-link" href="profile/mohamedali.html"><i class="fa fa-user" aria-hidden="true"></i> mohamedali</a>
                              <span><i class="fa fa-calendar-o" aria-hidden="true"></i> 8 months ago</span>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            
         </div>
      </div>
   </div>
</div>
<!-- Featured POST / End -->

@endsection