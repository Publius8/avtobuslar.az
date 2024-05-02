var message = "Привет мяхяль";
if (2 > 1){
    console.log(message);
}

var messageIb = "Привет манруль";
var number = 5;
if (number > 2){
    console.log(messageIb);
} else{
    console.log('Условие не выполнено :(');
}

var messageOp = "Привет манральхаль";
var numbera = 3;
if (numbera > 50){
    console.log('3 больше 50');
}else if (numbera > 30){
    console.log('3 больше 30');
} else if (numbera > 20){
    console.log('3 больше 20');
} else if(numbera > 2){
    console.log('3 больше 2');
} else{
    console.log('Условие не выполнено :(');
}

// Условный оператор "?"
var messafe = "Привет";
var messafeEnd = (5 > 1) ? ",Мурад" : ", Джавад";

messafe += messafeEnd;  // Сложение строк
console.log(messafe);