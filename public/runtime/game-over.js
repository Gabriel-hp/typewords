import Timer from './timer.js'

const gameOverContainer = document.querySelector('#game-over-container')
const gameTotalPoints = gameOverContainer.querySelector('#game-total-points')
const gameExpectedWord = gameOverContainer.querySelector('#game-expected-word')
const gameEndTime = gameOverContainer.querySelector('#game-end-time')
const gameOverMsg = gameOverContainer.querySelector('#game-over-msg')
const gameTypeError = gameOverContainer.querySelector('#type-error')

export function showGameOver({ message, points, word, endTime, answer }) {
    gameOverContainer.removeAttribute('hidden')

    gameTotalPoints.textContent = points
    gameExpectedWord.textContent = word
    gameEndTime.textContent = Timer.getFormatedTime(endTime.seconds, endTime.miliseconds)
    gameOverMsg.textContent = message
    gameTypeError.textContent = answer
}