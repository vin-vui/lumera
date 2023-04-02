import { module } from 'modujs';
import EmblaCarousel from 'embla-carousel'
import Autoplay from 'embla-carousel-autoplay'
import ClassNames from 'embla-carousel-class-names'

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
  }

  toggleReady(event) {
    const container = this.$('viewport')[0]
    const isResizeEvent = event === "resize";
    const toggleClass = isResizeEvent ? "remove" : "add";
    container.classList[toggleClass]("is-ready");
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

      this.scrollNext = this.slider.scrollNext
      this.scrollPrev = this.slider.scrollPrev
    }
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
}
