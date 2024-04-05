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
                      <img src="{{asset("front/img/stream-selector.jpg")}}" alt="">
                    </div>
                    <div class="col-md-7">
                        <div class="strem-text">
                            <h2>Stream Selection and admission <br>planning : –
                            </h2>
                            <ul>
                                <li>Best for class 11th and 12th students
                                </li>
                                <li>Get clarity about your best fit Stream/ Course Combination
                                </li>
                                <li>Engineering Branch Selection
                                </li>
                                <li>Planning of Exam and admission
                                </li>
                                <li>College selection after School
                                </li>
                                <li>Career Planning after

                                </li>
                            </ul>
                            <button class="btn sub-btn">Plan Your Future</button>
                        </div>
                    </div>

             </div>
          </div>
        </div>
    </section>
    @include('layouts.footer')
    @endsection
</x-guest-layout>
