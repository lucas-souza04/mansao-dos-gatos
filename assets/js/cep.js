function preencherDados(dados) {
  document.getElementById("logradouro").value = dados.logradouro;
  document.getElementById("bairro").value = dados.bairro;
  document.getElementById("cidade").value = dados.localidade;
  document.getElementById("estado").value = dados.uf;
}

const pesquisarCep = async () => {
  const cep = document.getElementById("cep").value;
  const url = `https://viacep.com.br/ws/${cep}/json/`;

  const dados = await fetch(url);
  const endereco = await dados.json();
  preencherDados(endereco);
};

document.getElementById("cep").addEventListener("focusout", pesquisarCep);