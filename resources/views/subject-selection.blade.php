<x-guest-layout>
    @section('style')
    <link rel="stylesheet" href="{{asset("front/css/page.css")}}">
       @endsection
    @section('section')
    @include('layouts.header')
    <section class="wrapper-sub">
        <div class="container">
            <div class="subject-selection">
          <div class="row">



                    <div class="col-md-7">
                      <img src="{{asset("front/img/sss.jpg")}}" alt="">
                    </div>
                    <div class="col-md-4">
                        <div class="sub-text">
                            <h2>Subject Selection</h2>
                            <ul>
                                <li>Ideal for Class 9th/10th</li>
                                <li>Get clarity about your subject and future options</li>
                                <li>Be aware about your personality, interest, skills and abilities</li>
                                <li>Best match course for you</li>
                                <li>Detailed plan of action for success</li>
                            </ul>
                            <button class="btn sub-btn">Know Your best fir subject</button>
                        </div>
                    </div>

             </div>
          </div>
        </div>
    </section>
    @include('layouts.footer')
    @endsection
</x-guest-layout>
