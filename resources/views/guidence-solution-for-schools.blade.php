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
                        <h4>1. Workshop:</h4>
                        <p>These career awareness workshops will help students to identify the career goals, set the education milestones and derive the clear pathways to achieve it. The purpose of the workshop is to help students understand career development as a whole which will help them to grow and prosper in their lives. our school events keep students engaged, and get them excited about possibilities for their futures.

                        </p>
                        <h4>2. Career Lecture:
                        </h4>
                        <p>With our deep list of contacts from different fields, our speaker panels can broaden horizons and expose Students to new career paths.

                        </p>
                        <h4>3. Career Camp:
                        </h4>
                        <p>A specially designed theme-based event, this makes students aware and engaged. Student will explore multifold possibilities in their dream domain. At the end of camp students will come-up with their own plan of action.

                        </p>
                        <h4>4. Career Lab:
                        </h4>
                        <p>Career vector’s career Lab is Premium Service for School. A state of art of career counselling technology platform for schools which comprises emerging and latest trends in the Indian education system. Our technology platform along with the expert counselors help students to set career goals, find out the most suitable career path and achieve their career milestones. Students can make informed career decisions based on career analysis and information available in a single platform.

                        </p>
                        <h1>Invite our Experts to Your School for Exciting Career Discussions
                        </h1>
                        <a href="{{url("/contact-for-workshop")}}"><button class="btn invite-btn">INVITE</button></a>
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
