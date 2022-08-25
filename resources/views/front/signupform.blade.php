@extends('front.layout.master')
@section('content')
     <section class="signup-form-page">
         <div class="wrapper">
            <h2 class="common-title">Sign up</h2>
            <div class="signup-form-wrap">
                <div class="signup-instruction">
                    <h3 class="intro-title">Before you begin, please note :</h3>
                    <ol>
                        <li> You must have an established business entity to activate your account. </li>
                        <li>SwatchOn is an international fabric wholesale service for fashion businesses. Fabric suppliers on SwatchOn expect to do business with fashion companies only, and not individuals.</li>
                        <li>Customs departments require recipient's tax identification on the delivery of the fabric orders. </li>
                    </ol>
                </div>
                <div class="signup-main-form">
                    <form id="regForm" action="/action_page.php">
                        <div class="steps-wrap">
                            <p class="step">Basic Information</p>
                            <p class="step">General Information</p>
                            <p class="step">Business Details</p>
                        </div>
                        <div class="tab">
                            <div class="form-wrap">
                                <div class="signup-field">
                                    <select name="cars" oninput="this.className = ''" id="cars">
                                        <option value="Country">Country*</option>
                                        <option value="india">India</option>
                                        <option value="australia">Australia</option>
                                        <option value="canada">canada</option>
                                    </select>
                                </div>
                                <div class="signup-field"><input placeholder="Full name*" oninput="this.className = ''" name="Full name"></div>
                                <div class="signup-field"><input placeholder="Job title*" oninput="this.className = ''" name="Job title"></div>
                                <div class="signup-field"><input placeholder="Email*" oninput="this.className = ''" name="Email"></div>
                                <div class="signup-field"><input placeholder="Company name*" oninput="this.className = ''" name="Company name"></div>
                                <div class="signup-field"><input placeholder="Password*" type="password" oninput="this.className = ''" name="Password"></div>
                                <div class="signup-field full-col checkbox"><input type="checkbox" id="vehicle1" oninput="this.className = ''" name="vehicle1" value="Bike"> <label for="vehicle1"> Get emails from SwatchOn about product updates, industry news, and events. <a href="#">Privacy Policy</a></label></div>
                            </div>
                        </div>
                        <div class="tab">
                            <div class="form-wrap">
                                <div class="signup-field">
                                    <select name="cars" oninput="this.className = ''" id="cars">
                                        <option value="volvo">Registered Business Country*</option>
                                        <option value="loreum1">Loreum1</option>
                                        <option value="loreum2">Loreum2</option>
                                        <option value="loreum3">Loreum3</option>
                                    </select>
                                </div>
                                <div class="signup-field"><input placeholder="Legal Business Name*" oninput="this.className = ''" name="Legal Business Name*"></div>
                                <div class="signup-field"><input placeholder="Mobile Contact*" oninput="this.className = ''" name="Mobile Contact*"></div>
                                <div class="signup-field"><input placeholder="Importer Exporter Code (IEC)*" oninput="this.className = ''" name="Importer Exporter Code (IEC)*"></div>
                                <div class="signup-field"><input placeholder="Business Identification Number (BIN)*" oninput="this.className = ''" name="Business Identification Number (BIN)*"></div>
                            </div>
                        </div>
                        <div class="tab">
                            <div class="form-wrap">
                                <div class="signup-field">
                                    <select name="cars" oninput="this.className = ''" id="cars">
                                        <option value="What is the type of your business?*">What is the type of your business?*</option>
                                        <option value="loreum1">Loreum1</option>
                                        <option value="loreum2">Loreum2</option>
                                        <option value="loreum3">Loreum3</option>
                                    </select>
                                </div>
                                <div class="signup-field">
                                    <select name="cars" oninput="this.className = ''" id="cars">
                                        <option value="volvo">How long have you been in business?*</option>
                                        <option value="loreum1">Loreum1</option>
                                        <option value="loreum2">Loreum2</option>
                                        <option value="loreum3">Loreum3</option>
                                    </select>
                                </div>
                                <div class="signup-field full-col">
                                    <select name="cars" oninput="this.className = ''" id="cars">
                                        <option value="volvo">How much budget do you allocate for fabric annually?*</option>
                                        <option value="loreum1">Loreum1</option>
                                        <option value="loreum2">Loreum2</option>
                                        <option value="loreum3">Loreum3</option>
                                    </select>
                                </div>
                                <div class="signup-field full-col">
                                    <select name="cars" oninput="this.className = ''" id="cars">
                                        <option value="volvo">What is the price point of the brand?*</option>
                                        <option value="loreum1">Loreum1</option>
                                        <option value="loreum2">Loreum2</option>
                                        <option value="loreum3">Loreum3</option>
                                    </select>
                                </div>
                                <div class="signup-field full-col">
                                    <select name="cars" oninput="this.className = ''" id="cars">
                                        <option value="volvo">On which month do you start sourcing for S/S?*</option>
                                        <option value="loreum1">Loreum1</option>
                                        <option value="loreum2">Loreum2</option>
                                        <option value="loreum3">Loreum3</option>
                                    </select>
                                </div>
                                <div class="signup-field full-col">
                                    <select name="cars" oninput="this.className = ''" id="cars">
                                        <option value="volvo">On which month do you start sourcing for F/W?*</option>
                                        <option value="loreum1">Loreum1</option>
                                        <option value="loreum2">Loreum2</option>
                                        <option value="loreum3">Loreum3</option>
                                    </select>
                                </div>
                                <div class="signup-field full-col">
                                    <textarea placeholder="Please briefly describe your brand/business in 1 - 2 sentences.*" name="w3review" ></textarea>
                                </div>
                                <div class="signup-field"><input placeholder="Company Website*" oninput="this.className = ''" name="Company Website"></div>
                                <div class="signup-field"><input placeholder="Company Instagram*" oninput="this.className = ''" name="Company Instagram"></div>
                            </div>
                        </div>
                        <div style="overflow:auto;">
                            <div class="steps-button">
                                <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                                <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
                            </div>
                        </div>
                    </form>
                 </div>
             </div>
         </div>
     </section>
@endsection