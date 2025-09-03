// Função para buscar e exibir as tarefas
async function carregarTarefas() {
    const resposta = await fetch("../api/listar.php");
    const tarefas = await resposta.json();

    const lista = document.querySelector("#listaTarefas");
    lista.innerHTML = ""; // Limpa antes de listar

    tarefas.forEach(t => {
        const li = document.createElement("li");
        li.textContent = t.titulo;

        if (t.concluida == 1) {
            li.style.textDecoration = "line-through";
        }

        // Botão de concluir
        const btnConcluir = document.createElement("button");
        btnConcluir.textContent = t.concluida == 1 ? "Desfazer" : "Concluir";
        btnConcluir.onclick = async () => {
            await fetch("../api/atualizar.php", {
                method: "POST",
                body: JSON.stringify({
                    id:t.id,
                    concluida: t.concluida == 1 ? 0 : 1
                })
            });
            carregarTarefas();
        };

        // Botão de editar
        const btnEditar = document.createElement("button");
        btnEditar.textContent = "Editar";
        btnConcluir.onclick = async () => {
            // Abre o promt para editar o texto
            const novoTitulo = prompt("Editar tarefa:", t.titulo);
            if (novoTitulo && novoTitulo.trim() !== "") {
                await fetch("../api/editar.php", {
                    method: "POST",
                    body: JSON.stringify({
                        id: t.id,
                        titulo:novoTitulo
                    })
                });
                carregarTarefas();
            }
        };

        // Botão excluir
        const btnExcluir = document.createElement("button");
        btnExcluir.textContent = "Excluir";
        btnExcluir.onclick = async () => {
            await fetch("../api/excluir.php", {
                method: "POST",
                body: JSON.stringify({
                    id: t.id
                })
            });
            carregarTarefas();
        };

        li.append(" ", btnConcluir, " ", btnEditar, " ",btnExcluir);
        lista.appendChild(li);
    });
}

document.querySelector("#btnAdicionar").onclick = async () => {
    const titulo = document.querySelector("#novaTarefa").value;
    if (titulo.trim() === "") return;

    await fetch("../api/adicionar.php", {
        method: "POST",
        body: JSON.stringify({
            titulo
        })
    });

    document.querySelector("#novaTarefa").value = "";
    carregarTarefas();
}

carregarTarefas();