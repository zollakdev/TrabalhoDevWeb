var selectedGames = [
  { name: "Minecraft", price: 19.99 },
  { name: "The Legend of Zelda", price: 29.99 },
  // Adicione outros jogos conforme necessário
];

// Função para mostrar os jogos e o total
function showSelectedGames() {
  var selectedGamesList = document.getElementById("selectedGamesList");
  var totalPrice = document.getElementById("totalPrice");

  // Limpa o conteúdo atual da lista
  if (selectedGamesList) {
    selectedGamesList.innerHTML = "";

    selectedGames.forEach(function (game) {
      var listItem = document.createElement("li");
      listItem.textContent = game.name + " - $" + game.price.toFixed(2);
      selectedGamesList.appendChild(listItem);
    });

    var total = selectedGames.reduce(function (acc, game) {
      return acc + game.price;
    }, 0);

    if (totalPrice) {
      totalPrice.textContent = "Total: $" + total.toFixed(2);
    }
  } else {
    console.error("Elemento com o ID selectedGamesList não encontrado.");
  }
}

window.onload = showSelectedGames;

function confirmPurchase() {
  alert("Compra confirmada! Redirecionando...");
}
