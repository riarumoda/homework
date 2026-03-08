function toggleAlignment() {
    const title = document.getElementById('main-title');
    if (title.style.textAlign === 'left') {
        title.style.textAlign = 'center';
    } else {
        title.style.textAlign = 'left';
    }
}

function toggleBgColor() {
    const box = document.getElementById('target-box');
    const title = document.getElementById('main-title');
    box.classList.toggle('bg-active');
    title.classList.toggle('bg-active-title');
}

function displayOddSum() {
    const min = parseInt(document.getElementById('minInput').value);
    const max = parseInt(document.getElementById('maxInput').value);
    const display = document.getElementById('sumResult');
    if (isNaN(min) || isNaN(max)) {
        display.innerText = "Please enter valid numbers";
        return;
    }
    let sum = 0;
    for (let i = min; i <= max; i++) {
        if (i % 2 !== 0) {
            sum += i;
        }
    }
    display.innerText = "Result: " + sum;
}