@extends('layout.master')
@section('title', 'Create An Account - Quickad')

@section('content')

<!-- Select Category Modal -->
<div class="zoom-anim-dialog mfp-hide popup-dialog big-dialog" id="categoryModal">
   <div class="popup-tab-content padding-0 tg-thememodal tg-categorymodal">
      <div class="tg-thememodaldialog">
         <div class="tg-thememodalcontent">
            <div class="tg-title">
               <strong>Select Category</strong>
            </div>
            <div id="tg-dbcategoriesslider" class="tg-dbcategoriesslider tg-categories owl-carousel select-category post-option">
               <div class="tg-category " data-ajax-catid="1" data-ajax-action="getsubcatbyidList" data-cat-name="Cars & Bikes">
                  <div class="tg-categoryholder">
                     <div class="margin-bottom-10">
                        <img src="https://img.icons8.com/dusk/64/000000/traffic-jam.png"/>
                     </div>
                     <h3><a href="javascript:void()">Cars & Bikes</a></h3>
                  </div>
               </div>
               <div class="tg-category " data-ajax-catid="3" data-ajax-action="getsubcatbyidList" data-cat-name="Electronics & Appliances">
                  <div class="tg-categoryholder">
                     <div class="margin-bottom-10">
                        <img src="https://img.icons8.com/dusk/64/000000/tv.png"/>
                     </div>
                     <h3><a href="javascript:void()">Electronics & Appliances</a></h3>
                  </div>
               </div>
               <div class="tg-category " data-ajax-catid="5" data-ajax-action="getsubcatbyidList" data-cat-name="Home & Lifestyle">
                  <div class="tg-categoryholder">
                     <div class="margin-bottom-10">
                        <img src="https://img.icons8.com/dusk/64/000000/home-page.png"/>
                     </div>
                     <h3><a href="javascript:void()">Home & Lifestyle</a></h3>
                  </div>
               </div>
               <div class="tg-category " data-ajax-catid="4" data-ajax-action="getsubcatbyidList" data-cat-name="Real Estate">
                  <div class="tg-categoryholder">
                     <div class="margin-bottom-10">
                        <img src="https://img.icons8.com/dusk/64/000000/real-estate.png"/>
                     </div>
                     <h3><a href="javascript:void()">Real Estate</a></h3>
                  </div>
               </div>
               <div class="tg-category " data-ajax-catid="6" data-ajax-action="getsubcatbyidList" data-cat-name="Jobs">
                  <div class="tg-categoryholder">
                     <div class="margin-bottom-10">
                        <img src="https://img.icons8.com/dusk/64/000000/find-matching-job.png"/>
                     </div>
                     <h3><a href="javascript:void()">Jobs</a></h3>
                  </div>
               </div>
               <div class="tg-category " data-ajax-catid="7" data-ajax-action="getsubcatbyidList" data-cat-name="Services">
                  <div class="tg-categoryholder">
                     <div class="margin-bottom-10">
                        <img src="https://img.icons8.com/dusk/64/000000/services.png"/>
                     </div>
                     <h3><a href="javascript:void()">Services</a></h3>
                  </div>
               </div>
               <div class="tg-category " data-ajax-catid="8" data-ajax-action="getsubcatbyidList" data-cat-name="Entertainment">
                  <div class="tg-categoryholder">
                     <div class="margin-bottom-10">
                        <img src="https://img.icons8.com/dusk/64/000000/dancing.png"/>
                     </div>
                     <h3><a href="javascript:void()">Entertainment</a></h3>
                  </div>
               </div>
               <div class="tg-category " data-ajax-catid="2" data-ajax-action="getsubcatbyidList" data-cat-name="Mobiles & Tablets">
                  <div class="tg-categoryholder">
                     <div class="margin-bottom-10">
                        <img src="https://img.icons8.com/dusk/64/000000/two-smartphones.png"/>
                     </div>
                     <h3><a href="javascript:void()">Mobiles & Tablets</a></h3>
                  </div>
               </div>
            </div>
            <ul class="tg-subcategories" style="display: none">
               <li>
                  <div class="tg-title">
                     <strong>Select a subcategory</strong>
                     <div id="sub-category-loader" style="visibility:hidden"></div>
                  </div>
                  <div class=" tg-verticalscrollbar tg-dashboardscrollbar">
                     <ul id="sub_category">
                     </ul>
                  </div>
               </li>
            </ul>
         </div>
      </div>
   </div>
</div>
<!-- Select Category Modal -->

<div id="titlebar" class="margin-bottom-0">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Post An Advertise</h2>
                <!-- Breadcrumbs -->
                <nav id="breadcrumbs">
                    <ul>
                        <li><a href="http://classified.bylancer.com/">Home</a></li>
                        <li>Post An Advertise</li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>


<div class="section gray">
   <div class="container">
      <div class="row">
         <div class="col-xl-8 col-md-12">
            <div id="post_error"></div>
            <div class="payment-confirmation-page dashboard-box margin-top-0 padding-top-0 margin-bottom-50" style="display: none">
               <div class="headline">
                  <h3>Success</h3>
               </div>
               <div class="content with-padding padding-bottom-10">
                  <i class="la la-check-circle"></i>
                  <h1 class="margin-top-30 margin-bottom-30">Success</h1>
                  <p>Your advertise succussfully uploaded. Please wait for approval. Thanks</p>
               </div>
            </div>
            <form class="form-validate" id="post-advertise-form" action="http://classified.bylancer.com/post-ad?action=post_ad" method="post" enctype="multipart/form-data" accept-charset="UTF-8">
               <div class="dashboard-box margin-top-0">
                  <!-- Headline -->
                  <div class="headline">
                     <h3><i class="icon-feather-briefcase"></i> Ads Details</h3>
                  </div>
                  <div class="content with-padding padding-bottom-10">
                     <div class="row">
                        <div class="col-xl-12">
                           <div class="form-group text-center">
                              <a href="#categoryModal" id="choose-category" class="button popup-with-zoom-anim"><i class="icon-feather-check-circle"></i> &nbsp;Choose Category</a>
                           </div>
                           <div class="form-group selected-product" id="change-category-btn" style='display: none'>
                              <ul class="select-category list-inline">
                                 <li id="main-category-text"></li>
                                 <li id="sub-category-text"></li>
                                 <li class="active"><a href="#categoryModal" class="popup-with-zoom-anim"><i class="icon-feather-edit"></i> Edit</a></li>
                              </ul>
                              <input type="hidden" id="input-maincatid" name="catid" value="">
                              <input type="hidden" id="input-subcatid" name="subcatid" value="">
                           </div>
                           <div class="submit-field">
                              <h5>Title *</h5>
                              <input type="text" class="with-border" name="title" placeholder="Title for your advertise" required>
                           </div>
                           <div class="submit-field">
                              <h5>Description *</h5>
                              <textarea cols="30" rows="5" class="with-border text-editor" name="content" placeholder="Tell us more about your advertise"></textarea>
                           </div>


                           <div id="item_screenDDArea">
                           <div id="item_screen" class="ui-sortable">
                              <div class="multibox file main" style="cursor: move;" filename="">
                                 <div class="picture_delete"></div>
                                 <div class="rotate_picture" degree-lvl="1"></div>
                                 <img src="http://classified.bylancer.com/plugins/orakuploader//images/no-image.jpg" alt="" onerror="this.src='http://classified.bylancer.com/plugins/orakuploader//images/no-image.jpg'" class="picture_uploaded"> <input type="hidden" value="" name="item_screen[]">
                                 <div id="mainlabel-images" class="maintext">Main Image</div>
                              </div>
                           </div>
                           <div class="multibox uploadButton" onclick="javascript:orakuploaderLoad('item_screen');">            <img src="http://classified.bylancer.com/plugins/orakuploader/images/add.svg">          <br><span>Upload Images</span>          </div>
                           <input type="file" class="item_screenInput orakuploaderFileInput" accept="image/*" multiple="">          
                           <div class="clear"> </div>
                        </div>


                           <div id="ResponseCustomFields">
                              <div class="submit-field">
                                 <h5>Ad type</h5>
                                 <div class="radio radio-primary radio-inline"><input class="with-gap" type="radio" name="custom[1]" id="10" value="1" data-name="1"  /><label for="10"><span class="radio-label"></span>Private</label></div>
                                 <br>
                                 <div class="radio radio-primary radio-inline"><input class="with-gap" type="radio" name="custom[1]" id="21" value="2" data-name="1"  /><label for="21"><span class="radio-label"></span>Professional</label></div>
                                 <br><input type="hidden" class="quick-radioCheck" data-name="1" data-req="1">
                                 <div class="quick-error">This field is required.</div>
                              </div>
                           </div>
                           <div class="submit-field" id="quickad-price-field">
                              <h5>Price</h5>
                              <div class="row">
                                 <div class="col-xl-6 col-md-12">
                                    <div class="input-with-icon">
                                       <input class="with-border" type="text" placeholder="Price" name="price">
                                       <i class="currency">&#8377;</i>
                                    </div>
                                 </div>
                                 <div class="col-xl-6 col-md-12 margin-top-12">
                                    <div class="checkbox">
                                       <input type="checkbox" id="negotiable" name="negotiable" value="1">
                                       <label for="negotiable"><span class="checkbox-icon"></span> negotiate</label>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="submit-field">
                              <h5>Phone Number</h5>
                              <div class="row">
                                 <div class="col-xl-6 col-md-12">
                                    <div class="input-with-icon-left">
                                       <i class="flag-img"><img src="http://classified.bylancer.com/includes/assets/plugins/flags/images/in.png"></i>
                                       <input type="text" class="with-border" name="phone">
                                    </div>
                                 </div>
                                 <div class="col-xl-6 col-md-12">
                                    <div class="checkbox margin-top-12">
                                       <input type="checkbox" name="hide_phone" id="phone" value="1">
                                       <label for="phone"><span class="checkbox-icon"></span> Hide</label>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="submit-field">
                              <h5>City *</h5>
                              <select id="jobcity" class="with-border" name="city" data-size="7" title="Select City">
                                 <option value="0" selected="selected">Select City</option>
                              </select>
                           </div>
                           <!-- Location -->
                           <div class="submit-field">
                              <h5>Address</h5>
                              <div class="input-with-icon">
                                 <div id="autocomplete-container" data-autocomplete-tip="type and hit enter">
                                    <input class="with-border" type="text" placeholder="Address" name="location" id="address-autocomplete">
                                 </div>
                                 <div class="geo-location"><i class="fa fa-crosshairs"></i></div>
                              </div>
                              <div class="map shadow" id="singleListingMap" data-latitude="20.593684" data-longitude="78.96288"  style="height: 200px"></div>
                              <small>Drag the map marker to exact address</small>
                           </div>
                           <input type="hidden" id="latitude" name="latitude"  value="20.593684"/>
                           <input type="hidden" id="longitude" name="longitude" value="78.96288"/>
                           <div class="submit-field form-group">
                              <h5>Tags</h5>
                              <input class="with-border" type="text" name="tags">
                              <small>Enter the tags separated by commas.</small>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="dashboard-box">
                  <div class="headline">
                     <h3><i class="icon-feather-zap"></i> Make your Ad Premium <small>(Optional)</small></h3>
                  </div>
                  <div class="content with-padding">
                     <div class="payment">
                        <div class="payment-tab payment-tab-active">
                           <div class="payment-tab-trigger">
                              <input checked id="free" name="make_premium" type="radio" value="0">
                              <label for="free">Free Ad</label>
                           </div>
                           <div class="payment-tab-content">
                              <p>Your ad will go live after check by reviewer.</p>
                           </div>
                        </div>
                        <div class="payment-tab">
                           <div class="payment-tab-trigger">
                              <input type="radio" name="make_premium" id="make_premium" value="1">
                              <label for="make_premium">Premium <span class="badge green pull-right">RECOMMENDED</span></label>
                           </div>
                           <div class="payment-tab-content">
                              <p>You can optionally select some upgrades to get the best results.</p>
                              <div class="row premium-plans">
                                 <div class="col-lg-3">
                                    <div class="checkbox">
                                       <input type="checkbox" id="featured" name="featured" value="1" onchange="fillPrice(this,20.00);">
                                       <label for="featured"><span class="checkbox-icon"></span> <span class="badge blue">Featured</span></label>
                                    </div>
                                 </div>
                                 <div class="col-lg-6 premium-plans-text">
                                    Featured ads attract higher-quality viewer and are displayed prominently in the Featured ads section home page.
                                 </div>
                                 <div class="col-lg-3 premium-plans-price">
                                    $20.00 for 10 days
                                 </div>
                              </div>
                              <div class="row premium-plans">
                                 <div class="col-lg-3">
                                    <div class="checkbox">
                                       <input type="checkbox" id="urgent" name="urgent" value="1" onchange="fillPrice(this,20.00);">
                                       <label for="urgent"><span class="checkbox-icon"></span> <span class="badge yellow">Urgent</span></label>
                                    </div>
                                 </div>
                                 <div class="col-lg-6 premium-plans-text">
                                    Make your ad stand out and let viewer know that your advertise is time sensitive.
                                 </div>
                                 <div class="col-lg-3 premium-plans-price">
                                    $20.00 for 10 days
                                 </div>
                              </div>
                              <div class="row premium-plans">
                                 <div class="col-lg-3">
                                    <div class="checkbox">
                                       <input type="checkbox" id="highlight" name="highlight" value="1" onchange="fillPrice(this,20.00);">
                                       <label for="highlight"><span class="checkbox-icon"></span> <span class="badge red">Highlight</span></label>
                                    </div>
                                 </div>
                                 <div class="col-lg-6 premium-plans-text">
                                    Make your ad highlighted with border in listing search result page. Easy to focus.
                                 </div>
                                 <div class="col-lg-3 premium-plans-price">
                                    $20.00 for 10 days
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <input type="hidden" name="submit">
               <div class="row margin-top-30 margin-bottom-80" style="align-items: center;">
                  <div class="col-6">
                     <button type="submit" id="submit_job_button" name="Submit" class="button ripple-effect big"><i class="icon-feather-plus"></i> Post An Ad</button>
                  </div>
                  <div class="col-6">
                     <div id="ad_total_cost_container" class="text-right" style="display: none">
                        <strong>
                        Total:
                        <span class="currency-sign">$</span>
                        <span id="totalPrice">0</span>
                        <span class="currency-code">USD</span>
                        </strong>
                     </div>
                  </div>
               </div>
            </form>
         </div>
         <div class="col-xl-4 hide-under-992px">
            <div class="dashboard-box margin-top-0">
               <!-- Headline -->
               <div class="headline">
                  <h3><i class="icon-feather-alert-circle"></i> Tips!</h3>
               </div>
               <div class="content with-padding padding-bottom-10">
                  <ul class="list-2">
                     <li>Enter a brief description of the advertise.</li>
                     <li>Add your product photo.</li>
                     <li>Choose the correct category and sub-category of the ad.</li>
                     <li>Check again before submit the ad.</li>
                  </ul>
               </div>
            </div>
            <div class="text-center visible-md visible-lg"></div>
            <div class="text-center visible-sm"></div>
            <div class="text-center visible-xs"></div>
         </div>
      </div>
   </div>
</div>

<link type="text/css" href="http://classified.bylancer.com/plugins/orakuploader/orakuploader.css" rel="stylesheet"/>

<script type="text/javascript" src="http://classified.bylancer.com/plugins/orakuploader/orakuploader.js"></script>

@endsection