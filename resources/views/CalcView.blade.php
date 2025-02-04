<h2>Calculator</h2>
<hr>
<table border="1" cellpadding="10" cellspacing="0">

@for($c=$sn;$c<=$en;$c++)
<tr>
    <td>{{$tn}}</td>
    <td>{{$c}}</td>
    <td>=</td>
    <td>{{$tn*$c}}</td>
</tr>
@endfor
</table>