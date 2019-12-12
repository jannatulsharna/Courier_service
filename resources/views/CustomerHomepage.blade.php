@extends('layouts/customer')
@section('body')
	<table height="250px" width="1100px" border="1px solid black" cellpadding="0" cellspacing="0">
	<tr>
		<td height="100%" width="60%">
			<img height="100%" width="100%" src="{{ asset('Image/home_parcel.jpg') }}" >
		</td>
		<td height="100%" width="40%" bgcolor="lightgray">
			<h1 style="color: orange;">You can request here for parcel send.</h1>
			<center><a href="/request">Request</a></center>
		</td>
	</tr>
</table>
<br>
<table height="250px" width="1100px" border="1px solid black" cellpadding="0" cellspacing="0">
	<tr>
		<td height="100%" width="40%" bgcolor="lightgray">
			<h1 style="color: orange;" >You can see our available branch.</h1>
			<center><a href="/branch">See
			</a></center>
		</td>
		<td height="100%" width="60%">
			<img height="100%" width="100%" src="{{ asset('Image/home_parcel2.jpg') }}" >
		</td>
		
	</tr>
</table>

@endsection