import axios from 'axios';
window.axios = axios;

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';


navbar.addEventListener('alpine:init', () => {
    Alpine.data('dropdown-btn-2', () => ({
        openDropdown: null,
        isHovering: true,
        selectedOption: null,
    }));
});
