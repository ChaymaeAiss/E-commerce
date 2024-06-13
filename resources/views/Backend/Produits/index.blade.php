@extends('layouts.auth')
@section('title','Produit')
@section('content')
<!-- start page title -->
<div class="content text-center">
    <div class="page-content">
        <div class="row">
            <div class="col-2"></div>
            <div class="col-9">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Produit List</h4>
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
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif  
                <div class="d-grid gap-2 d-md-flex justify-content-md-end" style="padding-bottom: 15px;">
                    <a  class="btn btn-outline-info btn-lg me-md-2" href="{{route('BackProduit.create')}}" 
                    role="button">Add New <i class="dripicons-plus"></i></a>
                </div>
                <div class="col-1"></div>
            <div class="container-fluid">
                <div class="row">
                    <!-- foreach -->
                    @foreach($produits as $produit)
                    <div class="col-md-6 col-xl-3">
                        <div class="card">
                            <img class="card-img-top img-fluid" src="{{ asset('assets/auth/images/produit/' . $produit->image) }}" alt="{{$produit -> libelle}}" width="270" height="270">
                         <form id="delete-form-{{$produit->id}}" action="{{route('BackProduit.destroy', $produit->id)}}" method="POST">
                            <a href="{{ route('produits.show',  $produit->id) }}" class="btn btn-outline-secondary">Show <i class="mdi mdi-eye"></i> </a>
                            <div class="card-body">
                                <h3 class="card-title">{{$produit -> designation}}</h3>
                                <p class="card-text">{{$produit -> description}}</p>
                            </div>
                            <div class="row">
                                <h5 class="col-8 ">CD:{{$produit -> codebarre}}</h5>
                                <h4 class=" col-4" style="color: gray;">${{$produit -> prix_ht}}</h4>
                            </div>
                            <div class="card-body">
                                <a href="{{route('BackProduit.edit', $produit->id)}}" class="btn btn-primary"><i class="mdi mdi-circle-edit-outline"></i>  Update</a>
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" type="submit">
                                    <i class="mdi mdi-delete-outline"></i> Delete 
                                </button>
                            </div>
                         </form>
                        </div>
                    </div>
                    @endforeach
                    <!-- end foreach -->
                </div><!-- end row -->
            </div>
            </div>
        </div>
    </div>
</div>

