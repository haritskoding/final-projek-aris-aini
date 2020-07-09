@extends('layouts.app')

@section('content')
<div class="row">
    @foreach ($questions as $item)
        <div class="col-3 mt-2" style="border:none">
            <div class="card" >
                <div class="card head border-bottom-0"  style="padding:10px">
                   <h3> {{$item->title}}</h3>
                </div>
                <div class="card body" style="padding:14px; text-align:left">
                    {!! substr($item->body,0 , 100) !!}
                </div>
                <div class="card footer border-top-0"  style="padding:5px">
                 <small style="text-align:left"><strong>tag:</strong>{{$item->tag}}</small>
                    <div class="date" style="text-align:left"><i class="fa fa-clock"></i>&nbsp;&nbsp;&nbsp;{{$item->created_at}}</div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <div class="mt-3">{{$questions->links()}}</div>
@endsection