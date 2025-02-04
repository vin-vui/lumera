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
    if (!this.initialize) {
      this.initialize = true;
      const tl = anime.timeline({
        easing: 'cubicBezier(0.80, 0.00, 0.20, 1.00)',
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
  }

  mouseEnter() {
    if (window.innerWidth >= 1025) {
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
  }

  mouseLeave() {
    if (window.innerWidth >= 1025) {
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
  }

  enterMain() {
    if (!this.initialize) {
      this.initialize = true;
      anime({
        targets: this.el.querySelectorAll('.js-anime path'),
        translateY: ['100%', 0],
        duration: 600,
        delay: anime.stagger(75),
        easing: 'cubicBezier(0.80, 0.00, 0.20, 1.00)'
      });
    }
  }
}
