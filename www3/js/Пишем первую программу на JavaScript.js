"use strict";
console.log('Hello world');
console.log('Star wars');
['Учим','JS'].forEach(alert);
var myAge = 18;
console.log(myAge);
// ЕСЛИ ПЕРЕМЕННЫЕ С ОДИНАКОВЫМИ НАЗВАНИЯМИ МОГУТ ИСПОЛЬЗОВАТЬСЯ И ИМЕТЬ РАЗЛИЧНЫЕ ЗНАЧЕНИЯ, ТОЛЬКО ЕСЛИ ОНИ В РАЗНЫХ БЛОКАХ ИЛИ ЕСТЬ ОДИН В БЛОКЕ,А ДРУГОЙ ЗА ЕГО ПРЕДЕЛОМ
//const myAge = 18;
//myAge = 15;          Это вызывет ошибку, так как констатну заменить нельзя
const myProfile = {
    age:20,
    name:'Javad',
    message:'I need pizza'
}                                       //В свою же очередь даные внитри константы даннные можно поменять
console.log(myProfile);                 // В данном примере были заменены данные возраста с 20 на 18
myProfile.age = 18;
console.log(myProfile);

// Попытка обратится к объекту, которого НЕТ
let block = document.quarySelector('.block');

// Получаем null
console.log(block);

// Вернет тип object
console.log(typeof block);

// Boolean
var car = true;
if(car) {
    console.log(':)');
}    else{
        console.log(':(');
    }

let trueorfFalse = 58 < 18;
console.log(trueorFalse);

//BigInt
const bigInteger = 123456789012345678901234567890n;
console.log(typeof bigInteger);

//String
let userName = "Джавад";
console.log(typeof userName);

let userName2 = 'Джавад';
console.log(typeof userName2);

