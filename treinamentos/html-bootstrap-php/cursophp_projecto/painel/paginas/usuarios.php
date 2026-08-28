<?php
    $pag = "usuarios";

?>


<a onclick="inserir()" type="button" class="btn btn-primary"><i class="fa fa-plus"></i> Novo Usúario</a>

<div class="bs-example widget-shadow" style="padding:15px" id="listar">

</div>


<!-- Modal Perfil -->
<div class="modal fade" id="modalForm" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title" id="exampleModalLabel"><span id="titulo_inserir"></span></h4>
				<button id="btn-fechar" type="button" class="close" data-dismiss="modal" aria-label="Close" style="margin-top: -25px">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form id="form">
			<div class="modal-body">
				

					<div class="row">
						<div class="col-md-6">							
								<label>Nome</label>
								<input type="text" class="form-control" id="nome" name="nome" placeholder="Seu Nome" required>							
						</div>

						<div class="col-md-6">							
								<label>Email</label>
								<input type="email" class="form-control" id="email" name="email" placeholder="Seu email" required>							
						</div>
					</div>


					<div class="row">
						<div class="col-md-6">							
								<label>Telefone</label>
								<input type="text" class="form-control" id="telefone" name="telefone" placeholder="Seu telefone" required>							
						</div>
						<div class="col-md-3">							
								<label>Nivel</label>
                                <select class="form-control" name="nivel" id="nivel">
                                    <option value="">Administrador</option>
                                    <option value="">Comum</option>
                                </select>					
						</div>
					</div>



					<div class="row">
                         <div class="col-md-12">							
								<label>Endereço</label>
								<input type="text" class="form-control" id="endereco" name="endereco" placeholder="Seu endereço">							
						</div>
					
					</div>

				<br>
				<small><div id="mensagem" align="center"></div></small>
			</div>
			<div class="modal-footer">       
				<button type="submit" class="btn btn-primary">Salvar</button>
			</div>
			</form>
		</div>
	</div>
</div>



<!--------os scripts devem ficar apos a modal----------->

<!--trazer uma variavel php para javascript-->
<script type="text/javascript">var pag = "<?=$pag?>";</script>


<!--chamar a as funçoes colacados no ajax para evitar repetição de códigos-->
<script src="js/ajax.js"></script>

<!------------------------------------------------------>