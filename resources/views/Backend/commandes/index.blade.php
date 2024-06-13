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
                    <h4 class="mb-sm-0">Commande List</h4>
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
                    <!-- foreach -->
                    <table class="table table-bordered table-md v_center">
               <tbody>
                   <tr>
                        <th>Name</th>
                       <th>date</th>
                       <th>heure</th>
                       <th>Action</th>
                   </tr>
                   @foreach ($commandes as $fam)
                   <tr>
                       <td>
                        
                        {{$fam->user->name}}</td>

                       <td>{{$fam->date}}</td>
                       <td>{{$fam->heure}}</td>


                       <td>
                           <a href="{{ route('commandes.show',  $fam->id) }}" class="text-info">detail</a>
                       </td>
                   </tr>
                   @endforeach
               </tbody>
           </table>
                </div><!-- end row -->
            </div>
            </div>
        </div>
    </div>
</div>

