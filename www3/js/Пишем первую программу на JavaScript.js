"use strict";
console.log('Hello world');
console.log('Star wars');
['����','JS'].forEach(alert);
var myAge = 18;
console.log(myAge);
// ���� ���������� � ����������� ���������� ����� �������������� � ����� ��������� ��������, ������ ���� ��� � ������ ������ ��� ���� ���� � �����,� ������ �� ��� ��������
//const myAge = 18;
//myAge = 15;          ��� ������� ������, ��� ��� ��������� �������� ������
const myProfile = {
    age:20,
    name:'Javad',
    message:'I need pizza'
}                                       //� ���� �� ������� ����� ������ ��������� ������� ����� ��������
console.log(myProfile);                 // � ������ ������� ���� �������� ������ �������� � 20 �� 18
myProfile.age = 18;
console.log(myProfile);

// ������� ��������� � �������, �������� ���
let block = document.quarySelector('.block');

// �������� null
console.log(block);

// ������ ��� object
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
let userName = "������";
console.log(typeof userName);

let userName2 = '������';
console.log(typeof userName2);

