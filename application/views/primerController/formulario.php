<?php echo "inicio form"; ?>
<!-- Creamos la etiqueta de encabezado con la ruta del action -->
<?=  form_open('/primerController/recibirdatos') ?>
	<?php  
		//arrays con las caracteristicas de los input
		$nombre = array (
			'name' => 'nombre',
			'placeholder' => 'Nombre');
		$direccion = array (
			'name' => 'direccion',
			'placeholder' => 'direccion');
		$telefono = array (
			'name' => 'telefono',
			'placeholder' => 'Telefono');
	?>

	<?= form_label('Nombre: ', 'nombre') ?>
	<?= form_input($nombre) ?>
	<br /><br />

	<?= form_label('Direccion: ', 'direccion') ?>
	<?= form_input($direccion) ?>
	<br /><br />

	<?= form_label('Telefono: ', 'telefono') ?>
	<?= form_input($telefono) ?>
	<br /><br />

	<!-- El primer parametro es el name -->
	<?= form_submit('', 'Añadir') ?>

<?= form_close() ?>

	</<body>	
</html>