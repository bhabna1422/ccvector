<x-guest-layout>
    @section('style')
    <link rel="stylesheet" href="{{asset("front/css/page.css")}}">
       @endsection
    @section('section')
    @include('layouts.header')

    <section class="guidence">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="guidence-sec">
                        <h2>Guidance solution for SCHOOL</h2>
                        <p>Education is a stage which is a boundary line for starting a career directly. At this stage, students face a lot of questions and pressure from family , society and peers. This stage is crucial for career decision. A planned and clear decision will lead to successful and happy career ahead.</p>
                        <ul>
                            <li>Your Detailed Profiling : Personality, Career interest, Skills, abilities, career motivators.</li>
                            <li>Best fir Major for You.</li>
                            <li>Have You chosen right Specialisation? What career You will land after your Course?</li>
                           <li>Career and Courses after UG? How to plan for it?</li>
<li> Different Exams and how to prepare for it ? Which Exam you should focus?</li>
<li>Top 10 careers which will be in demand ?</li>
<li>Skills and abilities which will ensure your employability,</li>
<li>Profile Building.</li>
<li>Financial Planning for your study and future.</li>
                        </ul>

                        <a href="{{url("/contact-for-workshop-copy")}}"><button class="btn invite-btn">Plan Your Future With Confidence</button></a>
                    </div>
                </div>
                <div class="col-md-4">
                    <h4>Notice board</h4>
                </div>
            </div>
        </div>
    </section>

    @include('layouts.footer')
    @endsection
</x-guest-layout>
