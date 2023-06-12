<?php include("config/config.php"); ?>
<?php include(DIRREQ."trabalhofinal/lib/html/header.php"); ?>

<style>
  /* Estilos para os botões */
  .calendar-container {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    height: 100vh;
  }

  .calendar-text {
    margin-bottom: 20px;
    text-align: center;
    font-size: 18px;
  }

  .calendar-button {
    display: inline-block;
    padding: 10px 20px;
    margin-bottom: 10px;
    background-color: #007bff;
    color: #fff;
    text-decoration: none;
    font-weight: bold;
    font-size: 16px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
  }

  .calendar-button:hover {
    background-color: #0056b3;
  }
</style>

<div class="calendar-container">
  <h2 class="calendar-text">Selecione uma opção:</h2>
  <button class="calendar-button" onclick="window.location.href='<?php echo DIRPAGE.'trabalhofinal/views/user'; ?>'">Calendário do Usuário</button>
  <button class="calendar-button" onclick="window.location.href='<?php echo DIRPAGE.'trabalhofinal/views/manager'; ?>'">Calendário do Gerente</button>
</div>

<?php include(DIRREQ."trabalhofinal/lib/html/footer.php"); ?>