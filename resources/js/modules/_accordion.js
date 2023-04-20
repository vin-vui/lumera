import { module as module } from 'modujs'

export default class Accordion extends module {
  constructor(m) {
    super(m)

    this.scroll = this.$('scroll')[0]

    this.events = {
      click: {
        button: 'toggle',
      },
    }
  }

  toggle() {
    this.change(!this.state)
  }

  change(state) {
    if (this.state === state) {
      return
    }

    this.state = state

    const button = this.$('button')[0]

    let height = 0

    button.setAttribute('aria-expanded', this.state)
    this.el.classList[this.state ? 'add' : 'remove']('-active')

    if (this.state) {
      height = this.scroll.scrollHeight
    }

    this.scroll.style.setProperty('--heightscroll', `${height}px`)
  }
}
