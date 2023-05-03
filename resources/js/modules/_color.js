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
    this.call('toggle', false, 'Accordion', this.el.dataset.colorAccordion)

    const link = document.querySelector("link[rel~='icon']");
    link.href = `./assets/favicon/${e.target.dataset.id}.ico`;
  }
}
