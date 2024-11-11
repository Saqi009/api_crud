const addFormElement = document.querySelector('#add-form');

addFormElement.addEventListener('submit', async function (event) {
    event.preventDefault();

    const nameElement = document.querySelector('#name');
    const capitalElement = document.querySelector('#capital');
    const currencyElement = document.querySelector('#currency');

    let nameElementValue = nameElement.value;
    let capitalElementValue = capitalElement.value;
    let currencyElementValue = currencyElement.value;

    if (nameElementValue == '' || nameElementValue === undefined) {
        nameElement.classList.add('is-invalid');
    }
    if (capitalElementValue == '' || capitalElementValue === undefined) {
        capitalElement.classList.add('is-invalid');
    }
    if (currencyElementValue == '' || currencyElementValue === undefined) {
        currencyElement.classList.add('is-invalid');
    }

    if (nameElementValue != '' && capitalElementValue != '' && currencyElementValue != '') {


        const data = {
            name: nameElementValue,
            capital: capitalElementValue,
            currency: currencyElementValue,
        }

        const response = await fetch(addRoute, {
            method: 'POST',
            body: JSON.stringify(data),
            headers: {
                "Content-Type": "application/json",
            },
        });

        const result = await response.json();

        console.log(result);

        if (result.success) {
            console.log('Good to go!');

            nameElementValue = '';
            capitalElementValue = '';
            currencyElementValue = '';

        }

        if (result.errors) {
            console.log('Fill all the blanks');

            nameElement.classList.add('is-invalid');
            capitalElement.classList.add('is-invalid');
            currencyElement.classList.add('is-invalid');

        }

        if (result.failure) {
            console.log('Something went wrong!');
        }

    }

});
