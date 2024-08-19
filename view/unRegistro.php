<style>
body{
    background-color: #fbede1;
    }
th {
    width: 8rem;
    text-align: left;
    border-bottom: 1px solid #FFC300;
    border-style:ridge;
    background-color: #DAF7A6 ;
}

td {
    width: 8rem;
}
</style>

<h3>Registro de un coche</h3>
<table>
    <tr>
	    <th>Registro</th>
        <th>Marca</th>
        <th>Modelo</th>
        <th>Color</th>
        <th>Propietario</th>
    </tr>
    <tr>
		<td><?php echo $row->registro ?></td>
        <td><?php echo $row->marca ?></td>
        <td><?php echo $row->modelo ?></td>
        <td><?php echo $row->color ?></td>
        <td><?php echo $row->propietario ?></td>
    </tr>
</table>