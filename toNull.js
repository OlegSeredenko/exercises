/*сделать программу, которая принимает с клавиатуры числа (если положительное число, то вывод слова "плюс", если отрицательное, то "минус"), пока не будет введен ноль
*/
let num = 1;
while (num != 0) {
    num = prompt('Введите число ');
    num = Number(num);
    if (num > 0) {
        console.log("плюс");
    } else if (num < 0) {
        console.log("минус");
    }
}
console.log("окончание программы");