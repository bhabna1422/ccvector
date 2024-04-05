<x-guest-layout>
    @section('style')
    <link rel="stylesheet" href="{{asset("front/css/page.css")}}">
       @endsection
    @section('section')
    @include('layouts.header')
   <section class="career-wrpper">
      <div class="container">
         <div class="career-sec">
            <div class="row">
                <div class="col-md-8">
                  <div class="career-lt">
                    <h1>Welcome to future
                    </h1>
                    <h3>Explore your career opportunity
                    </h3>
                    <div class="row text-center">
                        <div class="col-md-2" style="margin-right: 45px">
                            <div class="career-icon">
                                <i class="fa fa-graduation-cap" aria-hidden="true"></i>

                            </div>
                             <h4 >Account</h4>
                        </div>
                        <div class="col-md-2" style="margin-right: 45px">
                            <div class="career-icon">
                                <i class="fa fa-user" aria-hidden="true"></i>

                            </div>
                             <h4 >Profile</h4>
                        </div>
                        <div class="col-md-2" style="margin-right: 45px">
                            <div class="career-icon">
                                <i class="fa fa-key" aria-hidden="true"></i>

                            </div>
                             <h4 >Logout</h4>
                        </div>
                    </div>
                    {{-- <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                    <h4 >Account</h4>
                    <i class="fa fa-user" aria-hidden="true"></i>
                    <h4 >Profile</h4> --}}
                  </div>
                </div>
                <div class="col-md-4">
                    <div class="career-btns">
                        <a href="{{url('/explore')}}"><Button class="btn career-btn">My Career</Button></a>
                        <a href="{{url('/advance-explore')}}"><Button class="btn career-btn">Advance Explore</Button></a>
                        <a href=""><Button class="btn career-btn">My Scholarship</Button></a>
                        <a href=""><Button class="btn career-btn">Exam Directory</Button></a>
                        <a href=""><Button class="btn career-btn">Psychometric Assesment</Button></a>
                        <a href=""><Button class="btn career-btn">Connect to Mentor</Button></a>
                        <a href=""><Button class="btn career-btn">Roadmap</Button></a>

                    </div>
                </div>
            </div>
         </div>
      </div>
   </section>
   @include('layouts.footer')
    @endsection
</x-guest-layout>
