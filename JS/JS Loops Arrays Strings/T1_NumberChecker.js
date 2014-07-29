function numberChecker(n) {
    var nums = [];
    for (var i = 1; i <= n; i++) {
        if ((i % 4 == 0) || (i % 5 == 0)) {
            continue;
        }
        nums.push(i);
    }

console.log(nums.join(','))}

console.log(numberChecker(20));
console.log(numberChecker(1));
console.log(numberChecker(13));