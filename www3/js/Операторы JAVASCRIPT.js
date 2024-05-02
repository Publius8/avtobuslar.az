// Инкремент
var addUser = 2;
addUser++
console.log(addUser);

// Декмерент
var removeUser = 3;
removeUser--
console.log(removeUser);

// Декременты и Инкременты можно писать до и после переменной

// Постфиксная форма
var userCounter = 0;
var userPuk = userCounter++
console.log(userPuk);

// Если операция стоит сразу после  объявление новой  переменной, то он поменяет значение
var useraCounter = 0;
var useruPuk = ++useraCounter
console.log(useruPuk);

// Если нужно увеличить и при этом получить значние переменной до увеличения - нужна постфиксная форма
var userOmega = 0;
console.log(userOmega++);
console.log(userOmega);

// В начале будет выполнятся Префиксная форма, а потом умножение
var userSaint = 0;
var newUser = 2 * ++userSaint;
console.log(newUser);


// ператорные сравнения
// Алфавитный порядок
console.log('Б' > 'А');

// Алфавитный порядок
console.log('Скрипт' > 'Скрипка');

// Колличество символов
console.log('Слайдер' > 'Слайд');

// Регистр
console.log('Фрилансер' > 'фрилансер');

// Сравнение разных типов
var itemA = 0;
var itemB = "0";
console.log(Boolean(itemA));
console.log(Boolean(itemB));

console.log(itemA == itemB);

// Операторы строгого равентсва или не равенства проверяет равенство без приведения типов
console.log(0 === false);
console.log('007' === 7);
console.log('58' !== 58);

// Строгое  равенство
console.log(null === undefined);

// Не строгое равенство
console.log(null == undefined);

// Оператор ИЛИ
console.log(true || false);
console.log(true || true);         // Если есть хотя бы один варинат true , то выводится именно он
console.log(false || true);
console.log(false || false);

// Присвое значения в переменную
var userNickName = '';
var userLoggin = 'Javad';
var uber = userNickName || userLoggin || "Без названия";
console.log(uber);

// Оператор && (И)
console.log(true && true);
console.log(false && true);          // Если хотя бы одие операнд false, то ответ будет false
console.log(true && false);
console.log(false && false);

// Приоритет оператора && больше, чем оператора ||
console.log(1 && 5 || 4 && 3)

// Оператор ! (НЕ)
console.log(!true);
console.log(!null);
console.log(!1);
console.log(!'');
console.log(!'фрилансер');

// Приоритет ! (НЕ) самый высокий среди других операторов
// Операторы !! дадут true

// Оператор объединения с null ??
// Оператор возвращает первый аргумент, если он не  