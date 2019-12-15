<!-- Aqui tenemos el contenido de la pagina principal estatico divido en secciones con el titulo precios y la imagen de cada seccion, esta personalizado cada seccion con un col que aporta la estructura que adopta en la pagina. El hovereffect es un estilo CSS que le da la forma vistosa de los bordes junto con el img-thumbnail que es el que le da el estilo al contenido de cada seccion.-->
<body>

	<button class="tablink" onclick="openPage('Ropa', this, '#F6E3CE')">Ropa</button>
	<button class="tablink" onclick="openPage('Calzado', this, '#F5D0A9')" id="defaultOpen">Calzado</button>
	<button class="tablink" onclick="openPage('Pantalones', this, '#F7BE81')">Pantalones</button>
	<button class="tablink" onclick="openPage('Complementos', this, '#FAAC58')">Complementos</button>

	<div id="Ropa" class="tabcontent">
	  	<h3>Ropa</h3>
	  	<p>Chilabas y gandoras</p>
	</div>

	<div id="Calzado" class="tabcontent">
	  	<h3>Calzado</h3>
	  	<p>Sandalias y babuchas</p> 
	</div>

	<div id="Pantalones" class="tabcontent">
	  	<h3>Pantalones</h3>
	  	<p>Pantalones bombachos y cagados</p>
	</div>

	<div id="Complementos" class="tabcontent">
	  	<h3>Complementos</h3>
	  	<p>Complementos arabes</p>
	</div>
</body>