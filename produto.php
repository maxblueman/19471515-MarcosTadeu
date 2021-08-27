
<?php
include ("dados/dados.php");
?>
<section>
	<div class="content">
	<?php

		if (isset($_GET["id"]) && !empty($_GET["id"])) {
			$id = $_GET["id"];
		} else {
			return 0;
		}

		foreach ($dado as $value) {
			if ($value["id"] == $id) {
			?>
				<h1 class="titulo"><?=$value["nome"];?></h1>
				<div class="foto-maior">
					<img src="<?=$value["fotoDoce"];?>">
				</div>
				<p><?=$value["descricao"];?></p>
				<h3><?=$value["preco"];?></h3>
				<h5><?=$value["quantidade"];?></h5>
				<div class="link-podutos">
                    <a href="index.php?pagina=contato.php">Encomendar</a>
                </div> 
				
		<?php
			} else {
				//
			}

		}
	?>
</div>
</section>