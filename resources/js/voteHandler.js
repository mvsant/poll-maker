let options = document.querySelectorAll('input[type=radio]');
let votes = document.querySelectorAll('.votes-display');

var channel = pusher.subscribe('poll-channel');
channel.bind('vote-event', function (data) {
    options.forEach((option, index) => {
        if (option.id === data.vote) {
            votes[index].textContent = `${data.total[0].votes} votes`
        }
    })
});

