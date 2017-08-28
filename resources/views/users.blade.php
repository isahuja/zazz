@extends('default')

@section('content')
<style>
	nav{background:#f05f40!important;}
	#main{min-height: 500px;}
	center{margin:150px auto 40px; max-width:1000px;}
	nav li{display: none;}
	table tr{    border: solid 1px #ccc;}
	table tr td{padding:10px; 
    word-break: break-all;     border: solid 1px #ccc;}

    table tr th{padding:10px;     border: solid 1px #ccc;}
</style>

<center>

    <table style="width:100%">
        <tr>
            <th>Name</th>
            <th>Email</th> 
            <th>Category</th> 
            <th>Message</th>
            <th>ID </th>
        </tr>
        @foreach($users as $row)
        <tr>
            <td>{{ $row->name }}</td>
            <td>{{ $row->email }}</td> 
            <td>{{ $row->category }}</td> 
            <td>{{ $row->query }}</td>
            <td><a href=""><i class="fa fa-2x fa-cloud-download" aria-hidden="true"></i></a></td>
        </tr>
        @endforeach
    </table>
</center>
@stop