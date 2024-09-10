<x-layouts.main :meta="$meta">


    <div class="container container-tight pt-4 ">

        <div class="card card-md card-borderless">


            <div class="card-body">


                <div class="card-title text-center">
                    <span class="badge badge-outline bg-yellow-lt">Under review</span>
                </div>
                <p class="my-4">Your application is still under review. Once our team has reviewed your file,
                    you’ll be notified via your registered email and/or phone number with us.</p>
                <p class="my-4">Login to your Xirconium Account regularly to check your approval status
                    incase you missed any of our confirmation emails or text messages.
                </p>


                <div class="row">
                    <div class="col-md-12 ">
                        <div class="card text-center mb-3">
                            <div class="card-header text-center">
                                <h3 class="card-title text-center">Full Name</h3>
                            </div>
                            <div class="card-body"> {{ Auth::user()->name }} {{ Auth::user()->last_name }} </div>

                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card text-center mb-3">
                            <div class="card-header text-center">
                                <h3 class="card-title text-center">Gender</h3>
                            </div>
                            <div class="card-body"> {{ getGender(Auth::user()->gender) }}
                            </div>

                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="card text-center mb-3">
                            <div class="card-header text-center">
                                <h3 class="card-title text-center">Date of Birth</h3>
                            </div>
                            <div class="card-body"> {{ Auth::user()->dob_d }}
                                {{ date('F', mktime(0, 0, 0, Auth::user()->dob_m, 10)) }}
                                {{ Auth::user()->dob_y }}
                            </div>

                        </div>
                    </div>


                    <div class="col-md-12">
                        <div class="card text-center mb-3">
                            <div class="card-header text-center">
                                <h3 class="card-title text-center">Mobile Number</h3>
                            </div>
                            <div class="card-body"> +880 {{ Auth::user()->contact }}
                            </div>

                        </div>
                    </div>



                    <div class="col-md-12">
                        <div class="card text-center mb-3">
                            <div class="card-header text-center">
                                <h3 class="card-title text-center">Email address</h3>
                            </div>
                            <div class="card-body"> {{ Auth::user()->email }}
                            </div>

                        </div>
                    </div>




                </div>
            </div>

        </div>






    </div>












    </div>


</x-layouts.main>
