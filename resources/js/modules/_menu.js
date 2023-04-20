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

    // const [btn] = this.$('btn')
    // const [btnText] = this.$('btnText')
    const [overlay] = this.$('overlay')
    const [menu] = this.$('menu')

    // btn.classList[this.state ? 'add' : 'remove']('-active')
    overlay.classList[this.state ? 'add' : 'remove']('-active')
    menu.classList[this.state ? 'add' : 'remove']('-active')

    // if (this.state) {
    //   btnText.innerText = btnText.dataset.close
    // } else {
    //   btnText.innerText = btnText.dataset.open
    // }
  }
}
