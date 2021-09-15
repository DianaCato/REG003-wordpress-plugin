<script>
</script>

<main>
	<div class="header">
		<img src="https://cdn-icons-png.flaticon.com/512/3814/3814545.png" alt="icon"/>
		<h1>Laboratoria WhatsApp Plugin</h1>
		<img src="https://cdn-icons-png.flaticon.com/512/3814/3814545.png" alt="icon"/>
	</div>
	
	<h2>Ajutes</h2>
	<form method="POST" name="form" >
		
		<span>Nombre Empresa</span>
		<input type="text" name="enterpriseName"/>

		<span>Telefono</span>
		<input type="text" name="number"/>

		<span>Mensaje</span>
		<input type="text" name="message"/>
		<input type="submit" value="Enviar">
	</form>
</main>

<style>
	main {
		text-align: center;
		height: 80vh;
		margin: 0 auto;
		background-image: url("https://i.pinimg.com/originals/62/40/b6/6240b66d5c50c8661eee78b439a7d33c.jpg");
		background-repeat: round;
	}

	.header{
		height: 10vh;
		display: grid;
		grid-template-columns: 10% auto 10%;
		background-color: rgba(97, 195, 108, 0.25);;	
	}

	.header h1 {
		color: #268847;
		font-weight: bold;
		font-size: 2em;
	}

	.header img{
		height: 8vh;
    	padding: 1vh 25%;
	}

	form {
		color:rgb(0, 255, 98)
	}

</style>