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



                    <div class="col-md-4">
                      <img src="{{asset("front/img/target.jpg")}}" alt="" style="margin-top: 40%;">
                    </div>
                    <div class="col-md-8">
                        <div class="sub-text">
                            <h2><strong><em>Lakshya</em></strong></h2>
                            <p>All students need a mentor, who can guide through. We provide an experienced and dedicated mentor, who can help you in career decision making.

                            </p>
                            <p>You will get following: – (Best for class 8th to 12th)

                            </p>
                            <ul>
                                <li>A detailed orientation session on career, courses and life
                                </li>
                                <li>30-page Psychometric Profiling and career planning
                                </li>
                                <li>Identification of Your personality, interest, skills and abilities and planning based on it
                                </li>
                                <li>Best fit Course after 10th
                                </li>
                                <li>Top 5 best career options
                                </li>
                                <li>Next 5 or 10 Yrs. Educational/ career plan
                                </li>
                                <li>Profile Building
                                </li>
                                <li>Your strength and weakness- how to handle it
                                </li>
                                <li>Follow-up session for next 5 Months
                                </li>
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
