<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Caixa</title>
		<link rel="stylesheet" href="../css/bootstrap.css">
	</head>
	<body>
		<form class="card-p2 bg-secondary" method="POST" action="">
			<div class="input-group">
				<table>
					<thead>
						<tr>
							<th>Data</th>
							<th>Clientes</th>
							<th>Status</th>
							<th>Qtide</th>
							<th>Produtos</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td><label class="form-control"><?=date('d/m/Y')?></label></td>
							<td><input type="text" name="cliente" class="form-control" placeholder="Cliente" id="cliente" required></td>
							<td>
								<select class="form-control">
									<option value="Aberto">Aberto</option>
									<option value="Dinheiro">Dinheiro</option>
									<option value="Cartão">Cartão</option>
									<option value="Fiado">Fiado</option>
								</select>
							</td>
							<td><input class="form-control" type="number" name="qtide" min="1" max="10" placeholder="Qtide"> </td>
							<td><button type="submit" class="btn btn-primary">Novo</button></td>
						</tr>
					</tbody>
				</table>
			</div>
		</form>		
	</body>
</html>
