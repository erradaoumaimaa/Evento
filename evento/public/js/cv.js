const removeInput = (e) => {
    const inputWrapper = e.target.closest('.input-wrapper');
    inputWrapper.children[inputWrapper.childElementCount - 2].children[2].classList.remove('hidden');
    inputWrapper.children[inputWrapper.childElementCount - 2].children[1].classList.remove('hidden');
    e.target.closest('.input-duplicate').remove();
}

const addInput = (e) => {
    let input = e.target.closest('.input-duplicate').cloneNode(true);
    input.children[1].classList.remove('hidden');
    e.target.closest('.input-wrapper').appendChild(input);
    e.target.classList.add('hidden');
}
