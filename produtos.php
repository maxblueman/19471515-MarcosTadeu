<?php
include ("dados/dados.php");
?>

<section>
	<div class="content">
		<h1 class="titulo">Produtos</h1>
		<?php
		foreach ($dado as $value) {
		?>
			<h2 class="tit-produto"><?=$value["nome"];?></h2>
			<div class="box-foto">
				<a href="index.php?pagina=produto.php&id=<?=$value["id"];?>"><img src="<?=$value["fotoDoce"];?>"></a>
			</div>
	

<?php
}
?>
</div>
</section>




        