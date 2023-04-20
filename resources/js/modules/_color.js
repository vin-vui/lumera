import { module as module } from 'modujs'

export default class Color extends module {
  constructor(m) {
    super(m)

    this.root = document.documentElement

    this.events = {
      click: {
        button: 'toggle',
      },
    }
  }

  toggle(e) {
    this.change(e, !this.state)
  }

  change(e, state) {
    this.root.style.setProperty('--base-primary', `${e.target.dataset.id}`)
    this.call('toggle', false, 'Accordion')
  }
}
