export class InputNumber extends HTMLElement{
    constructor(){
        super();
    }

    connectedCallback(){
        this.iteration = parseInt(this.getAttribute('data-iteration'))
        let container = createElementWithClass('div','input-number');
        this.input = createInputElement('number')
        this.input.value = this.iteration;
        this.input.setAttribute('class','input-number-field');
        let btnIncrement = createElementWithClass('button', 'btn-increment')
        btnIncrement.textContent = "+"
        // let btnIncrement = document.querySelector('.btn-increment')
        btnIncrement.addEventListener('click',(e) => this.increment(e))
        let btnDecrement = createElementWithClass('button', 'btn-decrement')
        btnDecrement.textContent = "-"

        // let btnDecrement = document.querySelector('.btn-decrement');
        btnDecrement.addEventListener('click', (e) => this.decrement(e))
        container.appendChild(btnDecrement)
        container.appendChild(this.input)
        container.appendChild(btnIncrement)
        this.appendChild(container)
    }
    //increment
    increment(e){
        e.preventDefault();
        let value = this.input.value;
        if(value == "NaN" || value == ""){
            this.input.value = this.iteration;
        }

        this.input.value = parseInt(this.input.value) + this.iteration;
    }

    //reduce
    decrement(e){
        e.preventDefault();
        let value = parseInt(this.input.value,10);

        if(value <= this.iteration){
            this.input.value = this.iteration;
            return;
        }
        this.input.value = this.input.value - this.iteration;
    }

}


function createElementWithClass(name, classname=null){
    let element = document.createElement(name);
    element.setAttribute('class', classname);
    return element;
}

function createInputElement(name,type="text"){
    let input = document.createElement('input');
    input.setAttribute('name', name)
    input.setAttribute('type', type)
    return input;
}
