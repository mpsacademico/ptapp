 <!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width,initial-scale=1.0">
		<link rel="stylesheet" href="">
		<script src="_js/jquery-2.2.4.min.js"></script>
	    <script type="text/javascript">
		    $(document).ready(function(){		    				       
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
		        		var pressao = metar.find('pressao').text();
		        		var uvatual	= atual.find('uvatual');
		        		var indice = uvatual.find('indice').text();
		        		var datauv = uvatual.find('datauv').text();	        		
		        		$(this).find('previsao').each(function(){
		        			var dia = $(this).find('dia').text();
		        			var data = $(this).find('data').text();
		        			var ico = $(this).find('ico').text();
		        			var desc = $(this).find('desc').text();
		        			var texto = $(this).find('texto').text();
		        			var min = $(this).find('min').text();
		        			var max = $(this).find('max').text();
		        			var prob = $(this).find('prob').text();
		        			var sunrise = $(this).find('sunrise').text();
		        			var sunset = $(this).find('sunset').text();
		        			var uv = $(this).find('uv').text();
		        			var modelo = $(this).find('modelo');
		        			var h03 = modelo.find('h03').text();
		        			var h09 = modelo.find('h09').text();
		        			var h15 = modelo.find('h15').text();
		        			var h21 = modelo.find('h21').text();
		        			var str = "<article><p><img src=\"_img/icones/"+ico+".png\"/></p><p>"+dia+"</p><p>Mín. "+min+"ºC | Máx. "+max+"ºC</p><p>Prob. de Chuva: "+prob+"</p><p>UV: "+uv+"</p><p>"+texto+"</p></article>";		  
		        			$('#previsao').append(str);      			
		        		}); 						
		        	});
		        });		        
		    });
    	</script>
	</head>
	<body>
		<!--<section id="previsao-atual">
			<div id="cidade">Cidade</div>
			<div uf="uf">UF</div>
			<div id="dia-semana">Dia-semana</div>
			<div id="data">DD/MM/AAAA</div>
			<div id="imagem">ícone</div>
			<div id="descricao">descrição</div>
		</section>-->
		<section id="previsao">
		</section>
	</body>
</html>