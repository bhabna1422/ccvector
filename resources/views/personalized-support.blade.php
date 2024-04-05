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



                    <div class="col-md-5">
                      <img src="{{asset("front/img/Support-3.png")}}" alt="">
                    </div>
                    <div class="col-md-7">
                        <div class="strem-text">
                            <h2>Personalized Support –
                            </h2>
                            <p>Here You will get a Yearlong dedicated mentorship. Support for your coaching, Entrance examination preparation, Question bank, Mock test etc. We will provide on demand expert counselling or consultation just to clear your doubt.</p>
                           <p>We cover following domains-</p>
                            <ul>
                                <li>IIT_JEE
                                </li>
                                <li>NDA
                                </li>
                                <li>CUET
                                </li>
                                <li>Foreign Admission
                                </li>
                                <li>Admission to UG/PG Program
                                </li>
                                <li>Profile Building

                                </li>
                                <li>And Many more</li>
                            </ul>
                            <button class="btn sub-btn">Get Personalized Plan</button>
                        </div>
                    </div>

             </div>
          </div>
        </div>
    </section>
    @include('layouts.footer')
    @endsection
</x-guest-layout>
