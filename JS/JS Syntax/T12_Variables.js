function variableTypes(value) {
    var name = value[0];
    var age = value[1];
    var isMale = value[2];
    var food = [];
    for (i = 3; i <= value.length - 1; i++) {
        food[i - 3] = value[i];
    }

    return "My name: " + name + " //type is " + typeof (name) +
        "\nMy age: " + age + " //type is " + typeof (age) +
        "\nI am male: " + isMale + " //type is " + typeof (isMale) +
        "\nMy favourite foods are: " + food + " //type is " + typeof (food);
}

console.log(variableTypes(['Pesho', 22, true, ['fries', 'banana', 'cake']]));