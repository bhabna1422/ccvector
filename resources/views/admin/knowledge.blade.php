@extends('admin.layouts.admin_main')
{{-- @section('page-title-contnet')
    <title>Admin - Homepage WriteForLife</title>
@endsection --}}
@section('content-conatiner')
<div class="main-container">
<div class="pd-20 card-box mb-30">
    <div class="clearfix">
        <div class="pull-left">
            <h4 class="text-blue h4">Add knowledge</h4>
        </div>

    </div>
    @if(session()->has('statusupdate'))
    <div class="alert alert-success">
        {{ session()->get('statusupdate') }}
    </div>
    @endif
    <form method="post" action="{{url('admin/save-knowledge')}}">
        {{ csrf_field() }}
        <div class="form-group">
            <label>Add Name</label>
            <input class="form-control" type="text"  name="name" />
        </div>
        <div class="form-group">
            <label>Slug</label>
            <input class="form-control" type="text" name="slug"  />
        </div>
        <div class="form-group">
            <label>Description</label>
            <textarea name="description" class="form-control" id="" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-primary btn-sm">Submit</button>
    </form>
</div>

<div class="card-box mb-30">
    <div class="pd-20">
        <h4 class="text-blue h4">List Of Knowledge</h4>

    </div>
    <div class="pb-20">
        <table class="data-table table stripe hover nowrap">
            <thead>
                <tr>
                    <th class="table-plus datatable-nosort">Name</th>
                    <th>Slug</th>
                    <th>Description</th>

                    <th class="datatable-nosort">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($knowledges as $knowledge)

                <tr>
                    <td class="table-plus">{{$knowledge->name}}</td>
                    <td>{{$knowledge->slug}}</td>
                    <td> {{ Str::limit($knowledge->description,200)}}</td>

                    <td>
                        <div class="dropdown">
                            <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle"
                                href="#" role="button" data-toggle="dropdown">
                                <i class="dw dw-more"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                                <a class="dropdown-item" href="#"><i class="dw dw-eye"></i> View</a>
                                <a class="dropdown-item" href="#"><i class="dw dw-edit2"></i> Edit</a>
                                <a class="dropdown-item" href="#"><i class="dw dw-delete-3"></i>
                                    Delete</a>
                            </div>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
</div>
@endsection
