document.getElementById('heading').addEventListener('mouseover',()=>{
    document.getElementById('heading').style.color = "red"
})
document.getElementById('heading').addEventListener('mouseout',()=>{
    document.getElementById('heading').style.color = "black"
})

document.body.addEventListener('keypress',(event)=>{
    const vowel = ['a','e','i','o','u']
    if(vowel.includes(event.key)){
        alert('vowel is pressed')
    }
})

document.getElementById('date').addEventListener('click',()=>{
    const d = new Date()
    document.getElementById('dateShow').innerHTML = d
})