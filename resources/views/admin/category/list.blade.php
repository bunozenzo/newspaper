@extends('layouts.admin')
@section('title', 'Quản lý danh mục')
@section('action', 'Category list')
@section('content')
  <div class="col-xs-12 col-sm-12 col-md-12 category">
    <table class="table table-striped table-bordered table-hover table-responsive">
      <thead>
      <tr>
        <td>STT</td>
        <td>Tiêu Đề</td>
        <td>Nội Dung</td>
        <td>Ngày Tạo</td>
        <td>Trạng Thái</td>
        <td>Xóa</td>
        <td>Sửa</td>
      </tr>
      </thead>
      <tbody>
      <?php $stt= 1?> <!--stt = 1 và tự tăng thay vì lấy id -->
      @foreach($categories as $item) <!--lấy ra name, thông tin , ngày tạo và active -->
      <tr>
        <td><?php echo $stt++ ?></td>
        <td>{{ $item->name}}</td>
        <td>{{ $item->description}}</td>
        <td>{{ $item->created_at}}</td>
        <td>{{ $item->active}}</td>
        {{--<td><a href="{{ route('category.delete', $item->id)}}" class="btn btn-info">Delete</a></td>--}}
        {{--<td><a href="{{ route('category.edit', $item->id)}}" class="btn btn-danger">Edit</a></td>--}}
      </tr>
      @endforeach
      </tbody>
    </table>
  </div>
@endsection