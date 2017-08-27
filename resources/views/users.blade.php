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
<!-- {{ $users }} -->

<table style="width:100%">
  <tr>
    <th>Firstname</th>
    <th>Lastname</th> 
    <th>Category</th> 
    <th>Message</th>
    <th>ID </th>
  </tr>
  <tr>
    <td>dfgnegleqfgneg</td>
    <td>wghkwjlr@jdhgfkrw.com</td> 
    <td>Desktop</td> 
    <td>dhfjkr wfglw dhfjk rwfglwd hfjkr wfglwdhfjkr wfglw dhfjk rwfglwd hfjkr wfglwdhfjkr wfglw dhfjk rwfglwd hfjkr wfglw</td>
    <td><a href=""><i class="fa fa-2x fa-cloud-download" aria-hidden="true"></i></a></td>
  </tr>

</table>
	
</center>
@stop