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
                           <h2>Ask for Counseling</h2>
                           <button class="btn call-btn">Call Now</button>
                           <h3 class="or">Or</h3>
                           <div class="call-form">
                            <form action="">
                                <div class="row">
                                    <label for="exampleFormControlInput1" class="form-label">Name <span class="star">*</span> </label>

                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <input type="text" class="form-control" id="exampleFormControlInput1" required>
                                          </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <input type="text" class="form-control" id="exampleFormControlInput1" required>
                                          </div>
                                    </div>
                                </div>
                                 <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Email <span class="star">*</span></label>
                                    <input type="email" class="form-control" id="exampleFormControlInput1" required>
                                  </div>
                                  <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Whatsapp Number <span class="star">*</span></label>
                                    <input type="email" class="form-control" id="exampleFormControlInput1" required>
                                  </div>
                                  <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Invite For <span class="star">*</span></label>
                                    <select class="form-control">
                                        <option value="school">School</option>
                                        <option value="college">College</option>
                                        <option value="student">Student</option>

                                    </select>
                                    {{-- <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com"> --}}
                                  </div>
                                  <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Comments</label>
                                    <textarea name="comment" class="form-control" id="" rows="5"></textarea>
                                  </div>

                                  <div class="d-grid gap-2">
                                    <button class="btn btn-primary" type="button">Submit</button>
                                  </div>
                            </form>
                           </div>
                    </div>
                </div>
                <div class="col-md-4 ">
                    <div class="notice-sec">
                   <div class="notice-scroll">
                    <h4>Notice board</h4>
                    <marquee behavior=scroll  scrollamount="3" direction="up" height="200px">
                        <h5>Career Lab-Test message</h5>
                        <h3>ADMISSION OPEN</h3>
                        <p>requriment 1</p>
                    </marquee>
                   </div>
                   <div class="search-box">
                    <input type="text" class="form-control" name="" id="">
                   </div>
                </div>
                </div>

            </div>
        </div>
    </section>
    @include('layouts.footer')
    @endsection
</x-guest-layout>
