const passInput = document.querySelector('input[type=password]');

passInput.addEventListener('input', function(){
    // console.log('agregaste un valor');
    console.log(this.value.length)
    if(this.value.length < 6) {
        this.classList.add('alert');
    } else {
        this.classList.add('success');
    }
})