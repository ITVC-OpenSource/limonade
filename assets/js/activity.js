jael("form", "change", setlang);

function setlang() {
    const form = $('form')[0];
    const dataForm = new FormData(form);
    $.post({
        url: "../assets/php/activity.php",
        data: dataForm,
        processData: false,
        contentType: false,
        succes: function() {
          location.reload();
        },
        error: function(err) {
          console.log('error : ' + err);
        }
    });
}
