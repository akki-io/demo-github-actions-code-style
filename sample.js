function fruit(name, color) {
    const obj = {};
    obj.name = name;
    obj.color = color;
    obj.intro = function () {
        alert('The fruit is ' + obj.name + ' and the color is ' + obj.color);
    };
    return obj;
}
