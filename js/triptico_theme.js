// WARNING: I haven't yet tested this
// - It's likely that it will strip events upon shuffling
function shuffle(elems) {
    console.log(elems);
    allElems = (function () {
        var ret = [],
            l = elems.length;
        while (l--) {
            ret[ret.length] = elems[l];
        }
        return ret;
    })();

    var shuffled = (function () {
            var l = allElems.length,
                ret = [];
            while (l--) {
                var random = Math.floor(Math.random() * allElems.length),
                    randEl = allElems[random].cloneNode(true);
                allElems.splice(random, 1);
                ret[ret.length] = randEl;
            }
            return ret;
        })(),
        l = elems.length;

    while (l--) {
        elems[l].parentNode.insertBefore(shuffled[l], elems[l].nextSibling);
        elems[l].parentNode.removeChild(elems[l]);
    }
}

// Usage:
let performances = document.querySelectorAll(".performance-item-link .imgs");

for (let i = 0; i < performances.length; i++) {
    shuffle(performances[i].children);
}

//Menu Toggle
let menuToggle = document.getElementById("menuToggle");
let mainMenu = document.getElementById("main-nav");

menuToggle.addEventListener("click", function () {
    mainMenu.classList.toggle("active");
    console.log("togglemenu");
    if (mainMenu.classList.contains("active")) {
        menuToggle.innerHTML =
            '<span class="top">cerrar</span><span class="bottom">xxx</span>';
    } else {
        menuToggle.innerHTML =
            '<span class="top">menú</span><span class="bottom">===</span>';
    }
});

//Info Toggle
let infoToggle = document.getElementById("infoToggle");
let infoWindow = document.getElementById("infoZone");

if (infoToggle !== null) {
    infoToggle.addEventListener("click", function () {
        infoWindow.classList.toggle("active");
        if (infoWindow.classList.contains("active")) {
            infoToggle.innerHTML = "x";
        } else {
            infoToggle.innerHTML = "info";
        }
    });
}

//Expansor
let buttonExpand = document.querySelectorAll(".buttonexpand");
let mobileExpand = document.querySelector(".buttonexpand-mobile");
console.log(mobileExpand);

for (let i = 0; i < buttonExpand.length; i++) {
    buttonExpand[i].addEventListener("click", function (e) {
        let canvasID = buttonExpand[i].getAttribute("data-expand");
        let canvasEl = document.querySelector(`#${canvasID}`);

        let body = document.querySelector("body");
        let miniInfo = document.querySelector("#infoZonemini");
        canvasEl.classList.toggle("active");
        buttonExpand[i].classList.toggle("pressed");
        body.classList.toggle("expandedCanvas");

        if (canvasID === "centerCanvasWidth") {
            miniInfo.classList.toggle("active");
        } else {
            mobileExpand.classList.toggle("hidden");
        }
    });
}

console.log("lazyload");
let triLazyload = new LazyLoad();
triLazyload.update();
