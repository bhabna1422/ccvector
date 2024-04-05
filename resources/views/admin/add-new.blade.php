@extends('admin.layouts.admin_main')
@section('title')
    <title>Admin -Add Career</title>
@endsection
@section('content-conatiner')
<div class="main-container">
<div class="pd-20 card-box mb-30">
    <div class="clearfix">
        <div class="pull-left">
            <h4 class="text-blue h4">Add Career</h4>
        </div>

    </div>
    <form>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label>Title</label>
                    <input class="form-control" type="text" name="title" />
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <label>Slug</label>
                    <input class="form-control" type="text" name="slug" />
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <label>Upload Image</label>
                    <input type="file" name="upload_img" id="">
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <label>Description</label>
                    <input class="form-control" type="text" name="description" />
                </div>
            </div>
            <div class="col-md-12">
                <h5>Career Updates</h5>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label>Future Trend</label>
                    <select  class="form-control" >
                        <option selected>Choose</option>
                        @foreach ($futures as $future)
                          <option value="{{$future->name}}" name="future_trend">{{$future->name}}</option>
                        @endforeach
                        {{-- <option value="High Growth">High Growth</option>
                        <option value="Evolving">Evolving</option>
                        <option value="Fast Changing -need adoption of new tech etc.">Fast Changing -need adoption of new tech etc.</option>
                        <option value="Going down">Going down</option>
                        <option value="Evergreen">Evergreen</option>
                        <option value="Changing pattern of Job/Course">Changing pattern of Job/Course</option>
                        <option value="Highly affected by Technology">Highly affected by Technology</option>
                        <option value="Less impact of technology">Less impact of technology</option> --}}
                    </select>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label>Impact of Technology</label>
                    <select class="form-control" >
                        <option value="VERY HIGH" name="impact_technology">VERY HIGH</option>
                        <option value="HIGH" name="impact_technology">HIGH</option>
                        <option value="MODERATE" name="impact_technology">MODERATE</option>
                        <option value="LOW" name="impact_technology">LOW</option>
                    </select>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label>Type of career</label>
                    <input class="form-control" name="type_of_career" type="text" placeholder="Type of career"  />
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <label>Level of Preparation</label>
                    <select  class="form-control">
                        <option value="Very High" name="preparation">Very High</option>
                        <option value="High" name="preparation">High</option>
                        <option value="Moderate" name="preparation">Moderate</option>
                        <option value="Low" name="preparation">Low</option>
                    </select>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label>Initial Salary</label>
                    <input class="form-control" name="initial_salary" type="text" placeholder="Type of career"  />
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label>Level of skills required</label>
                    <select class="form-control" >
                        <option value="VERY HIGH" name="skills_req">VERY HIGH</option>
                        <option value="HIGH" name="skills_req">HIGH</option>
                        <option value="MODERATE" name="skills_req">MODERATE</option>
                        <option value="LOW" name="skills_req">LOW</option>
                    </select>
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <label>Course Duration</label>
                    <input class="form-control" name="course_duration" type="text" placeholder="Course Duration"  />
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label>Course Fee</label>
                    <input class="form-control" name="course_fee" type="text" placeholder="Course Fee"  />
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label>Stream</label>
                    <select class="form-control" >
                        <option selected>Choose</option>
                        @foreach ($streams as $stream)
                          <option value="{{$stream->name}}" name="stream">{{$stream->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <label>Course Level</label>
                    <input class="form-control" name="course_level" type="text" placeholder="Course Level"  />
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label>Minimun Qualifictaion</label>
                    <input class="form-control" name="min_qualification" type="text" placeholder="Minimun Qualifictaion"  />
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label>Abrode demand</label>
                    <select class="form-control" >
                        <option value="VERY HIGH" name="demand">VERY HIGH</option>
                        <option value="HIGH" name="demand">HIGH</option>
                        <option value="MODERATE" name="demand">MODERATE</option>
                        <option value="LOW" name="demand">LOW</option>
                    </select>
                </div>
            </div>


            <div class="col-md-4">
                <div class="form-group">
                    <label>Raise Code</label>
                    <input class="form-control" type="number" name="raise_code" />
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label>Education Level</label>
                    @foreach ($educations as $education)
                    <div class="col-md-12">
                        <input type="checkbox" name="education_level" id="">{{$education->name}}
                    </div>
                    @endforeach

                </div>
            </div>
            {{-- <div class="col-md-4">
                <div class="form-group">
                    <label>Stream</label>
                    @foreach ($streams as $stream)
                    <div class="col-md-12">
                        <input type="checkbox" name="" id="">{{$stream->name}}
                    </div>

                    @endforeach

                </div>
            </div> --}}

            <div class="col-md-4">
                <div class="form-group">
                    <label>Mode of education</label>
                    @foreach ($modes as $mode)
                    <div class="col-md-12">
                        <input type="checkbox" name="mode_education" id="">{{$mode->name}}
                    </div>

                    @endforeach


                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label>Future trends</label>
                    @foreach ($futures as $future)
                    <div class="col-md-12">
                        <input type="checkbox" name="future_trends" id="">{{$future->name}}
                    </div>

                    @endforeach
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label>Abilities</label>
                    @foreach ($abilities as $ability)
                    <div class="col-md-12">
                        <input type="checkbox" name="abilities" id="">{{$ability->name}}
                    </div>

                    @endforeach
                </div>
            </div>

            <div class="col-md-12">
                <h6>Introduction</h6>
                <div id="editor" name="introduction"></div>
            </div>
            <div class="col-md-12">
                <h6>Different Parameter for Admission</h6>
                <div id="editor1" name="admission"></div>
            </div>
            <div class="col-md-12">
                <h6>Different entry path</h6>
                <div id="editor2" name="entry_path"></div>
            </div>
            <div class="col-md-12">
                <h6>available courses</h6>
                <div id="editor3" name="avail_course"></div>
            </div>
            <div class="col-md-12">
                <h6>Outcome</h6>
                <div id="editor4" name="outcome"></div>
            </div>
            <div class="col-md-12">
                <h6>World of work</h6>
                <div id="editor5" name="world_of_work"></div>
            </div>
            <div class="col-md-12">
                <h6>Personal attributes</h6>
                <div id="editor6" name="personal_attri"></div>
            </div>
            <div class="col-md-12">
                <h6>Physiological factors</h6>
                <div id="editor7" name="phy_fact"></div>
            </div>
            <div class="col-md-12">
                <h6>TOP institutes</h6>
                <div id="editor8" name="top_institutes"></div>
            </div>

        </div>
        {{-- <div class="form-group">
            <label>Add Name</label>
            <input class="form-control" type="text"  />
        </div>
        <div class="form-group">
            <label>Slug</label>
            <input class="form-control" type="text"  />
        </div>
        <div class="form-group">
            <label>Description</label>
            <textarea name="" class="form-control" id="" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-primary btn-sm">Submit</button> --}}
        <button type="submit" class="btn btn-primary btn-sm">Submit</button>
    </form>
</div>
</div>
@endsection
