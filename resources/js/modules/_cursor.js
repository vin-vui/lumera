import { module as module } from 'modujs'
import anime from 'animejs'

export default class Cursor extends module {
  constructor(m) {
    super(m)
    // this.events = {
    //   mouseenter: {
    //   },
    // }
  }

  init() {
    this.initCursor()

    window.addEventListener('contentChanged', this.initCursor.bind(this))
  }

  initCursor() {
    // const [media] = this.$('thumb')
    Array.from(document.querySelectorAll('[data-creator="thumb"]')).forEach(media => {

      // const [circle] = this.$('circle');
      const circle = media.querySelector('[data-creator="circle"]');

      anime.set(circle, { opacity: 0 });

      media.addEventListener("mouseenter", function(e) {
        anime({ targets: circle, opacity: 1, easing: 'easeInOutSine', duration: 150 });
        // positionCircle(e, media, circle);
      });

      media.addEventListener("mouseleave", function(e) {
        anime({ targets: circle, opacity: 0, easing: 'easeInOutSine', duration: 150 });
        // positionCircle(e, media, circle);
      });

      media.addEventListener("mousemove", function(e) {
        positionCircle(e, media, circle);
      });

      function positionCircle(e, media, circle) {
        var rect = media.getBoundingClientRect();
        var relX = e.pageX - rect.left - 40;
        var relY = e.pageY  - rect.top - window.scrollY - 40;
        anime({ targets: circle, opacity: 1, scale: 1, translateX: relX + 'px', translateY: relY + 'px', duration: 150 });
      }

    });
  }

}
