import { module as module } from 'modujs'
import SplitType from 'split-type'
import anime from 'animejs'

export default class Split extends module {
  constructor(m) {
    super(m)

    const text = new SplitType(this.el.querySelectorAll('.js-split'), { types: 'lines, words' })
  }

  enter() {
    anime({
      targets: this.el.querySelectorAll('.word'),
      translateY: ['100%', 0],
      duration: 600,
      delay: anime.stagger(75),
      easing: 'easeInOutSine'
    });
  }

  enterText() {
    anime({
      targets: this.el.querySelectorAll('.word'),
      translateY: ['100%', 0],
      duration: this.el.dataset.duration !== undefined ? this.el.dataset.duration : 600,
      delay: this.el.dataset.delay !== undefined ? this.el.dataset.delay : 0,
      easing: 'easeInOutSine'
    });
  }
}
