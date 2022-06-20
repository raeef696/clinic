@extends('admin.layout')
@section('content')



<div class="card-body table-responsive p-0">
 <table class="table table-hover text-nowrap" id="myTable">
<thead>
<tr>
<th>ID</th>
<th> الاسم</th>
<th>البريد الالكتروني</th>
<th> رقم الجوال</th>
<th> رسالتك</th>


  


</tr>
</thead>
<tbody>
@foreach($bookeds as $index=> $booked)
<tr>
<td>{{++$index}}</td>
<td>{{$booked->name}} </td>
<td>{{$booked->email}} </td>
<td>{{$booked->phone}} </td>
<td>{{$booked->message}} </td>






<td>
<form style="display: inline-block;" action="{{route('booked.destroy',$booked->id)}}" method="POST">
  @csrf
  @method('delete')
       <button type="submit" class="btn btn-danger">
       <i class="fa fa-btn fa-trash"></i>حذف
 </button>
</form>
 </td>
 </tr>
</tbody>
@endforeach
</table>
</div>

@endsection
