 <!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width,initial-scale=1.0">
		<link rel="stylesheet" href="">
		<script src="_js/jquery-2.2.4.min.js"></script>
	    <script type="text/javascript">
		    $(document).ready(function(){
		    	console.log("documento pronto");			       
		        $.ajax({
		        	method: 'GET',
		        	url: '244.xml',
		        	dataType : 'xml'      		
		        }).done(function(xml){		        	
		        	$(xml).find('cidade').each(function(){
		        		var nome = $(this).find('nome').text();
		        		var uf = $(this).find('uf').text();
		        		var pais = $(this).find('pais').text();
		        		var atualizacao = $(this).find('atualizacao').text();		        		
		        		var atual = $(this).find('atual');
		        		var metar = atual.find('metar');
		        		var data = metar.find('data').text();
		        		var ico = metar.find('ico').text();
		        		var desc = metar.find('desc').text();
		        		var texto = metar.find('texto').text();
		        		var temp = metar.find('temp').text();
		        		var umidade = metar.find('umidade').text();
		        		var dirvento = metar.find('dirvento').text();
		        		var velvento = metar.find('velvento').text();
		        		var pressao = metar.find(pressao);		        		
		        		$("#cidade").text(nome);
		        		$("#uf").text(uf);
		        		console.log(pais);
		        		console.log(atualizacao);
		        		console.log(data);
		        	});

		        });
		        
		    });
    	</script>
	</head>
	<body>
		<section id="previsao-atual">
			<div id="cidade">Cidade</div>
			<div uf="uf">UF</div>
			<div id="dia-semana">Dia-semana</div>
			<div id="data">DD/MM/AAAA</div>
			<div id="imagem">ícone</div>
			<div id="descricao">descrição</div>
		</section>
	</body>
</html>