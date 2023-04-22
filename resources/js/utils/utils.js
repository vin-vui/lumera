export const throttle = (callback, delay) => {
  let last;
  let timer;
  // eslint-disable-next-line func-names
  return function () {
    const context = this;
    const now = +new Date();
    // eslint-disable-next-line prefer-rest-params
    const args = arguments;
    if (last && now < last + delay) {
      // le délai n'est pas écoulé on reset le timer
      clearTimeout(timer);
      timer = setTimeout(() => {
        last = now;
        callback.apply(context, args);
      }, delay);
    } else {
      last = now;
      callback.apply(context, args);
    }
  };
};

export const debounce = (callback, delay) => {
  let timer;
  return () => {
    // eslint-disable-next-line no-undef
    const args = arguments;
    const context = this;
    clearTimeout(timer);
    timer = setTimeout(() => {
      callback.apply(context, args);
    }, delay);
  };
};
