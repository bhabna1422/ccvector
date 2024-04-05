<x-guest-layout>
    @section('style')
    <link rel="stylesheet" href="{{asset("front/css/page.css")}}">
       @endsection
    @section('section')

    @include('layouts.header')
    <section class="explore-wrapper">
        <div class="container">
            <form action="">
            <div class="row">

                <div class="col-md-2">
                    <div class="explore-fields">
                        <select name="" class="form-control" id="">
                            <option selected>Education Level</option>
                            <option value="10th">10th</option>
                            <option value="12th">12th</option>
                            <option value="8th">8th</option>
                            <option value="others">others</option>
                            <option value="PG">PG</option>
                            <option value="PHD">PHD</option>
                            <option value="UG">UG</option>
                        </select>
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="explore-fields">
                        <select name="" class="form-control" id="">
                            <option selected>Stream</option>
                            <option value="Arts">Arts</option>
                            <option value="Others">Others</option>
                            <option value="Humanities">Humanities</option>
                            <option value="Science(Math group)">Science(Math group)</option>
                            <option value="Science">Science</option>
                            <option value="Skill Development">Skill Development</option>
                            <option value="Science">Science</option>
                          </select>

                    </div>
                </div>
                <div class="col-md-3">
                    <div class="explore-fields">
                        <select name="" class="form-control" id="">
                            <option selected>Mode OF Education</option>
                            <option value="Distance Mode">Distance Mode</option>
                            <option value="Full Time">Full Time</option>
                            <option value="Part Time">Part Time</option>

                          </select>

                    </div>
                </div>
                <div class="col-md-3">
                    <div class="explore-fields">
                       <select name="" class="form-control" id="">
                         <option selected>Future Trend</option>
                         <option value="Evergreen Career">Evergreen Career</option>
                         <option value="Future Career">Future Career</option>
                         <option value="Going Down">Going Down</option>
                         <option value="Growing Career">Growing Career</option>

                       </select>
                    </div>
                </div>
                {{-- <div class="col-md-2">
                    <div class="explore-fields">
                       <button type="submit" class="btn btn-warning">Submit</button> <a href="">Reset</a>
                    </div>
                </div> --}}

            </div>
            <div class="row">

                <div class="col-md-2">
                    <div class="explore-fields">
                        <select name="" class="form-control" id="">
                            <option selected>Abilities</option>
                            <option value="Cognitive abilities  (3)">Cognitive abilities  (3)</option>
                            <option value="Physical abilities-9  (4)">Physical abilities-9  (4)</option>
                            <option value="Psychomotor abilities- 10  (4)">Psychomotor abilities- 10  (4)</option>
                            <option value="Sensory Abilities- 12  (0)">Sensory Abilities- 12  (0)</option>

                        </select>
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="explore-fields">
                        <select name="" class="form-control" id="">
                            <option selected>Stream</option>
                            <option value="Arts">Arts</option>
                            <option value="Others">Others</option>
                            <option value="Humanities">Humanities</option>
                            <option value="Science(Math group)">Science(Math group)</option>
                            <option value="Science">Science</option>
                            <option value="Skill Development">Skill Development</option>
                            <option value="Science">Science</option>
                          </select>

                    </div>
                </div>
                <div class="col-md-3">
                    <div class="explore-fields">
                        <select name="" class="form-control" id="">
                            <option selected>Mode OF Education</option>
                            <option value="Distance Mode">Distance Mode</option>
                            <option value="Full Time">Full Time</option>
                            <option value="Part Time">Part Time</option>

                          </select>

                    </div>
                </div>
                <div class="col-md-3">
                    <div class="explore-fields">
                       <select name="" class="form-control" id="">
                         <option selected>Future Trend</option>
                         <option value="Evergreen Career">Evergreen Career</option>
                         <option value="Future Career">Future Career</option>
                         <option value="Going Down">Going Down</option>
                         <option value="Growing Career">Growing Career</option>

                       </select>
                    </div>
                </div>


            </div>
            </form>
            <div class="row">
                <div class="col-md-3">
                    <div class="explore-ec-sec">
                        <div class="explore-img">
                            <img src="{{asset("front/img/sociology-300x150.png")}}" alt="">
                        </div>
                       <div class="explore-text-p">
                         <h3>Sociology</h3>
                       </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="explore-ec-sec">
                        <div class="explore-img">
                            <img src="{{asset("front/img/social-work-300x165.jpg")}}" alt="">
                        </div>
                       <div class="explore-text-p">
                         <h3>Social Work</h3>
                       </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="explore-ec-sec">
                        <div class="explore-img">
                            <img src="{{asset("front/img/sanskrit.png")}}" alt="">
                        </div>
                       <div class="explore-text-p">
                         <h3>Sanskrit</h3>
                       </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="explore-ec-sec">
                        <div class="explore-img">
                            <img src="{{asset("front/img/public-relation.jpg")}}" alt="">
                        </div>
                       <div class="explore-text-p">
                         <h3>Public Relation</h3>
                       </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="explore-ec-sec">
                        <div class="explore-img">
                            <img src="{{asset("front/img/political-science-300x300.png")}}" alt="">
                        </div>
                       <div class="explore-text-p">
                         <h3>Political Science</h3>
                       </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="explore-ec-sec">
                        <div class="explore-img">
                            <img src="{{asset("front/img/physical-education-300x117.jpg")}}" alt="">
                        </div>
                       <div class="explore-text-p">
                         <h3>Physical Education</h3>
                       </div>
                    </div>
                </div>



            </div>
            <div class="row">
                <div class="col-md-12 text-center mt-5">
                      <button class="btn btn-success">Load More</button>
                </div>
            </div>
        </div>
    </section>
    @include('layouts.footer')
    @endsection
</x-guest-layout>
