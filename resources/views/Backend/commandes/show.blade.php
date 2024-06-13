@extends('layouts.auth')
@section('title','Commande')
@section('content')
<!-- start page title -->
<div class="content text-center">
    <div class="page-content">
        <div class="row">
            <div class="col-2"></div>
            <div class="col-9">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Commande detail</h4>
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">GracefulGoods</a></li>
                            <li class="breadcrumb-item active">Commande</li>
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
                <div class="col-1"></div>
            <div class="container-fluid">
                <div class="row">
                <table class="table table-bordered table-md v_center">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Produit</th>
                        <th>Quantité</th>
                        <th>Prix HT</th>
                        <th>TVA</th>
                    </tr>
                </thead>
                <tbody>
                    @if ($commande->details)
                        @foreach ($commande->details as $detail)
                        <tr>
                            <td>{{ $detail->id }}</td>
                            <td>{{ $detail->produit->designation }}</td>
                            <td>{{ $detail->quantite }}</td>
                            <td>{{ $detail->prix_ht }}</td>
                            <td>{{ $detail->tva }}</td>
                        </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="6">Aucun détail de commande disponible.</td>
                        </tr>
                    @endif
                </tbody>
            </table>
                </div><!-- end row -->
            </div>
            </div>
        </div>
    </div>
</div>

