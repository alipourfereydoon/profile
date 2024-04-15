@extends('layouts.master')

@section('content')
{{--  {{ dd(request()->path()) }}  --}}
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left m-3">
                <h2>دریافت اطلاعات </h2>
            </div>
            <div class="pull-right d-flex m-2">
                <a class="btn btn-success" href="{{route('create') }}"> پست جدید </a>
            </div>
        </div>
    </div>

    @if($message = Session::get('success'))
      <div class="alert alert-success">
        <p>
          {{ $message }}
        </p>
      </div>
    @endif


    <table class="table table-bordered">
        <tr>
            <th>شناسه</th>
            <th>نام </th>
            <th>ایمیل</th>
            <th>پسورد </th>
            <th>عملیات</th>
        </tr>

        @foreach ($user as $users)
        <tr>
            <td>{{$users['id']}}</td>
            <td>{{$users['name']}}</td>
            <td>{{$users['email']}}</td>
            <td>{{$users['password']}}</td>
            <td style="width: 250px" class="pt-4 pr-4">

                <form action="{{route('profile',$users->id)}}" method="post">
                    <a class="btn btn-danger" href="{{route('show',$users->id)}}">نمایش</a>
                    <a class="btn btn-danger" href="{{route('edit',$users->id)}}">ویرایش</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">حذف</button>
                </form>

            </td>
        </tr>
        @endforeach
    </table>

    @endsection



