var dataKey = ['dumb','ways','the','best']
var word = 'dumbways'

function data( x, y){
    var str = y;
    var rgx = new RegExp(x);
    var result = rgx.test(str)
    console.log(result)
}

console.log(data(dataKey[0],word));
console.log(data(dataKey[1],word));
console.log(data(dataKey[2],word));
console.log(data(dataKey[3],word));