@extends('admin.master')
@section('title', 'Moonstore')
@section('content')

<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Danh sách đơn hàng</h1>          
    </div>
    <div class="row">
        <div class="col-xl-12 col-md-12 mb-4">
            <div class="card shadow h-100 py-2">
                <div class="card-body">	
				<table class="table table-striped">
				  <thead>
					<tr>
					  <th scope="col">STT</th>
					  <th scope="col">Tên khách hàng</th>
					  <th scope="col">Số điện thoại</th>
					  <th scope="col">Địa chỉ giao hàng</th>
					  <th scope="col">Ghi chú</th>
					  <th scope="col">Trạng thái</th>
                      <th scope="col">Thời gian đặt</th>
					</tr>
				  </thead>
				  <tbody>
					@foreach ($bill as $item)
						<tr>
							<td scope="row">{{$loop->iteration}}</td>
							<td>{{$item->fullname}}</td>
							<td>{{$item->phone}}</td>
							<td>{{$item->address}}</td>
							<td>{{$item->note}}</td>
							<td>{{$item->status}}</td>
							<td>{{\Carbon\Carbon::parse($item->created_at)->format('H:i d/m/Y ')}}</td>
							<td>
								<a class="btn-order" 
									href="/admin-edit-order/{{$item->id}}">
									Sửa thông tin
								</a><br>
								<a class="btn-order" 
									href="/admin-delete-order/{{$item->id}}">
									Xóa đơn hàng
								</a><br>
								<a class="btn-order" 
									href="/admin-detail-order/{{$item->id}}">
									Xem chi tiết
								</a><br>
								<a class="btn-order" 
									href="/admin-confirm-deliver/{{$item->id}}">
									Xác nhận
								</a>
							</td>
						</tr>
					@endforeach		
				  </tbody>
				</table>							
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection