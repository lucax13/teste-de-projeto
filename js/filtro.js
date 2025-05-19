 document.addEventListener("DOMContentLoaded", function () {
      const botoes = document.querySelectorAll(".filter-btn");
      const eventos = document.querySelectorAll(".evento");

      botoes.forEach(botao => {
        botao.addEventListener("click", () => {
          const genero = botao.getAttribute("data-genero");

          eventos.forEach(evento => {
            const generoEvento = evento.getAttribute("data-genero");
            if (genero === "todos" || generoEvento === genero) {
              evento.style.display = "block";
            } else {
              evento.style.display = "none";
            }
          });
        });
      });
    });
