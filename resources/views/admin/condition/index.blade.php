@extends('admin.layout')
@section('content')



<div class="card-body table-responsive p-0">
 <table class="table table-hover text-nowrap" id="myTable">
<thead>
<tr>
<th>ID</th>
<th> قبل</th>
<th>بعد</th>
<th> صورة</th>



<th>
<button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#exampleModal">
<i class="pe-7s-plus">إضافة</i>
</button>
</th>


</tr>
</thead>
<tbody>
@foreach($conditions as $index=> $condition)
<tr>
<td>{{++$index}}</td>
<td>{{$condition->before}} </td>
<td>{{$condition->distance}} </td>
<td>{{$condition->image}} </td>






<td>
<form style="display: inline-block;" action="{{route('condition.destroy',$condition->id)}}" method="POST">
  @csrf
  @method('delete')
       <button type="submit" class="btn btn-danger">
       <i class="fa fa-btn fa-trash"></i>حذف
 </button>
</form>
          <a href="{{route('condition.edit',$condition->id)}}" class="btn btn-info">
        <i class="fa fa-btn fa-edit"></i>تعديل
 </td>
 </tr>
</tbody>
@endforeach
</table>
</div>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">إضافة البيانات</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form method="post" action="{{route('condition.store')}}"  enctype="multipart/form-data" >
      @csrf 
    <div class="card-body">
    @if($errors->any())
    <div class="alert alert-danger alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
    <h5><i class="pe-7s-info"></i> خطأ!</h5>
    @foreach($errors->all() as $error)
    <li>{{$error}}</li>
    @endforeach
    </div>
    @endif

    @if(session()->has('message'))
    <div class="alert alert-success alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
    <h5><i class="pe-7s-check"></i> نجاح</h5>
    إضيفة البيانات بنجاح
    </div>
    @endif
    <div class="form-group">
        <label for="before">قبل : </label>
        <input type="text" class="form-control"  name="before">
      </div>
      <div class="form-group">
        <label for="distance">بعد : </label>
        <input type="text" class="form-control"  name="distance">
      </div>
      <div class="form-group">
        <label for="image">  صورة:</label>
        <input type="file" class="form-control" name="image" />
    </div>          
    <div class="card-footer">
    <button type="button" class="btn btn-secondary" data-dismiss="modal">رجوع</button>
      <button type="submit" class="btn btn-primary">إضافة</button>
    </div>
  </form>
    </div>
  </div>
</div>
@endsection
