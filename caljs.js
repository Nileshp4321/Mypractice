function add() {
    let first = document.getElementById('first').value;
    let second = document.getElementById('second').value;
    let result = parseFloat(first) + parseFloat(second);
    document.getElementById('result').style.visibility = 'visible';
    document.getElementById('result').value = result;
    document.getElementById('res').style.visibility = 'visible';

}
function sub() {
    let first = document.getElementById('first').value;
    let second = document.getElementById('second').value;
    let result = parseFloat(first) - parseFloat(second);
    document.getElementById('result').style.visibility = 'visible';
    document.getElementById('result').value = result;
    document.getElementById('res').style.visibility = 'visible';
}
function multi() {
    let first = document.getElementById('first').value;
    let second = document.getElementById('second').value;
    let result = parseFloat(first) * parseFloat(second);
    document.getElementById('result').style.visibility = 'visible';
    document.getElementById('result').value = result;
    document.getElementById('res').style.visibility = 'visible';
}
function div() {
    let first = document.getElementById('first').value;
    let second = document.getElementById('second').value;
    let result = parseFloat(first) / parseFloat(second);
    document.getElementById('result').style.visibility = 'visible';
    document.getElementById('result').value = result;
    document.getElementById('res').style.visibility = 'visible';
}
function currentResult() {
    let current = document.getElementById('result').value;
    current = parseFloat(current);
    document.getElementById('first').value = current;
    document.getElementById('second').value = 0;
    document.getElementById('res').style.visibility = 'visible'
}

function allclear() {
    let first = document.getElementById('first').value = null;
    let second = document.getElementById('second').value = null;
    document.getElementById('result').style.visibility = 'hidden';
    document.getElementById('result').value = null;
    document.getElementById('res').innerHTML = null;
}
