class GameSettings {
    constructor({ game_mode, seconds = 0, miliseconds = 0, max_words_len = 10 }) {
        this.gameMode = game_mode
        this.seconds = seconds
        this.miliSeconds = miliseconds
        this.maxWordsLength = max_words_len
    }
}

export default GameSettings