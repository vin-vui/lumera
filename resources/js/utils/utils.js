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
