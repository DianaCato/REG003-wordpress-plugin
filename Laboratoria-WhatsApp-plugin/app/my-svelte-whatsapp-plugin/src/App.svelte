<script>
</script>

<main>
	<form method="POST" name="form" >
		<p>Nombre Empresa</p>
		<input type="text" name="enterpriseName"/>
		<p>Telefono</p>
		<input type="text" name="number"/>
		<p>Mensaje</p>
		<input type="text" name="message"/>
		<input type="submit" value="Enviar">
	</form>
</main>

<style>
	main {
		text-align: center;
		padding: 1em;
		max-width: 240px;
		margin: 0 auto;
	}

	/* h1 {
		color: #ff3e00;
		text-transform: uppercase;
		font-size: 4em;
		font-weight: 100;
	} */

	@media (min-width: 640px) {
		main {
			max-width: none;
		}
	}
</style>