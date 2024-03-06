<html>
  <head>
    <meta charset="utf-8">
    <title>Aula de PHP</title>
  </head>
  <body>
    <h1>Aula de Programação WEB</h1>

    <!-- Exemplo Client Side -->
    <a href="javascript:;" id="btnAlerta">Mostrar Alerta</a>

    <script>

      const btnAlerta = document.getElementById("btnAlerta");

      btnAlerta.onclick = function(){
        alert("Este é um exemplo de JavaScript");
      }

    </script>

    <!-- Exemplo Server Side  -->

    <h2>Data de hoje é: <?php echo date("d/m/Y H:i:s") ?> </h2>


  </body>
</html>