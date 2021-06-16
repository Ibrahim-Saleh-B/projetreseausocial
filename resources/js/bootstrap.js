window._ = require('lodash');

/**
 * We'll load jQuery and the Bootstrap jQuery plugin which provides support
 * for JavaScript based Bootstrap features such as modals and tabs. This
 * code may be modified to fit the specific needs of your application.
 */

try {
    window.Popper = require('popper.js').default;
    window.$ = window.jQuery = require('jquery');

    require('bootstrap');
} catch (e) {}

/**
 * We'll load the axios HTTP library which allows us to easily issue requests
 * to our Laravel back-end. This library automatically handles sending the
 * CSRF token as a header based on the value of the "XSRF" token cookie.
 */

window.axios = require('axios');

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

/**
 * Echo exposes an expressive API for subscribing to channels and listening
 * for events that are broadcast by Laravel. Echo and event broadcasting
 * allows your team to easily build robust real-time web applications.
 */

import Echo from 'laravel-echo';


let e = new Echo({
    broadcaster: 'socket.io',
    host: window.location.hostname + ':6001'
});

// let messages=''
// e.channel('messages')
//         .listen('ChatReseauSocial', (event) => {

//             if(e.message.type == 'R') {

//                 messages = '<div class="row-auto"><div class="col-6 text-right float-right rounded"><div class="bullesReponses">'+event.message.libelle+'</div></div></div><div class="row-auto"><div class="col-6 text-right float-right rounded">'+event.message.created_at.split('T').pop().split('.')[0]+'</div></div>'
//             }
//             else {

//                 messages = '<div class="row-auto py-1"><div class="col-6 text-left float-left rounded"><div class="bullesQuestions">'+event.message.libelle+'</div></div></div><div class="row-auto"><div class="col-6 text-left float-left rounded">'+event.message.created_at.split('T').pop().split('.')[0]+'</div></div>'
//             }

//             $('#recuperationMessages').append(messages)

//             console.log(e)
//         })



