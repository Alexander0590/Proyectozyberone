const sidebar = document.getElementById('mySidebar');


sidebar.addEventListener('mouseover', function() {
    sidebar.classList.add('expanded');
});

sidebar.addEventListener('mouseout', function() {
    sidebar.classList.remove('expanded');
});
