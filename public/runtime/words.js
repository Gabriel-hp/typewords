import * as lib from './lib.js'
import GameModes from './game-modes.js'

export async function getAllWords() {
    const data = await fetch('/runtime/words.json')
    const json = await data.json()
    const allTopics = Object.keys(json)
    const allWordsArray = allTopics.flatMap(topic => json[topic])
    return allWordsArray
}

export function lengthOfWords(wordsArray, mode) {
    const lengthArray = wordsArray.map(word => word.length)
    if (mode === 'max') return lib.getMaxNumberOf(lengthArray)
    if (mode === 'min') return lib.getMinNumberOf(lengthArray)
}

export async function getWord(gameMode, maxLength) {
    if (gameMode === GameModes['randomletters']) {
        return randomLettersMode(maxLength)
    }

    if (gameMode === GameModes['randomwords']) {
        return await randomWordsMode(maxLength)
    }
}

function randomLettersMode(maxLength) {
    const allLetters = lib.getLetters()

    const randomIndexs = length => {
        let randomIndexsArray = []
        for (let i = 0; i < length; i++) {
            randomIndexsArray.push(lib.getRandomNumber(allLetters.length))
        }
        return randomIndexsArray
    }

    const randomLength = lib.getRandomNumber(maxLength, 1)
    const randomLetters = randomIndexs(randomLength).map(index => allLetters[index]).join('')
    return randomLetters
}

async function randomWordsMode(maxLength) {
    const allWords = await getAllWords()
    const allWordsFiltered = allWords.filter(word => word.length <= maxLength)
    const randomIndex = lib.getRandomNumber(allWordsFiltered.length)

    return allWordsFiltered[randomIndex]
}