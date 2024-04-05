<nav class="navbar navbar-expand-lg navbar-fixed-top" style="background-color: #27303E">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{url("/")}}"><img src="{{asset("front/img/vector-logooo12.png")}}" alt=""></a>
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
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> What We Do </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <li><a class="dropdown-item" href="{{url("/guidence-solution-for-schools")}}">For Schools</a></li>
                <li><a class="dropdown-item" href="{{url("/guidence-solution-college-students")}}">College Students</a></li>
                <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">For Students</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{url("/subject-selection")}}">Subject Selection</a></li>
                        <li><a class="dropdown-item" href="{{url("/stream-selection-and-admission-planning")}}">Stream selection and <br>admission planning</a></li>
                        <li><a class="dropdown-item" href="{{url("/lakshya")}}">Lakshya</a></li>
                        <li><a class="dropdown-item" href="{{url("/ranniti")}}">Ranniti</a></li>
                        <li><a class="dropdown-item" href="{{url("/personalized-support")}}">Personalized Support</a></li>
                    </ul>
                </li>
            </ul>
        </li>
          {{-- <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              What We Do
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item" href="{{url("/guidence-solution-for-schools")}}">For Schools</a></li>
              <li><a class="dropdown-item" href="{{url("/guidence-solution-college-students")}}">College Students</a></li>
              <li><a class="dropdown-item" href="#">For Students</a></li>
            </ul>
          </li> --}}
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
