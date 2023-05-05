import anime from 'animejs'

export default {
  after() {},

  afterEnter(data) {
    const tl = anime.timeline({
      easing: 'easeInOutCubic',
    })

    if (data.next.namespace !== 'home') {
      tl.add({
        targets: document.querySelector('.js-mini'),
        opacity: data.current.namespace !== 'home' ? 1 : [0, 1],
        duration: 800,
      })
      tl.add({
        targets: document.querySelector('.js-anime'),
        translateX: data.current.namespace !== 'home' ? 0 : [-40, 0],
        duration: 800,
        complete() {
          document.body.classList.remove('is-loading')
        }
      }, "-=800")
    } else {
      tl.add({
        targets: document.querySelector('.js-mini'),
        opacity: 0,
        duration: 800,
      })
      tl.add({
        targets: document.querySelector('.js-anime'),
        translateX: -40,
        duration: 800,
        complete() {
          document.body.classList.remove('is-loading')
        }
      }, "-=400")
    }

    document.body.classList.remove('no-overflow')
    document.body.classList.remove('is-loading')

    return tl.finished
  },

  afterLeave() {},

  before() {},

  beforeEnter() {},

  beforeLeave() {},

  enter() {},

  init(parent, config) {
    this.parent = parent
    this.call = this.parent.call.bind(this.parent)
    this.config = config
    anime.set(document.querySelector('.o-menu'), {
      opacity: 0
    })
    anime.set(document.querySelector('.js-anime'), {
      translateX: -40
    })
    anime.set(document.querySelector('.js-mini'), {
      opacity: 0
    })
  },

  invoke() {
    return {
      after: this.after.bind(this),
      afterEnter: this.afterEnter.bind(this),
      afterLeave: this.afterLeave.bind(this),
      before: this.before.bind(this),
      beforeEnter: this.beforeEnter.bind(this),
      beforeLeave: this.beforeLeave.bind(this),
      enter: this.enter.bind(this),
      init: this.init.bind(this),
      leave: this.leave.bind(this),
      name: this.name,
      once: this.once.bind(this),
    }
  },

  leave(data) {
    const tl = anime.timeline({
      easing: 'easeInOutCubic',
      duration: 1200,
    })

    // tl.add({
    //   targets: document.querySelectorAll('[data-transition]'),
    //   opacity: 0,
    // })

    return tl.finished
  },

  name: 'basic',

  once(data) {
    document.body.classList.add('is-loading')
    this.call('enterMain', 'logo-main', 'Logo')

    if (data.next.namespace === 'page') {
      anime.set(document.querySelector('.js-anime'), {
        translateX: 0
      })
    }

    this.afterEnter(data).then(() => {
      anime({
        targets: document.querySelector('.o-menu'),
        opacity: [0, 1],
        duration: 400,
      })
      this.after()
      this.parent.after()
    })
  },

}.invoke()
