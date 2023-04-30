import { module as module } from 'modujs'
import SplitType from 'split-type'
import anime from 'animejs'

export default class Split extends module {
  constructor(m) {
    super(m)

    const text = new SplitType(this.el.querySelectorAll('.js-split'), { types: 'lines, words' })
  }

  enter() {
    if (!this.initialize) {
      this.initialize = true;
      anime({
        targets: this.el.querySelectorAll('.word'),
        translateY: ['100%', 0],
        duration: 600,
        delay: anime.stagger(75, {"start": this.el.dataset.delay !== undefined ? Number(this.el.dataset.delay) : 0}),
        easing: 'cubicBezier(0.80, 0.00, 0.20, 1.00)'
      });

      anime({
        targets: '.js-change strong',
        keyframes: [
          {translateY: '100%', duration:0},
          {translateY: 0, duration:500},
          {translateY: '-100%', delay: 2000, duration: 500},
        ],
        easing: 'cubicBezier(0.80, 0.00, 0.20, 1.00)',
        delay: anime.stagger(2500, {start: 0}),
        loop: true
      });
    }
  }

  enterText() {
    if (!this.initialize) {
      this.initialize = true;
      anime({
        targets: this.el.querySelectorAll('.word'),
        translateY: ['100%', 0],
        duration: this.el.dataset.duration !== undefined ? this.el.dataset.duration : 600,
        delay: this.el.dataset.delay !== undefined ? this.el.dataset.delay : 0,
        easing: 'cubicBezier(0.80, 0.00, 0.20, 1.00)'
      });
    }
  }
}
