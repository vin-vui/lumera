import './bootstrap';

import Alpine from 'alpinejs';
import focus from '@alpinejs/focus';
import ToastComponent from '../../vendor/usernotnull/tall-toasts/resources/js/tall-toasts'

window.Alpine = Alpine;
Alpine.data('ToastComponent', ToastComponent)
Alpine.plugin(focus);
Alpine.start();

Livewire.hook('message.processed', (message, component) => {
  const section = document.getElementById('file-upload-section');
  if (section) {
    Alpine.initTree(section);
  }
  const specialtyManager = document.getElementById('specialtyManager');
  if (specialtyManager) {
    Alpine.initTree(specialtyManager);
  }
  const tagManager = document.getElementById('tagManager');
  if (tagManager) {
    Alpine.initTree(tagManager);
  }
  const display = document.getElementById('display');
  if (display) {
    Alpine.initTree(display);
  }
});
