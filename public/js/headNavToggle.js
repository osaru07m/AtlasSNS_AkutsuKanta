$('#headNavToggleButton').click(function () {
    const button = $('#headNavToggleButton');
    const content = $('#headNavContent');

    const current = $(content).hasClass('view');

    if (current == true) {
        $(button).removeClass('active');

        $(content).fadeOut();
        $(content).removeClass('view');
    }
    else {
        $(button).addClass('active');

        $(content).fadeIn();
        $(content).addClass('view');
    }
});
