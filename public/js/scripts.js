$('.dropdown-item').click(function(){
if($(this).data('bs-theme-value') === 'dark'){
    localStorage.setItem('theme','dark');
    $('html').attr('data-bs-theme','dark');
};
if($(this).data('bs-theme-value') === 'light'){
    localStorage.removeItem('theme');
    $('html').attr('data-bs-theme','light');
};
});

if (localStorage.getItem('theme','dark') != null) {
    $('html').attr('data-bs-theme','dark');
    localStorage.setItem('theme','dark');
    $('#btn').html(' <i class="bi bi-moon-stars-fill me-2"></i>');
}else{
    $('html').attr('data-bs-theme','light');
    localStorage.removeItem('theme');
    $('#btn').html(' <i class="bi bi-sun-fill me-2"></i>');
};