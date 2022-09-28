@extends('layout')
@section('content')
<div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                <div class="flex justify-center">
                <h1>computers page</h1>
                </div>

                <div class="mt-8">
                  @if (count($computers)>0)
                  <ul>
                     @foreach ($computers as $computer)
                        <li> {{print_r($computer['name'])}}  this is from <strong>{{print_r($computer['origin'])}}</strong> </li>
                     @endforeach
                    </ul>
                    @else 
                    {{"there is no cpmputer to show"}}
                  @endif
                  
                </div>

   </div>

@endsection
@section('title','computers');