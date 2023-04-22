import './bootstrap';
import './loconative';

// import Alpine from 'alpinejs';
// import focus from '@alpinejs/focus';

import modular from 'modujs';
import * as modules from './_modules';

// window.Alpine = Alpine;

// Alpine.plugin(focus);

// Alpine.start();

const app = new modular({
    modules: modules
});

app.init(app);
