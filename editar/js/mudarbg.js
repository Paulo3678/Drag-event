const background_disponiveis = document.querySelectorAll(".bg-opt");

background_disponiveis.forEach(botao => {
    botao.addEventListener("click", e=>{
        const botao_clicado = e.target;
        const cor_do_botao = window.getComputedStyle(botao_clicado, null).getPropertyValue("background-color");
        
        const botao_ativo = document.querySelector(".bg-opt.selected");
        if(botao_ativo != null){
            botao_ativo.classList.remove("selected");
        }

        botao_clicado.classList.add("selected");
        document.querySelector(".card-imagem").style.backgroundColor = cor_do_botao;
    })
})
