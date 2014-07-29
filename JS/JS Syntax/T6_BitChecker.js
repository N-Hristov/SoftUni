function bitChecker(value) {
    var number = parseInt(value);
    var binaryString = number.toString(2);

    if (binaryString.substr(binaryString.length-3,1) == "1"){
        return true;
    } else {
        return false
    }

}
console.log(bitChecker(333));
console.log(bitChecker(425));
console.log(bitChecker(2567564754));
