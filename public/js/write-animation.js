const elements = Array.from(document.querySelectorAll('.write'))

elements.forEach(element => {
    const time = element.dataset.writeTime
    const delay = element.dataset.writeDelay
    writer(element, time, delay)
})

function writer(element, time = 50, delay = 0) {
    const txt_array = element.textContent.split('')
    element.textContent = ''
    setTimeout(() => {
        txt_array.forEach((char, i) => {
            setTimeout(() => {
                element.textContent += char
    
                if (element.textContent === txt_array.join('')) {
                    element.style.setProperty('--animation-blink', '1s blink .5s infinite cubic-bezier(0.075, 0.820, 0.165, 1.000)')
                }
    
            }, time * i)
        })
    }, delay)
}
