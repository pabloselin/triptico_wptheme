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
