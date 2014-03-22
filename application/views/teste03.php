
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Bootstrap</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
<link href="<http://localhost/welcome/assets/css/bootstrap.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets/css/font-awesome.css" rel="stylesheet">
<script src="<?php echo base_url(); ?>assets/js/jquery.js"></script>
<script src="<?php echo base_url(); ?>assets/js/bootstrap.js"></script>


</head>

<body>
<!--CONTAINER-->
<div class="container">
	<!--TOPO-->
	<div class="row">
		<div class="span12">
		</div>
	</div>
    <!--CONTEUDO TOTAL A SER ALTERADO DE ACORDO COM O MENU-->
	<div class="row">
        <!--CONTEUDO-->
		<div class="span10">
        
			<div class="accordion">
            	<!--OPCOES AO CLICAR NO CHECKBOX-->
				<div class="accordion-group">
					<div id="accordion-element-73222" class="accordion-body collapse over">
						<div class="accordion-inner">
                        	<!--BOTAO MODAL-->
							<button class="btn btn-danger remove"  type="button">Excluir</button>
                            	<!--MODAL-->
                                <div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                <h3 id="myModalLabel">Deseja realmente deletar?</h3>
                                </div>
                                <div class="modal-body">
                                <p>Nome Completo</p>
                                </div>
                                <div class="modal-footer">
                                <button class="btn" data-dismiss="modal" aria-hidden="true">Cancela</button>
                                <button class="btn btn-primary">Deletar</button>
                                </div>
                                </div>
                             <!--EFETIVAR INSCRICAO-->
                                <div class="btn-group clearfix">
                                <button class="btn btn-success">Status...</button>
                                <button class="btn dropdown-toggle btn-success overf" id="vai" data-toggle="dropdown" onFocus="vai(this)">
                                <span class="caret"></span>
                                </button>
                                
                                <ul class="dropdown-menu">
                                <!-- dropdown menu links -->
                                <li><a href="#">Liberar</a></li>
                                <li><a href="#">Bloquear</a></li>
                                </ul>
                                </div>
						</div>
					</div>
				</div>
			</div>
            <!--PESQUISA DE CADASTROS INTERATIVA-->
			<form class="form-search form-inline">
				<input type="text" id="tags" data-provide="typeahead" /><button type="submit" class="btn"><i class="icon icon-search"></i></button>
			</form>
            <!--CADASTROS-->
			<table class="table table-condensed table-striped">
				<thead>
					<tr>
                        <th>
                            ID
                        </th>
                        <th>
                            Nome
                        </th>
                        <th>
                            Estado 
                        </th>
                        <th>
                            Cidade
                        </th>
                        <th>
                             E-mail     
                        </th>
                    </tr>

				</thead>
				<tbody>
					<tr>
                        <td>
                            1&nbsp;<input type="checkbox" class="input" id="checkbox1" value="1" />
                        </td>
                        <td>
                            Exemplo 01
                        </td>
                        
                        <td>
                            PR
                        </td>
                        <td>
                            Foz do Iguaçu
                        </td>
                        <td>
                            thiago@exemplo.com
                        </td>
                        <td>
                            <p>
                                <button class="btn btn-mini btn-info" type="button"><i class="icon-edit icon-white"></i></button>
                                <button class="btn btn-mini btn btn-danger " type="button"><i class="icon-trash icon-white"></i></button>
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            2&nbsp;<input type="checkbox" class="input" id="checkbox1" value="2" />
                        </td>
                        <td>
                            Exemplo 02
                        </td>
                        
                        <td>
                            PR
                        </td>
                        <td>
                            Foz do Iguaçu
                        </td>
                        <td>
                            thiago@exemplo.com
                        </td>
                        <td>
                            <p>
                                <button class="btn btn-mini btn-info" type="button"><i class="icon-edit icon-white"></i></button>
                                <button class="btn btn-mini btn btn-danger " type="button"><i class="icon-trash icon-white"></i></button>
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            3&nbsp;<input type="checkbox" class="input" id="checkbox1" value="3" />
                        </td>
                        <td>
                            Exemplo 03
                        </td>
                        
                        <td>
                            PR
                        </td>
                        <td>
                            Foz do Iguaçu
                        </td>
                        <td>
                            thiago@exemplo.com
                        </td>
                        <td>
                            <p>
                                <button class="btn btn-mini btn-info" type="button"><i class="icon-edit icon-white"></i></button>
                                <button class="btn btn-mini btn btn-danger " type="button"><i class="icon-trash icon-white"></i></button>
                            </p>
                        </td>
                    </tr>
					<tr>
                        <td>
                            4&nbsp;<input type="checkbox" class="input" id="checkbox1" value="4" />
                        </td>
                        <td>
                            Exemplo 04
                        </td>
                        
                        <td>
                            PR
                        </td>
                        <td>
                            Foz do Iguaçu
                        </td>
                        <td>
                            thiago@exemplo.com
                        </td>
                        <td>
                            <p>
                                <button class="btn btn-mini btn-info" type="button"><i class="icon-edit icon-white"></i></button>
                                <button class="btn btn-mini btn btn-danger " type="button"><i class="icon-trash icon-white"></i></button>
                            </p>
                        </td>
                    </tr>
				</tbody>
			</table>
			<div class="pagination pagination-centered">
				<ul>
					<li>
						<a href="#">Prev</a>
					</li>
					<li>
						<a href="#">1</a>
					</li>
					<li>
						<a href="#">2</a>
					</li>
					<li>
						<a href="#">3</a>
					</li>
					<li>
						<a href="#">4</a>
					</li>
					<li>
						<a href="#">5</a>
					</li>
					<li>
						<a href="#">Next</a>
					</li>
				</ul>
			</div>  
		</div><!--FIM CONTEUDO-->
	</div><!--FIM CONTEUDO TOTAL-->
    <!--RODAPE-->
    <div class="row">
        <div class="span12" align="center">
        	<p class="lead">
            	<hr />
            </p>
        </div>
    </div>
    <!--FIM RODAPE-->
</div><!--FIM CONTAINER-->
</body>
</html>