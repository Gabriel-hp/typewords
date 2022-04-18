export function getNumberInString(string) {
    const stringIsEmpty = string === ''
    return isNaN(Number(string)) || stringIsEmpty ? string : Number(string)
}

export function getRandomNumber(maxLength = 1, minLength = 0) {
    return Math.floor(Math.random() * maxLength + minLength)
}

export function getLowerLetters() {
    let array_lower = []
    for (let letter = 97; letter < 123; letter++) {
        array_lower.push(String.fromCharCode(letter))
    }
    return array_lower
}

export function getUpperLetters() {
    let array_upper = []
    for (let letter = 65; letter < 91; letter++) {
        array_upper.push(String.fromCharCode(letter))
    }
    return array_upper
}

export function getLetters() {
    return [...this.getUpperLetters(), ...this.getLowerLetters()]
}

export function removeElementInArray(array, element) {
    const elementIndex = array.indexOf(element)
    array.splice(elementIndex, 1)
}

export function getMaxNumberOf(array) {
    return array.reduce((maxLength, length) => length > maxLength ? length : maxLength, 0)
}

export function getMinNumberOf(array) {
    return array.reduce((minLength, length) =>
        length < minLength ? length : minLength, this.getMaxNumberOf(array))
}