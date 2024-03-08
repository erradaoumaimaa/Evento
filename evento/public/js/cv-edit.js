const sections = Array.from(document.getElementsByClassName('input-wrapper'));
window.addEventListener('DOMContentLoaded', () => {
    sections.forEach((e) => {
        if(e.childElementCount > 2) {
            e.lastElementChild.children[1].classList.remove('hidden');
            Array.from(e.children).forEach((element, i) => {
                if(i > 0 && i < e.childElementCount - 1) {
                    console.log(element);
                    element.children[2].classList.add('hidden');
                }
            })
        }
    })
})
