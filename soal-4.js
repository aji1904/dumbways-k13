function waktu(x){
    if(x <= 3){
        biaya = 2000
        total = x * 2000
        console.log('Biaya = '+total)
    }else{
        biayaLanjutan = (x-3) * 1000
        biayaAwal = 3 * 2000
        totalBiaya = biayaAwal + biayaLanjutan
        if(totalBiaya >= 10000){
            console.log('Biaya = 10000')
        }else{
            console.log('Biaya = '+totalBiaya)
        }
    }
}

console.log(waktu(1))
console.log(waktu(3))
console.log(waktu(4))