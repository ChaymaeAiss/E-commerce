@extends('layouts.auth')
@section('title','Marque')
@section('content')
<!-- start page title -->
<div class="content text-center">
<div class="page-content">
<div class="row">
    <div class="col-2"></div>
    <div class="col-9">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0">Marque List</h4>
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">GracefulGoods</a></li>
                    <li class="breadcrumb-item active">Marque</li>
                </ol>
            </div>
        </div>
    </div>
    <div class="col-1"></div>
</div>
<!-- end page title -->
<div class="row">
<div class="col-2"></div>
    <div class="col-9">   
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif    
    <div>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <a  class="btn btn-outline-info btn-lg me-md-2" href="{{route('BackMarque.create')}}" role="button"
            data-bs-toggle="modal" data-bs-target="#staticBackdrop">Add New <i class="dripicons-plus"></i></a>
        </div>
        <form action="{{route('BackMarque.store')}}" method="POST">
            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">Add Marque</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        @csrf
                        <div class="modal-body">
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="marque">Marque :</label>
                                <div class="col-sm-10">
                                    <input class="form-control form-control-sm" type="text" id="marque" placeholder="Marque name" name="marque"/>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-light waves-effect" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary waves-effect waves-light">Save</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <br><br>
        <div class="card">   
            <div class="card-body">
            <div class="table-responsive">
                <table class="table table-editable table-nowrap align-middle table-edits">
                <thead>
                    <tr>
                        <th>Marque</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($marques as $marque)
                    <tr data-id="1">
                        <td data-field="marque">{{$marque -> marque}}</td>
                        <form id="delete-form-{{ $marque->id }}" action="{{ route('BackMarque.destroy', $marque->id) }}" method="POST" style="display: none;">
                            @csrf
                            @method('DELETE')
                            <td style="width: 100px">
                            <button class="btn btn-outline-danger btn-sm edit" type="submit">
                                <i class="mdi mdi-delete-outline"></i>
                            </button>
                            </td>
                        </form>
                    </tr>
                    @endforeach
                </tbody>
                </table>
                {{ $marques->links() }}
            </div>
            </div>
        </div>
    </div>
    <div class="col-1"></div> 
    <!-- end col -->
</div>
</div>
</div>
