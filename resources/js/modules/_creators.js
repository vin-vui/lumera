import { module as module } from 'modujs'
import anime from 'animejs'

export default class Creators extends module {
  constructor(m) {
    super(m)
    // this.events = {
    //   mouseenter: {
    //   },
    // }
  }

  init() {
    window.addEventListener('contentChanged', this.onAnime.bind(this))
  }

  enter() {
    if (!this.initialize) {
      this.initialize = true;
      this.onReveal()
    }
  }

  onReveal() {
    const tl = anime.timeline({
      easing: 'cubicBezier(0.80, 0.00, 0.20, 1.00)',
    })

    tl.add({
      targets: this.el.querySelectorAll(`.m-cursorThumb`),
      translateY: ['100%', 0],
      duration: 1000,
    })
    .add({
      targets: this.el.querySelectorAll(`.a-ratio`),
      translateY: ['-100%', 0],
      duration: 1000,
    }, '-=1000')
    .add({
      targets: this.el.querySelectorAll(`.m-creator__content`),
      opacity: [0, 1],
      duration: 10,
    }, '-=1000')
    .add({
      targets: this.el.querySelectorAll(`.m-creator__content`),
      scaleY: [0, 1],
      duration: 1000,
    }, '-=1000')
    .add({
      targets: this.el.querySelectorAll(`.word`),
      translateY: ['100%', 0],
      duration: 1000,
    }, '-=800')
    .add({
      targets: this.el.querySelectorAll(`.m-tags__item`),
      opacity: [0, 1],
      delay: anime.stagger(250),
      duration: 1000,
    }, '-=800')
  }

  onAnime() {
    // const text = new SplitType('.js-split', { types: 'lines, words' })

    anime.set(this.el.querySelectorAll(`li:nth-of-type(1) .m-creator__content, li:nth-of-type(2) .m-creator__content, li:nth-of-type(3) .m-creator__content`), {
      opacity: 1,
    })
    anime.set(this.el.querySelectorAll(`li:nth-of-type(1) .m-cursorThumb, li:nth-of-type(2) .m-cursorThumb, li:nth-of-type(3) .m-cursorThumb`), {
      translateY: 0,
    })
    anime.set(this.el.querySelectorAll(`li:nth-of-type(1) .a-ratio, li:nth-of-type(2) .a-ratio, li:nth-of-type(3) .a-ratio`), {
      translateY: 0,
    })
    anime.set(this.el.querySelectorAll(`li:nth-of-type(1) .word, li:nth-of-type(2) .word, li:nth-of-type(3) .word`), {
      translateY: 0,
    })
    anime.set(this.el.querySelectorAll(`li:nth-of-type(1) .m-tags__item, li:nth-of-type(2) .m-tags__item, li:nth-of-type(3) .m-tags__item`), {
      opacity: 1,
    })

    const tl = anime.timeline({
      easing: 'cubicBezier(0.80, 0.00, 0.20, 1.00)',
      complete: () => {
        this.isAnimating = false
      }
    })

    tl.add({
      targets: this.el.querySelectorAll(`li:nth-of-type(1) .word, li:nth-of-type(2) .word, li:nth-of-type(3) .word`),
      translateY: '-100%',
      duration: 1000,
    })
    .add({
      targets: this.el.querySelectorAll(`li:nth-of-type(1) .m-tags__item, li:nth-of-type(2) .m-tags__item, li:nth-of-type(3) .m-tags__item`),
      opacity: 0,
      duration: 1000,
    }, '-=1000')
    .add({
      targets: this.el.querySelectorAll(`li:nth-of-type(1) .m-creator__content, li:nth-of-type(2) .m-creator__content, li:nth-of-type(3) .m-creator__content`),
      opacity: 0,
      duration: 10,
    }, '-=10')
    .add({
      targets: this.el.querySelectorAll(`li:nth-of-type(4) .m-creator__content, li:nth-of-type(5) .m-creator__content, li:nth-of-type(6) .m-creator__content`),
      opacity: [0, 1],
      duration: 10,
    }, '-=10')
    .add({
      targets: this.el.querySelectorAll(`li:nth-of-type(4) .m-cursorThumb, li:nth-of-type(5) .m-cursorThumb, li:nth-of-type(6) .m-cursorThumb`),
      translateY: ['100%', 0],
      duration: 1000,
    }, '-=1000')
    .add({
      targets: this.el.querySelectorAll(`li:nth-of-type(4) .a-ratio, li:nth-of-type(5) .a-ratio, li:nth-of-type(6) .a-ratio`),
      translateY: ['-100%', 0],
      duration: 1000,
    }, '-=1000')
    .add({
      targets: this.el.querySelectorAll(`li:nth-of-type(4) .word, li:nth-of-type(5) .word, li:nth-of-type(6) .word`),
      translateY: ['100%', 0],
      duration: 1000,
    }, '-=800')
    .add({
      targets: this.el.querySelectorAll(`li:nth-of-type(4) .m-tags__item, li:nth-of-type(5) .m-tags__item, li:nth-of-type(6) .m-tags__item`),
      opacity: [0, 1],
      duration: 1000,
    }, '-=800')
  }
}
