function kembalian(x, y){
    var total = x;
    var uang = y;
    var moneyback = (uang - total)
    console.log('kembalian '+moneyback)

    var mod = moneyback%50000
    var hasil = Math.floor(moneyback / 50000)
    console.log('50000 = '+hasil+' lembar')
    
    var mod1 = mod%20000
    var hasil1 = Math.floor(mod / 20000)
    console.log('20000 = '+hasil1+' lembar')
    
    var mod2 = mod1%10000
    var hasil2 = Math.floor(mod1 / 10000)
    console.log('10000 = '+hasil2+' lembar')
    
    var mod3 = mod2%5000
    var hasil3 = Math.floor(mod2 / 5000)
    console.log('5000 = '+hasil3+' lembar')

    console.log(mod3+ ' telah disumbangkan')
    
}

console.log(kembalian(52000, 200000))