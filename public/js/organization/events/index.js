$(document).on('click', '.confirm-submit', function(event) {
    event.preventDefaut();

    const confirmation = confirm('Tem certeza que deseja escluir este evento?');

    if (confirmation) {
        const form = $(this).parent();
        form.trigger('submit');
    }

});