function isPrime(value) {
    if (isNaN(value) || !isFinite(value) || value%1 || value<2) return false;
    var m=Math.sqrt(value);
    for (var i=2;i<=m;i++) if (value%i==0) return false;
    return true;
}
console.log(isPrime(7));
console.log(isPrime(254));
console.log(isPrime(587));
