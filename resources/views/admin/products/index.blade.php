@extends('layouts.app')

@section('content')

<div class="container">
<div class="row justify-content-center">
<div class="col-md-4">
@include('layouts.sidebar')
</div>
<div class="col-md-8">
<a
                href="{{ route("products.create") }}"
                class="btn btn-primary my-2">
               Add new product 
                    <i class="fa fa-plus"> </i>
            </a>
            <a
                href="{{ route("admins.create") }}"
                class="btn btn-primary my-2">
                Add new Admin
                    <i class="fa fa-plus"></i>
            </a>
<table class="table table-hover">
<thead>
<tr>
<th>Id</th>
<th>Titre</th>
<th>Description</th>
<th>inStock</th>
<th>Prix</th>
<th>Disponible</th>
<th>Image</th>
<th>Catégorie</th>
<th>Actions</th>
<th></th>
</tr>
</thead>
<tbody>
@foreach ($products as $product)
<tr>
<td>{{ $product->id }}</td>
<td>{{ $product->title}}</td>
<td>{{ Str::limit($product->description,50) }}</td>
<td>{{ $product->inStock }} </td>
<td>{{ $product->price }} DH</td>
<td> <img src="{{asset($product->image)}}"
alt="{{$product->title}}" 
width="70"
height="50"
class="img-fluid rounded">
</td>
<td>
@if($product->inStock >0 )
<i class="fa fa-check text-success"></i>
@else
<i class="fa fa-times text-danger"></i>
@endif
</td>
<td>
{{ $product->category->title }} 
</td>
<td class="d-flex flex-row justify-content-center align-items-center">
<a
                href="{{ route("products.edit", $product->slug) }}"
                class="btn byn-sm btn-warning my-2">
                    <i class="fa fa-edit"></i>
            </a>
<form id="{{ $product->id }}" method="POST" action="{{ route("products.destroy",$product->slug) }}">
                                    @csrf
                                    @method("DELETE")
                                    <button
                                    onclick="event.preventDefault();
                                       if(confirm('Do you really want to delete {{ $product->title  }} ?'))
                                        document.getElementById({{ $product->id }}).submit();
                                    "
                                    class="btn btn-sm btn-danger">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                </form>
</td>
</td>
</tr>
@endforeach
</tbody>
</table>
 


 
<hr>
<div class="justify-content-center d-flex">
{{ $products }}
</div>
</div>
</div>
</div>
@endsection
