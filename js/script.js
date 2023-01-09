// let dragMe = document.getElementById("drag_me"),
//     /* o x inicial do drag*/
//     dragOfX = 0,
//     /* o y inicial do drag */
//     dragOfY = 0;

// const LARGURA_MAX_BOX = 300;
// const ALTURA_MAX_BOX = 400;

// /* ao segurar o elemento */
// function dragStart(e) {
//     /* define o x inicial do drag */
//     dragOfX = e.pageX - dragMe.offsetLeft;
//     /* define o y inicial do drag */
//     dragOfY = e.pageY - dragMe.offsetTop;

//     /* adiciona os eventos */
//     addEventListener("mousemove", dragMove);
//     addEventListener("mouseup", dragEnd);
// }

// /* ao ser arrastado */
// function dragMove(e) {
//     /* atualiza a posição do elemento */
//     dragMe.style.left = (e.pageX - dragOfX) + 'px';
//     dragMe.style.top = (e.pageY - dragOfY) + 'px';
// }

// /* ao terminar o drag */
// function dragEnd() {
//     /* remove os eventos */
//     removeEventListener("mousemove", dragMove);
//     removeEventListener("mouseup", dragEnd);
//     let posicao_left = (dragMe.style.left).replace("px", "");
//     let posicao_top = (dragMe.style.top).replace("px", "");

//     if (posicao_left > LARGURA_MAX_BOX || posicao_left < 0 || posicao_top > ALTURA_MAX_BOX || posicao_top < 0) {
//         dragMe.style.top = 0;
//         dragMe.style.left = 0;
//     }
// }

// /* adiciona o evento que começa o drag */
// dragMe.addEventListener("mousedown", dragStart);

const drag_elements = document.querySelectorAll(".teste-drag");

drag_elements.forEach(element => {
    let dragMe = element,
        /* o x inicial do drag*/
        dragOfX = 0,
        /* o y inicial do drag */
        dragOfY = 0;

    const LARGURA_MAX_BOX = 300;
    const ALTURA_MAX_BOX = 400;

    /* ao segurar o elemento */
    function dragStart(e) {
        /* define o x inicial do drag */
        dragOfX = e.pageX - dragMe.offsetLeft;
        /* define o y inicial do drag */
        dragOfY = e.pageY - dragMe.offsetTop;

        /* adiciona os eventos */
        addEventListener("mousemove", dragMove);
        addEventListener("mouseup", dragEnd);
    }

    /* ao ser arrastado */
    function dragMove(e) {
        /* atualiza a posição do elemento */
        dragMe.style.left = (e.pageX - dragOfX) + 'px';
        dragMe.style.top = (e.pageY - dragOfY) + 'px';
    }

    /* ao terminar o drag */
    function dragEnd() {
        /* remove os eventos */
        removeEventListener("mousemove", dragMove);
        removeEventListener("mouseup", dragEnd);
        let posicao_left = (dragMe.style.left).replace("px", "");
        let posicao_top = (dragMe.style.top).replace("px", "");

        if (posicao_left > LARGURA_MAX_BOX || posicao_left < 0 || posicao_top > ALTURA_MAX_BOX || posicao_top < 0) {
            dragMe.style.top = 0;
            dragMe.style.left = 0;
        }
    }
    /* adiciona o evento que começa o drag */
dragMe.addEventListener("mousedown", dragStart);
});