var tag = document.createElement('script');
let bgOverlay = document.getElementById('bg-overlay');
let body = document.querySelector('body');
let trailer = document.querySelector(".trailer");
tag.src = 'https://www.youtube.com/player_api';
var firstScriptTag = document.getElementsByTagName('script')[0];
firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
let newsPage = document.querySelector('html').classList.contains('news');
let registrationPage = document.querySelector('html').classList.contains('registration');
let contactsPage = document.querySelector('html').classList.contains('contacts');
let postPage = document.querySelector('html').classList.contains('post');
if(document.querySelector('html').classList.contains('homepage') || document.querySelector('html').classList.contains('courses')) {
    var videoId = document.querySelector('.video-iframe--content').getAttribute("data-video");
}

var tv,
    playerDefaults = { autoplay: 1, border: 0, autohide: 1, modestbranding: 0, rel: 0, showinfo: 0, controls: 1, disablekb: 0, enablejsapi: 0, iv_load_policy: 3, host: 'https://www.youtube.com' };



var vid = [
        { 'videoId': videoId, 'startSeconds': 0, 'endSeconds': 105, 'suggestedQuality': 'hd720' }
    ],
    randomvid = Math.floor(Math.random() * (vid.length - 1 + 1));

function onYouTubePlayerAPIReady() {
    tv = new YT.Player('tv', { events: { 'onStateChange': onPlayerStateChange }, playerVars: playerDefaults });
}

function onPlayerReady() {
    if (tv.loadVideoById(vid[randomvid])) {
        tv.loadVideoById(vid[randomvid]);
    }
}
if (!contactsPage && !registrationPage && !newsPage && !postPage) {
    function stopVideo() {
        tv.stopVideo();
    }


        document.querySelector('.video__button').addEventListener('click', function(event) {
            event.preventDefault();
            toggle()
            bgOverlay.classList.add('active');
            bgOverlay.classList.add('video')
            onPlayerReady();
            trailer.classList.add("active");
        });
        document.querySelector('.video-iframe--banner').addEventListener('click', function(event) {
            event.preventDefault();
            bgOverlay.classList.add('active');
            bgOverlay.classList.add('video')
            onPlayerReady();
            trailer.classList.add("active");
        });
}

function onPlayerStateChange(e) {
    if (e.data === 1) {
        $('#tv').addClass('active');
    } else if (e.data === 0) {
        tv.seekTo(vid[randomvid].startSeconds)
    }
}

function toggle() {

    video = document.querySelector("video"),
        home = document.querySelector('html'),
        banner = document.querySelector('.video-iframe--banner'),
        header = document.querySelector('.header');
    header.classList.toggle('active');
    home.classList.toggle('bg');

}