
const card_icons = document.querySelectorAll(".card-icon");

card_icons.forEach(card => {
    card.addEventListener("click", e => {
        let card_clicado = e.target;
        while(card_clicado.classList.contains("card-icon") == false){
            card_clicado = card_clicado.parentNode;
        }

        const icone = card_clicado.querySelector("i").cloneNode(true);


        // CRIANDO ELEMENTO DRAG
        // <div id="drag_me" class="teste-drag">
        //     <i class="fa-regular fa-face-smile"></i>
        // </div>

        const div_drag = document.createElement("div");
        div_drag.classList.add("teste-drag");
        div_drag.appendChild(icone);

        document.querySelector(".card-imagem").appendChild(div_drag);

        let dir = document.querySelector("#script-drag").src;
        drag_elements = document.querySelectorAll(".teste-drag");
        carrecarDrags(drag_elements);
        // reloadJs('script.js');
    })
});