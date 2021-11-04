


function start(){
 let A = document.getElementById('input_number').value.split(',');
 let B = new Array();
 for( i = 0; i < A.length; i++){
  B.push(A[i] * Math.max(...A))
}

document.getElementById('arrayA').innerHTML = A;
document.getElementById('arrayB').innerHTML = insertionSort(B);

}
function insertionSort(inputArr) {
  let n = inputArr.length;
      for (let i = 1; i < n; i++) {
          // Choosing the first element in our unsorted subarray
          let current = inputArr[i];
          // The last element of our sorted subarray
          let j = i-1; 
          while ((j > -1) && (current < inputArr[j])) {
              inputArr[j+1] = inputArr[j];
              j--;
          }
          inputArr[j+1] = current;
      }
  return inputArr;
}

window.addEventListener('load', function OnWindowLoaded() {
  // набор кнопок
  var signs = [
      '1', '2', '3', '+',
      '4', '5', '6', '-',
      '7', '8', '9', '/', '%', '**', '**0.5',
      '0', '=', '.', 'c'
  ];

  // форма калькулятора
  var calc = document.getElementById('calc');

  // текстовое поле с математическим выражением
  var textArea = document.getElementById('inputVal');

  // Добавление кнопок к форме калькулятора
  signs.forEach(function (sign) {
      var signElement = document.createElement('div');
      signElement.className = 'btn';
      signElement.innerHTML = sign;
      calc.appendChild(signElement);
  });

  // проходит по всем кнопкам калькулятора
  // добавляет обработчик на клик
  document.querySelectorAll('#calc-wrap .btn').forEach(function (button) {
      // Добавляем действие, выполняемое при клике на любую кнопку
      button.addEventListener('click', onButtonClick);
  });

  // функция клика по кнопке калькулятора
  function onButtonClick(e) {
      // e - MouseEvent (содержит информацию о клике)
      if (e.target.innerHTML === 'c') {
          // Если нажата кнопка "с", то стирает все из текстового поля
          textArea.innerHTML = '0';
      } else if (e.target.innerHTML === '=') {
          // Если нажата кнопка "=", то, приведя выражение
          // в текстовом поле к javascript, вычислить значение
          textArea.innerHTML = eval(textArea.innerHTML);
      } else if (textArea.innerHTML === '0') {
          // Если textarea содержит только "0", то
          // стереть "0" и записать
          // значения кнопки в текстовое поле
          textArea.innerHTML = e.target.innerHTML;
      } else {
          // Добавление значения кнопки в текстовое поле
          textArea.innerHTML += e.target.innerHTML;
      }
  }
});