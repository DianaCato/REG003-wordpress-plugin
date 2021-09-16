<script>
  export let message, toggle;
  const helpersMessage = [
    "Nombre de la empresa o persona con la cual se contactara el usuario por medio del plugin de WhatsApp.Propietario o responsable del numero de WhatsApp a ingresar ",
    "Selecciona el país del número que desea registrar. Posteriormente ingrese el número de contacto, sin caracteres adicionales ni espacios",
    "Ingrese el mensaje predeterminado que le enviaran los usuarios para comunicarse con su empresa (el mensaje puede ser editado por el usuario).",
  ];
</script>

<div>
  <span on:click={toggle}> X</span>
  <p>{helpersMessage[message]}</p>
</div>

<style>
  div {
    display: flex;
    width: 95%;
    height: 12vh;
    background-color: #61c36c;
    border-radius: 20px;
  }
  p {
    color: #fff;
    margin: 0.5em;
    line-height: normal;
  }
  span{
    margin: 0.3em;
  }
</style>
