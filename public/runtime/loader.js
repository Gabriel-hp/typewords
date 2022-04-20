const wordDisplayContainer = document.querySelector('.word-display-container')

const loader = document.createElement('div')
loader.classList.add('loader')

export function show() {
    wordDisplayContainer.appendChild(loader)
}

export function hide() {
    wordDisplayContainer.removeChild(loader)
}