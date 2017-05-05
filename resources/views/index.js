var but = document.querySelector('.submit');


var nice = function ( data ) {
    // console.log( data );
    document.querySelector('.username').innerHTML = data;
    var sda = JSON.parse(data);
    console.log(sda.uid);
};

var button = function () {
    var classm = document.querySelector('.classm').innerHTML;


    ajax({
        method: 'POST',
        url: '../php/index.php',
        data: {
            'classm': username,
        },
        success:nice,
    });
};

but.addEventListener('click', button);