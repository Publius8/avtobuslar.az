// ���������
var addUser = 2;
addUser++
console.log(addUser);

// ���������
var removeUser = 3;
removeUser--
console.log(removeUser);

// ���������� � ���������� ����� ������ �� � ����� ����������

// ����������� �����
var userCounter = 0;
var userPuk = userCounter++
console.log(userPuk);

// ���� �������� ����� ����� �����  ���������� �����  ����������, �� �� �������� ��������
var useraCounter = 0;
var useruPuk = ++useraCounter
console.log(useruPuk);

// ���� ����� ��������� � ��� ���� �������� ������� ���������� �� ���������� - ����� ����������� �����
var userOmega = 0;
console.log(userOmega++);
console.log(userOmega);

// � ������ ����� ���������� ���������� �����, � ����� ���������
var userSaint = 0;
var newUser = 2 * ++userSaint;
console.log(newUser);


// ���������� ���������
// ���������� �������
console.log('�' > '�');

// ���������� �������
console.log('������' > '�������');

// ����������� ��������
console.log('�������' > '�����');

// �������
console.log('���������' > '���������');

// ��������� ������ �����
var itemA = 0;
var itemB = "0";
console.log(Boolean(itemA));
console.log(Boolean(itemB));

console.log(itemA == itemB);

// ��������� �������� ��������� ��� �� ��������� ��������� ��������� ��� ���������� �����
console.log(0 === false);
console.log('007' === 7);
console.log('58' !== 58);

// �������  ���������
console.log(null === undefined);

// �� ������� ���������
console.log(null == undefined);

// �������� ���
console.log(true || false);
console.log(true || true);         // ���� ���� ���� �� ���� ������� true , �� ��������� ������ ��
console.log(false || true);
console.log(false || false);

// ������� �������� � ����������
var userNickName = '';
var userLoggin = 'Javad';
var uber = userNickName || userLoggin || "��� ��������";
console.log(uber);

// �������� && (�)
console.log(true && true);
console.log(false && true);          // ���� ���� �� ���� ������� false, �� ����� ����� false
console.log(true && false);
console.log(false && false);

// ��������� ��������� && ������, ��� ��������� ||
console.log(1 && 5 || 4 && 3)

// �������� ! (��)
console.log(!true);
console.log(!null);
console.log(!1);
console.log(!'');
console.log(!'���������');

// ��������� ! (��) ����� ������� ����� ������ ����������
// ��������� !! ����� true

// �������� ����������� � null ??
// �������� ���������� ������ ��������, ���� �� ��  