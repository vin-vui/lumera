import './bootstrap';

import Alpine from 'alpinejs';
import focus from '@alpinejs/focus';
import ToastComponent from '../../vendor/usernotnull/tall-toasts/resources/js/tall-toasts'
import Trix from "trix"

Alpine.data('ToastComponent', ToastComponent)

window.Alpine = Alpine;

Alpine.plugin(focus);

Alpine.start();

Trix.config.blockAttributes.heading1.tagName = 'h3';
// Trix.start();
