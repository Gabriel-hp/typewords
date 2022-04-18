class Timer {
    constructor(element) {
        this.element = element
        this.interval = null
        this.timerEvent = null;
        this.miliSeconds = 0
        this.seconds = 0
    }

    static getFormatedTime(seconds, miliSeconds) {
        const concatenateZero = time => time < 10 ? `0${time}` : time
        return `${concatenateZero(seconds)}:${concatenateZero(miliSeconds)}`
    }

    createTimeEvent() {
        this.timerEvent = new CustomEvent('timerCount', {
            detail: {
                seconds: this.seconds,
                miliseconds: this.miliSeconds,
                endTime: this.seconds <= 0 && this.miliSeconds <= 0
            }
        })
    }

    countTime() {
        this.miliSeconds--
        this.timerIsReset()
        this.showTime()
        if (this.miliSeconds === 0 && this.seconds > 0) {
            this.miliSeconds = 99
            this.seconds--
        }
    }

    startTimer() {
        if (this.miliSeconds > 0)
            this.miliSeconds--

        if (this.seconds > 0) {
            this.seconds--
            this.miliSeconds = 99
        }
    }

    timerIsReset() {
        let alltimeIsZero = this.miliSeconds <= 0 && this.seconds <= 0
        if (alltimeIsZero) {
            this.stop()
        }
        this.createTimeEvent()
        document.dispatchEvent(this.timerEvent)
        return alltimeIsZero
    }

    stop() {
        clearInterval(this.interval)
        this.miliSeconds = 0
        this.seconds = 0
    }

    showTime() {
        this.element.innerText = Timer.getFormatedTime(this.seconds, this.miliSeconds)
    }

    start(seconds = 0, miliSeconds = 0) {
        this.seconds = seconds
        this.miliSeconds = miliSeconds
        this.startTimer()

        if (!this.timerIsReset()){
            this.interval = setInterval(() => this.countTime(), 10)
        }
    }

    resume() {
        this.pause()
        this.start(this.seconds, this.miliSeconds)
    }

    pause() {
        clearInterval(this.interval)
    }
}

export default Timer
