<x-guest-layout>
    @section('style')
 <link rel="stylesheet" href="{{asset("front/css/home.css")}}">
    @endsection
    @section('section')
        {{-- <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                @if (Route::has('admin.login'))
                    <div class="">
                        @auth('admin')
                            <a href="{{ url('/admin/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Admin Dashboard</a>
                        @else
                            <a href="{{ route('admin.login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Admin Log in</a>

                            @if (Route::has('register'))
                                <a href="{{ route('admin.register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Admin Register</a>
                            @endif
                        @endauth
                    </div>
                @endif
            </div>
        </div> --}}
        <section class="body-wrapper">
            <div class="banner">
               <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <div class="container-fluid">
                      <a class="navbar-brand" href="#"><img src="{{asset("front/img/vector-logooo12.png")}}" alt=""></a>
                      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                      </button>
                      <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav">
                          <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">About</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="http://careerdiary.careervector.in/career-library/all/">Explore Careers</a>
                          </li>

                          <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                              What We Do
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                              <li><a class="dropdown-item" href="{{url("/guidence-solution-for-schools")}}">For Schools</a></li>
                              <li><a class="dropdown-item" href="{{url("/guidence-solution-college-students")}}">College Students</a></li>
                              <li><a class="dropdown-item" href="#">For Students</a></li>
                            </ul>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#">Blogs</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="{{url("/career-lab")}}">Career Lab</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="{{url("/login")}}">Login</a>
                          </li>
                        </ul>
                      </div>
                    </div>
                </nav>
                  <div class="row">

                        <div class="col-lg-7">
                           <div class="banner-text">
                            <h1>This is Career Vector
                            </h1>
                            <p>We give you the confidence and tools to find a career that matters to you.

                            </p>
                            <button class="btn btn-register">Explore</button>
                           </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="banner-img">
                          <img src="{{asset("front/img/41464-student-with-books.gif")}}" alt="">
                        </div>
                        </div>

                  </div>

               </div>
            </div>

        </section>
        <section class="wavy-bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="banner-lr-text">
                          <h3>Your Future Starts Here</h3>
                          <p>Wondering what to do with Your life? We’ve been there, and we’re here to help . No matter where you’re at on your career journey, our experts, tools and resources will help you find your way forward.

                          </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="drive-sec">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">

                    </div>
                    <div class="col-lg-8">
                        <div class="drive-text">
                            <h3>What drives us?
                            </h3>
                            <p>We know what it’s like to feel lost when you think about future, because we’ve been there. That’s why, in 2011, we started to reach the unreached to make them aware about future and world of work.

                            </p>
                            <p>Similarly we reached to the alumni or working people to get advice from their life, work and career journey.

                            </p>
                            <p>We find that:- <strong><em>there’s no “right” way to build a career—that there were actually endless unique paths we could take forward. Now, we combined our methodology and their experience, that will guide you toward work you care about, too.</em></strong>

                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="container">
                <div class="achieved">
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <h2>Successfully Achived</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="succss-achived">
                                <h1>500+</h1>
                                <p>Schools</p>
                            </div>
                            <hr>
                        </div>
                        <div class="col-md-3">
                            <div class="succss-achived">
                                <h1>50,000+</h1>
                                <p>Students</p>
                            </div>
                            <hr>
                        </div>
                        <div class="col-md-3">
                            <div class="succss-achived">
                                <h1>15+</h1>
                                <p>Years</p>
                            </div>
                            <hr>
                        </div>
                        <div class="col-md-3">
                            <div class="succss-achived">
                                <h1>1,000+</h1>
                                <p>Seminars</p>
                            </div>
                            <hr>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                       <div class="student-sec">
                        <h1>Make students Excited about their Future….
                        </h1>
                        <h3>Show students everything they can be
                        </h3>
                        <h6>Widen the lens of what's possible
                        </h6>
                        <p>We help students to think about their future differently. To make them realise to take risks, fail, and succeed in life through real life experiences, and this is awesome for them.” Packed with real-world takeaways “our customised program really help open the door to students communities in ways they may not have thought of before.”
                        </p>
                        <button class="btn btn-register">Know More</button>
                       </div>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="container">
                <div class="start-now">
                   <div class="row">
                    <div class="col-md-7">
                        <div class="start-text">
                            <h3>Still Wondering!!! Confused????<br> Where to Start????
                            </h3>
                            <button class="btn white-btn">Start Here</button>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <img src="{{asset("front/img/download.jfif")}}" alt="">
                    </div>
                   </div>
                </div>
            </div>
        </section>

        <section>
          <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="explore">
                        <h3>Explore career possibilities that reflect who you are
                        </h3>
                    </div>
                    <div class="explore-text">
                        <h4>Know the your Reality:
                        </h4>
                        <p>Lots of resources and our experts will hep you to think about yourself, your interest, personality, like and dislike etc. This all will give a solid foundation for your career planning.

                        </p>
                        <h4>Rethink what you knew about work :
                        </h4>
                        <p>Large number of career information’s, interviews with people who are passionate about their work will open your eyes to what a career can truly be.

                        </p>
                        <h4>Dream bigger and explore:
                        </h4>
                        <p>From a new place of possibility, use our personalized career exploration tools to explore your interests and get connected to careers you may not have considered.

                        </p>
                        <h4>Define your own road forward :
                        </h4>
                        <p>Through our expert guided experiences, find your most suited career and move forward with confidence, with the help of our expert mentor.

                        </p>
                        <button>Know Your Best Field</button>
                    </div>
                </div>
            </div>
          </div>
        </section>

        <footer>
          <div class="container">
            <div class="footer-sec">
                <div class="row">
                    <div class="col-md-6">
                        <div class="footer-lr-sec">
                            <img src="{{asset("front/img/vector-logooo-white-768x178.png")}}" alt="">
                            <h4>We give you the confidence and tools to find a career that matters to you.</h4>

                            <div class="footer-icon">
                                <i class="fa fa-facebook"></i>
                                <i class="fa fa-twitter"></i>
                                <i class="fa fa-linkedin"></i>
                                <i class="fa fa-instagram"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="footer-rl-sec">
                            <h3>Subscribe Now
                            </h3>
                            <p>Don’t miss our future updates! Get Subscribed Today!

                            </p>
                            <div class="row">
                                <div class="col-md-11">
                                    <input type="email" name="email" class="form-control input-field " placeholder="Your mail here" required="">

                                </div>
                                <div class="col-md-1">
                                    <button class="footer-send"><i class="fa fa-envelope-open-o" aria-hidden="true"></i></button>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <h1>@Copyrights Reserved | Career vector</h1>
          </div>
        </footer>
        @endsection
    </x-guest-layout>

