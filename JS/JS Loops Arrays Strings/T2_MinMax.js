function findMinMax(nums) {
    var min = Math.min.apply(null, nums);
    var max = Math.max.apply(null, nums);
    return {
        'Min': min,
        'Max': max
    };
}
console.log(findMinMax(([1, 2, 1, 15, 20, 5, 7, 31])));
console.log(findMinMax([2, 2, 2, 2, 2]));