
<style>
.styled-table {
    border-collapse: collapse;
    margin: 25px 0;
    font-size: 0.9em;
    font-family: sans-serif;
    min-width: 400px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
}

</style>

<table border="1" class="styled-table">

	<tr>    
	        <th>Date</th>
	        <th>Country</th>
		<th>Total Visit</th>
	
	</tr>
@foreach ($visitors as $row)
<tr>
<td>{{$row->visitdate}}</td>
<td>{{$row->country}}</td>
<td align="center">{{$row->total_visit}}</td>

</tr>   
@endforeach
</table>
