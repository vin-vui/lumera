import { module } from 'modujs'
import barba from '@barba/core'
import { debounce } from '../utils/utils'
import * as transitions from '../organisms/_transitions'

export default class Website extends module {
  constructor(m) {
    super(m)
    this.isAnimating = false
    this.updateModules = false
    this.transitions = this.setTransitions()

    this.size = {
      width: 0,
      height: 0,
    }

    this.animate = this.animate.bind(this)
    this.debounceResize = debounce(this.resize.bind(this, false), 600)

    barba.hooks.afterLeave(this.afterLeave.bind(this))
    barba.hooks.afterEnter(this.afterEnter.bind(this))
    barba.hooks.enter(this.enter.bind(this))
    barba.hooks.once(this.once.bind(this))
    barba.hooks.after(this.after.bind(this))
    barba.hooks.beforeLeave(this.toggleLoad.bind(this, true))
    this.config = {
      debug: true,
      transitions: this.transitions,
      animate: this.el.dataset.animate !== undefined,
    }

    barba.init(this.config)
  }

  once() {
    this.setModulesFunctions()
    this.updateModules = true
    this.toggleLoad(false)
    // window.addEventListener('resize', this.debounceResize)
    if (this.config.animate) {
      this.requestId = window.requestAnimationFrame(this.animate)
    }
  }

  resize(force = false) {
    if (window.innerWidth < 768 && window.innerWidth === this.size.width && force === false) {
      return
    }
    this.size = {
      width: window.innerWidth,
      height: window.innerHeight,
    }
    if (this.updateModules) {
      this.parseModulesFunctions('resize')
      this.parseModulesFunctions('aResize')
    }
  }

  animate() {
    if (this.updateModules && this.isAnimating) {
      this.parseModulesFunctions('animate')
      this.parseModulesFunctions('aAnimate')
    }

    this.requestId = window.requestAnimationFrame(this.animate)
  }

  after() {
    // this.call('update', null, 'Axeptio')
    this.toggleLoad(false)
  }


  afterLeave({ current }) {
    this.updateModules = false
    if (current.container) {
      this.call('destroy', current.container, 'app');
    }
  }

  enter({ next, current }) {
    if (current.container) {
      current.container.remove()
    }
    window.scrollTo(0, 0)

    this.call('update', next.container, 'app');
    this.setModulesFunctions()
  }

  afterEnter() {
    this.updateModules = true
    window.livewire.restart()
    // this.resize(true)
  }

  toggleLoad(state) {
    document.documentElement.classList[state ? 'remove' : 'add']('is-loaded')
    document.documentElement.classList[state ? 'add' : 'remove']('is-loading')
    this.isAnimating = !state
  }


  setModulesFunctions() {
    this.browseModulesFunctions([
      'resize',
      'aResize',
      'animate',
      'aAnimate',
    ])
  }

  browseModulesFunctions(funcs) {
    this.modulesToList = {}
    funcs.forEach((func) => {
      this.modulesToList[func] = []
    })
    const modules = this.modules.app.app.currentModules
    const modulesToParse = Object.keys(modules)
    modulesToParse.forEach((moduleName) => {
      const moduleInstance = modules[moduleName]
      funcs.forEach((func) => {
        if (typeof moduleInstance[func] === 'function' && !moduleName.includes('Website')) {
          this.modulesToList[func].push(moduleName)
        }
      })
    })
  }

  parseModulesFunctions(func) {
    const modulesFunct = this.modulesToList[func]
    const { length } = modulesFunct
    for (let i = 0; i < length; i += 1) {
      const moduleId = modulesFunct[i]
      this.modules.app.app.currentModules[moduleId][func]()
    }
  }

  setTransitions() {
    const transitionsArray = []
    Object.keys(transitions).forEach((transitionName) => {
      const singleTransition = transitions[transitionName]
      singleTransition.init(this, {})
      transitionsArray.push(singleTransition)
    })
    return transitionsArray
  }
}