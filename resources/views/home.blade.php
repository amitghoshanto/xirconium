<x-layouts.main :meta="$meta">


    <div class="container pt-4 text-center">

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





        {{-- <div class="text-center "><a href="{{ route('signup') }}" class="text-decoration-none">
                <button class="btn btn-danger w-100 xirconium-red-button my-2" style=""><b>REGISTER
                        ONLINE</b></button>
            </a></div> --}}



    </div>

</x-layouts.main>
