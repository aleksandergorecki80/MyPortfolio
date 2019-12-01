document.querySelector('#myNavbar').addEventListener('click', ()=>{
    const myNavbar = document.getElementById('myNavbar');
    myNavbar.setAttribute('aria-expanded', 'false');
    myNavbar.setAttribute('style', 'height:1px');
    myNavbar.removeClass('in');
    console.log('klik');
    $('#myNavbar').removeClass('in');
});

$('#myNavbar').click(()=>{
    $('#myNavbar').removeClass('in');
});


