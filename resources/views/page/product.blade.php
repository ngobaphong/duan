@extends('layout')
@section('content')
<h2 class="admin">Admin Product</h2>

<div class="my-5 px-5">
  <a href="{{route('admin.addproduct')}}" class="btn btn-primary">Thêm sản phẩm</a>

<table class="table table-primary table-striped my-3 text-center">
    <thead>
      <tr>
        <th scope="col">STT</th>
        <th scope="col">Tên sản phẩm</th>
        <th scope="col">Hình ảnh</th>
        <th scope="col">Giá</th>
        <th scope="col">Mô tả</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
        @php
            $i = 1;
        @endphp
        @foreach ($data as $item)

          <tr>
            <th scope="row">{{$i++}}</th>

            <td><a class="fw-bold text-danger" href="{{route('product.detail', $item->id)}}">{{$item->name}}</a></td>


            <td><img src="{{$item->image}}" class="img-fluid img-thumbnail" style="width: 100px; height: auto;" alt=""></td>
            <td>{{$item->price}}</td>
            <td>{{$item->description}}</td>
            <td>
                <a href="{{route('admin.editproduct', $item->id)}}" class="btn btn-primary">Sửa</a>
                <a href="{{ route('admin.deleteProduct', $item->id) }}" method="get" class="btn btn-primary"><button type="submit" onclick="return confirm('Bạn có chắc chắn muốn xóa sản phẩm này?')">Xóa</button></a>
            </td>
          </tr>
        @endforeach


    </tbody>
  </table>
</div>
@endsection
