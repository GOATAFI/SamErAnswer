const primeBox = document.getElementById("primeBox")
function checkPrime(event){
    event.preventDefault()
    const number =parseInt( event.target.number.value)
    let isPrime = true
    for(let i =2;i<number;i++){
        if(number % i == 0){
            isPrime = false
            break
        }
    }
    if(isPrime){
        primeBox.innerHTML = `${number} is prime`
    }
    else{
        primeBox.innerHTML = `${number} is not prime`
    }
}