@extends('layouts.auth')
@section('title','Sous Famille')
@section('content')
<!-- start page title -->
<div class="content text-center">
<div class="page-content">
<div class="row">
    <div class="col-2"></div>
    <div class="col-9">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0">Sous Famille List</h4>
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">GracefulGoods</a></li>
                    <li class="breadcrumb-item active">Sous Famille</li>
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
            <a  class="btn btn-outline-info btn-lg me-md-2" href="{{route('BackSousFamille.create')}}" role="button"
            data-bs-toggle="modal" data-bs-target="#staticBackdrop">Add New <i class="dripicons-plus"></i></a>
        </div>
        <form action="{{route('BackSousFamille.store')}}" method="POST">
            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">Add Sous Famille</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        @csrf
                        <div class="modal-body">
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="libelle">Libelle :</label>
                                <div class="col-sm-10">
                                    <input class="form-control form-control-sm" type="text" id="libelle" placeholder="Famille libelle" name="libelle"/>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="libelle">Famille :</label>
                                <div class="col-sm-10">
                                    <select class="form-control form-control-sm" id="famille_id"  name="famille_id">
                                        <option>Choose Famille</option>
                                        @foreach($familles as $famille)
                                            <option value="{{ $famille->id }}">{{$famille -> libelle}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="Image">Image :</label>
                                <div class="col-sm-10">
                                    <input class="form-control form-control-sm" type="file" id="image" name="image"/>
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
                        <th>Image</th>
                        <th>Libelle</th>
                        <th>Famille</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($sousfamilles as $sousfamille)
                    <tr data-id="1">
                        <td data-field="img"><img src="{{ asset('assets/auth/images/sousfamille/' . $sousfamille->image) }}" alt="{{$sousfamille -> libelle}}" class="rounded avatar-lg"></td>
                        <td data-field="libelle">{{$sousfamille -> libelle}}</td>
                        <td data-field="famille_id">
                            @php
                                $famille = App\Models\Famille::find($sousfamille->famille_id);
                            @endphp
                            {{ $famille ? $famille->libelle : 'No Famille' }}
                        </td>
                        <form id="delete-form-{{ $sousfamille->id }}" action="{{ route('BackSousFamille.destroy', $sousfamille->id) }}" method="POST" style="display: none;">
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
                {{ $sousfamilles->links() }}
            </div>
            </div>
        </div>
    </div>
    <div class="col-1"></div> 
    <!-- end col -->
</div>
</div>
</div>

