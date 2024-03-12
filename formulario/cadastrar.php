<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cadastro de Usuário</title>
</head>

<body>
  <!-- Nome, E-mail, Senha, Telefone, Endereço, Genero(M,F,ND), NewsLetter  -->

  <h1>Cadastro de Usuário</h1>

  <form action="usuario_controller.php" method="post">

    <fieldset>
      <legend>Dados do Acesso</legend>

      <p>
        <label for="nome">Nome: </label>
        <input name="nome" type="text" id="nome">
      </p>
      <p>
        <label for="email">E-mail: </label>
        <input name="email" type="email" id="email">
      </p>
      <p>
        <label for="senha">Senha: </label>
        <input name="senha" type="password" id="senha">
      </p>
    </fieldset>

    <fieldset>
      <legend>Dados Complementares</legend>
      <!--CEP, Endereço, Número, Complemento, Bairro, Cidade -->
      <p>
        <label for="cep">CEP: </label>
        <input name="cep" type="text" id="cep">
      </p>

      <p>
        <label for="endereco">Endereço: </label>
        <input name="endereco" type="text" id="endereco">

        <label for="numero">Número: </label>
        <input name="numero" type="text" id="numero">
      </p>

      <p>
        <label for="complemento">Complemento: </label>
        <input name="complemento" type="text" id="complemento">
      </p>

      <p>
        <label for="bairro">Bairro: </label>
        <input name="bairro" type="text" id="bairro">
      </p>
    
      <p>
        <label for="cidade">Cidade: </label>
        <input name="cidade" type="text" id="cidade">
      </p>

      

      <p>
        <label for="estado">Estado: </label>
        <select name="estado" id="estado">
          <option value="">Selecione o Estado</option>
          <option value="AC">Acre</option>
          <option value="AL">Alagoas</option>
          <option value="AP">Amapá</option>
          <option value="AM">Amazonas</option>
          <option value="BA">Bahia</option>
          <option value="CE">Ceará</option>
          <option value="DF">Distrito Federal</option>
          <option value="ES">Espírito Santo</option>
          <option value="GO">Goiás</option>
          <option value="MA">Maranhão</option>
          <option value="MT">Mato Grosso</option>
          <option value="MS">Mato Grosso do Sul</option>
          <option value="MG">Minas Gerais</option>
          <option value="PA">Pará</option>
          <option value="PB">Paraíba</option>
          <option value="PR">Paraná</option>
          <option value="PE">Pernambuco</option>
          <option value="PI">Piauí</option>
          <option value="RJ">Rio de Janeiro</option>
          <option value="RN">Rio Grande do Norte</option>
          <option value="RS">Rio Grande do Sul</option>
          <option value="RO">Rondônia</option>
          <option value="RR">Roraima</option>
          <option value="SC">Santa Catarina</option>
          <option value="SP">São Paulo</option>
          <option value="SE">Sergipe</option>
          <option value="TO">Tocantins</option>
        </select>
      </p>

      <p>
        Genero:
        <label>
          <input type="radio" name="genero" id="masculino" value="Masculino"> Masculino
        </label>

        <label>
          <input type="radio" name="genero" id="feminino" value="Feminino"> Feminino
        </label>

         <label>
          <input type="radio" name="genero" id="pnr" value="Prefiro Não Responder"> Prefiro Não Responder
        </label>
      </p>
    </fieldset>

    <fieldset>
        <legend>Selecione os Cursos do seu interesse</legend>
        <p>
          <label>
            <input type="checkbox" name="cursos[]" value="Informática Básica"> Informática Básica
          </label>

          <label>
            <input type="checkbox" name="cursos[]" value="PHP"> PHP
          </label>

          <label>
            <input type="checkbox" name="cursos[]" value="HTML5 & CSS3"> HTML5 & CSS3
          </label>

          <label>
            <input type="checkbox" name="cursos[]" value="JavaScript"> JavaScript
          </label>

        </p>

        <p>
          <label>Sugestão: </label>
          <br>
          <textarea name="sugestao" placeholder="Digite sua sugestão de cursos ou deixe uma observação..." cols="50" rows="5"></textarea>
        </p>
    </fieldset>

    <p>
      <label>
          <input type="checkbox" name="newsletter" value="sim">
          Aceita receber nossas novidades
      </label>
    </p>
    
    <p>
      <button type="submit">Cadastrar</button>
    </p>
  </form>
</body>

</html>