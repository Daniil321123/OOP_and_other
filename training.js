let a = [4, 2, 5, 19, 13, 0, 10],
    sum = 0;
for(let i=0;i<a.length;i++) {
    sum += Math.pow(a[i], 3);
}
document.write(Math.sqrt(sum));