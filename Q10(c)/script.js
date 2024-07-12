function checkPrime(event){
    event.preventDefault()
    const number =parseInt( event.target.number.value)
    let isPrime = true
    for(let i=2;i<number;i++){
        if(number%i == 0){
            isPrime = false
            break
        }
        if(isPrime){
            document.getElementById('primeTable').innerHTML += 
            `
            <tr>
            
            <td> ${i} </td>
            </tr>
            `
        }
    }
   
}