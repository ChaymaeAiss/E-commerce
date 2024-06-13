@extends('layouts.auth')
@section('title','Add Produit')
@section('content')
<!-- start page title -->
<div class="content text-center">
    <div class="page-content">
        <div class="row">
            <div class="col-2"></div>
            <div class="col-9">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Add Produit</h4>
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">GracefulGoods</a></li>
                            <li class="breadcrumb-item active">Produit</li>
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
    <form action="{{route('BackProduit.store')}}" method="Post">   
                <div class="d-grid gap-2 d-md-flex justify-content-md-end" style="padding-bottom: 15px;">
                    <button type="submit" class="btn btn-outline-dark btn-lg me-md-2">Save <i class="dripicons-checkmark"></i></button>
                    <a  class="btn btn-outline-danger btn-lg me-md-2" href="{{route('BackProduit.index')}}" 
                    role="button">Back <i class="dripicons-chevron-right"></i></a>
                </div>
                <div class="col-1"></div>
            </div>
        </div>
     <!-- Card here -->
        <div class="container">
            <div class="card">
                <div class="card-body">
                    <form>
                    @csrf
                        <div class="row">
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="designation" class="form-label">Designation</label>
                                    <input type="text" class="form-control" placeholder="Designation" id="designation" name="designation">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label class="form-label" for="image">Image</label>
                                    <input type="file" class="form-control" placeholder="image de Produit" id="image" name="image">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label class="form-label" for="description">Desctiption</label>
                                    <textarea class="form-control" placeholder="Description de Produit" id="description" name="description"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="sous_famille_id" class="form-label">Sous Famille</label>
                                    <select class="form-select" id="sous_famille_id" name="sous_famille_id">
                                        <option selected disabled >Choose Sous Famille...</option>
                                        @foreach($sousfamilles as $sousfamille)
                                            <option value="{{ $sousfamille->id }}">{{$sousfamille -> libelle}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="marque_id" class="form-label">Marque</label>
                                    <select class="form-select" id="marque_id" name="marque_id">
                                        <option selected disabled>Choose marque...</option>
                                        <@foreach($marques as $marque)
                                            <option value="{{ $marque->id }}">{{$marque -> marque}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="unite_id" class="form-label">Unite</label>
                                    <select class="form-select" id="unite_id" name="unite_id">
                                        <option selected disabled>Choose unite...</option>
                                        @foreach($unites as $unite)
                                            <option value="{{ $unite->id }}">{{$unite -> unite}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="codebarre" class="form-label">Codebarre</label>
                                    <input type="number" class="form-control" placeholder="Codebarre" id="codebarre" name="codebarre">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="prix_ht" class="form-label">Prix_ht</label>
                                    <input type="number" class="form-control" placeholder="Prix_ht" id="prix_ht" name="prix_ht">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="tva" class="form-label">TVA</label>
                                    <input type="text" class="form-control" placeholder="Tva" id="tva" name="tva">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </form>
    <!-- end Card -->
    </div>
</div>