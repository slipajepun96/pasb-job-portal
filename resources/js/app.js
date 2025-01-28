import './bootstrap';
import 'flowbite';

import axios from 'axios';

// Set the CSRF token for Laravel requests
axios.defaults.headers.common['X-CSRF-TOKEN'] = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

window.axios = axios; // Optional: Make it globally available
