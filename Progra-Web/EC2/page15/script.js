document.addEventListener('DOMContentLoaded', () => {
    const select = document.getElementById('selector-figura');
    select.value = 'circulo';
    getInputs(select.value);

    select.addEventListener('change', () => {
        getInputs(select.value);
    });
});

function createInputArea(labelText, id) {
    const label = document.createElement('label');
    label.setAttribute('for', id);
    label.textContent = labelText;

    const input = document.createElement('input');
    input.setAttribute('type', 'number');
    input.setAttribute('id', id);
    input.setAttribute('name', id);

    return { label, input };
}

function loadInputs(inputAreas) {
    const inputsSection = document.getElementById('inputs-section');
    inputsSection.innerHTML = ''; // Limpiar la sección de inputs
    inputAreas.forEach(element => {
        inputsSection.appendChild(element.label);
        inputsSection.appendChild(element.input);
    });
}

function getInputs(figura) {
    const figuraDefault = 'circulo';

    const inputs = {
        circulo: () => {
            const inputAreas = [createInputArea('Radio:', 'radio')];
            loadInputs(inputAreas);
        },
        cuadrado: () => {
            const inputAreas = [createInputArea('Lado:', 'lado')];
            loadInputs(inputAreas);
        },
        triangulo: () => {
            const inputAreas = [
                createInputArea('Base:', 'base'),
                createInputArea('Altura:', 'altura')
            ];
            loadInputs(inputAreas);
        },
        rombo: () => {
            const inputAreas = [
                createInputArea('Diagonal mayor:', 'd-mayor'),
                createInputArea('Diagonal menor:', 'd-menor')
            ];
            loadInputs(inputAreas);
        },
        pentagono: () => {
            const inputAreas = [
                createInputArea('Longitud de lado:', 'long-lado'),
                createInputArea('Apotema:', 'apotema')
            ];
            loadInputs(inputAreas);
        },
        trapecio: () => {
            const inputAreas = [
                createInputArea('Base mayor:', 'b-mayor'),
                createInputArea('Base menor:', 'b-menor'),
                createInputArea('Altura:', 'altura')
            ];
            loadInputs(inputAreas);
        },
        cubo: () => {
            const inputAreas = [createInputArea('Lado:', 'lado')];
            loadInputs(inputAreas);
        },
        cilindro: () => {
            const inputAreas = [
                createInputArea('Radio:', 'radio'),
                createInputArea('Altura:', 'altura')
            ];
            loadInputs(inputAreas);
        }
    };

    // Ejecutar la función para la figura seleccionada o la figura por defecto (círculo)
    (inputs[figura] ?? inputs[figuraDefault])();
}