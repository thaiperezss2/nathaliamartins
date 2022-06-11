<?php
require_once('conexao.php');
include('./navbar.php');
include('./alertas.php');
$id = filter_input(INPUT_GET, 'id');

$query = "
SELECT 
    anuncios.id,
    anuncios.imagem,
    anuncios.telefone,
    anuncios.preco,
    anuncios.descricao,
    usuarios.nome AS nome
FROM
    anuncios
        INNER JOIN
    usuarios ON usuarios.id = anuncios.usuario_id
WHERE
    anuncios.id = " . $id;
    
$selec = mysqli_query($con, $query);

if ( mysqli_num_rows($selec) > 0 ) {
    $dado = mysqli_fetch_array($selec);
} else {
    $_SESSION['type'] = 'info';
    $_SESSION['message'] = 'Anúncio não localizado!';

    header("Location: index.php");
}
?>
	<body>
		<div class="container">
			<div class="row">
				<div class="col-12">
					<h1 class="text-center my-3">  <?php echo $dado['nome']; ?></h1>
				</div>
			</div>
				
			<div class="row">
				<div class="col-12 text-center">
					<img class="img-fluid" src="uploads/anuncios/<?php echo $dado['imagem']; ?>" alt="<?php echo $dado['nome']; ?>" />
				</div>
			</div>
			
			<div class="row mt-4">
				<div class="col-12">
					<div class="rating">
						<h6 class="product-description"><?php echo $dado['descricao']; ?></h6>
						<h4 class="price">R$<?php echo number_format($dado['preco'], 2, ',', '.'); ?></h4>
						<span  style="font-size:30px"><i class="fas fa-mobile-alt"></i> <?php echo $dado['telefone']; ?></span>
						<span  style="font-size:30px">	<i class="fa fa-whatsapp" aria-hidden="true"></i></span>
						<?php
						$telefone = str_replace(['(', ') ', '-'], '', $dado['telefone']);
						
						echo '
						<a href="https://api.whatsapp.com/send?phone=55' . $telefone . '&text=Olá!%20Gostaria%20que%20contratar%20seu%20serviço.%20" target="_blank"> Clique aqui para abrir o WhatsApp
						</a>
						';
						?>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>
<?php
     
    mysqli_close($con);
    
    include './footer.php';