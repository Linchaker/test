require('./bootstrap');

import axios from 'axios';

if (document.querySelector('.js_create')) {
    document.querySelector('.js_create').addEventListener('click', createLink);
    document.querySelector('.js_deactivate').addEventListener('click', deactivateLink);
    document.querySelector('.js_play').addEventListener('click', play);
    document.querySelector('.js_history').addEventListener('click', getHistory);
}


function createLink(evt) {
    evt.preventDefault();
    axios.get('/create-link').then((response) => {
        let link = response.data;
        clear();
        document.querySelector('.js_answer').innerHTML = 'Link created: <a href="/area/' + link + '">'+location.host+'/area/' + link + '</a>';

    });
}

function deactivateLink(evt) {
    evt.preventDefault();
    const param = {
        'link': this.dataset.link,
    };
    axios.post('/deactivate-link', param).then((response) => {
        let link = response.data;
        clear();
        document.querySelector('.js_answer').innerHTML = 'Link <a href="/area/' + this.dataset.link + '">'+location.host+'/area/' + this.dataset.link + '</a> deactivated';

    });
}

function play(evt) {
    evt.preventDefault();
    axios.get('/play').then((response) => {
        let data = response.data;
        renderTable([data]);

    });

}

function getHistory(evt) {
    evt.preventDefault();
    axios.get('/history').then((response) => {
        let data = response.data;
        if (data.length === 0) {
            clear();
            document.querySelector('.js_answer').innerHTML = 'no history';
        } else {
            renderTable(data);
        }

    });

}


function renderTable(data) {
    clear();
    data.forEach(function(item, i, arr) {
        document.querySelector('.results').innerHTML += '' +
            '<tr>' +
            '<td>'+ item.points +'</td>' +
            '<td>'+ (item.points % 2 === 0 ? 'Win' : 'Lose') +'</td>' +
            '<td>'+ item.prize +'</td>' +
            '</tr>';
    });
    document.querySelector('.js_table').classList.remove('d-none');
}

function clear() {
    document.querySelector('.js_answer').innerHTML = '';
    document.querySelector('.results').innerHTML = '';
    document.querySelector('.js_table').classList.add('d-none');
}