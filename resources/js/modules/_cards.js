import { module as mmodule } from 'modujs'

export default class Cards extends mmodule {
  constructor(m) {
    super(m)
    this.events = {
      mouseenter: {
        item: 'onEnter'
      },
      mouseleave: {
        item: 'onLeave'
      }
    }
  }

  onEnter(e) {
    const currentCard = e.currentTarget
    currentCard.classList.add('is-visible')
  }

  onLeave(e) {
    const currentCard = e.currentTarget
    currentCard.classList.remove('is-visible')
  }
}