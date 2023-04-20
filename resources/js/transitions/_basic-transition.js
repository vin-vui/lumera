import anime from 'animejs'

export default {
  after() {},

  afterEnter() {
    const tl = anime.timeline({
      easing: 'easeInOutCubic',
      duration: 1200,
    })

    // document.body.classList.remove('no-overflow')
    document.body.classList.remove('is-loading')

    // tl.add({
    //   targets: document.querySelectorAll('[data-transition]'),
    //   opacity: 1,
    //   complete() {
    //     document.body.classList.remove('is-loading')
    //   },
    // })

    return tl.finished
  },

  afterLeave() {},

  before() {},

  beforeEnter() {},

  beforeLeave() {},

  enter() {},

  init(parent, config) {
    console.log(parent);
    this.parent = parent
    this.call = this.parent.call.bind(this.parent)
    this.config = config
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

  leave() {
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
    this.afterEnter(data).then(() => {
      this.after()
      this.parent.after()
    })
  },

}.invoke()
