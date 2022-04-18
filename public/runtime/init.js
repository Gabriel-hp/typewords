import Game from './game.js'
import GameSettings from './game-settings.js'
import GameModes from './game-modes.js'

const wordInput = document.querySelector('#word-input')
const wordDisplay = document.querySelector('#word-display')

const settingsJson = JSON.parse(document.querySelector('#settings').textContent)
settingsJson.game_mode = GameModes[settingsJson.game_mode]

const settings = new GameSettings(settingsJson)
const game = new Game(settings)

game.start().then(() => {
    document.addEventListener('keypress', async e => {
        if (e.key === 'Enter' && !game.isOver) {
            wordInput.value === wordDisplay.textContent
                ? await game.nextTurn()
                : game.gameOver()
        }
    })

    document.addEventListener('timerCount', e => {
        game.currentTime = {
            seconds: e.detail.seconds,
            miliseconds: e.detail.miliseconds
        }

        if (e.detail.endTime) {
            game.gameOver('Que pena o tempo acabou.')
        }
    })
})

