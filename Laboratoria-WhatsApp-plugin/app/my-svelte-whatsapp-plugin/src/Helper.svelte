<script>
  export let message;
  const helpersMessage = [
    "Nombre de la empresa o persona con la cual se contactara el usuario por medio del plugin de WhatsApp.Propietario o responsable del numero de WhatsApp a ingresar ",
    "Selecciona el país del número que desea registrar. Posteriormente ingrese el número de contacto, sin caracteres adicionales ni espacios",
    "Ingrese el mensaje predeterminado que le enviaran los usuarios para comunicarse con su empresa (el mensaje puede ser editado por el usuario).",
  ];
</script>

<div>
  X
  <span>{helpersMessage[message]}</span>
</div>

<style>
  div {
    width: 90%;
    height: 8vh;
    background-color: #61c36c;
    border-radius: 20px;
  }
  span {
    color: #fff;
  }
</style>
