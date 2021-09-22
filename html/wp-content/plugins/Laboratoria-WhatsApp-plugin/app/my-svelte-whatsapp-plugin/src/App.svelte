<script>
	import { allCountries } from "./countries";
	import Helper from "./Helper.svelte";
	let viewHelper = {
		enterprise: false,
		phone: false,
		messageUser: false,
	};

	function toggle(view) {
		viewHelper[view] = !viewHelper[view];
	}
	let selected;
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
	<p class="bold">
		Ingresa los datos para generar el link unico del plugin de tu empresa
	</p>
	<form method="POST" name="form">
		<div class="p">
			Nombre de la Empresa
			<input type="text" name="enterpriseName" />
			{#if viewHelper.enterprise}
				<Helper message={0} toggle={() => toggle("enterprise")} />
			{:else}
				<img
					src="https://cdn-icons-png.flaticon.com/512/3888/3888547.png"
					alt="icon"
					on:click={() => toggle("enterprise")}
				/>
			{/if}
		</div>
		<div class="p">
			Numero WhatsApp de Contacto de la Empresa
			<div>
				<select name="select"  bind:value={selected} >
					{#each allCountries as country}
						<option value={country[2]}>{country[0]}</option>
					{/each}
				</select>
				<input type="number" name="number" class="tell" minlength="3" />
			</div>
			{#if viewHelper.phone}
				<Helper message={1} toggle={() => toggle("phone")} />
			{:else}
				<img
					src="https://cdn-icons-png.flaticon.com/512/3888/3888547.png"
					alt="icon"
					on:click={() => toggle("phone")}
				/>
			{/if}
		</div>
		<div class="p">
			Mensaje que te Enviaran tus Clientes para Contactarte
			<input type="text" name="message" />
			{#if viewHelper.messageUser}
				<Helper message={2} toggle={() => toggle("messageUser")} />
			{:else}
				<img
					src="https://cdn-icons-png.flaticon.com/512/3888/3888547.png"
					alt="icon"
					on:click={() => toggle("messageUser")}
				/>
			{/if}
		</div>

		<button>Guardar cambios</button>
	</form>
</main>

<style>
	main {
		text-align: center;
		height: 80vh;
		margin: 1.3rem 1.3rem 0 0;
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
		text-align: start;
		padding: 0 1rem;
	}
	h2 {
		font-size: 2em;
		color: #256f2d;
	}
	h2,
	.p {
		text-align-last: start;
		padding: 0 1rem;
	}
	form img {
		width: 5vh;
		align-self: center;
		padding: 0 2rem;
	}
	.p {
		text-align: start;
		display: grid;
		grid-template-columns: 30% 40% 30%;
		height: 12vh;
		font-size: 1rem;
		align-items: center;
	}
	input {
		width: 80%;
		justify-self: center;
		height: 8vh;
	}
	button {
		background-color: #61c36c;
		border-radius: 20px;
		width: 10vw;
		height: 5vh;
	}
	select {
		width: 20%;
		height: 8vh;
	}
	.tell {
		width: 58%;
	}
	.p div {
		display: flex;
		justify-content: center;
	}
	input[type="number"]::-webkit-inner-spin-button,
	input[type="number"]::-webkit-outer-spin-button {
		-webkit-appearance: none;
		margin: 0;
	}
</style>
