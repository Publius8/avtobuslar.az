var message = "������ ������";
if (2 > 1){
    console.log(message);
}

var messageIb = "������ �������";
var number = 5;
if (number > 2){
    console.log(messageIb);
} else{
    console.log('������� �� ��������� :(');
}

var messageOp = "������ �����������";
var numbera = 3;
if (numbera > 50){
    console.log('3 ������ 50');
}else if (numbera > 30){
    console.log('3 ������ 30');
} else if (numbera > 20){
    console.log('3 ������ 20');
} else if(numbera > 2){
    console.log('3 ������ 2');
} else{
    console.log('������� �� ��������� :(');
}

// �������� �������� "?"
var messafe = "������";
var messafeEnd = (5 > 1) ? ",�����" : ", ������";

messafe += messafeEnd;  // �������� �����
console.log(messafe);