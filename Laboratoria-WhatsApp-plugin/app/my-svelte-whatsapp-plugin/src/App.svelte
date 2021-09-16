<script>
	import {allCountries} from "./countries";
	import Helper from "./Helper.svelte";
</script>

<main>
	<div class="header">
		<img
			src="https://cdn-icons-png.flaticon.com/512/3814/3814545.png"
			alt="icon"
		/>
		<h1>Laboratoria WhatsApp Plugin</h1>
		<img
			src="https://cdn-icons-png.flaticon.com/512/3814/3814545.png"
			alt="icon"
		/>
	</div>

	<h2>Ajutes</h2>
	<p class="bold">Ingresa los datos para generar el link unico del plugin de tu empresa</p>
	<form method="POST" name="form">
		<p>
			Nombre de la Empresa
			<input type="text" name="enterpriseName" />
			<img src="https://cdn-icons-png.flaticon.com/512/3888/3888547.png" alt="icon">
		</p>
		<div class="p">
			<span>Numero WhatsApp de Contacto de la Empresa</span> 
			<div>
				<select name="select">
					{#each allCountries as country }
						<option value={country[2]}>{country[0]}</option>
					{/each}					
				</select>
				<input type="tell" name="number" />
			</div>
			<img src="https://cdn-icons-png.flaticon.com/512/3888/3888547.png" alt="icon">
		</div>
		<p>
			Mensaje que te Enviaran tus Clientes  para Contactarte
			<input type="text" name="message" />
			<!-- <img src="https://cdn-icons-png.flaticon.com/512/3888/3888547.png" alt="icon"> -->
			<Helper message={2}/>
		</p>

		<button>Guardar cambios</button>
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

	.header {
		height: 10vh;
		display: grid;
		grid-template-columns: 10% auto 10%;
		background-color: rgba(97, 195, 108, 0.25);
	}

	.header h1 {
		color: #268847;
		font-weight: bold;
		font-size: 3em;
	}

	.header img {
		height: 8vh;
		padding: 1vh;
		justify-self: center;
	}
	.bold {
		font-weight: bold;
	}
	h2 {
		font-size: 2em;
		color: #256f2d;
	}
	h2,
	p, span {
		text-align-last: start;
		padding: 0 1rem;
	}
	p, span {
		font-size: 1rem;
		align-items: center;
	}
	form img {
		width: 5vh;
		align-self: center;
		padding: 0 2rem;
	}
	form p, .p {
		text-align: start;
		display: grid;
		grid-template-columns: 30% 40% 30%;
	}
	input {
		width: 80%;
		justify-self: center;
		height: 8vh;
	}
	button {
		background-color: #61C36C;
		border-radius: 20px;
		width: 10vw;
		height: 5vh;
	}
	select{
		width: 20%;
		height: 8vh;
	}
	.p input {
		width: 58%;
	}
	.p div {
		display: flex;
		justify-content: center;
	}
	span {
		margin-top: 1.5em;
	}
</style>
