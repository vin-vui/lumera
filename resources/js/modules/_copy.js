import { module as module } from 'modujs'

export default class Copy extends module {
  constructor(m) {
    super(m)
    this.events = {
      click: 'onClick'
    }
  }

  onClick() {
    console.log('click');
    navigator.clipboard.writeText(this.el.dataset.link);
    this.el.innerHTML = `<span>Lien copié !</span>`
  }
}
