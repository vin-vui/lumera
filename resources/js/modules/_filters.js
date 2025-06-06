import { module as module } from 'modujs'

export default class Filters extends module {
  constructor(m) {
    super(m)
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

    const [button] = this.$('button')
    const [panel] = this.$('panel')

    button.setAttribute('aria-expanded', this.state)
    panel.classList[this.state ? 'add' : 'remove']('-active')
  }
}

