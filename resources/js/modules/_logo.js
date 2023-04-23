import { module as module } from 'modujs'
import anime from 'animejs'

export default class Cursor extends module {
  constructor(m) {
    super(m)
    this.events = {
      mouseenter: {
        logo: 'mouseEnter'
      },
      mouseleave: {
        logo: 'mouseLeave'
      },
    }
  }

  enter() {
    const tl = anime.timeline({
      easing: 'easeInOutCubic',
    })

    tl.add({
      targets: this.el.querySelector(`.a-logo`),
      scale: [0, 1],
      duration: 800,
      delay: 650
    })
    .add({
      targets: this.el.querySelector(`.a-logo .icon`),
      scale: [0, 1],
      duration: 800,
    }, '-=600')
  }

  mouseEnter() {
    const tl = anime.timeline({
      easing: 'easeOutBack',
    })

    tl.add({
      targets: this.el.querySelector(`.a-logo`),
      scale: [1, 2],
      duration: 800
    })
    .add({
      targets: this.el.querySelector(`.a-logo .icon`),
      scale: [1, .8],
      duration: 800,
    }, '-=800')
  }

  mouseLeave() {
    const tl = anime.timeline({
      easing: 'easeOutBack',
    })

    tl.add({
      targets: this.el.querySelector(`.a-logo`),
      scale: [2, 1],
      duration: 800
    })
    .add({
      targets: this.el.querySelector(`.a-logo .icon`),
      scale: [.8, 1],
      duration: 800,
    }, '-=800')
  }

  enterMain() {
    anime({
      targets: this.el.querySelectorAll('path'),
      translateY: ['100%', 0],
      duration: 600,
      delay: anime.stagger(75),
      easing: 'easeInOutSine'
    });
  }
}
