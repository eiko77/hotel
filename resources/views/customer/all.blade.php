@extends('layouts.hotelapp')
@section('title','Customer.all')

@section('menubar')

</div>
@parent
お客様リスト
@endsection



{{--管理者としてデータ取得 error  
    https://laraweb.net/knowledge/268/
    Method App\Http\Controllers\CustomerController::all does not exist.--}}

@section('content')
<p>{{$message}}</p>
 
<ul class="list-unstyled">
  {{-- $dataから順に値を取り出して$valに代入します。 --}}
  @foreach ($data as $val) 
 
    {{-- $valの値を使い、その中にある各項目の値を表示します。--}}
    echo "<li>".$val->name."</li>";
  @endforeach
</ul>

@endsection

@section('footer')
copyright 2023　NakagaWorld
@endsection