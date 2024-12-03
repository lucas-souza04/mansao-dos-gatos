<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulário Adoção</title>
  <link rel="stylesheet" href="styles/formulario.css">
  <script src="script.js"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Dosis:wght@200..800&family=Maitree:wght@200;300;400;500;600;700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Yrsa:ital,wght@0,300..700;1,300..700&display=swap" rel="stylesheet">
</head>

<body>

  <header>
    <div class="top-bar">
      <img src="assets/logo.png" alt="Logo Mansa dos Cats - Adoção de Gatinhos" class="logo">
      <h2>www.mansaodoscats.org.br</h2>
      <nav class="social-icons">
        <a href="https://www.instagram.com/mansaodoscats/" target="_blank" aria-label="Instagram da Mansa dos Cats">
          <img src="assets/instagram.png" alt="Ícone do Instagram">
        </a>
        <a href="https://www.facebook.com/mansaodoscats?locale=pt_BR" target="_blank" aria-label="Facebook da Mansa dos Cats">
          <img src="assets/facebook.png" alt="Ícone do Facebook">
        </a>
        <a href="https://wa.me/5511982590004" target="_blank" aria-label="WhatsApp da Mansa dos Cats">
          <img src="assets/whatsapp.png" alt="Ícone do WhatsApp">
        </a>
      </nav>
    </div>
  </header>
<br>
  <main>
      <div class="container">
      <div class="inicio">
          <h1>FORMULÁRIO DE ADOÇÃO</h1>
<br>
        <p>
          Para ter chegado aqui, acreditamos que você e as pessoas que moram na sua casa tenham conversado bastante sobre a adoção. Se isso não aconteceu, dê um passinho para trás. Vale a pena considerar que um gato:
        </p>
<br>
        <ul>
          <li> - Vive 15 anos ou mais;</li>
          <li> - Precisa do seu carinho e do seu tempo diariamente;</li>
          <li> - Deve comer uma ração de boa qualidade;</li>
          <li> - Precisa tomar as vacinas anualmente;</li>
          <li> - Deve ser levado ao veterinário sempre que necessário;</li>
          <li> - Não deve ter acesso à rua.</li>
        </ul>
<br>
        <p class= "p2">
          Como parte do processo de adoção,
          pedimos que seja preenchido o formulário abaixo. Com base nas suas respostas, analisaremos o seu perfil, 
          se está apto para adotar e se o gatinho escolhido é o ideal para você. Não tenha pressa e não deixe nenhuma resposta em branco.<br> 
          Todas as respostas devem ser preenchidas cuidadosamente para que possamos conhecê-lo melhor.
        </p>
      </div>

      <br>
      <!--FAMILIA-->

      <div class="familia">

        <form action="" method="post">
        <div class="familia-tlt">
              <h4>SOBRE VOCÊ E SUA FAMÍLIA</h4>
        </div>
        <br>
        <div class="test">
          <div class="first-column">
            <label for="nome">NOME COMPLETO:</label>
            <input type="text" id="nome" name="nome" placeholder="" required>
          </div>
          <div class="second-column">
            <label for="cpf">CPF:</label> 
            <input type="text" id="cpf" name="cpf" placeholder="" required>
          </div>     
        </div>
        <br>
        <div class="container">
          <label for="profissao">PROFISSÃO:</label>
          <input type="text" id="profissao" name="profissao" placeholder="" required>
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
          </fieldset>
        </div>
        <br>
        <h4>DADOS DO SEU ENDEREÇO</h4>
        <br>
        <div class="dados">
          <div class="first-column">
             <label for="email">E-MAIL:</label>
            <input type="email" id="email" name="email" placeholder="" required>
          </div>
          <div class="second-column">
            <label for="telefone">TELEFONE:</label>
            <input type="number" id="telefone" name="telefone" placeholder="" required>
          </div>
          <div class="third-column">   
            <label for="cep">CEP:</label>
            <input type="text" id="cep" name="cep" placeholder="" class="input-100" required>
          </div>
        </div>
        <br>
        <div class="test">
          <div class="first-column">
            <label for="logradouro">RUA:</label>
            <input type="text" id="logradouro" name="logradouro" placeholder="" required>
          </div>
          <div class="second-column">
            <label for="numero">NÚMERO:</label>
            <input type="text" id="numero" name="numero" placeholder="" required>
          </div>
        </div>
        <br>
        <div class="complemento">
          <div class="first-column">
            <label for="complemento">COMPLEMENTO:</label>
            <input type="text" id="complemento" name="complemento" placeholder="">
          </div> 
            <div class="second-column">
              <label for="bairro">BAIRRO:</label>
              <input type="text" id="bairro" name="bairro" placeholder="" required>
              <label for="cidade">CIDADE:</label>
              <input type="text" id="cidade" name="cidade" placeholder="" required>
            </div>
        </div> <br>
        <div class="filhos">
          <div class="test">
            <div class="first-column">
              <label for="numero-adultos">NÚMERO DE ADULTOS NA CASA:</label>
              <input type="text" id="numero-adultos" name="numero-adultos" placeholder="Ex: 1">
              <label for="numero-criancas">NÚMERO DE CRIANÇAS NA CASA:</label>
              <input type="text" id="numero-criancas" name="numero-criancas" placeholder="Ex: 2">
            </div>
          </div>
        </div>
        <br>
        <div class="container-input">
          <label for="sem-criancas">
            <input type="radio" id="sem-criancas" name="concorda" value="nao"> NÃO TENHO CRIANÇAS EM CASA
          </label>
        </div>
        <br>
        <div class="">
          <label for="motivo-adotar">POR QUE ADOTAR UM GATINHO?</label><br>
          <textarea id="motivo-adotar" name="motivo-adotar" placeholder="" required></textarea>
        </div>
      </div>
      <br>
      <!--CASA-->
      <div class = "casa">
        <h4>SOBRE SUA CASA</h4><br>
          <div>
            <label>SE SUA CASA É ALUGADA, O PROPRITÁRIO PERMITE ANIMAIS?</label><br>
            <input type="radio" id="sim" name="concorda" value="sim" required>
            <label for="sim">Sim</label><br>
            <input type="radio" id="nao" name="concorda" value="nao" required>
            <label for="nao">Não</label><br>
            <input type="radio" id="casa-propria" name="casa-propria" value="casa-propria" required>
            <label for="sim">Minha casa é própria</label>
          </div>
        <br>
        <div>
          <label>VOCÊ MORA EM:</label><br>
            <input type="radio" id="casa-aberta" name="casa-aberta" value="casa-aberta" required>
            <label for="casa">Casa aberta (o gatinho poderá entrar e sair livremente para passear)</label><br>
            <input type="radio" id="casa-fechada" name="casa-fechada" value="casa-fechada" required>
            <label for="casa">Casa fechada (não vou deixar meu gato sair)</label><br>
            <input type="radio" id="casa-condoinio" name="casa-condominio" value="casa-condominio" required>
            <label for="casa">Casa de condominio</label><br>
            <input type="radio" id="apto" name="apto" value="apto" required>
            <label for="apto">Apartamento</label><br>
            <input type="radio" id="apto-cobertura" name="apto-cobertura" value="apto-cobertura" required>
            <label for="apto-cobertura">Apartamento tipo cobertura</label><br>
            <input type="radio" id="apto-terreo" name="apto-terreo" value="apto-terreo" required>
            <label for="apto-terreo">Apartamento no andar térreo</label>
        </div>
        <br>
        <div>
            <label>DENTRO DA SUA CASA OU APARTAMENTO (DESCONSIDERE ÁREAS COMUNS EM SEU COMDOMÍNIO), VOCÊ PUSSUI:</label>
            <input type="radio" id="lazer" name="lareira" value="lareira" required>
            <label for="lareira">Lareira</label><br>
            <input type="radio" id="lazer" name="churrasqueira" value="churrasqueira" required>
            <label for="churrasqueira">Churrasqueira</label><br>
            <input type="radio" id="lazer" name="piscina" value="piscina" required>
            <label for="piscina">Piscina</label><br>
            <input type="radio" id="lazer" name="lazer" value="lazer" required>
            <label for="lazer">Alguma parte que não pode ser telada como, por exemplo, respiro do aquecedor a gás</label>
        </div>
        <br>
        <div>
          <label>SOBRE AS BASCULANTES, ELAS SÃO DO TIPO:</label>
          <div>
            <input type="radio" id="simples" name="basculantes" value="simples" required>
            <label for="simples">
              <img src="#" alt="Basculante Simples">
              Simples
            </label>
          </div>
          <div>
            <input type="radio" id="dupla" name="basculantes" value="dupla" required>
            <label for="dupla">
              <img src="#" alt="Basculante Dupla ou Múltipla">
              Dupla ou Múltipla
            </label>
          </div>
          <div>
            <input type="radio" id="nao-tenho" name="basculantes" value="nao-tenho" required>
            <label for="nao-tenho">
              <img src="#" alt="Não Tenho Basculantes">
              Não tenho Basculantes
            </label>
          </div><br>
        </div>

      </div>
        
      <!-- Animais -->

      <div class = "animais">
        <h4>SEUS ANIMAIS</h4>
        <fieldset>
          <legend>JÁ TEVE GATOS?</legend>
          <label for="teve-gatos-sim">
            <input type="radio" id="teve-gatos-sim" name="teve-gatos" value="sim" required>
            Sim
          </label>
          <label for="teve-gatos-nao">
            <input type="radio" id="teve-gatos-nao" name="teve-gatos" value="nao" required>
            Não
          </label>
        </fieldset>
        <br>
        <div>
          <label>SE VOCÊ JÁ TEVE GATOS, O QUE ACONTECEU COM ELES?</label>
          <textarea name="motivo" id="motivo" placeholder="" required></textarea>
        </div>
        <br>
        <div>
           <label>TEM OUTROS ANIMAIS EM CASA?</label>
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
            Sim, outro(s) <input type="text" placeholder="Qual(s)?" style="font-size: 10px;">
          </label><br>

          <label for="nao-tem-animais">
            <input type="radio" id="nao-tem-animais" name="outros-animais" value="nao" required>
            Não
          </label>
        </div>
       
      </div>
        
      <!--Condição -->

      <div class = "condicao">
        <h4>ADOÇÃO É COMPROMISSO E RESPONSABILIDADE</h4><br>
        <div class="">
          <div>
            <label style="font-size: 15px; width: 10%;">HÁ QUANTO TEMPO VOCÊ ESTÁ PLANEJANDO ESSA ADOÇÃO?</label>
            <input type="text" name="planejamento" placeholder="Em meses" required>
          </div>
          <br>
          <div>
            <label style="font-size: 15px; width: 10%;">QUEM CUIDARÁ DO GATO QUANDO FOR VIAJAR A TRABALHO OU DE FÉRIAS?</label>
            <input type="text" name="responsavel-viagem" placeholder="" required><br><br>
          </div>
  
          <p>Saiba que você terá que acrescentar no seu orçamento os gastos com alimentação de boa qualidade (aproximadamente R$ 170 por mês), vacinas e atendimento veterinário (aproximadamente R$ 400 anualmente).</p>
          <br>
          <fieldset>
            <legend>JÁ TEVE GATOS?</legend>
            <label for="teve-gatos-sim">
              <input type="radio" id="teve-gatos-sim" name="teve-gatos" value="sim" required>
              Sim
            </label>
            <label for="teve-gatos-nao">
              <input type="radio" id="teve-gatos-nao" name="teve-gatos" value="nao" required>
              Não
            </label>
          </fieldset><br>

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
              <label>O QUE VOCÊ FARÁ SE SEU GATO FUIR?</label>
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
            <legend>VOCÊ ESTÁ PREPARADO PARA ESSE COMPROMISSO?</legend>
            <label for="compromisso-sim">
              <input type="radio" id="compromisso-sim" name="compromisso" value="sim" required>
              Sim
            </label>
            <label for="compromisso-nao">
              <input type="radio" id="compromisso-nao" name="compromisso" value="nao" required>
              Não
            </label>
            <label for="compromisso-nao-sabe">
              <input type="radio" id="compromisso-nao-sabe" name="compromisso" value="nao-sabe" required>
              Não sei
            </label>
          </fieldset><br>

          <fieldset>
            <legend>RESPONSABILIDADE COM A SAÚDE DO GATO</legend>
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
          </fieldset><br>
        </div>


        <h4>CONDIÇÕES</h4><br>
        <p>VOCÊ CONCORDA...</p>

        <fieldset>
          <legend>CONDICIONANTES DA ADOÇÃO</legend>
          <label for="vistoria-sim">
            ... que sua casa seja vistoriada para averiguação das respostas acima?
            <input type="radio" id="vistoria-sim" name="vistoria" value="sim" required>
            Sim
            <input type="radio" id="vistoria-nao" name="vistoria" value="nao" required>
            Não
          </label><br>

          <label for="devolver-sim">
            ... em nos devolver o gatinho se por qualquer motivo não puder continuar com ele?
            <input type="radio" id="devolver-sim" name="devolver" value="sim" required>
            Sim
            <input type="radio" id="devolver-nao" name="devolver" value="nao" required>
            Não
          </label><br>

          <label for="nao-repassar-sim">
            ... em não repassar o gatinho a ninguém sem antes nos consultar?
            <input type="radio" id="nao-repassar-sim" name="nao-repassar" value="sim" required>
            Sim
            <input type="radio" id="nao-repassar-nao" name="nao-repassar" value="nao" required>
            Não
          </label><br>

          <label for="avisar-alteracao-sim">
            ... em nos avisar em caso de alteração de endereço, telefone, etc?
            <input type="radio" id="avisar-alteracao-sim" name="avisar-alteracao" value="sim" required>
            Sim
            <input type="radio" id="avisar-alteracao-nao" name="avisar-alteracao" value="nao" required>
            Não
          </label><br>

          <label for="contrato-assinatura-sim">
            ... em assinar um contrato de adoção no ato da entrega, responsabilizando pelos cuidados com o animal e sua segurança?
            <input type="radio" id="contrato-assinatura-sim" name="contrato-assinatura" value="sim" required>
            Sim
            <input type="radio" id="contrato-assinatura-nao" name="contrato-assinatura" value="nao" required>
            Não
          </label><br>
        </fieldset><br>


        <h4>COMENTÁRIOS</h4><br>
        <fieldset>
          <legend>COMO VOCÊ CONHECEU A MANSÃO DOS CATS?</legend>
          <label for="indicacao-amigos">
            <input type="radio" id="indicacao-amigos" name="conheceu" value="Indicação de amigos ou familiares" required>
            Indicação de amigos ou familiares
          </label><br>

          <label for="indicacao-veterinarios">
            <input type="radio" id="indicacao-veterinarios" name="conheceu" value="Indicação de veterinários" required>
            Indicação de veterinários
          </label><br>

          <label for="instagram">
            <input type="radio" id="instagram" name="conheceu" value="Pelo Instagram" required>
            Pelo Instagram
          </label><br>

          <label for="facebook">
            <input type="radio" id="facebook" name="conheceu" value="Pelo Facebook" required>
            Pelo Facebook
          </label><br>

          <label for="outros">
            <input type="radio" id="outros" name="conheceu" value="Outros" required>
            Outros
          </label><br>
        </fieldset>
        <br>

        <p>Não consegue enviar? Envie as respostas deste formulário para adocoes@adoteumgatinho.org.br</p>
        <p>Este formulário será respondido em até 48hs. Contamos com a sua compreensão em aguardar este prazo. Verifique sua caixa de spam caso não receba a nossa resposta.</p><br>

        <fieldset>
          <legend>INFORMAÇÕES IMPORTANTES</legend>
          <textarea id="info" name="info" rows="10" cols="50" readonly>
      IMPORTANTE: Abandonar, soltar, deixar fugir, não alimentar, acorrentar, bater, amedrontar e deixar acasalar indiscriminadamente são formas de maus tratos com pena prevista na lei. O Adote um Gatinho atuará conforme artigo 164 do Código Penal, artigo 32 da Lei Federal 9.605, de 12 de fevereiro de 1998 (Lei de Crimes Ambientais), e da Lei Municipal 13.131, de 18 de maio de 2001 (Lei de Posse Responsável), contra qualquer um que descumpra as determinações previstas, sejam estes adotantes ou não. Em caso de dúvidas, busque informações e auxílios de profissionais veterinários e nunca de curiosos ou da internet.
          </textarea>
        </fieldset>

        <br>
                <!-- Botão de enviar -->
        <button type="submit">ENVIAR FORMULÁRIO</button>
        
        <!-- Botão de voltar -->
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
              <li><a href="adotar.php" class="menu-button" aria-label="Acesse o formulário para adoção">Quero adotar</a></li>
              <li><a href="ajudar.php" class="menu-button" aria-label="Descubra como você pode ajudar">Quero ajudar</a></li>
            </ul>
          </div>
        </div>
        <p class="copyright"><img src="assets/copyright.png" alt="Copyright" aria-hidden="true">2024 - Mansão dos Cats. Todos os direitos reservados.</p>
      </section>

 
  <script src="cep.js"></script>
</body>

</html>