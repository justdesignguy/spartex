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
                <div class="master-form">
                    <form id="regForm" action="/action_page.php">
                        <div class="steps-wrap">
                            <p class="step">Basic Information</p>
                            <p class="step">General Information</p>
                            <p class="step">Business Details</p>
                        </div>
                        <div class="tab">
                            <div class="form-field">
                                <select name="cars" oninput="this.className = ''" id="cars">
                                    <option value="volvo">Volvo</option>
                                    <option value="saab">Saab</option>
                                    <option value="mercedes">Mercedes</option>
                                    <option value="audi">Audi</option>
                                </select>
                            </div>
                            <div class="form-field"><input placeholder="Full name*" oninput="this.className = ''" name="Full name"></div>
                            <div class="form-field"><input placeholder="Job title*" oninput="this.className = ''" name="Job title"></div>
                            <div class="form-field"><input placeholder="Email*" oninput="this.className = ''" name="Email"></div>
                            <div class="form-field"><input placeholder="Company name*" oninput="this.className = ''" name="Company name"></div>
                            <div class="form-field"><input placeholder="Password*" type="password" oninput="this.className = ''" name="Password"></div>
                            <div class="form-field"><input type="checkbox" id="vehicle1" oninput="this.className = ''" name="vehicle1" value="Bike"> <label for="vehicle1"> Get emails from SwatchOn about product updates, industry news, and events. <a href="#">Privacy Policy</a></label></div>
                        </div>
                        <div class="tab">
                            <div class="form-field">
                                <select name="cars" oninput="this.className = ''" id="cars">
                                    <option value="volvo">Registered Business Country*</option>
                                    <option value="saab">Saab</option>
                                    <option value="mercedes">Mercedes</option>
                                    <option value="audi">Audi</option>
                                </select>
                            </div>
                            <div class="form-field"><input placeholder="Legal Business Name*" oninput="this.className = ''" name="Legal Business Name*"></div>
                            <div class="form-field"><input placeholder="Mobile Contact*" oninput="this.className = ''" name="Mobile Contact*"></div>
                            <div class="form-field"><input placeholder="Importer Exporter Code (IEC)*" oninput="this.className = ''" name="Importer Exporter Code (IEC)*"></div>
                            <div class="form-field"><input placeholder="Business Identification Number (BIN)*" oninput="this.className = ''" name="Business Identification Number (BIN)*"></div>
                        </div>
                        <div class="tab">
                            <div class="form-field">
                                <select name="cars" oninput="this.className = ''" id="cars">
                                    <option value="volvo">Registered Business Country*</option>
                                    <option value="saab">Saab</option>
                                    <option value="mercedes">Mercedes</option>
                                    <option value="audi">Audi</option>
                                </select>
                            </div>
                            <div class="form-field">
                                <select name="cars" oninput="this.className = ''" id="cars">
                                    <option value="volvo">Registered Business Country*</option>
                                    <option value="saab">Saab</option>
                                    <option value="mercedes">Mercedes</option>
                                    <option value="audi">Audi</option>
                                </select>
                            </div>
                            <div class="form-field">
                                <select name="cars" oninput="this.className = ''" id="cars">
                                    <option value="volvo">Registered Business Country*</option>
                                    <option value="saab">Saab</option>
                                    <option value="mercedes">Mercedes</option>
                                    <option value="audi">Audi</option>
                                </select>
                            </div>
                            <div class="form-field">
                                <select name="cars" oninput="this.className = ''" id="cars">
                                    <option value="volvo">Registered Business Country*</option>
                                    <option value="saab">Saab</option>
                                    <option value="mercedes">Mercedes</option>
                                    <option value="audi">Audi</option>
                                </select>
                            </div>
                            <div class="form-field">
                                <select name="cars" oninput="this.className = ''" id="cars">
                                    <option value="volvo">Registered Business Country*</option>
                                    <option value="saab">Saab</option>
                                    <option value="mercedes">Mercedes</option>
                                    <option value="audi">Audi</option>
                                </select>
                            </div>
                            <div class="form-field">
                                <select name="cars" oninput="this.className = ''" id="cars">
                                    <option value="volvo">Registered Business Country*</option>
                                    <option value="saab">Saab</option>
                                    <option value="mercedes">Mercedes</option>
                                    <option value="audi">Audi</option>
                                </select>
                            </div>
                            <div class="form-field">
                                <textarea placeholder="Please briefly describe your brand/business in 1 - 2 sentences.*" name="w3review" ></textarea>
                            </div>
                            <div class="form-field"><input placeholder="Company Website*" oninput="this.className = ''" name="Company Website"></div>
                            <div class="form-field"><input placeholder="Company Instagram*" oninput="this.className = ''" name="Company Instagram"></div>
                        </div>
                        <div style="overflow:auto;">
                            <div style="float:right;">
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