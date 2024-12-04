<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulário Adoção</title>
  <link rel="stylesheet" href="../assets/styles/formulario.css">
  <script src="script.js"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Dosis:wght@200..800&family=Maitree:wght@200;300;400;500;600;700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Yrsa:ital,wght@0,300..700;1,300..700&display=swap"
    rel="stylesheet">
</head>
<body>
  <header>
    <div class="top-bar">
      <a href="index.php">
        <img src="../assets/images/logo.png" alt="Logo" class="logo">
      </a>
      <h2><a href="index.php">www.mansaodoscats.org.br</a></h2>
      <div class="social-icons">
        <a href="https://www.instagram.com/mansaodoscats/" target="_blank"><img src="../assets/images/instagram.png"
            alt="Instagram"></a>
        <a href="https://www.facebook.com/mansaodoscats?locale=pt_BR" target="_blank"><img
            src="../assets/images/facebook.png" alt="Facebook"></a>
        <a href="https://wa.me" target="_blank"><img src="../assets/images/whatsapp.png" alt="WhatsApp"></a>
      </div>
    </div>
  </header><br>
  <main>
    <div class="container">
      <div class="inicio">
        <h1>FORMULÁRIO DE ADOÇÃO</h1><br>
        <p>
          Para ter chegado aqui, acreditamos que você e as pessoas que moram na sua casa tenham conversado bastante
          sobre a adoção. Se isso não aconteceu, dê um passinho para trás. Vale a pena considerar que um gato:
        </p><br>
        <ul>
          <li> - Vive 15 anos ou mais;</li>
          <li> - Precisa do seu carinho e do seu tempo diariamente;</li>
          <li> - Deve comer uma ração de boa qualidade;</li>
          <li> - Precisa tomar as vacinas anualmente;</li>
          <li> - Deve ser levado ao veterinário sempre que necessário;</li>
          <li> - Não deve ter acesso à rua.</li>
        </ul><br>
        <p class="p2">
          Como parte do processo de adoção,
          pedimos que seja preenchido o formulário abaixo. Com base nas suas respostas, analisaremos o seu perfil,
          se está apto para adotar e se o gatinho escolhido é o ideal para você. Não tenha pressa e não deixe nenhuma
          resposta em branco.<br>
          Todas as respostas devem ser preenchidas cuidadosamente para que possamos conhecê-lo melhor.
        </p>
      </div><br>
      <div class="dados">
            <h4>SEUS DADOS</h4>
            <div class="linha">
    <div class="nome">
      <label for="nome">NOME COMPLETO:</label>
      <input type="text" id="nome" name="nome" placeholder="" required>
    </div>
    <div class="telefone">
      <label for="telefone">TELEFONE:</label>
      <input type="number" id="telefone" name="telefone" placeholder="" required>
    </div>
  </div>
  <div class="linha">
    <div class="email">
      <label for="email">E-MAIL:</label>
      <input type="email" id="email" name="email" placeholder="" required>
    </div>
    <div class="profissao">
      <label for="profissao">PROFISSÃO:</label>
      <input type="text" id="profissao" name="profissao" placeholder="" required>
    </div>
  </div>
  <div class="linha">
    <div class="cep">
      <label for="cep">CEP:</label>
      <input type="text" id="cep" name="cep" placeholder="" required>
    </div>
    <div class="logradouro">
      <label for="logradouro">RUA:</label>
      <input type="text" id="logradouro" name="logradouro" placeholder="" required>
    </div>
    <div class="numero">
      <label for="numero">NÚMERO:</label>
      <input type="text" id="numero" name="numero" placeholder="" required>
    </div>
  </div>
  <div class="linha">
    <div class="complemento">
      <label for="complemento">COMPL.:</label>
      <input type="text" id="complemento" name="complemento" placeholder="">
    </div>
    <div class="bairro">
      <label for="bairro">BAIRRO:</label>
      <input type="text" id="bairro" name="bairro" placeholder="" required>
    </div>
    <div class="cidade">
      <label for="cidade">CIDADE:</label>
      <input type="text" id="cidade" name="cidade" placeholder="" required>
    </div>
  </div>
</div><br>
      <div class="adotou">
            <fieldset>
              <legend>JÁ ADOTOU ANTES?</legend>
              <label for="sim">
                <input type="radio" id="sim" name="concorda" value="sim"> Sim
              </label>
              <label for="nao">
                <input type="radio" id="nao" name="concorda" value="nao"> Não
              </label>
            </fieldset><br><br>
          </div>
      <div class="casa">
        <fieldset>
          <legend>SUA CASA É TELADA?</legend>
          <input type="radio" id="sim" name="concorda" value="sim" required>
          <label for="sim">Sim</label>
          <input type="radio" id="nao" name="concorda" value="nao" required>
          <label for="nao">Não</label><br>
        </fieldset>
      </div><br><br>
     <div class="animais">
        <div>
        <fieldset>
          <legend>TEM OUTROS ANIMAIS EM CASA?</legend>
          <label for="nao-tem-animais">
            <input type="radio" id="nao-tem-animais" name="outros-animais" value="nao" required>
            Não
          </label><br>
          <label for="gato">
            <input type="radio" id="gato" name="outros-animais" value="gato" required>
            Sim, gato(s)
          </label><br>
          <label for="cachorro">
            <input type="radio" id="cachorro" name="outros-animais" value="cachorro" required>
            Sim, cachorro(s)
          </label><br>
          <label for="passaro">
            <input type="radio" id="passaro" name="outros-animais" value="passaro" required>
            Sim, passáro(s)
          </label><br>
          <label for="outros">
            <input type="radio" id="outros" name="outros-animais" value="outros" required>
            Sim, outro(s)<br> <input type="text" placeholder="Qual(s)?" style="font-size: 10px;">
          </label>
          </fieldset><br><br>
        </div>
      </div>
      <div class="condicao">
        <h4>ADOÇÃO É COMPROMISSO E RESPONSABILIDADE</h4><br>        
        <small style="font-size: 1.2em;">**Saiba que você terá que acrescentar no seu orçamento os gastos com alimentação de boa qualidade
            (aproximadamente R$ 170 por mês), vacinas e atendimento veterinário (aproximadamente R$ 400 anualmente).</small><br><br><br>
            <div class="">
            <label for="motivo-adotar">POR QUE QUER ADOTAR UM GATINHO?</label><br>
            <textarea id="motivo-adotar" name="motivo-adotar" placeholder="" required></textarea>
          </div>
        <div class="">
          <div>
            <label>HÁ QUANTO TEMPO VOCÊ ESTÁ PLANEJANDO ESSA ADOÇÃO?</label>
            <input type="text" name="planejamento" placeholder="Em meses" required>
          </div>
          <br>
          <div>
            <label>QUEM CUIDARÁ DO GATO QUANDO FOR VIAJAR A TRABALHO OU DE
              FÉRIAS?</label>
            <input type="text" name="responsavel-viagem" placeholder="" required><br><br>
          </div>
          <div class="questionario">
            <label>O QUE VOCÊ FARÁ SE DESCOBRIR ALÉRGICO A GATOS?</label>
            <textarea name="alergia-gatos" id="alergia-gatos" placeholder="" required></textarea><br>
            <br>
            <label>O QUE FARÁ SE SEU FILHO(A) FOR ALÉRGICO A GATOS?</label>
            <textarea name="alergia-filho" id="alergia-filho" placeholder="" required></textarea><br>
            <br>
            <label>QUAL SERIA SUA REAÇÃO SE O GATO ARRANHAR O SEU FILHO(A)?</label>
            <textarea name="reacao-arranho" id="reacao-arranho" placeholder="" required></textarea><br>
            <br>
            <label>O QUE VOCÊ FARÁ SE SEU GATO FUGIR?</label>
            <textarea name="gato-fugir" id="gato-fugir" placeholder="" required></textarea><br>
            <br>
            <label>O QUE FARÁ SE NÃO PUDER MAIS CUIDAR DO GATINHO?</label>
            <textarea name="nao-cuidar" id="nao-cuidar" placeholder="" required></textarea><br>
            <br>
            <label>POR QUAIS MOTIVOS VOCÊ DEVOLVERIA O GATINHO?</label>
            <textarea name="motivos-devolver" id="motivos-devolver" placeholder="" required></textarea><br>
            <br>
          </div>
          <fieldset>
            <legend>VOCÊ ESTÁ PREPARADO PARA A RESPONSABILIDADE COM A SAÚDE DO GATO</legend>
            <label for="responsabilidade-sim">
              <input type="radio" id="responsabilidade-sim" name="responsabilidade" value="sim" required>
              Sim
            </label>
            <label for="responsabilidade-nao">
              <input type="radio" id="responsabilidade-nao" name="responsabilidade" value="nao" required>
              Não
            </label>
            <label for="responsabilidade-nao-sabe">
              <input type="radio" id="responsabilidade-nao-sabe" name="responsabilidade" value="nao-sabe" required>
              Não sei
            </label>
          </fieldset><br><br>
        </div>
        <fieldset>
          <legend>CONDIÇÕES PARA ADOÇÃO</legend>
          <label for="vistoria-sim">
            - Que sua casa seja vistoriada para averiguação das respostas acima?
            <input type="radio" id="vistoria-sim" name="vistoria" value="sim" required>
            Sim
            <input type="radio" id="vistoria-nao" name="vistoria" value="nao" required>
            Não
          </label><br><br>
          <label for="devolver-sim">
            - Em nos devolver o gatinho se por qualquer motivo não puder continuar com ele?
            <input type="radio" id="devolver-sim" name="devolver" value="sim" required>
            Sim
            <input type="radio" id="devolver-nao" name="devolver" value="nao" required>
            Não
          </label><br><br>
          <label for="nao-repassar-sim">
            - Em não repassar o gatinho a ninguém sem antes nos consultar?
            <input type="radio" id="nao-repassar-sim" name="nao-repassar" value="sim" required>
            Sim
            <input type="radio" id="nao-repassar-nao" name="nao-repassar" value="nao" required>
            Não
          </label><br><br>
          <label for="avisar-alteracao-sim">
            - Em nos avisar em caso de alteração de endereço, telefone, etc?
            <input type="radio" id="avisar-alteracao-sim" name="avisar-alteracao" value="sim" required>
            Sim
            <input type="radio" id="avisar-alteracao-nao" name="avisar-alteracao" value="nao" required>
            Não
          </label><br><br>
          <label for="contrato-assinatura-sim">
            - Em assinar um contrato de adoção no ato da entrega, responsabilizando pelos cuidados com o animal e sua
            segurança?
            <input type="radio" id="contrato-assinatura-sim" name="contrato-assinatura" value="sim" required>
            Sim
            <input type="radio" id="contrato-assinatura-nao" name="contrato-assinatura" value="nao" required>
            Não
          </label><br>
        </fieldset><br><br>
        <fieldset>
          <legend>COMO VOCÊ CONHECEU A MANSÃO DOS CATS?</legend>
          <label for="indicacao-amigos">
            <input type="radio" id="indicacao-amigos" name="conheceu" value="Indicação de amigos ou familiares"
              required>
            Indicação de amigos ou familiares
          </label><br><br>
          <label for="indicacao-veterinarios">
            <input type="radio" id="indicacao-veterinarios" name="conheceu" value="Indicação de veterinários" required>
            Indicação de veterinários
          </label><br><br>
          <label for="instagram">
            <input type="radio" id="instagram" name="conheceu" value="Pelo Instagram" required>
            Pelo Instagram
          </label><br><br>
          <label for="facebook">
            <input type="radio" id="facebook" name="conheceu" value="Pelo Facebook" required>
            Pelo Facebook
          </label><br><br>
          <label for="outros">
            <input type="radio" id="outros" name="conheceu" value="Outros" required>
            Outros
          </label><br>
        </fieldset><br><br>
        <fieldset>
          <legend>INFORMAÇÕES IMPORTANTES</legend>
          <textarea id="info" name="info" rows="10" cols="50" readonly>
      IMPORTANTE: Abandonar, soltar, deixar fugir, não alimentar, acorrentar, bater, amedrontar e deixar acasalar indiscriminadamente são formas de maus tratos com pena prevista na lei. O Adote um Gatinho atuará conforme artigo 164 do Código Penal, artigo 32 da Lei Federal 9.605, de 12 de fevereiro de 1998 (Lei de Crimes Ambientais), e da Lei Municipal 13.131, de 18 de maio de 2001 (Lei de Posse Responsável), contra qualquer um que descumpra as determinações previstas, sejam estes adotantes ou não. Em caso de dúvidas, busque informações e auxílios de profissionais veterinários e nunca de curiosos ou da internet.
          </textarea>
        </fieldset>
        <br>
        <button type="submit">ENVIAR FORMULÁRIO</button>
        <button type="button" onclick="window.location.href='adotar.php'">VOLTAR</button>
        </form>
      </div>
  </main>
  <br>
  <section class="info">
    <div class="top-section">
      <div class="text-section">
        <h2>Mansão dos Cats</h2>
        <div class="description">
          <p>A Mansão dos Cats busca lares para gatos encontrados abandonados na Grande São Paulo<br>e
            também trabalha para conscientizar as pessoas sobre a importância da castração e
            posse<br>responsável. Também, resgata, trata, castra e doa gatinhos para lares seguros em
            São Paulo.</p>
        </div>
      </div>
      <div class="menu-section">
        <h3>Menu</h3>
        <ul class="menu-buttons">
          <li><a href="ong.php" class="menu-button" aria-label="Saiba mais sobre a ONG">A ONG</a></li>
          <li><a href="adotar.php" class="menu-button" aria-label="Acesse o formulário para adoção">Quero adotar</a>
          </li>
          <li><a href="ajudar.php" class="menu-button" aria-label="Descubra como você pode ajudar">Quero ajudar</a></li>
        </ul>
      </div>
    </div>
    <p class="copyright"><img src="../assets/images/copyright.png" alt="Copyright" aria-hidden="true">2024 - Mansão dos
      Cats. Todos os direitos reservados.</p>
  </section>
  <script src="../assets/js/cep.js"></script>
</body>
</html>