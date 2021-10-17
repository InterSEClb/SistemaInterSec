<?php
		include "includes/header.php";
		?>
		<table class="table table-striped">
		<tr>
		<th class="not">Table</th>
		<th class="not">Entries</th>
		</tr>
		
				<tr>
					<td><a href="agencias.php">Agencias</a></td>
					<td><?=counting("agencias", "id")?></td>
				</tr>
				
				<tr>
					<td><a href="elementos.php">Elementos</a></td>
					<td><?=counting("elementos", "id")?></td>
				</tr>
				
				<tr>
					<td><a href="estadous.php">Estadous</a></td>
					<td><?=counting("estadous", "id")?></td>
				</tr>
				
				<tr>
					<td><a href="metaelemento.php">Metaelemento</a></td>
					<td><?=counting("metaelemento", "id")?></td>
				</tr>
				
				<tr>
					<td><a href="ss_estado.php">Ss_estado</a></td>
					<td><?=counting("ss_estado", "id")?></td>
				</tr>
				
				<tr>
					<td><a href="ss_opsvestimenta.php">Ss_opsvestimenta</a></td>
					<td><?=counting("ss_opsvestimenta", "id")?></td>
				</tr>
				
				<tr>
					<td><a href="ss_solicitud.php">Ss_solicitud</a></td>
					<td><?=counting("ss_solicitud", "id")?></td>
				</tr>
				
				<tr>
					<td><a href="ss_tipocobertura.php">Ss_tipocobertura</a></td>
					<td><?=counting("ss_tipocobertura", "id")?></td>
				</tr>
				
				<tr>
					<td><a href="ss_tiposervicio.php">Ss_tiposervicio</a></td>
					<td><?=counting("ss_tiposervicio", "id")?></td>
				</tr>
				
				<tr>
					<td><a href="tipoelemento.php">Tipoelemento</a></td>
					<td><?=counting("tipoelemento", "id")?></td>
				</tr>
				
				<tr>
					<td><a href="tipous.php">Tipous</a></td>
					<td><?=counting("tipous", "id")?></td>
				</tr>
				
				<tr>
					<td><a href="usermeta.php">Usermeta</a></td>
					<td><?=counting("usermeta", "id")?></td>
				</tr>
				
				<tr>
					<td><a href="users.php">Users</a></td>
					<td><?=counting("users", "id")?></td>
				</tr>
				
				<tr>
					<td><a href="usuarios.php">Usuarios</a></td>
					<td><?=counting("usuarios", "id")?></td>
				</tr>
				
				<tr>
					<td><a href="versolicutudes.php">Versolicutudes</a></td>
					<td><?=counting("versolicutudes", "id")?></td>
				</tr>
				</table>
			<?php include "includes/footer.php";?>
			