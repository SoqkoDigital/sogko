
<body class="inner-pages">
    
<section class="headings">
<div class="text-heading text-center">
    <div class="container">
        <h1>Submit Property</h1>
        <h2><a href="index.html">Home </a> &nbsp;/&nbsp; Submit Property</h2>
    </div>
</div>
</section>

<!-- START SECTION SUBMIT PROPERTY -->
<section class="royal-add-property-area section_100">
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="single-add-property">
                <h3>Property description and price</h3>
                <div class="property-form-group">
                    <form>
                        <div class="row">
                            <div class="col-md-12">
                                <p>
                                    <label for="title">Property Title</label>
                                    <input type="text" name="title" id="title" placeholder="Enter your property title">
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <p>
                                    <label for="description">Property Description</label>
                                    <textarea id="description" name="pro-dexc" placeholder="Describe about your property"></textarea>
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 col-md-12">
                                <div class="dropdown faq-drop">
                                    <label for="dropdownmissdcall">Status</label>
                                    <button class="pro-status dropdown-toggle" type="button" id="dropdownmissdcall" data-toggle="dropdown" aria-haspopup="true">
                                        Select status
                                        <i class="fa fa-angle-down"></i>
                                    </button>
                                    <ul class="dropdown-menu faq-drop-open" aria-labelledby="dropdownmissdcall">
                                        <li>rent</li>
                                        <li>sale</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-12">
                                <div class="dropdown faq-drop">
                                    <label for="dropdowntype">type</label>
                                    <button class="pro-type dropdown-toggle" type="button" id="dropdowntype" data-toggle="dropdown" aria-haspopup="true">
                                        Select Type
                                        <i class="fa fa-angle-down"></i>
                                    </button>
                                    <ul class="dropdown-menu faq-drop-open" aria-labelledby="dropdowntype">
                                        <li>house</li>
                                        <li>commercial</li>
                                        <li>apartment</li>
                                        <li>lot</li>
                                        <li>garage</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-12">
                                <div class="dropdown faq-drop">
                                    <label for="rooms">rooms</label>
                                    <button class="pro-room dropdown-toggle" type="button" id="rooms" data-toggle="dropdown" aria-haspopup="true">
                                        Select Type
                                        <i class="fa fa-angle-down"></i>
                                    </button>
                                    <ul class="dropdown-menu faq-drop-open" aria-labelledby="rooms">
                                        <li>1</li>
                                        <li>2</li>
                                        <li>3</li>
                                        <li>4</li>
                                        <li>5</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-12">
                                <p class="no-mb">
                                    <label for="price">Price</label>
                                    <input type="text" name="price" placeholder="USD" id="price">
                                </p>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <p class="no-mb last">
                                    <label for="area">Area</label>
                                    <input type="text" name="area" placeholder="Sqft" id="area">
                                </p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="single-add-property">
                <h3>property Media</h3>
                <div class="property-form-group">
                    <div class="row">
                        <div class="col-md-12">
                            <form action="/file-upload" class="dropzone"></form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-add-property">
                <h3>property Location</h3>
                <div class="property-form-group">
                    <div class="row">
                        <div class="col-lg-6 col-md-12">
                            <p>
                                <label for="address">Address</label>
                                <input type="text" name="address" placeholder="Enter Your Address" id="address">
                            </p>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <p>
                                <label for="city">City</label>
                                <input type="text" name="city" placeholder="Enter Your City" id="city">
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-12">
                            <p>
                                <label for="state">State</label>
                                <input type="text" name="state" placeholder="Enter Your State" id="state">
                            </p>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <p>
                                <label for="country">Country</label>
                                <input type="text" name="country" placeholder="Enter Your Country" id="country">
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-12">
                            <p class="no-mb first">
                                <label for="latitude">Google Maps latitude</label>
                                <input type="text" name="latitude" placeholder="Google Maps latitude" id="latitude">
                            </p>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <p class="no-mb last">
                                <label for="longitude">Google Maps longitude</label>
                                <input type="text" name="longitude" placeholder="Google Maps longitude" id="longitude">
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-add-property">
                <h3>Extra Information</h3>
                <div class="property-form-group">
                    <div class="row">
                        <div class="col-lg-4 col-md-12">
                            <div class="dropdown faq-drop no-mb">
                                <label for="age">Building Age <span>(optional)</span></label>
                                <button class="pro-age dropdown-toggle" type="button" id="age" data-toggle="dropdown" aria-haspopup="true">
                                    Select Age
                                    <i class="fa fa-angle-down"></i>
                                </button>
                                <ul class="dropdown-menu faq-drop-open" aria-labelledby="age">
                                    <li>0-1 years</li>
                                    <li>0-5 years</li>
                                    <li>0-10 years</li>
                                    <li>0-15 years</li>
                                    <li>0-20 years</li>
                                    <li>0-50 years</li>
                                    <li>50+ years</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12">
                            <div class="dropdown faq-drop no-mb">
                                <label for="bed">Bedrooms <span>(optional)</span></label>
                                <button class="pro-bed dropdown-toggle" type="button" id="bed" data-toggle="dropdown" aria-haspopup="true">
                                    Select Bedrooms
                                    <i class="fa fa-angle-down"></i>
                                </button>
                                <ul class="dropdown-menu faq-drop-open" aria-labelledby="bed">
                                    <li>1</li>
                                    <li>2</li>
                                    <li>3</li>
                                    <li>4</li>
                                    <li>5</li>
                                    <li>6</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12">
                            <div class="dropdown faq-drop no-mb last">
                                <label for="bath">Bathrooms <span>(optional)</span></label>
                                <button class="pro-bath dropdown-toggle" type="button" id="bath" data-toggle="dropdown" aria-haspopup="true">
                                    Select Bathrooms
                                    <i class="fa fa-angle-down"></i>
                                </button>
                                <ul class="dropdown-menu faq-drop-open" aria-labelledby="bath">
                                    <li>1</li>
                                    <li>2</li>
                                    <li>3</li>
                                    <li>4</li>
                                    <li>5</li>
                                    <li>6</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-add-property">
                <h3>Property Features</h3>
                <div class="property-form-group">
                    <div class="row">
                        <div class="col-md-12">
                            <ul class="pro-feature-add">
                                <li>
                                    <label>
                                        <input type="checkbox" name="feature"> Air Conditioning
                                    </label>
                                </li>
                                <li>
                                    <label>
                                        <input type="checkbox" name="feature"> Swimming Pool
                                    </label>
                                </li>
                                <li>
                                    <label>
                                        <input type="checkbox" name="feature"> Central Heating
                                    </label>
                                </li>
                                <li>
                                    <label>
                                        <input type="checkbox" name="feature"> Laundry Room
                                    </label>
                                </li>
                                <li>
                                    <label>
                                        <input type="checkbox" name="feature"> Gym
                                    </label>
                                </li>
                                <li>
                                    <label>
                                        <input type="checkbox" name="feature"> Alarm
                                    </label>
                                </li>
                                <li>
                                    <label>
                                        <input type="checkbox" name="feature"> Window Covering
                                    </label>
                                </li>
                                <li class="no-mb">
                                    <label>
                                        <input type="checkbox" name="feature"> Refrigerator
                                    </label>
                                </li>
                                <li class="no-mb">
                                    <label>
                                        <input type="checkbox" name="feature"> TV Cable & WIFI
                                    </label>
                                </li>
                                <li class="no-mb last">
                                    <label>
                                        <input type="checkbox" name="feature"> Microwave
                                    </label>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-add-property">
                <h3>Contact Information</h3>
                <div class="property-form-group">
                    <div class="row">
                        <div class="col-lg-6 col-md-12">
                            <p>
                                <label for="con-name">Name</label>
                                <input type="text" placeholder="Enter Your Name" id="con-name" name="con-name">
                            </p>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <p>
                                <label for="con-user">Username</label>
                                <input type="text" placeholder="Enter Your Username" id="con-user" name="con-user">
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-12">
                            <p class="no-mb first">
                                <label for="con-email">Email</label>
                                <input type="email" placeholder="Enter Your Email" id="con-email" name="con-email">
                            </p>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <p class="no-mb last">
                                <label for="con-phn">Phone</label>
                                <input type="text" placeholder="Enter Your Phone Number" id="con-phn" name="con-phn">
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="add-property-button">
                <div class="row">
                    <div class="col-md-12">
                        <div class="prperty-submit-button">
                            <button type="submit">Submit Property</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
<!-- END SECTION SUBMIT PROPERTY -->


