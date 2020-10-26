@extends('home')
@section('content')
        <table style="width:100%">
            @foreach($employees as $employee)
{{--            <a href="{{route('$employee.edit',$employee->id)}}" class="text-sm text-gray-700 underline" style="--}}
{{--    float: left;--}}
{{--    box-shadow:inset 0px 1px 3px 0px #91b8b3;--}}
{{--	background:linear-gradient(to bottom, #768d87 5%, #6c7c7c 100%);--}}
{{--	background-color:#768d87;--}}
{{--	border-radius:5px;--}}
{{--	border:1px solid #566963;--}}
{{--	display:inline-block;--}}
{{--	margin-left: 31px;--}}
{{--	cursor:pointer;--}}
{{--	color:#ffffff;--}}
{{--	font-family:Arial;--}}
{{--	font-size:11px;--}}
{{--	font-weight:bold;--}}
{{--	padding:0 20px;--}}
{{--	text-decoration:none;--}}
{{--	text-shadow:0px -1px 0px #2b665e;">Edit</a>--}}
            <tr>
                <th>Name: {{$employee->name}}</th>
                <th>Surname: {{$employee->surname}}</th>
                <th>Position: {{$employee->position}}</th>
                <th>Phone: {{$employee->phone}}</th>
                <th>Is_hired: {{$employee->is_hired}}</th>
            </tr>
            @endforeach
        </table>

        {{--    <div class="ml-12">--}}
{{--        <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm" style="float: left">--}}
{{--            <p>Name: {{$employee->name}}</p>--}}
{{--            <p>Surname: {{$employee->surname}}</p>--}}
{{--            <p>Position: {{$employee->position}}</p>--}}
{{--            <p>Phone: {{$employee->phone}}</p>--}}
{{--            <p>Is_hired: {{$employee->is_hired}}</p>--}}
{{--        </div>--}}
{{--    </div>--}}

@endsection
