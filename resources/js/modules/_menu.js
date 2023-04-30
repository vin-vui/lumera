import { module as module } from 'modujs'

export default class Menu extends module {
  constructor(m) {
    super(m)
    this.state = false
    this.events = {
      click: {
        btn: 'toggle',
        overlay: 'toggle',
        close: 'toggle',
      },
    }
  }

  toggle() {
    this.change(!this.state)
  }

  change(state) {
    this.state = state

    const [btn] = this.$('btn')
    const [overlay] = this.$('overlay')
    const [menu] = this.$('menu')
    document.body.classList[this.state ? 'add' : 'remove']('no-overflow')

    this.el.classList[this.state ? 'add' : 'remove']('-active')
    overlay.classList[this.state ? 'add' : 'remove']('-active')
    menu.classList[this.state ? 'add' : 'remove']('-active')

    if (this.state) {
      btn.innerText = btn.dataset.close
    } else {
      btn.innerText = btn.dataset.open
    }
  }
}
