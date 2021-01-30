'use strict';

const luxuryClassMinusBtn = document.querySelector('.luxury-class-minus');
const luxuryClassPlusBtn = document.querySelector('.luxury-class-plus');
const firstClassMinusBtn = document.querySelector('.first-class-minus');
const firstClassPlusBtn = document.querySelector('.first-class-plus');

const luxuryClassTicket = document.querySelector('.luxury-class-ticket-amount');
const firstClassTicket = document.querySelector('.first-class-ticket-amount');

luxuryClassPlusBtn.addEventListener('click', function () {
    increaseSpinner(luxuryClassTicket);
    grandTotal();
});

luxuryClassMinusBtn.addEventListener('click', function () {
    decreaseSpinner(luxuryClassTicket);
    grandTotal();
});

firstClassPlusBtn.addEventListener('click', function () {
    increaseSpinner(firstClassTicket);
    grandTotal();
});

firstClassMinusBtn.addEventListener('click', function () {
    decreaseSpinner(firstClassTicket);
    grandTotal();
});

// Increse Spinner

function increaseSpinner(itemPlus) {
    itemPlus.value++;
    itemPlus.value * 150;
}

function decreaseSpinner(itemMinus) {
        itemMinus.value--;
        itemMinus.value * 150;
    
}

//Total Price Count
function grandTotal() {
    let getLuxuryClassPrice = luxuryClassTicket.value * 150;
    let getFirstClassPrice = firstClassTicket.value * 100;

    let subTotal = (document.querySelector('.subtotal').textContent = getLuxuryClassPrice + getFirstClassPrice);
    let userSubTotal = (document.querySelector('.user-subtotal').textContent = getLuxuryClassPrice + getFirstClassPrice);

    let vat = (document.querySelector('.vat').textContent = Math.round(subTotal * 0.1));
    let userVat = (document.querySelector('.user-vat').textContent = Math.round(subTotal * 0.1));

    let total = (document.querySelector('.total').textContent = subTotal + vat);
    let userTotal = (document.querySelector('.user-total').textContent = subTotal + vat);
}

document.querySelector('.book-now').addEventListener('click', function () {
    document.querySelector('.booking-form').style.display = 'none';
    document.querySelector('.booking-details').style.display = 'block';

    grandTotal();
    //increaseSpinner();

    const startFrom = document.querySelector('.start-from').value;
    const endTo = document.querySelector('.end-to').value;
    const busDeparture = document.querySelector('.bus-departure').value;
    const busReturn = document.querySelector('.bus-return').value;
    const firstClassTicket = document.querySelector('.luxury-class-ticket-amount').value;
    const economyTicket = document.querySelector('.first-class-ticket-amount').value;

    document.querySelector('.user-start-from').textContent = startFrom;
    document.querySelector('.user-end-to').textContent = endTo;
    document.querySelector('.user-departure-date').textContent = busDeparture;
    document.querySelector('.user-return-date').textContent = busReturn;
    document.querySelector('.user-first-class').textContent = firstClassTicket;
    document.querySelector('.user-economy-class').textContent = economyTicket;
});
