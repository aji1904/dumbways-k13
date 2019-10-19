const diamond = length =>{
    let string = '';
    var data = length - 2
    for (let i = 1; i<=data; i++){
        for(j= 0; j<(data-i); j++)
            string += ' = '
        for(j=1; j<=i ;j++)
            string +=' @ '
        for(k=1; k<i; k++)
            string +=' @ '
        for(j= (data+i); j<=((data*2)-1); j++)
            string += ' = '

        string +='\n'
    }
    for (let i = 2; i<=data; i++){
        for(j= 0; j<(i-1); j++)
            string += ' = '
        for(j=(data+1); j> (1+i) ;j--)
            string +=' @ '
        for(k=2; k<=(length-i); k++)
            string +=' @ '
        for(j=((length-1)-i) ; j<data; j++)
            string += ' = '
        
        string +='\n'
    }
    return string
}

console.log(diamond(5))
console.log('\n')
console.log(diamond(7))