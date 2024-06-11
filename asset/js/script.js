const tombolCari = document.querySelector('.tombol-cari');
const keyword = document.querySelector('.keyword');
const container = document.querySelector('.container');

// hilangkan tombol cari
tombolCari.style.display = 'none';


// event ketika menulis keyword
keyword.addEventListener('keyup', function () {
    // ajax


    // xmlhttprequest
    // const xhr = new XMLHttpRequest();

    // xhr.onreadystatechange = function() {
    //     if(xhr.readyState == 4 && xhr.status == 200 ) {
    //         container.innerHTML = xhr.responseText;
    //     }
    // };

    // xhr.open('get', '../asset/ajax/ajax_cari.php?keyword=' + keyword.value);
    // xhr.send();

    // fetch()
    fetch('../asset/ajax/ajax_cari.php?keyword=' + keyword.value)
        .then((response) => response.text())
        .then((response) => (container.innerHTML = response));


}); 

