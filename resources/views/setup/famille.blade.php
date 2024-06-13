@extends("home")
@section('departement')
<div style="display: flex;margin-left:85px">
    @foreach ($familles as $famille)
    <div style="padding:8px; width:24%">
        <img src="{{ asset('../assets/auth/images/famille/' . $famille->image) }}" alt="photo">
        <span style="font-weight: bold;margin-top: 8px;display: block;text-align: center;">{{$famille->libelle}}</span>
    </div>
</div>
@endsection