<html>
    <head>
        <title>Rede Social</title>
        <link rel="stylesheet" href="assets/css/template.css" />
        <script type="text/javascript" src="assets/js/jquery-3.0.0.min.js"></script>
        <script type="text/javascript" src="assets/js/script.js"></script>
    </head>
    <body>
    	<div class="topo">
    		<div class="topoint">
    			<div class="topoleft">Rede Social</div>
    			<div class="toporight"><?php echo $viewData['nome']; ?> - <a id="botao_sair" href="/twitter/login/sair">Sair</a></div>
    			<div style="clear:both"></div>
    		</div>
		</div>
		<div class="container">
        	<?php $this->loadViewInTemplate($viewName, $viewData); ?>
    	</div>
    </body>
</html>