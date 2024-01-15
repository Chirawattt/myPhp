//* Javascript code for hidden element and change title after choose input radio

document.getElementById('row-number2').style.display = "none";
document.getElementById('title-num1').innerHTML = "รัศมี";
document.getElementById('inputNum1').setAttribute('placeholder','ค่ารัศมี');

function circleSet() {
    document.getElementById('row-number2').style.display = "none";
    document.getElementById('title-num1').innerHTML = "รัศมี";
    document.getElementById('inputNum1').setAttribute('placeholder','ค่ารัศมี');
}

function triangleSet() {
    document.getElementById('row-number2').style.display = "";
    document.getElementById('title-num1').innerHTML = "ฐาน";
    document.getElementById('title-num2').innerHTML = "สูง";
    document.getElementById('inputNum1').setAttribute('placeholder','ค่าฐาน');
    document.getElementById('inputNum2').setAttribute('placeholder','ค่าสูง');
}

function squareSet() {
    document.getElementById('row-number2').style.display = "";
    document.getElementById('title-num1').innerHTML = "กว้าง";
    document.getElementById('title-num2').innerHTML = "ยาว";
    document.getElementById('inputNum1').setAttribute('placeholder','ค่ากว้าง');
    document.getElementById('inputNum2').setAttribute('placeholder','ค่ายาว');
}

