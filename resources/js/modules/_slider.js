import { module } from 'modujs';
import EmblaCarousel from 'embla-carousel'
import Autoplay from 'embla-carousel-autoplay'
import ClassNames from 'embla-carousel-class-names'
import anime from 'animejs'

export default class Slider extends module {
  constructor(m) {
    super(m);

    this.events = {
      click: {}
    }

    const options = {
      loop: this.el.dataset.loop !== undefined,
      controls: this.el.dataset.controls !== undefined,
      dots: this.el.dataset.dots !== undefined,
      pagination: this.el.dataset.pagination !== undefined,
      progress: this.el.dataset.progress !== undefined,
      autoplay: this.el.dataset.autoplay,
      skipSnaps: false,
      containScroll: 'keepSnaps',
      align: 'start',
      axis: this.el.dataset.axis ? 'y' : 'x',
    }

    this.isAnimating = false

    this.anime = {
      hero: this.el.dataset.creator !== undefined,
    }

    const viewport = this.$('viewport')
    const container = viewport[0]

    this.plugins = [
      ClassNames()
    ]

    this.setAutoplay(options)
    this.slider = EmblaCarousel(container, options, this.plugins)

    this.setControls(options)
    this.setDots(options)
    this.setPagination(options)
    // this.setProgress(options)

    this.slider.on('init', this.toggleReady.bind(this))
    this.slider.on('resize', this.toggleReady.bind(this))
    this.slider.on('reInit', this.toggleReady.bind(this))

    if (this.anime.hero) {
      // viewport[0].style.setProperty('--heightslider', `${this.el.querySelector(`[data-index="0"]`).scrollHeight}px`)
      this.slider.on('select', this.onAnimeHero.bind(this))
    }

    // window.addEventListener('contentChanged', this.toggleReady.bind(this))
    // window.addEventListener('contentChanged', this.onAnimeHero.bind(this))
  }

  toggleReady(event) {
    const container = this.$('viewport')[0]
    const isResizeEvent = event === "resize";
    const toggleClass = isResizeEvent ? "remove" : "add";
    container.classList[toggleClass]("is-ready");
    container.querySelector('.is-selected') === null ? container.querySelector('.m-slider__slide:first-of-type').classList.add('is-selected') : '';
    if (isResizeEvent) this.slider.reInit();
  }

  setAutoplay(options) {
    if (options.autoplay) {
      const optionsAutoplay = {
        delay: Number(options.autoplay) * 1000,
        stopOnInteraction: true,
      }
      const autoplay = Autoplay(optionsAutoplay)
      this.plugins.push(autoplay)
    }
  }

  setControls(options) {
    if (options.controls) {
      this.disablePrevAndNextBtns = this.disablePrevAndNextBtns.bind(this)
      this.slider.on("select", this.disablePrevAndNextBtns)
      this.slider.on("init", this.disablePrevAndNextBtns)

      this.events.click.nextBtn = 'scrollNext'
      this.events.click.prevBtn = 'scrollPrev'

      this.scrollNext = this.updateScroll.bind(this, true)
      this.scrollPrev = this.updateScroll.bind(this, false)
    }
  }

  updateScroll(direction) {
    if (this.anime.hero) {
      if (this.isAnimating) {
        return
      }

      this.isAnimating = true
    }

    this.slider[direction ? 'scrollNext' : 'scrollPrev']()
  }

  setDots(options) {
    if (options.dots) {
      this.setSelectedDotBtn = this.setSelectedDotBtn.bind(this)
      this.events.click.dot = 'selectDotBtn'
      this.slider.on("select", this.setSelectedDotBtn)
      this.slider.on("init", this.setSelectedDotBtn)
      this.generateDotBtns()
    }
  }

  setPagination(options) {
    if (options.pagination) {
      this.slider.on('select', this.onPaginate.bind(this))
    }
  }

  onPaginate() {
    this.$('pagination')[0].innerHTML = Number(this.slider.selectedScrollSnap()) + 1
  }

  // setProgress(options) {
  //   if (!options.progress) {
  //     return
  //   }
  //   const onProgress = throttle(this.onProgress.bind(this), 10)
  //   this.slider.on('init', onProgress)
  //   this.slider.on('reInit', onProgress)
  //   this.slider.on('scroll', onProgress)
  //   this.onProgress()
  // }

  // onProgress() {
  //   const progress =
  //     Math.max(0, Math.min(1, this.slider.scrollProgress())) * 0.8 + 0.2
  //   this.el.style.setProperty('--progress', progress)
  // }

  generateDotBtns() {
    const template = this.$('dotTemplate')[0].innerHTML
    const dotsContainer = this.$('dotsContainer')
    const dots = this.slider.scrollSnapList().reduce((acc) => acc + template, "")
    dotsContainer[0].innerHTML = dots
    const dotsEls = this.$('dot')
    dotsEls.forEach((dot, index) => {
      dot.setAttribute('data-index', index)
    })
  }

  selectDotBtn(event) {
    const index = Number(event.currentTarget.dataset.index)
    this.slider.scrollTo(index)
  }

  setSelectedDotBtn() {
    const previous = this.slider.previousScrollSnap();
    const selected = this.slider.selectedScrollSnap();
    const dots = this.$('dot')
    dots[previous].classList.remove("-active");
    dots[selected].classList.add("-active");
  }

  disablePrevAndNextBtns() {
    const prevBtn = this.$('prevBtn')
    const nextBtn = this.$('nextBtn')

    if (this.slider.canScrollPrev()) {
      prevBtn[0].removeAttribute('disabled');
    } else {
      prevBtn[0].setAttribute('disabled', 'disabled');
    }

    if (this.slider.canScrollNext()) {
      nextBtn[0].removeAttribute('disabled');
    } else {
      nextBtn[0].setAttribute('disabled', 'disabled');
    }
  }

  enterHero() {
    if (!this.initialize) {
      this.initialize = true;
      this.onRevealHero()
    }
  }

  onRevealHero() {
    const tl = anime.timeline({
      easing: 'easeInOutCubic',
    })

    tl.add({
      targets: this.el.querySelector(`[data-index="0"] .m-cursorThumb`),
      translateY: ['100%', 0],
      duration: 1500,
    })
    .add({
      targets: this.el.querySelector(`[data-index="0"] .a-ratio`),
      translateY: ['-100%', 0],
      duration: 1500,
    }, '-=1500')
    .add({
      targets: this.el.querySelector(`[data-index="0"] .m-creator__content`),
      opacity: [0, 1],
      duration: 10,
    }, '-=1500')
    .add({
      targets: this.el.querySelector(`[data-index="0"] .m-creator__content`),
      scaleY: [0, 1],
      duration: 1500,
    }, '-=1500')
    .add({
      targets: this.el.querySelectorAll(`[data-index="0"] .word`),
      translateY: ['100%', 0],
      duration: 1500,
    }, '-=800')
    .add({
      targets: this.el.querySelectorAll(`[data-index="0"] .m-tags__item`),
      opacity: [0, 1],
      delay: anime.stagger(250),
      duration: 1500,
    }, '-=800')
  }

  onAnimeHero() {
    const prev = this.slider.previousScrollSnap()
    const current = this.slider.selectedScrollSnap()

    const tl = anime.timeline({
      easing: 'easeInOutCubic',
      complete: () => {
        this.isAnimating = false
      }
    })

    tl.add({
      targets: this.el.querySelector(`[data-index="${prev}"] .m-cursorThumb`),
      duration: 1500,
      translateY: '-100%',
    })
    .add({
      targets: this.el.querySelector(`[data-index="${prev}"] .a-ratio`),
      translateY: '100%',
      duration: 1500,
    }, '-=1500')
    .add({
      targets: this.el.querySelectorAll(`[data-index="${prev}"] .word`),
      translateY: '-100%',
      duration: 1500,
    }, '-=1500')
    .add({
      targets: this.el.querySelectorAll(`[data-index="${prev}"] .m-tags__item`),
      opacity: 0,
      duration: 1500,
    }, '-=1500')
    .add({
      targets: this.el.querySelector(`[data-index="${prev}"] .m-creator__content`),
      opacity: 0,
      duration: 10,
    }, '-=10')
    .add({
      targets: this.el.querySelector(`[data-index="${current}"] .m-creator__content`),
      opacity: [0, 1],
      duration: 10,
    }, '-=10')
    .add({
      targets: this.el.querySelector(`[data-index="${current}"] .m-cursorThumb`),
      translateY: ['100%', 0],
      duration: 1500,
    }, '-=1500')
    .add({
      targets: this.el.querySelector(`[data-index="${current}"] .a-ratio`),
      translateY: ['-100%', 0],
      duration: 1500,
    }, '-=1500')
    .add({
      targets: this.el.querySelectorAll(`[data-index="${current}"] .word`),
      translateY: ['100%', 0],
      duration: 1500,
    }, '-=800')
    .add({
      targets: this.el.querySelectorAll(`[data-index="${current}"] .m-tags__item`),
      opacity: [0, 1],
      delay: anime.stagger(250),
      duration: 1500,
    }, '-=800')
  }
}
