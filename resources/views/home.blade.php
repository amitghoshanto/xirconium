<x-layouts.main :meta="$meta">


    <div class="container pt-4 ">

        <div class="row">
            <div class="col-md-12">
                @if (isMobile())
                    <img src="https://getsetrock.com/site/img/events/legends-of-the-92/t2iuEW8SkQGqziOm42ny.jpg"
                        alt="" class="img-fluid w-100">
                @else
                    <img src="https://getsetrock.com/site/img/events/legends-of-the-92/GC0vfWGwS8kgKNth5v5D.jpg"
                        alt="" class="img-fluid w-100">
                @endif

            </div>
        </div>
        <h1 class="my-3 text-center">LEGENDS OF THE DECADE</h1>


        <div class="row justify-content-center mb-3">
            <div class="col-md-5">
                <div class="mb-3">

                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floating-input" placeholder="Enter Your Name"
                            autocomplete="off">
                        <label for="floating-input">Full Name</label>
                    </div>

                    <div class="form-floating">
                        <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                            <option selected="">Choose gender</option>
                            <option value="1">Male</option>
                            <option value="2">Female</option>
                            <option value="3">Other</option>
                        </select>
                        <label for="floatingSelect">Gender</label>
                    </div>

                    <div class="mb-3 my-3">
                        <label class="form-label text-right" style="text-align: left">Date of birth</label>
                        <div class="row g-2">
                            <div class="col-5">
                                <select name="user[month]" class="form-select">
                                    <option value="">Month</option>
                                    <option value="1">January</option>
                                    <option value="2">February</option>
                                    <option value="3">March</option>
                                    <option value="4">April</option>
                                    <option value="5">May</option>
                                    <option selected="selected" value="6">June</option>
                                    <option value="7">July</option>
                                    <option value="8">August</option>
                                    <option value="9">September</option>
                                    <option value="10">October</option>
                                    <option value="11">November</option>
                                    <option value="12">December</option>
                                </select>
                            </div>
                            <div class="col-3">
                                <select name="user[day]" class="form-select">
                                    <option value="">Day</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                    <option value="13">13</option>
                                    <option value="14">14</option>
                                    <option value="15">15</option>
                                    <option value="16">16</option>
                                    <option value="17">17</option>
                                    <option value="18">18</option>
                                    <option value="19">19</option>
                                    <option value="20" selected="">20</option>
                                    <option value="21">21</option>
                                    <option value="22">22</option>
                                    <option value="23">23</option>
                                    <option value="24">24</option>
                                    <option value="25">25</option>
                                    <option value="26">26</option>
                                    <option value="27">27</option>
                                    <option value="28">28</option>
                                    <option value="29">29</option>
                                    <option value="30">30</option>
                                    <option value="31">31</option>
                                </select>
                            </div>
                            <div class="col-4">
                                <select name="user[year]" class="form-select">
                                    <option value="">Year</option>
                                    <option value="2014">2014</option>
                                    <option value="2013">2013</option>
                                    <option value="2012">2012</option>
                                    <option value="2011">2011</option>
                                    <option value="2010">2010</option>
                                    <option value="2009">2009</option>
                                    <option value="2008">2008</option>
                                    <option value="2007">2007</option>
                                    <option value="2006">2006</option>
                                    <option value="2005">2005</option>
                                    <option value="2004">2004</option>
                                    <option value="2003">2003</option>
                                    <option value="2002">2002</option>
                                    <option value="2001">2001</option>
                                    <option value="2000">2000</option>
                                    <option value="1999">1999</option>
                                    <option value="1998">1998</option>
                                    <option value="1997">1997</option>
                                    <option value="1996">1996</option>
                                    <option value="1995">1995</option>
                                    <option value="1994">1994</option>
                                    <option value="1993">1993</option>
                                    <option value="1992">1992</option>
                                    <option value="1991">1991</option>
                                    <option value="1990">1990</option>
                                    <option value="1989" selected="">1989</option>
                                    <option value="1988">1988</option>
                                    <option value="1987">1987</option>
                                    <option value="1986">1986</option>
                                    <option value="1985">1985</option>
                                    <option value="1984">1984</option>
                                    <option value="1983">1983</option>
                                    <option value="1982">1982</option>
                                    <option value="1981">1981</option>
                                    <option value="1980">1980</option>
                                    <option value="1979">1979</option>
                                    <option value="1978">1978</option>
                                    <option value="1977">1977</option>
                                    <option value="1976">1976</option>
                                    <option value="1975">1975</option>
                                    <option value="1974">1974</option>
                                    <option value="1973">1973</option>
                                    <option value="1972">1972</option>
                                    <option value="1971">1971</option>
                                    <option value="1970">1970</option>
                                    <option value="1969">1969</option>
                                    <option value="1968">1968</option>
                                    <option value="1967">1967</option>
                                    <option value="1966">1966</option>
                                    <option value="1965">1965</option>
                                    <option value="1964">1964</option>
                                    <option value="1963">1963</option>
                                    <option value="1962">1962</option>
                                    <option value="1961">1961</option>
                                    <option value="1960">1960</option>
                                    <option value="1959">1959</option>
                                    <option value="1958">1958</option>
                                    <option value="1957">1957</option>
                                    <option value="1956">1956</option>
                                    <option value="1955">1955</option>
                                    <option value="1954">1954</option>
                                    <option value="1953">1953</option>
                                    <option value="1952">1952</option>
                                    <option value="1951">1951</option>
                                    <option value="1950">1950</option>
                                    <option value="1949">1949</option>
                                    <option value="1948">1948</option>
                                    <option value="1947">1947</option>
                                    <option value="1946">1946</option>
                                    <option value="1945">1945</option>
                                    <option value="1944">1944</option>
                                    <option value="1943">1943</option>
                                    <option value="1942">1942</option>
                                    <option value="1941">1941</option>
                                    <option value="1940">1940</option>
                                    <option value="1939">1939</option>
                                    <option value="1938">1938</option>
                                    <option value="1937">1937</option>
                                    <option value="1936">1936</option>
                                    <option value="1935">1935</option>
                                    <option value="1934">1934</option>
                                    <option value="1933">1933</option>
                                    <option value="1932">1932</option>
                                    <option value="1931">1931</option>
                                    <option value="1930">1930</option>
                                    <option value="1929">1929</option>
                                    <option value="1928">1928</option>
                                    <option value="1927">1927</option>
                                    <option value="1926">1926</option>
                                    <option value="1925">1925</option>
                                    <option value="1924">1924</option>
                                    <option value="1923">1923</option>
                                    <option value="1922">1922</option>
                                    <option value="1921">1921</option>
                                    <option value="1920">1920</option>
                                    <option value="1919">1919</option>
                                    <option value="1918">1918</option>
                                    <option value="1917">1917</option>
                                    <option value="1916">1916</option>
                                    <option value="1915">1915</option>
                                    <option value="1914">1914</option>
                                    <option value="1913">1913</option>
                                    <option value="1912">1912</option>
                                    <option value="1911">1911</option>
                                    <option value="1910">1910</option>
                                    <option value="1909">1909</option>
                                    <option value="1908">1908</option>
                                    <option value="1907">1907</option>
                                    <option value="1906">1906</option>
                                    <option value="1905">1905</option>
                                    <option value="1904">1904</option>
                                    <option value="1903">1903</option>
                                    <option value="1902">1902</option>
                                    <option value="1901">1901</option>
                                    <option value="1900">1900</option>
                                    <option value="1899">1899</option>
                                    <option value="1898">1898</option>
                                    <option value="1897">1897</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="floating-input"
                            placeholder="name@example.com" autocomplete="off">
                        <label for="floating-input">Email address</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="floating-input"
                            placeholder="name@example.com" autocomplete="off">
                        <label for="floating-input">Repeat Email address</label>
                    </div>



                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="phone_number"
                            placeholder="Enter mobile number" autocomplete="off">

                    </div>


                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="phone_number_2"
                            placeholder="Repeat mobile number" autocomplete="off">

                    </div>

                    <div class="form-floating mb-3">
                        <input type="number" class="form-control" id="floating-input" placeholder=""
                            autocomplete="off" value="1">
                        <label for="floating-input">Ticket Quantity</label>
                        <p class="my-1" style="text-align: left !important">
                            Per Ticket Price : BDT 3050
                        </p>
                    </div>

                    <div class="mb-3">
                        <div>
                            <label class="form-check">
                                <input class="form-check-input" type="checkbox" name="agree" required="">
                                <span class="form-check-label">I agree to the <a href="{{ route('TOS') }}"
                                        target="_blank">Terms
                                        &amp;
                                        Conditions</a>, <a href="{{ route('PrivacyPolicy') }}" target="_blank">Privacy
                                        Policy</a>, and <a href="{{ route('RefundPolicy') }}" target="_blank">Refund
                                        Policy</a></span>
                            </label>
                        </div>
                    </div>

                    <div class="mb-3">
                        <input type="submit" class="btn btn-danger w-100 register_button" value="Buy Ticket">
                    </div>











                </div>


            </div>

        </div>


        <hr>

        <h2>Event</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>






    </div>





    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.3/js/intlTelInput.min.js"></script>
    <script>
        var phone_number = window.intlTelInput(document.querySelector("#phone_number"), {
            allowDropdown: false,
            separateDialCode: true,
            preferredCountries: ["bd"],
            onlyCountries: ["bd"],
            hiddenInput: ["contact"],
            utilsScript: "//cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.3/js/utils.js"
        });
    </script>

    <script>
        var phone_number = window.intlTelInput(document.querySelector("#phone_number_2"), {
            allowDropdown: false,
            separateDialCode: true,
            preferredCountries: ["bd"],
            onlyCountries: ["bd"],
            hiddenInput: ["contact"],
            utilsScript: "//cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.3/js/utils.js"
        });
    </script>

    <script>
        function chnagePassType() {
            var l_pass = document.getElementById("password");
            var show_pass_button = document.getElementById("show_pass_button");
            if (l_pass.type === "password") {
                l_pass.type = "text";
                show_pass_button.innerHTML = "Hide";
            } else {
                l_pass.type = "password";
                show_pass_button.innerHTML = "Show";
            }
        }
    </script>

</x-layouts.main>
