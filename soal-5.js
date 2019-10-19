function nilai(nama, nim, hadir, tugas, UTS, UAS){
    
    console.log('Nama = '+nama)
    console.log('NIM = '+nim)
    
    if( hadir == 0 || tugas == 0 || UTS == 0 || UAS == 0){
        console.log('Nilai = E')
    }else {
        var r_hadir = (10/100) * hadir
        var r_tugas = (20/100) * tugas
        var r_uts = (30/100) * UTS
        var r_uas = (40/100) * UAS
        var Total = r_hadir + r_tugas + r_uts + r_uas
        console.log('Total Nilai = '+Total)
        if(Total >= 80){
            console.log('Nilai = A')
        }else if(Total >= 71 && Total <= 79){
            console.log('Nilai = B')
        }else if(Total >= 61 && Total <=70){
            console.log('Nilai = C')
        }else if(Total >= 50 && Total <= 60){
            console.log('Nilai = D')
        }else {
            console.log('Nilai = E')
        }
    }


}


console.log(nilai('Lucinta', 696969, 14, 0, 80, 96))