import Timer from './timer.js'
import { getWord } from './words.js'
import { showGameOver } from './game-over.js'

const timeDisplay = document.querySelector('#time-display')
const timer = new Timer(timeDisplay)

const wordInput = document.querySelector('#word-input')
const wordDisplay = document.querySelector('#word-display')

class Game {
    constructor(settings) {
        this.points = 0
        this.settings = settings
        this.currentWord = null
        this.currentTime = {
            seconds: 0,
            miliseconds: 0
        }
        this.isOver = true
    }

    async start() {
        this.isOver = false
        await this.startNewTurn()
    }

    async nextTurn() {
        await this.startNewTurn()
        this.updatePoints(+1)
    }

    gameOver(message) {
        this.stop()
        this.isOver = true
        const timeIsOver = this.currentTime.seconds === 0 && this.currentTime.miliseconds === 0
        showGameOver({
            message,
            points: this.points,
            word: this.currentWord,
            endTime: this.currentTime,
            answer: timeIsOver ? '' : wordInput.value
        })
    }

    async startNewTurn() {
        this.reset()
        this.currentWord = await getWord(this.settings.gameMode, this.settings.maxWordsLength)
        wordDisplay.textContent = this.currentWord
        document.querySelector('#word-length').textContent = this.currentWord.length
        timer.start(this.settings.seconds, this.settings.miliSeconds)
    }

    updatePoints(value) {
        this.points += value
        document.querySelector('#game-points').textContent = this.points
    }

    resetPoints() {
        this.points = 0
        document.querySelector('#game-points').textContent = this.points
    }

    stop() {
        timer.pause()
        wordInput.setAttribute('readonly', 'readonly')
    }


    showContent(content) {
        wordDisplay.innerHTML = content
        document.querySelector('#word-length').textContent = content.length
    }

    reset() {
        this.resetTurn()
        wordInput.focus()
    }

    resetTurn() {
        timer.stop()
        wordInput.value = ''
        wordDisplay.innerHTML = ''
    }
}

export default Game